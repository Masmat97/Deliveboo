<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\Order;
use App\Models\Dish;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Prendi tutti i ristoranti
        $restaurants = Restaurant::all();

        foreach ($restaurants as $restaurant) {

            for ($i = 0; $i < 50; $i++) { // Genera 50 ordini per ristorante

                $newOrder = new Order();
                $newOrder->date = $faker->dateTimeBetween('2024-01-01', '2024-12-31')->format('Y-m-d');
                $newOrder->client_name = $faker->name;
                $newOrder->client_address = $faker->address;
                $newOrder->email = $faker->safeEmail;
                $newOrder->phone_number = '33333333';
                $newOrder->total = $faker->randomFloat(2, 10, 400); // Totale casuale tra 10 e 400
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
