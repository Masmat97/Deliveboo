<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Braintree\Gateway as BraintreeGateway;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    protected $gateway;

    public function __construct()
    {
        $this->gateway = new BraintreeGateway([
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

        $token = $this->gateway->ClientToken()->generate();

        return view('checkout.show', [
            'cart' => $cart,
            'total' => $total,
            'token' => $token
        ]);
    }

    public function processPayment(Request $request)
    {
        $amount = $request->input('amount');
        $nonce = $request->input('payment_method_nonce');

        $result = $this->gateway->transaction()->sale([
            'amount' => $amount,
            'paymentMethodNonce' => $nonce,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if ($result->success) {
            Session::forget('cart');
            return redirect()->route('cart.index')->with('success', 'Pagamento completato con successo!');
        } else {
            return redirect()->route('checkout.show')->with('error', 'Pagamento fallito. Riprova.');
        }
    }
}
