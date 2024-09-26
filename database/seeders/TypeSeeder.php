<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newType = new Type();
        $newType->name = 'Italiano';
        $newType->save();

        $newType1 = new Type();
        $newType1->name = 'Giapponese';
        $newType1->save();

        $newType2 = new Type();
        $newType2->name = 'Indiano';
        $newType2->save();

        $newType3 = new Type();
        $newType3->name = 'Mare';
        $newType3->save();

        $newType4 = new Type();
        $newType4->name = 'Americano';
        $newType4->save();

        $newType5 = new Type();
        $newType5->name = 'Kebab';
        $newType5->save();

        $newType6 = new Type();
        $newType6->name = 'Medio Oriente';
        $newType6->save();

        $newType7 = new Type();
        $newType7->name = 'Hamburger';
        $newType7->save();

        $newType8 = new Type();
        $newType8->name = 'Cinese';
        $newType8->save();

        $newType9 = new Type();
        $newType9->name = 'Messicano';
        $newType9->save();

        $newType10 = new Type();
        $newType10->name = 'Francese';
        $newType10->save();

        $newType11 = new Type();
        $newType11->name = 'Greco';
        $newType11->save();

        $newType12 = new Type();
        $newType12->name = 'Thai';
        $newType12->save();

        $newType13 = new Type();
        $newType13->name = 'Vietnamita';
        $newType13->save();

        $newType14 = new Type();
        $newType14->name = 'Coreano';
        $newType14->save();

        $newType15 = new Type();
        $newType15->name = 'Spagnolo';
        $newType15->save();

        $newType16 = new Type();
        $newType16->name = 'Tedesco';
        $newType16->save();

        $newType17 = new Type();
        $newType17->name = 'Brasiliano';
        $newType17->save();

        $newType18 = new Type();
        $newType18->name = 'Argentino';
        $newType18->save();

        $newType19 = new Type();
        $newType19->name = 'Peruviano';
        $newType19->save();

        $newType20 = new Type();
        $newType20->name = 'Fusion';
        $newType20->save();

        $newType21 = new Type();
        $newType21->name = 'Fast-food';
        $newType21->save();

        $newType22 = new Type();
        $newType22->name = 'Healty';
        $newType22->save();

        $newType23 = new Type();
        $newType23->name = 'Pokè';
        $newType23->save();

        $newType24 = new Type();
        $newType24->name = 'Pizzeria';
        $newType24->save();

        $newType25 = new Type();
        $newType25->name = 'Sushi';
        $newType25->save();
    }
}
