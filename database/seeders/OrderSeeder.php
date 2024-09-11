<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\Order;
use App\Models\Dish;

class OrderSeeder extends Seeder
{
    public function run()
    {
        // Prendi tutti i ristoranti
        $restaurants = Restaurant::all();

        foreach ($restaurants as $restaurant) {
            for ($i = 0; $i < 50; $i++) { // Genera 50 ordini per ristorante
                $order = new Order();
                $order->restaurant_id = $restaurant->id;
                $order->user_id = rand(1, 50); // Assumendo che ci siano 50 utenti
                $order->total_amount = 0;
                $order->status = ['pending', 'in preparation', 'completed'][rand(0, 2)];
                $order->save();

                // Aggiunge piatti casuali all'ordine
                $dishes = $restaurant->dishes->random(rand(2, 5));
                foreach ($dishes as $dish) {
                    $quantity = rand(1, 3); // Quantità casuale per piatto
                    $order->dishes()->attach($dish->id, ['quantity' => $quantity]);
                    $order->total_amount += $dish->price * $quantity;
                }
                $order->save();
            }
        }
    }
}
