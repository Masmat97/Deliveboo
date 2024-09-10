<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Braintree\Gateway;

class PaymentController extends Controller
{
    // Metodo per generare il token client
    public function generateToken()
    {
        $gateway = new \Braintree\Gateway([
            'environment' => 'sandbox', // Usa 'production' in produzione
            'merchantId' => env('BRAINTREE_MERCHANT_ID'),
            'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
            'privateKey' => env('BRAINTREE_PRIVATE_KEY'),
        ]);

        $clientToken = $gateway->clientToken()->generate();
        return response()->json(['clientToken' => $clientToken]);
    }

    // Metodo per visualizzare la pagina di checkout
    public function showCheckout()
    {
        return view('payment.checkout'); // Restituisce la vista 'checkout' nella cartella 'payment'
    }

    // Metodo per elaborare la transazione
    public function checkout(Request $request)
    {
        try {
            $gateway = new \Braintree\Gateway([
                'environment' => config('services.braintree.environment'),
                'merchantId' => config('services.braintree.merchantId'),
                'publicKey' => config('services.braintree.publicKey'),
                'privateKey' => config('services.braintree.privateKey'),
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
            // Gestione dell'errore 500, ritorna un messaggio JSON per evitare il problema '<' non valido
            return response()->json(['success' => false, 'error' => 'Errore durante il pagamento: ' . $e->getMessage()], 500);
        }
    }
}
