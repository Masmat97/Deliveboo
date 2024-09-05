<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array di utenti da creare
        $users = [
            [
                'name' => 'La Bella Vita Restaurant',
                'email' => 'labellavita@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Il Pagliaccio Restaurant',
                'email' => 'ilpagliaccio@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Sushi Ko Restaurant',
                'email' => 'sushiko@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Tandoori Nights Restaurant',
                'email' => 'tandoorinights@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'La Rosetta Restaurant',
                'email' => 'larosetta@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Burger Bar Restaurant',
                'email' => 'burgerbar@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'La Gensola Restaurant',
                'email' => 'lagensola@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Kebabish Restaurant',
                'email' => 'kebabish@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'La Campana Restaurant',
                'email' => 'lacampana@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Sakura Restaurant',
                'email' => 'sakura@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'La Carbonara Restaurant',
                'email' => 'lacarbonara@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Tacos el Fogoncito Restaurant',
                'email' => 'tacoselfogoncito@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'La Galette Restaurant',
                'email' => 'lagalette@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Ristorante Pizzeria Il Buchetto',
                'email' => 'ilbuchetto@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Miyabi Restaurant',
                'email' => 'miyabi@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Romakinho Restaurant',
                'email' => 'romakinho@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Pad Thai Kung Restaurant',
                'email' => 'padthaikung@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'McDonald Restaurant',
                'email' => 'mcdonald@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Burger King  Restaurant',
                'email' => 'burgerking@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Old Wild West  Restaurant',
                'email' => 'oldwildwest@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Ali Baba  Restaurant',
                'email' => 'alibaba@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Greco Romano  Restaurant',
                'email' => 'grecoromano@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'El Pueblo Bistrot Sede Cipro  Restaurant',
                'email' => 'elpueblo@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Greco Romano  Restaurant',
                'email' => 'grecoromano@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Pequeño Atypical Tapas Bar  Restaurant',
                'email' => 'pequeño@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Inka Chicken Restaurant',
                'email' => 'inka@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Dejavu Restaurant',
                'email' => 'dejavu@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Poke House Restaurant',
                'email' => 'pokehouse@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Cantina Tirolese Restaurant',
                'email' => 'cantinatirolese@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'I Monticiani Restaurant',
                'email' => 'imonticiani@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],

        ];

        // Ciclo per creare gli utenti
        foreach ($users as $user) {
            User::updateOrCreate(
                ['email' => $user['email']], // Cerca per email
                ['name' => $user['name'], 'password' => $user['password']] // Aggiorna o crea con questi valori
            );
        }
    }
}
