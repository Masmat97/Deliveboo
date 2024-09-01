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
                'name' => 'Deliveboo Main',
                'email' => 'deliveboo@boolean.it',
                'password' => Hash::make('deliveboo123')
            ],
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
            // Aggiungi altri utenti se necessario...
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