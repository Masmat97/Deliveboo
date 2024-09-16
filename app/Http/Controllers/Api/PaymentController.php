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

        $newOrder->client_name = $data[1]['name'];

        $newOrder->client_address = $data[1]['address'];

        $newOrder->email = $data[1]['email'];

        $newOrder->phone_number = $data[1]['phone_number'];

        $newOrder->total = $data[2];

        $newOrder->save();


        foreach ($data[0] as $item) {
            $dish = Dish::find($item['dish']['id']);

            $newOrder->dishes()->attach($dish['id'], [
                'price' => $dish['price'], // Prezzo del piatto
                'quantity' => $item['quantity'], // Quantità casuale per piatto
                'name_dish' => $dish['name'], // Nome del piatto
            ]);
        }
        return response()->json([
            'success' => true,
            'piatti' => $data
        ]);
    }
}
