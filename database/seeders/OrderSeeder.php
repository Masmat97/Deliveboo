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

                $newOrder = new Order();
                $newOrder->date = date('Y-m-d');
                $newOrder->client_name = 'Giuseppe';
                $newOrder->client_address = 'Via ciao';
                $newOrder->email = 'gerg@jmo.it';
                $newOrder->phone_number = '33333333';
                $newOrder->total = '34';
                $newOrder->save();

                // Aggiunge piatti casuali all'ordine
                $dishes = $restaurant->dishes->random(rand(2, 3));

                foreach ($dishes as $dish) {
                    $quantity = mt_rand(1, 10);
                    $newOrder->dishes()->attach($dish->id, [

                        'price' => $dish->price, // Prezzo del piatto

                        'quantity' => $quantity, // Quantità casuale per piatto

                        'name_dish' => $dish->name, // Nome del piatto

                    ]);
                }
            }
        }
    }
}
