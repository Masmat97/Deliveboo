<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;

class StatisticsController extends Controller
{
    public function index()
    {
        // Recupera tutti gli ordini con i piatti associati del ristorante con id 3
        $ordersDetails = Order::whereHas('dishes', function($query) {
            $query->where('restaurant_id', 3);
        })->with(['dishes'])->get();

        // Calcola il totale di ogni ordine basato sui piatti ordinati
        foreach ($ordersDetails as $order) {
            $total = 0;
            foreach ($order->dishes as $dish) {
                $total += $dish->pivot->quantity * $dish->price; // Assumendo che esista una relazione many-to-many con i piatti che include 'quantity' e 'price'
            }
            $order->calculated_total = $total; // Aggiunge un attributo temporaneo per il totale calcolato
        }

        return view('admin.statistics.index', compact('ordersDetails'));
    }
}
