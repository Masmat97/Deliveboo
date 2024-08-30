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
        $newRestaurant2 = new Restaurant();
        $newRestaurant2->name = 'La Bella Vita';
        $newRestaurant2->address = 'Via del Corso, 18, 00187 Roma RM, Italy';
        $newRestaurant2->p_iva = 'IT1234567890';
        $newRestaurant2->image = 'https://example.com/la-bella-vita.jpg';
        $newRestaurant2->user_id = 2;
        $newRestaurant2->save();

        $newRestaurant3 = new Restaurant();
        $newRestaurant3->name = 'Il Pagliaccio';
        $newRestaurant3->address = 'Via dei Banchi Vecchi, 129/a, 00187 Roma RM, Italy';
        $newRestaurant3->p_iva = 'IT9876543210';
        $newRestaurant3->image = 'https://example.com/il-pagliaccio.jpg';
        $newRestaurant3->user_id = 3;
        $newRestaurant3->save();
        // Michelin-starred Italian restaurant

        $newRestaurant4 = new Restaurant();
        $newRestaurant4->name = 'Sushi Ko';
        $newRestaurant4->address = 'Via della Lungaretta, 21, 00153 Roma RM, Italy';
        $newRestaurant4->p_iva = 'IT1111111111';
        $newRestaurant4->image = 'https://example.com/sushi-ko.jpg';
        $newRestaurant4->user_id = 4;
        $newRestaurant4->save();

        // Japanese sushi restaurant

        $newRestaurant5 = new Restaurant();
        $newRestaurant5->name = 'Tandoori Nights';
        $newRestaurant5->address = 'Via dei Serpenti, 124, 00187 Roma RM, Italy';
        $newRestaurant5->p_iva = 'IT2222222222';
        $newRestaurant5->image = 'https://example.com/tandoori-nights.jpg';
        $newRestaurant5->user_id = 5;
        $newRestaurant5->save();
        // Indian restaurant

        $newRestaurant6 = new Restaurant();
        $newRestaurant6->name = 'La Rosetta';
        $newRestaurant6->address = 'Piazza del Popolo, 18, 00187 Roma RM, Italy';
        $newRestaurant6->p_iva = 'IT3333333333';
        $newRestaurant6->image = 'https://example.com/la-rosetta.jpg';
        $newRestaurant6->user_id = 6;
        $newRestaurant6->save();
        // Seafood restaurant

        $newRestaurant7 = new Restaurant();
        $newRestaurant7->name = 'Burger Bar';
        $newRestaurant7->address = 'Via del Corso, 241, 00187 Roma RM, Italy';
        $newRestaurant7->p_iva = 'IT4444444444';
        $newRestaurant7->image = 'https://example.com/burger-bar.jpg';
        $newRestaurant7->user_id = 7;
        $newRestaurant7->save();
        // American-style burger joint

        $newRestaurant8 = new Restaurant();
        $newRestaurant8->name = 'La Gensola';
        $newRestaurant8->address = 'Piazza della Gensola, 15, 00153 Roma RM, Italy';
        $newRestaurant8->p_iva = 'IT5555555555';
        $newRestaurant8->image = 'https://example.com/la-gensola.jpg';
        $newRestaurant8->user_id = 8;
        $newRestaurant8->save();
        // Traditional Roman trattoria

        $newRestaurant9 = new Restaurant();
        $newRestaurant9->name = 'Kebabish';
        $newRestaurant9->address = 'Via dei Mille, 15, 00187 Roma RM, Italy';
        $newRestaurant9->p_iva = 'IT6666666666';
        $newRestaurant9->image = 'https://example.com/kebabish.jpg';
        $newRestaurant9->user_id = 9;
        $newRestaurant9->save();
        // Middle Eastern kebab shop

        $newRestaurant10 = new Restaurant();
        $newRestaurant10->name = 'La Campana';
        $newRestaurant10->address = 'Via Campana, 47, 00187 Roma RM, Italy';
        $newRestaurant10->p_iva = 'IT7777777777';
        $newRestaurant10->image = 'https://example.com/la-campana.jpg';
        $newRestaurant10->user_id = 10;
        $newRestaurant10->save();
        // Neapolitan-style pizzeria

        $newRestaurant11 = new Restaurant();
        $newRestaurant11->name = 'Sakura';
        $newRestaurant11->address = 'Via dei Giubbonari, 21, 00186 Roma RM, Italy';
        $newRestaurant11->p_iva = 'IT8888888888';
        $newRestaurant11->image = 'https://example.com/sakura.jpg';
        $newRestaurant11->user_id = 11;
        $newRestaurant11->save();
        // Japanese ramen restaurant

        $newRestaurant12 = new Restaurant();
        $newRestaurant12->name = 'La Carbonara';
        $newRestaurant12->address = 'Via Panonica, 10, 00187 Roma RM, Italy';
        $newRestaurant12->p_iva = 'IT9999999999';
        $newRestaurant12->image = 'https://example.com/la-carbonara.jpg';
        $newRestaurant12->user_id = 12;
        $newRestaurant12->save();
        // Italian restaurant specializing in carbonara

        $newRestaurant13 = new Restaurant();
        $newRestaurant13->name = 'Tacos el Fogoncito';
        $newRestaurant13->address = 'Via dei Coronari, 135, 00186 Roma RM, Italy';
        $newRestaurant13->p_iva = 'IT1010101010';
        $newRestaurant13->image = 'https://example.com/tacos-el-fogoncito.jpg';
        $newRestaurant13->user_id = 13;
        $newRestaurant13->save();
        // Mexican taqueria

        $newRestaurant14 = new Restaurant();
        $newRestaurant14->name = 'La Galette';
        $newRestaurant14->address = 'Via della Scrofa, 65, 00187 Roma RM, Italy';
        $newRestaurant14->p_iva = 'IT1212121212';
        $newRestaurant14->image = 'https://example.com/la-galette.jpg';
        $newRestaurant14->user_id = 14;
        $newRestaurant14->save();
        // French bistro

    }
}
