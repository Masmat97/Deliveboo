<?php

namespace App\Http\Controllers;

use Braintree\Gateway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    protected $gateway;

    public function __construct()
    {
        $this->gateway = new Gateway([
            'environment' => env('BRAINTREE_ENV'),
            'merchantId' => env('BRAINTREE_MERCHANT_ID'),
            'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
            'privateKey' => env('BRAINTREE_PRIVATE_KEY'),
        ]);
    }

    public function showCheckout()
    {
        $cart = Session::get('cart', []);
        $total = array_reduce($cart, function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);

        $token = $this->gateway->clientToken()->generate();

        return view('checkout.show', [
            'token' => $token,
            'total' => $total
        ]);
    }

    public function processPayment(Request $request)
    {
        $nonce = $request->payment_method_nonce;
        $amount = $request->amount;

        $result = $this->gateway->transaction()->sale([
            'amount' => $amount,
            'paymentMethodNonce' => $nonce,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if ($result->success) {
            // Pagamento riuscito, gestisci l'ordine e svuota il carrello qui
            Session::forget('cart');
            return redirect()->route('checkout.show')->with('success', 'Pagamento effettuato con successo!');
        } else {
            // Pagamento fallito, visualizza il messaggio di errore
            return redirect()->route('checkout.show')->with('error', 'Pagamento fallito. Riprova.');
        }
    }
}
