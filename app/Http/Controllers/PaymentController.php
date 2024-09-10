<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Braintree\Gateway;

class PaymentController extends Controller
{
    // Metodo per generare il token client
    public function generateToken()
    {
        $gateway = new Gateway([
            'environment' => 'sandbox',
            'merchantId' => 'f7mwmm2tcm6gjnst',
            'publicKey' => 'nwnznccj6shknt8q',
            'privateKey' => '577af64e91b7f6c520c5b6fc6ed73af7',
        ]);

        $clientToken = $gateway->clientToken()->generate();
        return response()->json(['clientToken' => $clientToken]);
    }

    // Metodo per visualizzare la pagina di checkout
    public function showCheckout()
    {
        $gateway = new Gateway([
            'environment' => 'sandbox',
            'merchantId' => 'f7mwmm2tcm6gjnst',
            'publicKey' => 'nwnznccj6shknt8q',
            'privateKey' => '577af64e91b7f6c520c5b6fc6ed73af7',
        ]);

        $clientToken = $gateway->clientToken()->generate();

        return view('payment.checkout', ['clientToken' => $clientToken]);
    }

    // Metodo per elaborare la transazione
    public function checkout(Request $request)
    {
        try {
            $gateway = new Gateway([
                'environment' => 'sandbox',
                'merchantId' => 'f7mwmm2tcm6gjnst',
                'publicKey' => 'nwnznccj6shknt8q',
                'privateKey' => '577af64e91b7f6c520c5b6fc6ed73af7',
            ]);

            $nonceFromTheClient = $request->paymentMethodNonce;

            $result = $gateway->transaction()->sale([
                'amount' => '10.00', // Imposta l'importo del pagamento
                'paymentMethodNonce' => $nonceFromTheClient,
                'options' => [
                    'submitForSettlement' => true,
                ],
            ]);

            if ($result->success) {
                return response()->json(['success' => true, 'transaction' => $result->transaction]);
            } else {
                return response()->json(['success' => false, 'error' => $result->message]);
            }
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => 'Errore durante il pagamento: ' . $e->getMessage()], 500);
        }
    }
}
