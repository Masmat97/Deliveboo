<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        //italian dishes
        $newDish = new Dish();
        $newDish->restaurant_id = 1; //assuming the restaurant ID is 1
        $newDish->name = '"Pollo alla Cacciatora';
        $newDish->ingredient = "Chicken breast, Mushrooms, Onion, Garlic";
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdo6Cx1O2jaJHjjMGYhL_NlA7ybc5DdJswPA&s";
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 1; // assuming the restaurant ID is 1
        $newDish->name = 'Spaghetti Aglio e Olio';
        $newDish->ingredient = 'Spaghetti, Garlic, Olive oil, Red pepper flakes';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzn3SiOum4YNZz2rnpHkW4B0LYA1OwAhW_dg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 1; // assuming the restaurant ID is 1
        $newDish->name = 'Bruschetta';
        $newDish->ingredient = 'Tomato, Basil, Mozzarella, Balsamic vinegar';
        $newDish->price = 8.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbgEArTW90-D2VARxsrED-ptPf0ZxMKWgedw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 1; // assuming the restaurant ID is 1
        $newDish->name = 'Risotto alla Milanese';
        $newDish->ingredient = 'Risotto, Saffron, Beef broth, Parmesan cheese, Ossobuco';
        $newDish->price = 22.99;
        $newDish->availability = false;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTabmWcjTyb36Qlzzxul0oPhG_Nsi4TKpvRCQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 1; // assuming the restaurant ID is 1
        $newDish->name = 'Pollo alla Parmigiana';
        $newDish->ingredient = 'Chicken breast, Tomato sauce, Mozzarella cheese, Parmesan cheese';
        $newDish->price = 16.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNugcSNjZKHcintFX1dv8EdU78WZW95-5g8Q&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 1; // assuming the restaurant ID is 1
        $newDish->name = 'Fettuccine Alfredo';
        $newDish->ingredient = 'Fettuccine, Parmesan cheese, Butter, Cream';
        $newDish->price = 18.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpS352Q473F_wHJUv1_Fx5c_681gdkghZpYA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 2; // assuming the restaurant ID is 2
        $newDish->name = 'Gnocchi alla Romana';
        $newDish->ingredient = 'Gnocchi, Tomato sauce, Pecorino Romano cheese, Basil';
        $newDish->price = 16.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLuIYdpYr692Txk1QyrpBSHAet2aw2SjoRnA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 2; // assuming the restaurant ID is 2
        $newDish->name = 'Insalata Caprese';
        $newDish->ingredient = 'Tomato, Mozzarella cheese, Basil, Balsamic vinegar';
        $newDish->price = 9.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAcE2NwPt63BEhQ3AWT_5rke9i6ODHwt3q_A&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 2; // assuming the restaurant ID is 2
        $newDish->name = 'Tortellini alla Panna';
        $newDish->ingredient = 'Tortellini, Cream sauce, Parmesan cheese, Fresh parsley';
        $newDish->price = 18.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHTR-FZfdAdl99894ZLRGl8cJXfSQoLs_b6w&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 2; // assuming the restaurant ID is 2
        $newDish->name = 'Cannelloni con Spinaci';
        $newDish->ingredient = 'Cannelloni, Spinach, Ricotta cheese, Tomato sauce';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgUUlyGf3TDL6w4lPw7tptMBIcHGK0-Q10_w&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 2; // assuming the restaurant ID is 2
        $newDish->name = 'Zeppole di San Giuseppe';
        $newDish->ingredient = 'Zeppole dough, Ricotta cheese, Powdered sugar, Chocolate chips';
        $newDish->price = 11.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwSCdOH5prTmSOcd0qUKU1ttHEz-xx-MffPQ&s';
        $newDish->save();

        //Japanise dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 3; // assuming the restaurant ID is 3
        $newDish->name = 'Salmon Sushi';
        $newDish->ingredient = 'Salmon, Sushi rice, Nori seaweed';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJxQaH8tYycnMFjNSl2U-_zTyKI_wWUIKClg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 3; // assuming the restaurant ID is 3
        $newDish->name = 'Ramen';
        $newDish->ingredient = 'Pork belly, Noodles, Miso broth, Scallions';
        $newDish->price = 10.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgEUJXsS_DWZq3F0NFdZbf1Asl005HCxo2Jg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 3; // assuming the restaurant ID is 3
        $newDish->name = 'Gyoza';
        $newDish->ingredient = 'Pork, Vegetables, Soy sauce, Pan-fried dumplings';
        $newDish->price = 8.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAseewJWSMPZWKp3rKp4dR3uz7lQAsZayjNw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 3; // assuming the restaurant ID is 3
        $newDish->name = 'Teriyaki Chicken';
        $newDish->ingredient = 'Chicken breast, Teriyaki sauce, Rice, Vegetables';
        $newDish->price = 13.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRL8ygNHObqwAfUkb4XMI4jOdz1xuhVwYFMdg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 3; // assuming the restaurant ID is 3
        $newDish->name = 'Udon Noodles';
        $newDish->ingredient = 'Udon noodles, Vegetables, Miso broth, Tempura bits';
        $newDish->price = 11.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXl2LqxgExOE89lQ0F2kevbvlO5KPitpDzGA&s';
        $newDish->save();


        //Indian dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 4; // assuming the restaurant ID is 4
        $newDish->name = 'Chicken Tikka Masala';
        $newDish->ingredient = 'Chicken breast, Tomato sauce, Cream, Spices';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRGX7PMk7hJVz3D0ULZKeAjjpIIP69qVQ6QA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 4; // assuming the restaurant ID is 4
        $newDish->name = 'Palak Paneer';
        $newDish->ingredient = 'Paneer cheese, Spinach, Garlic, Cream';
        $newDish->price = 13.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFyLOXqejhRscOxdsEp90MgEnvbXlS71kQDA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 4; // assuming the restaurant ID is 4
        $newDish->name = 'Samosas';
        $newDish->ingredient = 'Potatoes, Peas, Onions, Spices, Pastry';
        $newDish->price = 6.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCgx56WwjE3BEf66tUWeO_dwKLorguXCvNPA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 4; // assuming the restaurant ID is 4
        $newDish->name = 'Butter Chicken';
        $newDish->ingredient = 'Chicken breast, Tomato sauce, Butter, Spices';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsWc3JXNElTEwy9Flx_-LKkyzhzgGV6VY3KA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 4; // assuming the restaurant ID is 4
        $newDish->name = 'Mattar Paneer';
        $newDish->ingredient = 'Paneer cheese, Peas, Onions, Spices, Cream';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRou4_6sFEozO5Cia09uqGK_AvpoHOlNRMteA&s';
        $newDish->save();

        //Seafood dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 5; // assuming the restaurant ID is 5
        $newDish->name = 'Pasta allo Scoglio';
        $newDish->ingredient = 'Shrimp, Mussels, Clams, Garlic, Cherry tomatoes, White wine, Linguine';
        $newDish->price = 19.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdXQVP3k8amfs--l2XDbM7iqnn2F0LWsvcEA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 5; // assuming the restaurant ID is 5
        $newDish->name = 'Tartare di Gambero';
        $newDish->ingredient = 'Shrimp, Lemon, Capers, Garlic, Olive oil';
        $newDish->price = 16.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBldB2vhX0--ue9aytCwwSmhLcVB1uKCoUrw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 5; // assuming the restaurant ID is 5
        $newDish->name = 'Ostriche Fritte';
        $newDish->ingredient = 'Oysters, Flour, Eggs, Breadcrumbs, Olive oil';
        $newDish->price = 18.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2hjtYSSOb_g2hJVamM1ZY4UU5ZDGJ1yM4Fw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 5; // assuming the restaurant ID is 5
        $newDish->name = 'Grilled Octopus';
        $newDish->ingredient = 'Octopus, Olive oil, Garlic, Lemon, Herbs';
        $newDish->price = 17.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyhJEONz4PHVn459e5F5ku0Uqtiayr4pd1sQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 5; // assuming the restaurant ID is 5
        $newDish->name = 'Fritto Misto';
        $newDish->ingredient = 'Shrimp, Calamari, Whitebait, Zucchini, Olive oil';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxOlmTmH7Zi-GIX4LVbvsjahUp2BL-Kf2ceQ&s';
        $newDish->save();

        //Hamburger Dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 6; // assuming the restaurant ID is 6
        $newDish->name = 'Classic Cheeseburger';
        $newDish->ingredient = 'Beef patty, Cheddar cheese, Lettuce, Tomato, Onion, Pickles';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvvbcDP8tXu4MixuG403ET8sZSDbg0kKPaLQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 6; // assuming the restaurant ID is 6
        $newDish->name = 'Bacon BBQ Burger';
        $newDish->ingredient = 'Beef patty, Bacon, Cheddar cheese, BBQ sauce, Lettuce, Tomato';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQx8bLqNbLVP_CgMgcgy6vznapgKUecGTILrQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 6; // assuming the restaurant ID is 6
        $newDish->name = 'Mushroom Swiss Burger';
        $newDish->ingredient = 'Beef patty, Sauteed mushrooms, Swiss cheese, Lettuce, Tomato';
        $newDish->price = 13.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQC6q0-SiNwnezCS_ku3WkR80mNaCqiavYJTw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 6; // assuming the restaurant ID is 6
        $newDish->name = 'Jalapeno Popper Burger';
        $newDish->ingredient = 'Beef patty, Jalapeno peppers, Cream cheese, Bacon, Lettuce, Tomato';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA_OUYlzS60nruGgYrI2ke6d9r0vp3vOkBAA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 6; // assuming the restaurant ID is 6
        $newDish->name = 'Greek Burger';
        $newDish->ingredient = 'Beef patty, Feta cheese, Olives, Tomato, Lettuce, Tzatziki sauce';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRV4DY9rrSoJcQOBAKmYxKzuZdC_FDurWhmA&s';
        $newDish->save();


        //Italian dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 7; // assuming the restaurant ID is 7
        $newDish->name = 'Fritto Misto';
        $newDish->ingredient = 'Mixed vegetables, Shrimp, Calamari, Zucchini, Fritto misto batter';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxOlmTmH7Zi-GIX4LVbvsjahUp2BL-Kf2ceQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 7; // assuming the restaurant ID is 7
        $newDish->name = 'Ravioli alla Norma';
        $newDish->ingredient = 'Ravioli, Eggplant, Tomato sauce, Ricotta salata cheese, Basil';
        $newDish->price = 17.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCw7TwvtilzAE6gP3cScTFMFVOAQ6HICWo8Q&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 7; // assuming the restaurant ID is 7
        $newDish->name = 'Pollo alla Cacciatora con Funghi';
        $newDish->ingredient = 'Chicken breast, Mushrooms, Onion, Garlic, White wine, Tomato sauce';
        $newDish->price = 19.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqkibBZYsNTJfLwg6hqW0FhKtlslmH7ujR7Q&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 7; // assuming the restaurant ID is 7
        $newDish->name = 'Crespelle con Nutella';
        $newDish->ingredient = 'Crespelle batter, Nutella, Whipped cream, Fresh strawberries';
        $newDish->price = 10.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0m81rcJl5VJPvE7JNARc3I8ik1jUidZcnfA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 7; // assuming the restaurant ID is 7
        $newDish->name = 'Tiramisù';
        $newDish->ingredient = 'Ladyfingers, Espresso, Mascarpone cheese, Whipped cream, Cocoa powder';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIGMT1iBTYqPkCDvs1BL8a8alP9bZThhWhYw&s';
        $newDish->save();


        //Kebab dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 8; // assuming the restaurant ID is 8
        $newDish->name = 'Panino Kebab';
        $newDish->ingredient = 'Lamb, Tomato, Onion, Lettuce, Tzatziki sauce, Pita bread';
        $newDish->price = 9.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaV39GZAG7mp8hNjM2SJjZUJXKZb2kzF5bqQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 8; // assuming the restaurant ID is 8
        $newDish->name = 'Piadina Kebab';
        $newDish->ingredient = 'Chicken, Tomato, Onion, Lettuce, Tzatziki sauce, Piadina bread';
        $newDish->price = 10.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTa3sA_P93aLtXSAvQJXS5QewxNJrIqWk_BRw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 8; // assuming the restaurant ID is 8
        $newDish->name = 'Doner Kebab';
        $newDish->ingredient = 'Lamb, Tomato, Onion, Lettuce, Tzatziki sauce, Pita bread';
        $newDish->price = 11.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYUAD78P-RX2RAZ8i5Q4TTaGiOMps2Y8HdBA&s';
        $newDish->save();

        //Italian dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 9; // assuming the restaurant ID is 9
        $newDish->name = 'Bruschetta con Prosciutto';
        $newDish->ingredient = ' Toasted bread, Prosciutto, Fresh tomatoes, Basil, Mozzarella cheese';
        $newDish->price = 13.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDIQw-eWtYFaorN_RVkyAFjHTst28yrHVdUQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 9; // assuming the restaurant ID is 9
        $newDish->name = 'Spaghetti alla Carbonara';
        $newDish->ingredient = 'Spaghetti, Bacon, Eggs, Parmesan cheese, Black pepper';
        $newDish->price = 16.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLpPrRKn2nKW7AipsdtZ-DeiZmbTDp9cEOpQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 9; // assuming the restaurant ID is 9
        $newDish->name = 'Pollo alla Milanese';
        $newDish->ingredient = 'Breaded chicken breast, Tomato sauce, Mozzarella cheese, Fresh basil';
        $newDish->price = 18.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRK-ELld2DZ0-1aR345XGmBikhoSEkgH4mHMw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 9; // assuming the restaurant ID is 9
        $newDish->name = 'Cannoli Siciliani';
        $newDish->ingredient = 'Cannoli shells, Sweetened ricotta cheese, Chocolate chips, Candied fruit';
        $newDish->price = 11.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-tEAZLU0N0mL4Tq7O7ccfUVZ7bXMOoBDKTw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 9; // assuming the restaurant ID is 9
        $newDish->name = 'Panna Cotta con Frutta';
        $newDish->ingredient = 'Panna cotta cream, Mixed berries, Whipped cream, Fresh mint';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0McvvJyMPshH2tgJQwMqJjC1ZeqBGOqFxGA&s';
        $newDish->save();

        //Japanese dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 10; // assuming the restaurant ID is 10
        $newDish->name = 'Tonkatsu';
        $newDish->ingredient = 'Breaded pork cutlet, Shredded cabbage, Rice, Miso soup';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTD57-XradmIuMEJkFfrtNZsn-PqQU1YAk07Q&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 10; // assuming the restaurant ID is 10
        $newDish->name = 'Yakiitori';
        $newDish->ingredient = 'Grilled chicken skewers, Yakitori sauce, Steamed rice';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRM2nbztWB7boK3o8AqsvDC8NmCQ-jZvkl8Ow&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 10; // assuming the restaurant ID is 10
        $newDish->name = 'Bento Box';
        $newDish->ingredient = 'Grilled salmon, Steamed rice, Mixed vegetables, Miso soup';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4wRCch8Z9WS34Xx4axxMjuuDsigo1Fo1VOA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 10; // assuming the restaurant ID is 10
        $newDish->name = 'Onigiri';
        $newDish->ingredient = 'Triangular rice balls, Salmon filling, Nori seaweed';
        $newDish->price = 9.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfNzSOxsfsT0vg6SvD-O143x1Y4CZ4SDrrzQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 10; // assuming the restaurant ID is 10
        $newDish->name = 'Mochi Ice Cream';
        $newDish->ingredient = 'Mochi shell, Green tea ice cream, Red bean paste';
        $newDish->price = 6.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0u1wIChFhySbsHxhUfiI_4pYFN_WdMhNVQg&s';
        $newDish->save();

        //Italian dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 11; // assuming the restaurant ID is 11
        $newDish->name = 'Arancini con Mozzarella';
        $newDish->ingredient = 'Risotto balls, Mozzarella cheese, Tomato sauce, Fresh parsley';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_wRqn0nbGFYdyHNrXHlMBFCoUc4UCImZZFg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 11; // assuming the restaurant ID is 11
        $newDish->name = 'Tortellini en Brodo';
        $newDish->ingredient = 'Tortellini, Chicken broth, Fresh parsley, Parmesan cheese';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2j5r9t_R-2wh-egXH-gyh2tP2TO7OrACUug&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 11; // assuming the restaurant ID is 9
        $newDish->name = 'Spaghetti alla Carbonara';
        $newDish->ingredient = 'Spaghetti, Jowls, Eggs, Parmesan cheese, Black pepper';
        $newDish->price = 16.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLpPrRKn2nKW7AipsdtZ-DeiZmbTDp9cEOpQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 11; // assuming the restaurant ID is 11
        $newDish->name = 'Sfogliatelle con Ricotta';
        $newDish->ingredient = 'Sfogliatelle shells, Sweetened ricotta cheese, Candied fruit, Powdered sugar';
        $newDish->price = 10.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMjrRBIWkOYu4Nl5JCaQQ2iDZVeEsCJEboAg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 11; // assuming the restaurant ID is 11
        $newDish->name = 'Caffè Italiano';
        $newDish->ingredient = 'Espresso, Whipped cream, Chocolate powder';
        $newDish->price = 4.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMyn2AV0uVkJm0iq4DLbTl-Tt3B7D2MVbZQw&s';
        $newDish->save();

        //Mexican dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 12; // assuming the restaurant ID is 12
        $newDish->name = 'Tacos al Pastor';
        $newDish->ingredient = 'Pork, Pineapple, Onion, Cilantro, Tortilla';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2AOqi0onm2yuyl449qok4jk2t-ciEHCKVkA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 12; // assuming the restaurant ID is 12
        $newDish->name = 'Quesadillas';
        $newDish->ingredient = 'Chicken, Cheese, Onion, Bell peppers, Tortilla';
        $newDish->price = 10.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZFqywGnCC1PnY5udTlJQNdo21hOvFtua6yw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 12; // assuming the restaurant ID is 12
        $newDish->name = 'Enchiladas Rojas';
        $newDish->ingredient = 'Beef, Tomato sauce, Cheese, Tortilla';
        $newDish->price = 13.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIZv9x7WiMc3GCMAkwsNU6_pNhj2DCZfadbA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 12; // assuming the restaurant ID is 12
        $newDish->name = 'Chiles Rellenos';
        $newDish->ingredient = 'Roasted poblano peppers, Cheese, Meat, Tomato sauce';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6YnNRhut-_N4stDtINgha0BdXvrEfjhvmYA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 12; // assuming the restaurant ID is 12
        $newDish->name = 'Fajitas';
        $newDish->ingredient = 'Beef, Bell peppers, Onion, Tortilla, Sour cream';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoETKLrBniCOf9ZrbLsfx1AywUzgE-SOTmPQ&s';
        $newDish->save();

        // French dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 13; // assuming the restaurant ID is 13
        $newDish->name = 'Coq au Vin';
        $newDish->ingredient = 'Chicken, Red wine, Mushrooms, Bacon, Potatoes';
        $newDish->price = 18.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkoURSDc0bAgwjk4vpNI2A7wXtmP_Q5NTekQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 13; // assuming the restaurant ID is 13
        $newDish->name = 'Bouillabaisse';
        $newDish->ingredient = 'Fish, Shellfish, Vegetables, Rouille, Croutons';
        $newDish->price = 19.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMsW601_OiP-YFLDlPveHm44ewJgXcpcqUJw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 13; // assuming the restaurant ID is 13
        $newDish->name = 'Ratatouille';
        $newDish->ingredient = 'Eggplant, Zucchini, Bell peppers, Tomato, Garlic';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRx6Hbvf0GdrSVB-cL-3vqn9Ahrb5FRno7cPw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 13; // assuming the restaurant ID is 13
        $newDish->name = 'Crème Brûlée';
        $newDish->ingredient = 'Cream, Sugar, Eggs, Vanilla, Caramelized sugar';
        $newDish->price = 7.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJzDUOYuRQLTTIfkIvDqWgfJ0x_aju6ht-FQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 13; // assuming the restaurant ID is 13
        $newDish->name = 'Quiche Lorraine';
        $newDish->ingredient = 'Eggs, Cream, Bacon, Cheese, Pastry';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRz-pAx7YeYpRXyh6WOZQqbwDWsYLlQdhWkqw&s';
        $newDish->save();


        $newDish = new Dish();
        $newDish->restaurant_id = 14; // assuming the restaurant ID is 1
        $newDish->name = 'Risotto alla Milanese';
        $newDish->ingredient = 'Risotto, Saffron, Beef broth, Parmesan cheese, Ossobuco';
        $newDish->price = 22.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTabmWcjTyb36Qlzzxul0oPhG_Nsi4TKpvRCQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 14;
        $newDish->name = 'Pizza Margherita';
        $newDish->ingredient = 'Tomato, Mozzarella, Basil, Olive oil';
        $newDish->price = 9.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKdjUUgea28rz1mhpS7pDI8yyTgIPljmQTrw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 14;
        $newDish->name = 'Lasagna alla Bolognese';
        $newDish->ingredient = 'Lasagna sheets, Bolognese sauce, Besciamella, Parmesan cheese';
        $newDish->price = 18.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3ZXgamALzyWxUyZ5W3jyi5gHIAWUQ3Hc22w&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 14;
        $newDish->name = 'Spaghetti Carbonara';
        $newDish->ingredient = 'Spaghetti, Eggs, Pecorino Romano, Guanciale, Black pepper';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDSuIbmFm8SxI_zBEF8S4oyHbvo2MDPKrtvQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 14;
        $newDish->name = 'Pizza Quattro Stagioni';
        $newDish->ingredient = 'Tomato, Mozzarella, Mushrooms, Ham, Artichokes, Olives';
        $newDish->price = 12.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4Ni3bTQV5Spt1KdAcuhMpaHz4ZXm7uiU7FA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 14;
        $newDish->name = 'Gnocchi al Pesto';
        $newDish->ingredient = 'Gnocchi, Pesto sauce, Parmesan cheese, Olive oil';
        $newDish->price = 14.25;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIktPW44D3vldOJDjoosNMxvPwuZh90RgK4g&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 14;
        $newDish->name = 'Pizza Diavola';
        $newDish->ingredient = 'Tomato, Mozzarella, Spicy salami, Olive oil';
        $newDish->price = 11.90;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9nngyUoJmEcoCu9KT5wv2ZR5iKCBtlOGGtg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 14;
        $newDish->name = 'Fettuccine Alfredo';
        $newDish->ingredient = 'Fettuccine, Butter, Parmesan cheese';
        $newDish->price = 16.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMs5QqKj9ZI8nkdmxl0AOAuvVw44kZC0I0HA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 14;
        $newDish->name = 'Pizza Capricciosa';
        $newDish->ingredient = 'Tomato, Mozzarella, Ham, Artichokes, Mushrooms, Olives';
        $newDish->price = 13.80;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcEluKIOX73eFmCC8Fe2nXYG4y1Vb4X9GWxQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 14;
        $newDish->name = 'Ravioli al Burro e Salvia';
        $newDish->ingredient = 'Ravioli, Butter, Sage, Parmesan cheese';
        $newDish->price = 17.00;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKU3MQ0d4XWfiNw5Tf3a-pFykyav1X_LDWgw&s';
        $newDish->save();

        // Creazione di paitti giapponesi e cinesi

        $newDish = new Dish();
        $newDish->restaurant_id = 15;
        $newDish->name = 'Sushi Misto';
        $newDish->ingredient = 'Riso, Tonno, Salmone, Gamberi, Alghe, Soia';
        $newDish->price = 18.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGN1lunB_KFNH5WeXpsx5B6Tl6Url672CfCw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 15;
        $newDish->name = 'Ramen';
        $newDish->ingredient = 'Brodo di maiale, Noodles, Uovo, Alghe, Cipollotto, Maiale Chashu';
        $newDish->price = 13.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRC32Vd1GZeEFLtFEoh2sQEffp-HOmHRPwWA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 15;
        $newDish->name = 'Pollo al Limone';
        $newDish->ingredient = 'Pollo, Salsa al limone, Verdure, Riso bianco';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9Gf9MZVHuJAIKrYWfYW-0W2wwzq2_Rik7mQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 15;
        $newDish->name = 'Anatra alla Pechinese';
        $newDish->ingredient = 'Anatra, Salsa di soia, Verdure, Frittelle di riso';
        $newDish->price = 24.99;
        $newDish->availability = false;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR68UPfuH6EuQwJ71tmJh1KqmOIZMpOEu3fHw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 15;
        $newDish->name = 'Tempura di Gamberi';
        $newDish->ingredient = 'Gamberi, Pastella Tempura, Verdure fritte';
        $newDish->price = 15.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtiqVV6fmemTlEKzOrLXBov7HGABhL8FdAcA&s';
        $newDish->save();

        // Creazione di piatti brasiliani di pesce

        $newDish = new Dish();
        $newDish->restaurant_id = 16;
        $newDish->name = 'Moqueca de Peixe';
        $newDish->ingredient = 'Fish fillets, Coconut milk, Tomatoes, Onions, Garlic, Cilantro, Palm oil';
        $newDish->price = 25.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNhn437Wkz-7fKKluJ6MObbP6HeihA2t0CKQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 16;
        $newDish->name = 'Camarão na Moranga';
        $newDish->ingredient = 'Shrimps, Cream cheese, Pumpkin, Coconut milk, Garlic, Tomatoes';
        $newDish->price = 28.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUkeC-jGfI5ROOJSwCBurAJLL-qP4FO0aLpQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 16;
        $newDish->name = 'Peixe Frito com Acarajé';
        $newDish->ingredient = 'Fried fish fillets, Acarajé (black-eyed pea fritters), Palm oil, Shrimp sauce';
        $newDish->price = 23.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUsPbFojIpXnuxoKlV1bGOuwsehqfYgZe9vQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 16;
        $newDish->name = 'Caldeirada de Frutos do Mar';
        $newDish->ingredient = 'Seafood mix (fish, shrimp, mussels), Tomatoes, Onions, Garlic, Coconut milk, Cilantro';
        $newDish->price = 30.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXHconTFAim0ua-ufbKpt4TeYVlg23w0SOXA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 16;
        $newDish->name = 'Bobó de Camarão';
        $newDish->ingredient = 'Shrimps, Cassava puree, Coconut milk, Garlic, Palm oil, Onions, Tomatoes';
        $newDish->price = 26.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIwqF9t-fzyr_Sl4wQZPjXP-hnfi4iqObzMw&s';
        $newDish->save();

        // Creazione di piatti Thai

        $newDish = new Dish();
        $newDish->restaurant_id = 17;
        $newDish->name = 'Pad Thai';
        $newDish->ingredient = 'Rice noodles, Shrimp, Eggs, Tofu, Peanuts, Tamarind sauce';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTmf4Gtcg_7-RnknKOP8usaCGPWK1JPHPx-w&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 17;
        $newDish->name = 'Tom Yum Goong';
        $newDish->ingredient = 'Shrimp, Lemongrass, Lime leaves, Galangal, Chili, Fish sauce';
        $newDish->price = 12.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmQfj1ZmQY_ZavTiGKf6erxnnFxVGN2rg-7g&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 17;
        $newDish->name = 'Green Curry Chicken';
        $newDish->ingredient = 'Chicken, Green curry paste, Coconut milk, Thai basil, Eggplant';
        $newDish->price = 16.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8wr2QXYNDT5kUQmkgDHiCovQ95ou7o0zrsg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 17;
        $newDish->name = 'Som Tum (Papaya Salad)';
        $newDish->ingredient = 'Green papaya, Chili, Peanuts, Lime, Fish sauce, Tomatoes';
        $newDish->price = 10.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT93gDIEM4BYePdRi2-1BusI8qBACjpKCbkQQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 17;
        $newDish->name = 'Massaman Curry';
        $newDish->ingredient = 'Beef, Potatoes, Coconut milk, Massaman curry paste, Peanuts';
        $newDish->price = 18.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdeXBNuobg85Gg0o7oQC-GhsZW9rpzDKFAfw&s';
        $newDish->save();

        // Creazione dei piatti McDonald's

        $newDish = new Dish();
        $newDish->restaurant_id = 18;
        $newDish->name = 'Big Mac';
        $newDish->ingredient = 'Beef patties, Lettuce, Cheese, Pickles, Onions, Special sauce, Sesame bun';
        $newDish->price = 5.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqPe1vvTBi0xEjR8fEPAqbKGiHhoS7csWSvw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 18;
        $newDish->name = 'Chicken McNuggets';
        $newDish->ingredient = 'Chicken, Breading, Frying oil, Dipping sauces';
        $newDish->price = 4.49;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGcdP24UDRIBDstoUBU-WZmeylt4ojzDmkug&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 18;
        $newDish->name = 'Filet-O-Fish';
        $newDish->ingredient = 'Fish fillet, Tartar sauce, Cheese, Steamed bun';
        $newDish->price = 4.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwQxNCyxSX3EQoswhOobHCFTGSLTJT_phMBg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 18;
        $newDish->name = 'McChicken';
        $newDish->ingredient = 'Chicken patty, Lettuce, Mayonnaise, Sesame bun';
        $newDish->price = 4.29;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiwYzSTCUcv3N0TfkHNBgzTvLt8vndaFuYkA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 18;
        $newDish->name = 'Quarter Pounder with Cheese';
        $newDish->ingredient = 'Beef patty, Cheese, Pickles, Onions, Ketchup, Mustard, Sesame bun';
        $newDish->price = 6.19;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_qctTSSNTji_iUXaPasVmoNhUkapgYYsUTw&s';
        $newDish->save();

        // Creazione dei piatti per Burger King

        $newDish = new Dish();
        $newDish->restaurant_id = 19;
        $newDish->name = 'Whopper';
        $newDish->ingredient = 'Beef patty, Lettuce, Tomato, Onion, Pickles, Ketchup, Mayo, Sesame seed bun';
        $newDish->price = 6.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJHZCZOVwY2T94uKUvhVqYR4Cq_DNwH6VXmg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 19;
        $newDish->name = 'Chicken Royale';
        $newDish->ingredient = 'Crispy chicken patty, Lettuce, Mayo, Sesame seed bun';
        $newDish->price = 5.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg6cVcIJPKa8PUqi09FMfK7RxYG6wqqrq6fw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 19;
        $newDish->name = 'Double Whopper';
        $newDish->ingredient = 'Two beef patties, Lettuce, Tomato, Onion, Pickles, Ketchup, Mayo, Sesame seed bun';
        $newDish->price = 8.49;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqtQMpUHNgNzhsDHgEzI78pQwZjRBhgSDV_w&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 19;
        $newDish->name = 'Bacon King';
        $newDish->ingredient = 'Two beef patties, Bacon, American cheese, Ketchup, Mayo, Sesame seed bun';
        $newDish->price = 7.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkxmbBAdYTStUQN6RiuhQJBkxnAxJHPi4XDQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 19;
        $newDish->name = 'Veggie Burger';
        $newDish->ingredient = 'Vegetable patty, Lettuce, Tomato, Onion, Pickles, Ketchup, Mayo, Sesame seed bun';
        $newDish->price = 5.49;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCFYjBFq0eDp7AIuBNECYHxG78qyDwO1KvsA&s';
        $newDish->save();

        // Creazione dei piatti per Old Wild West

        $newDish = new Dish();
        $newDish->restaurant_id = 20;
        $newDish->name = 'Burger Texano';
        $newDish->ingredient = 'Beef patty, Cheddar cheese, Bacon, BBQ sauce, Onion rings, Lettuce';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStElcS6lKc0oVmHrQZxj6pZNgIJSLLAf8HoQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 20;
        $newDish->name = 'Ribs alla Griglia';
        $newDish->ingredient = 'Pork ribs, BBQ sauce, Coleslaw, Fries';
        $newDish->price = 19.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgMCnz2Djc6s6wKF5Cs_5c2Ehe_JeyDj1Dnw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 20;
        $newDish->name = 'Nachos con Formaggio e Guacamole';
        $newDish->ingredient = 'Nachos, Cheddar cheese, Jalapenos, Guacamole, Sour cream';
        $newDish->price = 9.90;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWin2qp1ojuDLCTlRg4MkuxPNxLGjH7GW3vA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 20;
        $newDish->name = 'Chicken Wings Piccanti';
        $newDish->ingredient = 'Chicken wings, Spicy sauce, Celery sticks, Ranch dressing';
        $newDish->price = 12.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVlNKcOXRThcCaBXw_V2lF5wGv-c7JxyMQ8w&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 20;
        $newDish->name = 'Chili con Carne';
        $newDish->ingredient = 'Ground beef, Beans, Tomatoes, Chili peppers, Sour cream';
        $newDish->price = 11.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpm_jp84-qvDHmlUOghqDuuz7zyvOeZLZtSQ&s';
        $newDish->save();

        // Creazione dei piatti di kebab

        $newDish = new Dish();
        $newDish->restaurant_id = 21;
        $newDish->name = 'Kebab Classico';
        $newDish->ingredient = 'Pane pita, Carne di agnello, Pomodoro, Cipolla, Salsa yogurt';
        $newDish->price = 6.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScaZMnS0V3WDnahjzODzuDTwcKy1wIxSGdjA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 21;
        $newDish->name = 'Kebab con Pollo';
        $newDish->ingredient = 'Pane pita, Pollo, Pomodoro, Lattuga, Cipolla, Salsa piccante';
        $newDish->price = 7.00;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSodMb8jrdA22C0XBwibqyCpuMnG0F6lt3WQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 21;
        $newDish->name = 'Kebab con Manzo';
        $newDish->ingredient = 'Pane pita, Manzo, Insalata, Cipolla, Salsa di tahina';
        $newDish->price = 7.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqTdz6gVEOPAaFeBjDhcn2wmBjHfMpRz7cKA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 21;
        $newDish->name = 'Kebab Vegetariano';
        $newDish->ingredient = 'Pane pita, Falafel, Insalata, Pomodoro, Salsa hummus';
        $newDish->price = 6.80;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmwug30O03OHWi6atU01FKUF9GHew1LQTvFg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 21;
        $newDish->name = 'Kebab Mix';
        $newDish->ingredient = 'Pane pita, Carne di agnello e pollo, Insalata, Pomodoro, Salsa yogurt';
        $newDish->price = 8.00;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-eDhgZWeAl8NqOT3auqXGSRKKQDJVBHy2oA&s';
        $newDish->save();

        // Creazione di piatti greci

        $newDish = new Dish();
        $newDish->restaurant_id = 22;
        $newDish->name = 'Moussaka';
        $newDish->ingredient = 'Eggplant, Minced beef, Béchamel sauce, Potatoes, Tomato, Onion';
        $newDish->price = 17.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxI1Ep07A9BUQUX4s4th3guQT9TtY9du2BJQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 22;
        $newDish->name = 'Souvlaki';
        $newDish->ingredient = 'Grilled pork, Pita bread, Tzatziki, Tomato, Onion';
        $newDish->price = 12.00;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYCVJlcGocHWQPBU0d0jEfDScNjipqb78OlQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 22;
        $newDish->name = 'Spanakopita';
        $newDish->ingredient = 'Phyllo dough, Spinach, Feta cheese, Onion, Eggs';
        $newDish->price = 8.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQp0B2JerzfqRUxJ44WGZwBqu2H0eC9s7nEfQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 22;
        $newDish->name = 'Gyros';
        $newDish->ingredient = 'Pita bread, Chicken, Tzatziki, Tomato, Onion, French fries';
        $newDish->price = 10.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZ7EXyv9dQwdOZtaD5Scx91OO3fcTZ-VvZNw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 22;
        $newDish->name = 'Greek Salad';
        $newDish->ingredient = 'Tomato, Cucumber, Red onion, Feta cheese, Olives, Olive oil';
        $newDish->price = 9.90;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQuE-ozL-Dm8BQlittzmktCP-dujc2TqEVBw&s';
        $newDish->save();

        // Creazione di piatti messicani e spagnoli

        $newDish = new Dish();
        $newDish->restaurant_id = 23;
        $newDish->name = 'Tacos al Pastor';
        $newDish->ingredient = 'Corn tortilla, Marinated pork, Pineapple, Onion, Cilantro, Salsa';
        $newDish->price = 8.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBSyEazO9kr9xIwZ35ZptfDK81j6pN0EBPTw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 23;
        $newDish->name = 'Paella Valenciana';
        $newDish->ingredient = 'Rice, Chicken, Rabbit, Green beans, Saffron, Olive oil';
        $newDish->price = 25.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR24c5BzZnC9zRc-LR980gyfzFgR4pvkbBQBQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 23;
        $newDish->name = 'Chiles Rellenos';
        $newDish->ingredient = 'Poblano peppers, Cheese, Tomato sauce, Ground beef, Rice, Beans';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRx8sCpdwWrpgq7ikaizoAvI0TbpL5zO5peLw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 23;
        $newDish->name = 'Gazpacho';
        $newDish->ingredient = 'Tomatoes, Cucumbers, Bell peppers, Garlic, Olive oil, Vinegar';
        $newDish->price = 9.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKYaAafiHmlzc4f5_oDOmwOcFDyX8Bg-FLEQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 23;
        $newDish->name = 'Enchiladas Verdes';
        $newDish->ingredient = 'Corn tortillas, Chicken, Green salsa, Sour cream, Cheese, Onion';
        $newDish->price = 12.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFhDF1G4wp0J90BQb9rXdFID6ih17YejbOtA&s';
        $newDish->save();

        // Creazione dei piatti per Pequeño Atypical Tapas Bar

        $newDish = new Dish();
        $newDish->restaurant_id = 24;
        $newDish->name = 'Gambas al Ajillo';
        $newDish->ingredient = 'Shrimp, Garlic, Olive oil, Red pepper flakes, Parsley';
        $newDish->price = 15.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWK4cE5-CtfjlbrohdAUwliBE2mMtcgmWJEg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 24;
        $newDish->name = 'Patatas Bravas';
        $newDish->ingredient = 'Potatoes, Tomato sauce, Garlic, Paprika, Olive oil';
        $newDish->price = 10.00;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzfwNTk2JticBIXN3dqa6Sscb6gvNAz2rozg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 24;
        $newDish->name = 'Chorizo al Vino';
        $newDish->ingredient = 'Chorizo sausage, Red wine, Garlic, Onions, Olive oil';
        $newDish->price = 12.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxw-qyc2F7clm6R9wLejESAYgi49Tgr-Wk5w&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 24;
        $newDish->name = 'Croquetas de Jamón';
        $newDish->ingredient = 'Ham, Flour, Milk, Butter, Bread crumbs';
        $newDish->price = 14.00;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0bE_cI_7y3wbucnO3EHNNvMDX0qAn0fvmWw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 24;
        $newDish->name = 'Pulpo a la Gallega';
        $newDish->ingredient = 'Octopus, Paprika, Olive oil, Sea salt, Potatoes';
        $newDish->price = 18.00;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbmrzGGfG8XJ3-Rqcbq_1gHrkMuU4uQFx7dQ&s';
        $newDish->save();

        // Creazione dei piatti peruviani

        $newDish = new Dish();
        $newDish->restaurant_id = 25;
        $newDish->name = 'Ceviche de Corvina';
        $newDish->ingredient = 'Corvina fish, Lime juice, Red onions, Cilantro, Chili peppers, Sweet potato, Corn';
        $newDish->price = 18.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSt1yllwv1zQVvqmmD1xQqr9_huhuzzQ9FBtA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 25;
        $newDish->name = 'Tiradito';
        $newDish->ingredient = 'Raw fish, Lime juice, Aji amarillo, Garlic, Cilantro, Red onions, Sweet potato, Corn';
        $newDish->price = 19.00;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2pxlZPwaA2KvdiHTOKz4TZz-0QyOAt_uonA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 25;
        $newDish->name = 'Causa Rellena de Atún';
        $newDish->ingredient = 'Yellow potatoes, Tuna, Lime juice, Aji amarillo, Mayonnaise, Avocado, Olives';
        $newDish->price = 17.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT747sPhHVj9tqQbtxGGQoRrCwanDQ-Ne2hCQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 25;
        $newDish->name = 'Pescado a la Chorillana';
        $newDish->ingredient = 'Fish fillets, Tomatoes, Onions, Garlic, Aji amarillo, White wine, Cilantro';
        $newDish->price = 20.00;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1NG1uQ9RYP0zy-NU1SWUT9sEOyAZ-_Vri8Q&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 25;
        $newDish->name = 'Arroz con Mariscos';
        $newDish->ingredient = 'Rice, Mixed seafood, Tomatoes, Red peppers, Peas, Garlic, Cilantro, White wine';
        $newDish->price = 21.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNhuYe1o8uBlTqiKYSAGocH-VMOCPGH2bXcg&s';
        $newDish->save();

        // Creazione dei piatti di sushi italiano

        $newDish = new Dish();
        $newDish->restaurant_id = 26;
        $newDish->name = 'Sushi Roll alla Caprese';
        $newDish->ingredient = 'Salmon, Mozzarella, Tomato, Basil, Olive oil';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhw_O3wzoTXg2MR9E43DjIOBj-r58QtkzO5A&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 26;
        $newDish->name = 'Sushi Roll al Prosciutto';
        $newDish->ingredient = 'Prosciutto, Cucumber, Cream cheese, Avocado';
        $newDish->price = 16.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTy_5NOHam9l0O648aVCUkuKUr7S7Ifzvqluw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 26;
        $newDish->name = 'Sushi Roll alla Carbonara';
        $newDish->ingredient = 'Tuna, Parmesan cheese, Egg, Black pepper';
        $newDish->price = 17.25;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStzRghch6Yic-mJckuVi6CHzd0oB1N5PwBmg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 26;
        $newDish->name = 'Sushi Roll al Pesto';
        $newDish->ingredient = 'Shrimp, Pesto sauce, Basil, Pine nuts';
        $newDish->price = 18.00;
        $newDish->availability = true;
        $newDish->image = 'https://media-cdn.tripadvisor.com/media/photo-s/0e/41/35/27/sushi-con-pesto-alla.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 26;
        $newDish->name = 'Sushi Roll al Gorgonzola';
        $newDish->ingredient = 'Crab, Gorgonzola cheese, Walnuts, Pear slices';
        $newDish->price = 19.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTe4jlBwP8jLmSJh1vZOvbHJjmxOyxBgHM68Q&s';
        $newDish->save();

        // Creazione dei piatti di poke

        $newDish = new Dish();
        $newDish->restaurant_id = 27;
        $newDish->name = 'Poke Bowl Classico';
        $newDish->ingredient = 'Ahi tuna, Rice, Avocado, Cucumber, Seaweed, Soy sauce';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWip2cdJHpXEsOLaPi_C4qa0H_qb9xEeZCbw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 27;
        $newDish->name = 'Poke Bowl Salmon';
        $newDish->ingredient = 'Salmon, Rice, Edamame, Mango, Avocado, Spicy mayo';
        $newDish->price = 17.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRd-51p88O9rdJPYThcEka-T2LLpWCx0tK-FA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 27;
        $newDish->name = 'Poke Bowl Veggie';
        $newDish->ingredient = 'Tofu, Rice, Seaweed, Cucumber, Carrots, Sesame seeds';
        $newDish->price = 14.25;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYfGAUQQCA4EtpKU1E9HMSzqD_3BtTCkdVGg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 27;
        $newDish->name = 'Poke Bowl Spicy Tuna';
        $newDish->ingredient = 'Spicy tuna, Rice, Avocado, Jalapenos, Seaweed, Soy sauce';
        $newDish->price = 16.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGWaY8cjZp-BTZOyKgjBPaOoCHR9m0noLh8A&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 27;
        $newDish->name = 'Poke Bowl Tropical';
        $newDish->ingredient = 'Yellowfin tuna, Rice, Pineapple, Avocado, Red onion, Cilantro';
        $newDish->price = 18.00;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOcd75FLhxXAzdNl-FRAjgBUug6rql3nbFzg&s';
        $newDish->save();

        // Creazione dei piatti di cucina tedesca

        $newDish = new Dish();
        $newDish->restaurant_id = 28;
        $newDish->name = 'Wiener Schnitzel';
        $newDish->ingredient = 'Veal, Flour, Eggs, Bread crumbs, Lemon, Parsley';
        $newDish->price = 24.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREY5c6fRXjFbrUy7qoIrlvDGLtTHtfjHn0OQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 28;
        $newDish->name = 'Bratwurst';
        $newDish->ingredient = 'Pork sausage, Caraway seeds, Garlic, Salt, Pepper';
        $newDish->price = 12.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAWvGwnDr8r0YDXApdt8aQnZYnDgTndAilCQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 28;
        $newDish->name = 'Sauerkraut';
        $newDish->ingredient = 'Fermented cabbage, Caraway seeds, Bay leaves';
        $newDish->price = 8.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2m1VQEtjCI4tyAhaTdfdksM4daS6N5RBx3Q&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 28;
        $newDish->name = 'Kartoffelsalat';
        $newDish->ingredient = 'Potatoes, Vinegar, Oil, Mustard, Onions, Pickles';
        $newDish->price = 9.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSm8rYqmon1wLRNuCwIO2uwr9MrWNcBbZtGpQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 28;
        $newDish->name = 'Apfelstrudel';
        $newDish->ingredient = 'Apples, Puff pastry, Sugar, Cinnamon, Raisins';
        $newDish->price = 7.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReButNe1EuKJJdc3fjhAyMyJwSnp6P_cRoVQ&s';
        $newDish->save();

        // Creazione dei piatti argentini

        $newDish = new Dish();
        $newDish->restaurant_id = 29;
        $newDish->name = 'Asado';
        $newDish->ingredient = 'Beef ribs, Chorizo, Morcilla, Chimichurri';
        $newDish->price = 29.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTR3W70rZ6-Wi48hp3lwXJffHUPCTZ2mBlSuA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 29;
        $newDish->name = 'Empanadas';
        $newDish->ingredient = 'Pastry dough, Ground beef, Onions, Eggs, Olives, Spices';
        $newDish->price = 12.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSthVrVKTyru-rCxg1KRr4DpC4nTzBXhBLaPQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 29;
        $newDish->name = 'Milanesa a la Napolitana';
        $newDish->ingredient = 'Breaded beef steak, Tomato sauce, Ham, Cheese';
        $newDish->price = 18.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaCCQggbnCDFhxhhEdx61zo97tP2fvkpUNDQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 29;
        $newDish->name = 'Provoleta';
        $newDish->ingredient = 'Provolone cheese, Olive oil, Oregano, Chili flakes';
        $newDish->price = 14.00;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmi6wTN1PSDDUxYwQuVdDIFDpTKRo3kZqFXg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 29;
        $newDish->name = 'Dulce de Leche';
        $newDish->ingredient = 'Sweet milk caramel spread';
        $newDish->price = 8.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYdVq2cZjU_MaNPywVhqZrknS07q8_mjggCg&s';
        $newDish->save();
    }
}
