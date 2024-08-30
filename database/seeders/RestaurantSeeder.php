<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'La Bella Vita';
        $newRestaurant->address = 'Via del Corso, 18, 00187 Roma RM, Italy';
        $newRestaurant->p_iva = 'IT1234567890';
        $newRestaurant->image = 'https://example.com/la-bella-vita.jpg';
        $newRestaurant->user_id= 1;
        $newRestaurant->save();
    }
}
