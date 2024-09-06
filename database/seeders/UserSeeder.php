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
                'name' => 'La Bella Vita',
                'email' => 'labellavita@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Il Pagliaccio',
                'email' => 'ilpagliaccio@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Sushi Ko',
                'email' => 'sushiko@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Tandoori Nights',
                'email' => 'tandoorinights@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'La Rosetta',
                'email' => 'larosetta@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Burger Bar ',
                'email' => 'burgerbar@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'La Gensola ',
                'email' => 'lagensola@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Kebabish',
                'email' => 'kebabish@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'La Campana',
                'email' => 'lacampana@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Sakura',
                'email' => 'sakura@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'La Carbonara',
                'email' => 'lacarbonara@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Tacos el Fogoncito',
                'email' => 'tacoselfogoncito@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'La Galette',
                'email' => 'lagalette@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Ristorante Pizzeria Il Buchetto',
                'email' => 'ilbuchetto@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Miyabi',
                'email' => 'miyabi@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Romakinho',
                'email' => 'romakinho@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Pad Thai Kung',
                'email' => 'padthaikung@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'McDonald',
                'email' => 'mcdonald@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Burger King',
                'email' => 'burgerking@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Old Wild West',
                'email' => 'oldwildwest@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Ali Baba',
                'email' => 'alibaba@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Greco Romano',
                'email' => 'grecoromano@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'El Pueblo Bistrot Sede Cipro',
                'email' => 'elpueblo@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Greco Romano',
                'email' => 'grecoromano@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Pequeño Atypical Tapas Bar',
                'email' => 'pequeño@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Inka Chicken',
                'email' => 'inka@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Dejavu',
                'email' => 'dejavu@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Poke House',
                'email' => 'pokehouse@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'Cantina Tirolese ',
                'email' => 'cantinatirolese@restaurant.it',
                'password' => Hash::make('deliveboo123')
            ],
            [
                'name' => 'I Monticiani',
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
