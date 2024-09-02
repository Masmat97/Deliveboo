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
    }
}
