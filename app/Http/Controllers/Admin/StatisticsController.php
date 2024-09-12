<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Dish;

class StatisticsController extends Controller
{
    public function index()
    {
        $ordersDetails = Order::whereHas('dishes', function($query) {
            $query->where('restaurant_id', 3);
        })->with(['dishes' => function($query) {
            $query->where('restaurant_id', 3);
        }])->get();

        // Recupera tutti i piatti del restaurant_id = 3
        $dishes = Dish::where('restaurant_id', 3)->get();

        return view('admin.statistics.index', compact('ordersDetails', 'dishes'));
    }
}
