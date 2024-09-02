<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    public function run()
    {
        // Assicurati che ci siano utenti nella tabella
        if (User::count() == 0) {
            echo "Nessun utente disponibile. UserSeeder deve essere eseguito prima di RestaurantSeeder.";
            return;
        }

        $restaurants = [
            [
                'name' => 'La Bella Vita',
                'address' => 'Via del Corso, 18, 00187 Roma RM, Italy',
                'p_iva' => 'IT1234567890',
                'image' => 'https://img1.wsimg.com/isteam/ip/587e2db3-e147-4a44-9766-3c9c8d5285ca/blob-0001.png',
                'types' => [1]
            ],
            [
                'name' => 'Il Pagliaccio',
                'address' => 'Via dei Banchi Vecchi, 129/a, 00187 Roma RM, Italy',
                'p_iva' => 'IT9876543210',
                'image' => 'https://www.thegastrojob.com/wp-content/uploads/2018/02/Ristorante-il-Pagliaccio-a-Roma.jpg',
                'types' => [1]
            ],
            [
                'name' => 'Sushi Ko',
                'address' => 'Via della Lungaretta, 21, 00153 Roma RM, Italy',
                'p_iva' => 'IT1111111111',
                'image' => 'https://www.zenit-group.it/wp-content/uploads/2016/02/Sushiko-Ferrara-foto-10-500x500.jpg',
                'types' => [2, 4]
            ],
            [
                'name' => 'Tandoori Nights',
                'address' => 'Via dei Serpenti, 124, 00187 Roma RM, Italy',
                'p_iva' => 'IT2222222222',
                'image' => 'https://photos.wikimapia.org/p/00/03/68/93/41_full.jpg',
                'types' => [3]
            ],
            [
                'name' => 'La Rosetta',
                'address' => 'Piazza del Popolo, 18, 00187 Roma RM, Italy',
                'p_iva' => 'IT3333333333',
                'image' => 'https://www.sercolombiano.com/wp-content/uploads/2018/02/DSC_0009.jpg',
                'types' => [1, 4]
            ],
            [
                'name' => 'Burger Bar',
                'address' => 'Via del Corso, 241, 00187 Roma RM, Italy',
                'p_iva' => 'IT4444444444',
                'image' => 'https://images.fineartamerica.com/images/artworkimages/mediumlarge/3/roma-burger-bar-glendalina-ziemba.jpg',
                'types' => [5, 8]
            ],
            [
                'name' => 'La Gensola',
                'address' => 'Piazza della Gensola, 15, 00153 Roma RM, Italy',
                'p_iva' => 'IT5555555555',
                'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/16/ed/8f/99/photo0jpg.jpg',
                'types' => [1]
            ],
            [
                'name' => 'Kebabish',
                'address' => 'Via dei Mille, 15, 00187 Roma RM, Italy',
                'p_iva' => 'IT6666666666',
                'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/11/98/81/f7/kebabish-curry-and-grill.jpg',
                'types' => [6]
            ],
            [
                'name' => 'La Campana',
                'address' => 'Via Campana, 47, 00187 Roma RM, Italy',
                'p_iva' => 'IT7777777777',
                'image' => 'https://italianliving.com/custom/domain_1/image_files/sitemgr_photo_23534.jpg',
                'types' => [1]
            ],
            [
                'name' => 'Sakura',
                'address' => 'Via dei Giubbonari, 21, 00186 Roma RM, Italy',
                'p_iva' => 'IT8888888888',
                'image' => 'https://is2-ssl.mzstatic.com/image/thumb/Purple115/v4/55/3b/d9/553bd9ae-784e-dc83-8700-044fb2da59d5/source/512x512bb.jpg',
                'types' => [2]
            ],
            [
                'name' => 'La Carbonara',
                'address' => 'Via Panonica, 10, 00187 Roma RM, Italy',
                'p_iva' => 'IT9999999999',
                'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/10/e3/07/90/photo2jpg.jpg',
                'types' => [1]
            ],
            [
                'name' => 'Tacos el Fogoncito',
                'address' => 'Via dei Coronari, 135, 00186 Roma RM, Italy',
                'p_iva' => 'IT1010101010',
                'image' => 'https://live.staticflickr.com/2256/2325273112_5e296f04dd.jpg',
                'types' => [10]
            ],
            [
                'name' => 'La Galette',
                'address' => 'Via della Scrofa, 65, 00187 Roma RM, Italy',
                'p_iva' => 'IT1212121212',
                'image' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/99/09/0d/la-galetta.jpg?w=1200&h=-1&s=1',
                'types' => [11]
            ]
        ];

        $users = User::all(); // Retrieve all users in ascending order

        $userIndex = 0;


        foreach ($restaurants as $data) {

            $user = $users[$userIndex % $users->count()];; // Get the next user in the list

            $restaurant = new Restaurant([

                'name' => $data['name'],

                'address' => $data['address'],

                'p_iva' => $data['p_iva'],

                'image' => $data['image'],

                'user_id' => $user->id  // Assegna l'ID dell'utente trovato

            ]);

            $restaurant->save();

            $restaurant->types()->attach($data['types']);

            $userIndex++;
        }
    }
}
