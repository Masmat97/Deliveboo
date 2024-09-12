<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
                'types' => [2, 4, 26]
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
                'image' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/08/f2/65/80/ristorante-la-rosetta.jpg?w=1200&h=-1&s=1',
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
                'types' => [6, 7, 22]
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
                'types' => [2, 26, 4, 24]
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
            ],
            [
                'name' => 'Ristorante Pizzeria Il Buchetto',
                'address' => 'Via della Fontana del Finocchio 32, 00132 Roma RM, Italy',
                'p_iva' => 'IT9876543210',
                'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/04/30/29/9d/ristorante-pizzeria-il.jpg',
                'types' => [1, 25]
            ],
            [
                'name' => 'Miyabi',
                'address' => 'Via del Corso, 18, 00187 Roma RM, Italy',
                'p_iva' => 'IT2222222222',
                'image' => 'https://img.restaurantguru.com/r17d-MIYABI-RISTORANTE-exterior.jpg',
                'types' => [2, 9, 13]
            ],
            [
                'name' => 'Romakinho',
                'address' => 'Via dei Coronari, 134, 00186 Roma RM, Italy',
                'p_iva' => 'IT4444444444',
                'image' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/c2/ce/4d/romakinho-brazilian-sushi.jpg?w=500&h=-1&s=1',
                'types' => [4, 18, 24, 26]
            ],
            [
                'name' => ' Pad Thai Kung',
                'address' => 'Via Aurelia 483 Mercato Irnerio, BOX 19, 00165 Roma RM, Italy',
                'p_iva' => 'IT5555555555',
                'image' => 'https://lh3.googleusercontent.com/p/AF1QipMQhic8kLPytAjBwC644jLepfadAZOyRHdoQAKy=s1360-w1360-h1020',
                'types' => [13]
            ],
            [
                'name' => 'McDonald\'s Roma',
                'address' => 'Via dei Fori Imperiali, 1, 00186 Roma RM, Italy',
                'p_iva' => 'IT6666666666',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/McDonald%27s_logo.svg/2560px-McDonald%27s_logo.svg.png',
                'types' => [5, 8, 22]
            ],
            [
                'name' => 'Burger King Roma',
                'address' => 'Via del Tritone, 132, 00187 Roma RM, Italy',
                'p_iva' => 'IT7777777777',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHcjv0wmeIzNl0MAwpCZ77X3qzKnyuufZZ0w&s',
                'types' => [5, 8, 22]
            ],
            [
                'name' => 'Old Wild West',
                'address' => 'Via Torino, 133, 00187 Roma RM, Italy',
                'p_iva' => 'IT8888888888',
                'image' => 'https://w7.pngwing.com/pngs/332/425/png-transparent-american-frontier-old-wild-west-chophouse-restaurant-province-of-udine-others-miscellaneous-food-text.png',
                'types' => [5, 8]
            ],
            [
                'name' => 'Ristorante Ali Baba',
                'address' => "Via dell'Arco di Travertino, 27, 00178 Roma RM, Italy",
                'p_iva' => 'IT9999999999',
                'image' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1d/ac/30/89/caption.jpg?w=1100&h=-1&s=1',
                'types' => [7, 22, 6]
            ],
            [
                'name' => 'Greco Romano',
                'address' => 'Via Guglielmo Calderini 48/50, 00196 Roma RM, Italy',
                'p_iva' => 'IT1111111111',
                'image' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/21/8b/12/2c/greco-romano.jpg?w=1200&h=-1&s=1',
                'types' => [12]
            ],
            [
                'name' => 'El Pueblo Bistrot Sede Cipro',
                'address' => 'Via Sebastiano Ziani, 58, 00136 Roma RM, Italy',
                'p_iva' => 'IT2222222222',
                'image' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/e9/66/60/dal-1993-solo-cucina.jpg?w=1200&h=-1&s=1',
                'types' => [10, 16]
            ],
            [
                'name' => 'Pequeño Atypical Tapas Bar',
                'address' => 'Largo Somalia 39, 00199 Roma Italia',
                'p_iva' => 'IT2222222222',
                'image' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/22/f6/5c/31/pequeno-atypical-tapas.jpg?w=1200&h=-1&s=1',
                'types' => [1, 16, 26]
            ],
            [
                'name' => 'Inka Chicken',
                'address' => 'Via Palestro 32/A, Roma Italia',
                'p_iva' => 'IT3333333333',
                'image' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/ba/b7/75/inka-chicken-offre-il.jpg?w=1200&h=-1&s=1',
                'types' => [4, 20]
            ],
            [
                'name' => 'Dejavu',
                'address' => 'Via dei Gelsi, 1/B, 00171 Roma Italia',
                'p_iva' => 'IT4444444444',
                'image' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/23/26/d5/85/sushi-di-carne.jpg?w=1100&h=-1&s=1',
                'types' => [1, 21, 26]
            ],
            [
                'name' => 'Poke House Roma',
                'address' => 'Via del Gambero, 36 Roma RM, Italy',
                'p_iva' => 'IT5555555555',
                'image' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2a/a1/e7/f5/house-bowls.jpg?w=1200&h=-1&s=1',
                'types' => [24]
            ],
            [
                'name' => 'Cantina Tirolese',
                'address' => 'Via Giovanni Vitelleschi 23, 00193 Roma Italia',
                'p_iva' => 'IT6666666666',
                'image' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/2a/2e/98/traditional-restaurant.jpg?w=1100&h=-1&s=1',
                'types' => [17]
            ],
            [
                'name' => 'I Monticiani',
                'address' => 'Via Panisperna 84, 00184 Roma Italia',
                'p_iva' => 'IT7777777777',
                'image' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/17/72/6e/09/insegna.jpg?w=1200&h=-1&s=1',
                'types' => [19]
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


            $restaurant->slug = Str::slug($data['name']); // Compila lo slug


            $restaurant->save();


            $restaurant->types()->attach($data['types']);


            $userIndex++;
        }
    }
}
