<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dish;
use App\Models\Restaurant;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = Restaurant::all();

        foreach ($restaurants as $restaurant) {
            Dish::create([
                'name' => 'Sushi Roll',
                'description' => 'Delicious sushi roll with fresh ingredients.',
                'price' => 12.99,
                'restaurant_id' => $restaurant->id,
            ]);

            Dish::create([
                'name' => 'Tempura',
                'description' => 'Crispy tempura with dipping sauce.',
                'price' => 9.99,
                'restaurant_id' => $restaurant->id,
            ]);

            Dish::create([
                'name' => 'Miso Soup',
                'description' => 'Traditional miso soup with tofu and seaweed.',
                'price' => 3.99,
                'restaurant_id' => $restaurant->id,
            ]);
        }
    }
}