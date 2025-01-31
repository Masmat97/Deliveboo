<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Braintree\Gateway;

class BraintreeController extends Controller
{
    protected $gateway;

    public function __construct()
    {
        $environment = env('BRAINTREE_ENVIRONMENT');
        $merchantId = env('BRAINTREE_MERCHANT_ID');
        $publicKey = env('BRAINTREE_PUBLIC_KEY');
        $privateKey = env('BRAINTREE_PRIVATE_KEY');

        // Stampa i valori per il debug
        dd($environment, $merchantId, $publicKey, $privateKey);

        $this->gateway = new Gateway([
            'environment' => $environment,
            'merchantId' => $merchantId,
            'publicKey' => $publicKey,
            'privateKey' => $privateKey,
        ]);
    }

    // Metodo per ottenere il client token
    public function getToken()
    {
        try {
            // Genera il client token
            $clientToken = $this->gateway->clientToken()->generate();
            return response()->json(['clientToken' => $clientToken]);
        } catch (\Exception $e) {
            Log::error("Error generating client token: " . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'Unable to generate client token.'], 500);
        }
    }

    // Metodo per eseguire una transazione
    public function checkout(Request $request)
    {
        // Validazione dei dati in ingresso
        $request->validate([
            'amount' => 'required|numeric',
            'paymentMethodNonce' => 'required|string',
        ]);

        try {
            // Esegui la transazione
            $result = $this->gateway->transaction()->sale([
                'amount' => $request->amount,
                'paymentMethodNonce' => $request->paymentMethodNonce,
                'options' => [
                    'submitForSettlement' => true,
                ],
            ]);

            if ($result->success) {
                return response()->json(['status' => 'success', 'transaction' => $result->transaction]);
            } else {
                Log::error("Braintree Transaction Error: " . $result->message);
                return response()->json(['status' => 'error', 'message' => $result->message], 400);
            }
        } catch (\Exception $e) {
            Log::error("Error during transaction: " . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'Transaction failed.'], 500);
        }
    }
}
