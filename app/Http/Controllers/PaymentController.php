<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Braintree\Gateway;

class PaymentController extends Controller
{
    public function showCheckout()
    {
        // Recupera il carrello dalla sessione
        $cart = Session::get('cart', []);

        // Calcola il totale del carrello
        $total = array_reduce($cart, function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);

        // Ottieni il token di pagamento da Braintree
        $gateway = new Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey'),
        ]);

        $token = $gateway->ClientToken()->generate();

        // Passa il token e il totale alla vista
        return view('checkout.show', compact('token', 'total'));
    }

    public function processPayment(Request $request)
    {
        $gateway = new Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey'),
        ]);

        $amount = $request->input('amount'); // Questo dovrebbe essere il totale del carrello
        $nonce = $request->input('payment_method_nonce');

        $result = $gateway->transaction()->sale([
            'amount' => $amount,
            'paymentMethodNonce' => $nonce,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if ($result->success) {
            return redirect()->route('orders.index')->with('success', 'Pagamento effettuato con successo!');
        } else {
            return redirect()->back()->with('error', 'Pagamento fallito. Riprova.');
        }
    }
}
