<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\Order;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        $newOrder = new Order();

        $newOrder->date = date('Y-m-d');

        $newOrder->client_name = 'Giuseppe';

        $newOrder->client_address = 'Via ciao';

        $newOrder->email = 'gerg@jmo.it';

        $newOrder->phone_number = '33333333';

        $newOrder->total = '34';

        $newOrder->save();


        foreach ($data as $item) {
            $newOrder->dishes()->attach($item['dish']['id'], [

                'price' => $item['dish']['price'], // Prezzo del piatto

                'quantity' => $item['quantity'], // Quantità casuale per piatto

                'name_dish' => $item['dish']['name_dish'], // Nome del piatto

            ]);
        }
        return response()->json([
            'success' => true,
            'piatti' => $data
        ]);
    }
}
