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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        if (!User::where("email", "deliveboo@boolean.it")->first()) {
            $mainUser = new User();
            $mainUser->email = "deliveboo@boolean.it";
            $mainUser->password = Hash::make('deliveboo123');
            $mainUser->save();
        }

        if (!User::where("email", "labellavita@restaurant.it")->first()) {
            $mainUser = new User();
            $mainUser->email = "labellavita@restaurant.it";
            $mainUser->password = Hash::make('deliveboo123');
            $mainUser->save();
        }

        if (!User::where("email", "ilpagliaccio@restaurant.it")->first()) {
            $mainUser = new User();
            $mainUser->email = "ilpagliaccio@restaurant.it";
            $mainUser->password = Hash::make('deliveboo123');
            $mainUser->save();
        }

        if (!User::where("email", "sushiko@restaurant.it")->first()) {
            $mainUser = new User();
            $mainUser->email = "sushiko@restaurant.it";
            $mainUser->password = Hash::make('deliveboo123');
            $mainUser->save();
        }

        if (!User::where("email", "tandoorinights@restaurant.it")->first()) {
            $mainUser = new User();
            $mainUser->email = "tandoorinights@restaurant.it";
            $mainUser->password = Hash::make('deliveboo123');
            $mainUser->save();
        }

        if (!User::where("email", "larosetta@restaurant.it")->first()) {
            $mainUser = new User();
            $mainUser->email = "larosetta@restaurant.it";
            $mainUser->password = Hash::make('deliveboo123');
            $mainUser->save();
        }

        if (!User::where("email", "burgerbar@restaurant.it")->first()) {
            $mainUser = new User();
            $mainUser->email = "burgerbar@restaurant.it";
            $mainUser->password = Hash::make('deliveboo123');
            $mainUser->save();
        }

        if (!User::where("email", "lagensola@restaurant.it")->first()) {
            $mainUser = new User();
            $mainUser->email = "lagensola@restaurant.it";
            $mainUser->password = Hash::make('deliveboo123');
            $mainUser->save();
        }

        if (!User::where("email", "kebbabish@restaurant.it")->first()) {
            $mainUser = new User();
            $mainUser->email = "kebbabish@restaurant.it";
            $mainUser->password = Hash::make('deliveboo123');
            $mainUser->save();
        }

        if (!User::where("email", "lacampana@restaurant.it")->first()) {
            $mainUser = new User();
            $mainUser->email = "lacampana@restaurant.it";
            $mainUser->password = Hash::make('deliveboo123');
            $mainUser->save();
        }

        if (!User::where("email", "sakura@restaurant.it")->first()) {
            $mainUser = new User();
            $mainUser->email = "sakura@restaurant.it";
            $mainUser->password = Hash::make('deliveboo123');
            $mainUser->save();
        }

        if (!User::where("email", "lacarbonara@restaurant.it")->first()) {
            $mainUser = new User();
            $mainUser->email = "lacarbonara@restaurant.it";
            $mainUser->password = Hash::make('deliveboo123');
            $mainUser->save();
        }

        if (!User::where("email", "tacoselfogoncito@restaurant.it")->first()) {
            $mainUser = new User();
            $mainUser->email = "tacoselfogoncito@restaurant.it";
            $mainUser->password = Hash::make('deliveboo123');
            $mainUser->save();
        }

        if (!User::where("email", "lagalette@restaurant.it")->first()) {
            $mainUser = new User();
            $mainUser->email = "lagalette@restaurant.it";
            $mainUser->password = Hash::make('deliveboo123');
            $mainUser->save();
        }

        if (!User::where("email", "burgerbar@restaurant.it")->first()) {
            $mainUser = new User();
            $mainUser->email = "burgerbar@restaurant.it";
            $mainUser->password = Hash::make('deliveboo123');
            $mainUser->save();
        }


    }
}
