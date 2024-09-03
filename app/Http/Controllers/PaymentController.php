<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Braintree\Gateway;

class PaymentController extends Controller
{
    public function showCheckout()
    {
        return view('checkout.show');
    }

    public function processPayment(Request $request)
    {
        $gateway = new Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchant_id'),
            'publicKey' => config('services.braintree.public_key'),
            'privateKey' => config('services.braintree.private_key'),
        ]);

        $nonceFromTheClient = $request->input('payment_method_nonce');
        $total = $request->input('amount');

        try {
            $result = $gateway->transaction()->sale([
                'amount' => $total,
                'paymentMethodNonce' => $nonceFromTheClient,
                'options' => [
                    'submitForSettlement' => true,
                ],
            ]);

            if ($result->success) {
                // Pagamento riuscito
                return redirect()->route('checkout.show')->with('success', 'Pagamento completato con successo!');
            } else {
                // Pagamento fallito
                return redirect()->route('checkout.show')->with('error', 'Pagamento fallito: ' . $result->message);
            }
        } catch (\Exception $e) {
            // Errore di sistema
            return redirect()->route('checkout.show')->with('error', 'Errore durante il pagamento: ' . $e->getMessage());
        }
    }
}
