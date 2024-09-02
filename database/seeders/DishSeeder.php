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
        $newDish->image = "pollo-alla-cacciatora.jpg";
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 1; // assuming the restaurant ID is 1
        $newDish->name = 'Spaghetti Aglio e Olio';
        $newDish->ingredient = 'Spaghetti, Garlic, Olive oil, Red pepper flakes';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'spaghetti-aglio-e-olio.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 1; // assuming the restaurant ID is 1
        $newDish->name = 'Bruschetta';
        $newDish->ingredient = 'Tomato, Basil, Mozzarella, Balsamic vinegar';
        $newDish->price = 8.99;
        $newDish->availability = true;
        $newDish->image = 'bruschetta.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 1; // assuming the restaurant ID is 1
        $newDish->name = 'Risotto alla Milanese';
        $newDish->ingredient = 'Risotto, Saffron, Beef broth, Parmesan cheese, Ossobuco';
        $newDish->price = 22.99;
        $newDish->availability = false;
        $newDish->image = 'risotto-alla-milanese.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 1; // assuming the restaurant ID is 1
        $newDish->name = 'Pollo alla Parmigiana';
        $newDish->ingredient = 'Chicken breast, Tomato sauce, Mozzarella cheese, Parmesan cheese';
        $newDish->price = 16.99;
        $newDish->availability = true;
        $newDish->image = 'pollo-alla-parmigiana.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 1; // assuming the restaurant ID is 1
        $newDish->name = 'Fettuccine Alfredo';
        $newDish->ingredient = 'Fettuccine, Parmesan cheese, Butter, Cream';
        $newDish->price = 18.99;
        $newDish->availability = true;
        $newDish->image = 'fettuccine-alfredo.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 2; // assuming the restaurant ID is 2
        $newDish->name = 'Gnocchi alla Romana';
        $newDish->ingredient = 'Gnocchi, Tomato sauce, Pecorino Romano cheese, Basil';
        $newDish->price = 16.99;
        $newDish->availability = true;
        $newDish->image = 'gnocchi-alla-romana.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 2; // assuming the restaurant ID is 2
        $newDish->name = 'Insalata Caprese';
        $newDish->ingredient = 'Tomato, Mozzarella cheese, Basil, Balsamic vinegar';
        $newDish->price = 9.99;
        $newDish->availability = true;
        $newDish->image = 'insalata-caprese.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 2; // assuming the restaurant ID is 2
        $newDish->name = 'Tortellini alla Panna';
        $newDish->ingredient = 'Tortellini, Cream sauce, Parmesan cheese, Fresh parsley';
        $newDish->price = 18.99;
        $newDish->availability = true;
        $newDish->image = 'tortellini-alla-panna.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 2; // assuming the restaurant ID is 2
        $newDish->name = 'Cannelloni con Spinaci';
        $newDish->ingredient = 'Cannelloni, Spinach, Ricotta cheese, Tomato sauce';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'cannelloni-con-spinaci.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 2; // assuming the restaurant ID is 2
        $newDish->name = 'Zeppole di San Giuseppe';
        $newDish->ingredient = 'Zeppole dough, Ricotta cheese, Powdered sugar, Chocolate chips';
        $newDish->price = 11.99;
        $newDish->availability = true;
        $newDish->image = 'zeppole-di-san-giuseppe.jpg';
        $newDish->save();

        //Japanise dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 3; // assuming the restaurant ID is 3
        $newDish->name = 'Salmon Sushi';
        $newDish->ingredient = 'Salmon, Sushi rice, Nori seaweed';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'salmon-sushi.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 3; // assuming the restaurant ID is 3
        $newDish->name = 'Ramen';
        $newDish->ingredient = 'Pork belly, Noodles, Miso broth, Scallions';
        $newDish->price = 10.99;
        $newDish->availability = true;
        $newDish->image = 'ramen.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 3; // assuming the restaurant ID is 3
        $newDish->name = 'Gyoza';
        $newDish->ingredient = 'Pork, Vegetables, Soy sauce, Pan-fried dumplings';
        $newDish->price = 8.99;
        $newDish->availability = true;
        $newDish->image = 'gyoza.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 3; // assuming the restaurant ID is 3
        $newDish->name = 'Teriyaki Chicken';
        $newDish->ingredient = 'Chicken breast, Teriyaki sauce, Rice, Vegetables';
        $newDish->price = 13.99;
        $newDish->availability = true;
        $newDish->image = 'teriyaki-chicken.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 3; // assuming the restaurant ID is 3
        $newDish->name = 'Udon Noodles';
        $newDish->ingredient = 'Udon noodles, Vegetables, Miso broth, Tempura bits';
        $newDish->price = 11.99;
        $newDish->availability = true;
        $newDish->image = 'udon-noodles.jpg';
        $newDish->save();


        //Indian dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 4; // assuming the restaurant ID is 4
        $newDish->name = 'Chicken Tikka Masala';
        $newDish->ingredient = 'Chicken breast, Tomato sauce, Cream, Spices';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'chicken-tikka-masala.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 4; // assuming the restaurant ID is 4
        $newDish->name = 'Palak Paneer';
        $newDish->ingredient = 'Paneer cheese, Spinach, Garlic, Cream';
        $newDish->price = 13.99;
        $newDish->availability = true;
        $newDish->image = 'palak-paneer.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 4; // assuming the restaurant ID is 4
        $newDish->name = 'Samosas';
        $newDish->ingredient = 'Potatoes, Peas, Onions, Spices, Pastry';
        $newDish->price = 6.99;
        $newDish->availability = true;
        $newDish->image = 'samosas.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 4; // assuming the restaurant ID is 4
        $newDish->name = 'Butter Chicken';
        $newDish->ingredient = 'Chicken breast, Tomato sauce, Butter, Spices';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'butter-chicken.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 4; // assuming the restaurant ID is 4
        $newDish->name = 'Mattar Paneer';
        $newDish->ingredient = 'Paneer cheese, Peas, Onions, Spices, Cream';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'mattar-paneer.jpg';
        $newDish->save();

        //Seafood dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 5; // assuming the restaurant ID is 5
        $newDish->name = 'Pasta allo Scoglio';
        $newDish->ingredient = 'Shrimp, Mussels, Clams, Garlic, Cherry tomatoes, White wine, Linguine';
        $newDish->price = 19.99;
        $newDish->availability = true;
        $newDish->image = 'pasta-allo-scoglio.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 5; // assuming the restaurant ID is 5
        $newDish->name = 'Tartare di Gambero';
        $newDish->ingredient = 'Shrimp, Lemon, Capers, Garlic, Olive oil';
        $newDish->price = 16.99;
        $newDish->availability = true;
        $newDish->image = 'tartare-di-gambero.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 5; // assuming the restaurant ID is 5
        $newDish->name = 'Ostriche Fritte';
        $newDish->ingredient = 'Oysters, Flour, Eggs, Breadcrumbs, Olive oil';
        $newDish->price = 18.99;
        $newDish->availability = true;
        $newDish->image = 'ostriche-fritte.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 5; // assuming the restaurant ID is 5
        $newDish->name = 'Grilled Octopus';
        $newDish->ingredient = 'Octopus, Olive oil, Garlic, Lemon, Herbs';
        $newDish->price = 17.99;
        $newDish->availability = true;
        $newDish->image = 'grilled-octopus.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 5; // assuming the restaurant ID is 5
        $newDish->name = 'Fritto Misto';
        $newDish->ingredient = 'Shrimp, Calamari, Whitebait, Zucchini, Olive oil';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'fritto-misto.jpg';
        $newDish->save();

        //Hamburger Dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 6; // assuming the restaurant ID is 6
        $newDish->name = 'Classic Cheeseburger';
        $newDish->ingredient = 'Beef patty, Cheddar cheese, Lettuce, Tomato, Onion, Pickles';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'classic-cheeseburger.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 6; // assuming the restaurant ID is 6
        $newDish->name = 'Bacon BBQ Burger';
        $newDish->ingredient = 'Beef patty, Bacon, Cheddar cheese, BBQ sauce, Lettuce, Tomato';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'bacon-bbq-burger.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 6; // assuming the restaurant ID is 6
        $newDish->name = 'Mushroom Swiss Burger';
        $newDish->ingredient = 'Beef patty, Sauteed mushrooms, Swiss cheese, Lettuce, Tomato';
        $newDish->price = 13.99;
        $newDish->availability = true;
        $newDish->image = 'mushroom-swiss-burger.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 6; // assuming the restaurant ID is 6
        $newDish->name = 'Jalapeno Popper Burger';
        $newDish->ingredient = 'Beef patty, Jalapeno peppers, Cream cheese, Bacon, Lettuce, Tomato';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'jalapeno-popper-burger.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 6; // assuming the restaurant ID is 6
        $newDish->name = 'Greek Burger';
        $newDish->ingredient = 'Beef patty, Feta cheese, Olives, Tomato, Lettuce, Tzatziki sauce';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'greek-burger.jpg';
        $newDish->save();


        //Italian dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 7; // assuming the restaurant ID is 7
        $newDish->name = 'Fritto Misto';
        $newDish->ingredient = 'Mixed vegetables, Shrimp, Calamari, Zucchini, Fritto misto batter';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'fritto-misto.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 7; // assuming the restaurant ID is 7
        $newDish->name = 'Ravioli alla Norma';
        $newDish->ingredient = 'Ravioli, Eggplant, Tomato sauce, Ricotta salata cheese, Basil';
        $newDish->price = 17.99;
        $newDish->availability = true;
        $newDish->image = 'ravioli-alla-norma.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 7; // assuming the restaurant ID is 7
        $newDish->name = 'Pollo alla Cacciatora con Funghi';
        $newDish->ingredient = 'Chicken breast, Mushrooms, Onion, Garlic, White wine, Tomato sauce';
        $newDish->price = 19.99;
        $newDish->availability = true;
        $newDish->image = 'pollo-alla-cacciatora-con-funghi.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 7; // assuming the restaurant ID is 7
        $newDish->name = 'Crespelle con Nutella';
        $newDish->ingredient = 'Crespelle batter, Nutella, Whipped cream, Fresh strawberries';
        $newDish->price = 10.99;
        $newDish->availability = true;
        $newDish->image = 'crespelle-con-nutella.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 7; // assuming the restaurant ID is 7
        $newDish->name = 'Tiramisù';
        $newDish->ingredient = 'Ladyfingers, Espresso, Mascarpone cheese, Whipped cream, Cocoa powder';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'tiramisu.jpg';
        $newDish->save();


        //Kebab dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 8; // assuming the restaurant ID is 8
        $newDish->name = 'Panino Kebab';
        $newDish->ingredient = 'Lamb, Tomato, Onion, Lettuce, Tzatziki sauce, Pita bread';
        $newDish->price = 9.99;
        $newDish->availability = true;
        $newDish->image = 'panino-kebab.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 8; // assuming the restaurant ID is 8
        $newDish->name = 'Piadina Kebab';
        $newDish->ingredient = 'Chicken, Tomato, Onion, Lettuce, Tzatziki sauce, Piadina bread';
        $newDish->price = 10.99;
        $newDish->availability = true;
        $newDish->image = 'piadina-kebab.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 8; // assuming the restaurant ID is 8
        $newDish->name = 'Doner Kebab';
        $newDish->ingredient = 'Lamb, Tomato, Onion, Lettuce, Tzatziki sauce, Pita bread';
        $newDish->price = 11.99;
        $newDish->availability = true;
        $newDish->image = 'doner-kebab.jpg';
        $newDish->save();

        //Italian dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 9; // assuming the restaurant ID is 9
        $newDish->name = 'Bruschetta con Prosciutto';
        $newDish->ingredient = ' Toasted bread, Prosciutto, Fresh tomatoes, Basil, Mozzarella cheese';
        $newDish->price = 13.99;
        $newDish->availability = true;
        $newDish->image = 'bruschetta-con-prosciutto.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 9; // assuming the restaurant ID is 9
        $newDish->name = 'Spaghetti alla Carbonara';
        $newDish->ingredient = 'Spaghetti, Bacon, Eggs, Parmesan cheese, Black pepper';
        $newDish->price = 16.99;
        $newDish->availability = true;
        $newDish->image = 'spaghetti-alla-carbonara.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 9; // assuming the restaurant ID is 9
        $newDish->name = 'Pollo alla Milanese';
        $newDish->ingredient = 'Breaded chicken breast, Tomato sauce, Mozzarella cheese, Fresh basil';
        $newDish->price = 18.99;
        $newDish->availability = true;
        $newDish->image = 'pollo-alla-milanese.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 9; // assuming the restaurant ID is 9
        $newDish->name = 'Cannoli Siciliani';
        $newDish->ingredient = 'Cannoli shells, Sweetened ricotta cheese, Chocolate chips, Candied fruit';
        $newDish->price = 11.99;
        $newDish->availability = true;
        $newDish->image = 'cannoli-siciliani.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 9; // assuming the restaurant ID is 9
        $newDish->name = 'Panna Cotta con Frutta';
        $newDish->ingredient = 'Panna cotta cream, Mixed berries, Whipped cream, Fresh mint';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'panna-cotta-con-frutta.jpg';
        $newDish->save();

        //Japanese dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 10; // assuming the restaurant ID is 10
        $newDish->name = 'Tonkatsu';
        $newDish->ingredient = 'Breaded pork cutlet, Shredded cabbage, Rice, Miso soup';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'tonkatsu.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 10; // assuming the restaurant ID is 10
        $newDish->name = 'Yakiitori';
        $newDish->ingredient = 'Grilled chicken skewers, Yakitori sauce, Steamed rice';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'yakiitori.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 10; // assuming the restaurant ID is 10
        $newDish->name = 'Bento Box';
        $newDish->ingredient = 'Grilled salmon, Steamed rice, Mixed vegetables, Miso soup';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'bento-box.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 10; // assuming the restaurant ID is 10
        $newDish->name = 'Onigiri';
        $newDish->ingredient = 'Triangular rice balls, Salmon filling, Nori seaweed';
        $newDish->price = 9.99;
        $newDish->availability = true;
        $newDish->image = 'onigiri.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 10; // assuming the restaurant ID is 10
        $newDish->name = 'Mochi Ice Cream';
        $newDish->ingredient = 'Mochi shell, Green tea ice cream, Red bean paste';
        $newDish->price = 6.99;
        $newDish->availability = true;
        $newDish->image = 'mochi-ice-cream.jpg';
        $newDish->save();

        //Italian dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 11; // assuming the restaurant ID is 11
        $newDish->name = 'Arancini con Mozzarella';
        $newDish->ingredient = 'Risotto balls, Mozzarella cheese, Tomato sauce, Fresh parsley';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'arancini-con-mozzarella.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 11; // assuming the restaurant ID is 11
        $newDish->name = 'Tortellini en Brodo';
        $newDish->ingredient = 'Tortellini, Chicken broth, Fresh parsley, Parmesan cheese';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'tortellini-en-brodo.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 11; // assuming the restaurant ID is 9
        $newDish->name = 'Spaghetti alla Carbonara';
        $newDish->ingredient = 'Spaghetti, Jowls, Eggs, Parmesan cheese, Black pepper';
        $newDish->price = 16.99;
        $newDish->availability = true;
        $newDish->image = 'spaghetti-alla-carbonara.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 11; // assuming the restaurant ID is 11
        $newDish->name = 'Sfogliatelle con Ricotta';
        $newDish->ingredient = 'Sfogliatelle shells, Sweetened ricotta cheese, Candied fruit, Powdered sugar';
        $newDish->price = 10.99;
        $newDish->availability = true;
        $newDish->image = 'sfogliatelle-con-ricotta.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 11; // assuming the restaurant ID is 11
        $newDish->name = 'Caffè Italiano';
        $newDish->ingredient = 'Espresso, Whipped cream, Chocolate powder';
        $newDish->price = 4.99;
        $newDish->availability = true;
        $newDish->image = 'caffe-italiano.jpg';
        $newDish->save();

        //Mexican dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 12; // assuming the restaurant ID is 12
        $newDish->name = 'Tacos al Pastor';
        $newDish->ingredient = 'Pork, Pineapple, Onion, Cilantro, Tortilla';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'tacos-al-pastor.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 12; // assuming the restaurant ID is 12
        $newDish->name = 'Quesadillas';
        $newDish->ingredient = 'Chicken, Cheese, Onion, Bell peppers, Tortilla';
        $newDish->price = 10.99;
        $newDish->availability = true;
        $newDish->image = 'quesadillas.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 12; // assuming the restaurant ID is 12
        $newDish->name = 'Enchiladas Rojas';
        $newDish->ingredient = 'Beef, Tomato sauce, Cheese, Tortilla';
        $newDish->price = 13.99;
        $newDish->availability = true;
        $newDish->image = 'enchiladas-rojas.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 12; // assuming the restaurant ID is 12
        $newDish->name = 'Chiles Rellenos';
        $newDish->ingredient = 'Roasted poblano peppers, Cheese, Meat, Tomato sauce';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'chiles-rellenos.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 12; // assuming the restaurant ID is 12
        $newDish->name = 'Fajitas';
        $newDish->ingredient = 'Beef, Bell peppers, Onion, Tortilla, Sour cream';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'fajitas.jpg';
        $newDish->save();

        // French dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 13; // assuming the restaurant ID is 13
        $newDish->name = 'Coq au Vin';
        $newDish->ingredient = 'Chicken, Red wine, Mushrooms, Bacon, Potatoes';
        $newDish->price = 18.99;
        $newDish->availability = true;
        $newDish->image = 'coq-au-vin.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 13; // assuming the restaurant ID is 13
        $newDish->name = 'Bouillabaisse';
        $newDish->ingredient = 'Fish, Shellfish, Vegetables, Rouille, Croutons';
        $newDish->price = 19.99;
        $newDish->availability = true;
        $newDish->image = 'bouillabaisse.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 13; // assuming the restaurant ID is 13
        $newDish->name = 'Ratatouille';
        $newDish->ingredient = 'Eggplant, Zucchini, Bell peppers, Tomato, Garlic';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'ratatouille.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 13; // assuming the restaurant ID is 13
        $newDish->name = 'Crème Brûlée';
        $newDish->ingredient = 'Cream, Sugar, Eggs, Vanilla, Caramelized sugar';
        $newDish->price = 7.99;
        $newDish->availability = true;
        $newDish->image = 'creme-brulee.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 13; // assuming the restaurant ID is 13
        $newDish->name = 'Quiche Lorraine';
        $newDish->ingredient = 'Eggs, Cream, Bacon, Cheese, Pastry';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'quiche-lorraine.jpg';
        $newDish->save();
    }
}
