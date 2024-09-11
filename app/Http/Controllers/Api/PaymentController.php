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


        $dishIds = [];

        foreach ($data as $item) {

            $dishIds[] = $item['dish']['id'];
        }
        $newOrder->dishes()->sync($dishIds);

        return response()->json([
            'success' => true,
            'piatti' => $data
        ]);
    }
}
