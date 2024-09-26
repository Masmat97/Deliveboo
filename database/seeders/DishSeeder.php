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


        //Piatti italiani

        $newDish = new Dish();
        $newDish->restaurant_id = 1;
        $newDish->name = '"Pollo alla Cacciatora';
        $newDish->ingredient = "Petto di pollo, Funghi, Cipolla, Aglio";
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdo6Cx1O2jaJHjjMGYhL_NlA7ybc5DdJswPA&s";
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 1;
        $newDish->name = 'Spaghetti Aglio e Olio';
        $newDish->ingredient = 'Spaghetti, Aglio, Olio, Peperoncino.';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzn3SiOum4YNZz2rnpHkW4B0LYA1OwAhW_dg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 1;
        $newDish->name = 'Bruschetta';
        $newDish->ingredient = 'Pomodoro, Basilico, Mozzarella, Aceto balsamico.';
        $newDish->price = 8.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbgEArTW90-D2VARxsrED-ptPf0ZxMKWgedw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 1;
        $newDish->name = 'Risotto alla Milanese';
        $newDish->ingredient = 'Risotto, Zafferano, Brodo di manzo, Formaggio Parmigiano, Ossobuco';
        $newDish->price = 22.99;
        $newDish->availability = false;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTabmWcjTyb36Qlzzxul0oPhG_Nsi4TKpvRCQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 1;
        $newDish->name = 'Pollo alla Parmigiana';
        $newDish->ingredient = 'Petto di pollo, Salsa di pomodoro, Mozzarella, Parmigiano';
        $newDish->price = 16.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNugcSNjZKHcintFX1dv8EdU78WZW95-5g8Q&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 1;
        $newDish->name = 'Fettuccine Alfredo';
        $newDish->ingredient = 'Fettuccine, Parmigiano, Burro, Panna';
        $newDish->price = 18.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpS352Q473F_wHJUv1_Fx5c_681gdkghZpYA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 2;
        $newDish->name = 'Gnocchi alla Romana';
        $newDish->ingredient = 'Gnocchi, salsa di pomodoro, formaggio Pecorino Romano, basilico.';
        $newDish->price = 16.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLuIYdpYr692Txk1QyrpBSHAet2aw2SjoRnA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 2;
        $newDish->name = 'Insalata Caprese';
        $newDish->ingredient = 'Pomodoro, Mozzarella, Basilico, Aceto balsamico.';
        $newDish->price = 9.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAcE2NwPt63BEhQ3AWT_5rke9i6ODHwt3q_A&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 2;
        $newDish->name = 'Tortellini alla Panna';
        $newDish->ingredient = 'Tortellini, salsa alla panna, formaggio Parmigiano, prezzemolo fresco';
        $newDish->price = 18.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHTR-FZfdAdl99894ZLRGl8cJXfSQoLs_b6w&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 2;
        $newDish->name = 'Cannelloni con Spinaci';
        $newDish->ingredient = 'Cannelloni, Spinaci, Ricotta, Salsa di pomodoro';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgUUlyGf3TDL6w4lPw7tptMBIcHGK0-Q10_w&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 2;
        $newDish->name = 'Zeppole di San Giuseppe';
        $newDish->ingredient = 'Impasto, Formaggio ricotta, Zucchero a velo, Gocce di cioccolato';
        $newDish->price = 11.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwSCdOH5prTmSOcd0qUKU1ttHEz-xx-MffPQ&s';
        $newDish->save();

        //Piatti Giapponesi

        $newDish = new Dish();
        $newDish->restaurant_id = 3;
        $newDish->name = 'Salmon Sushi';
        $newDish->ingredient = 'Salmone, Riso per sushi, Alga nori';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJxQaH8tYycnMFjNSl2U-_zTyKI_wWUIKClg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 3;
        $newDish->name = 'Ramen';
        $newDish->ingredient = 'Pancetta di maiale, tagliatelle, brodo di miso, cipollotti';
        $newDish->price = 10.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgEUJXsS_DWZq3F0NFdZbf1Asl005HCxo2Jg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 3;
        $newDish->name = 'Gyoza';
        $newDish->ingredient = 'Maiale, Verdure, Salsa di soia, Ravioli saltati in padella';
        $newDish->price = 8.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAseewJWSMPZWKp3rKp4dR3uz7lQAsZayjNw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 3;
        $newDish->name = 'Teriyaki Chicken';
        $newDish->ingredient = 'Petto di pollo, salsa teriyaki, riso, verdure';
        $newDish->price = 13.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRL8ygNHObqwAfUkb4XMI4jOdz1xuhVwYFMdg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 3;
        $newDish->name = 'Udon Noodles';
        $newDish->ingredient = 'Noodles Udon, Verdure, Brodo di Miso, Pezzi di Tempura';
        $newDish->price = 11.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXl2LqxgExOE89lQ0F2kevbvlO5KPitpDzGA&s';
        $newDish->save();

        //Piatti indiani

        $newDish = new Dish();
        $newDish->restaurant_id = 4;
        $newDish->name = 'Chicken Tikka Masala';
        $newDish->ingredient = 'Petto di pollo, Salsa di pomodoro, Panna, Spezie';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRGX7PMk7hJVz3D0ULZKeAjjpIIP69qVQ6QA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 4;
        $newDish->name = 'Palak Paneer';
        $newDish->ingredient = 'Formaggio Paneer, Spinaci, Aglio, Panna';
        $newDish->price = 13.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFyLOXqejhRscOxdsEp90MgEnvbXlS71kQDA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 4;
        $newDish->name = 'Samosas';
        $newDish->ingredient = 'Patate, Piselli, Cipolle, Spezie, Pasticceria';
        $newDish->price = 6.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCgx56WwjE3BEf66tUWeO_dwKLorguXCvNPA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 4;
        $newDish->name = 'Butter Chicken';
        $newDish->ingredient = 'Petto di pollo, Salsa di pomodoro, Burro, Spezie';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsWc3JXNElTEwy9Flx_-LKkyzhzgGV6VY3KA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 4;
        $newDish->name = 'Mattar Paneer';
        $newDish->ingredient = 'Formaggio Paneer, Piselli, Cipolle, Spezie, Panna';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRou4_6sFEozO5Cia09uqGK_AvpoHOlNRMteA&s';
        $newDish->save();

        //Piatti di pesce

        $newDish = new Dish();
        $newDish->restaurant_id = 5;
        $newDish->name = 'Pasta allo Scoglio';
        $newDish->ingredient = 'Gamberi, Cozze, Vongole, Aglio, Pomodorini, Vino bianco, Linguine';
        $newDish->price = 19.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdXQVP3k8amfs--l2XDbM7iqnn2F0LWsvcEA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 5;
        $newDish->name = 'Tartare di Gambero';
        $newDish->ingredient = 'Gamberetti, limone, capperi, aglio, olio';
        $newDish->price = 16.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBldB2vhX0--ue9aytCwwSmhLcVB1uKCoUrw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 5;
        $newDish->name = 'Ostriche Fritte';
        $newDish->ingredient = 'Ostriche, Farina, Uova, Pangrattato, Olio';
        $newDish->price = 18.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2hjtYSSOb_g2hJVamM1ZY4UU5ZDGJ1yM4Fw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 5;
        $newDish->name = 'Grilled Octopus';
        $newDish->ingredient = 'Polpo, Olio, Aglio, Limone, Erbe aromatiche';
        $newDish->price = 17.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyhJEONz4PHVn459e5F5ku0Uqtiayr4pd1sQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 5;
        $newDish->name = 'Fritto Misto';
        $newDish->ingredient = 'Gamberetti, Calamari, Bianchetti, Zucchine, Olio';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxOlmTmH7Zi-GIX4LVbvsjahUp2BL-Kf2ceQ&s';
        $newDish->save();

        //Hamburger

        $newDish = new Dish();
        $newDish->restaurant_id = 6;
        $newDish->name = 'Classic Cheeseburger';
        $newDish->ingredient = 'Hamburger di manzo, formaggio cheddar, lattuga, pomodoro, cipolla, sottaceti';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvvbcDP8tXu4MixuG403ET8sZSDbg0kKPaLQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 6;
        $newDish->name = 'Bacon BBQ Burger';
        $newDish->ingredient = 'Hamburger di manzo, Bacon, Formaggio cheddar, Salsa barbecue, Lattuga, Pomodoro';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQx8bLqNbLVP_CgMgcgy6vznapgKUecGTILrQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 6;
        $newDish->name = 'Mushroom Swiss Burger';
        $newDish->ingredient = 'Hamburger di manzo, funghi saltati, formaggio svizzero, lattuga, pomodoro';
        $newDish->price = 13.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQC6q0-SiNwnezCS_ku3WkR80mNaCqiavYJTw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 6;
        $newDish->name = 'Jalapeno Popper Burger';
        $newDish->ingredient = 'Hamburger di manzo, peperoni jalapeno, formaggio cremoso, pancetta, lattuga, pomodoro';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA_OUYlzS60nruGgYrI2ke6d9r0vp3vOkBAA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 6;
        $newDish->name = 'Greek Burger';
        $newDish->ingredient = 'Hamburger di manzo, formaggio feta, olive, pomodoro, lattuga, salsa tzatziki';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRV4DY9rrSoJcQOBAKmYxKzuZdC_FDurWhmA&s';
        $newDish->save();


        //Italian dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 7;
        $newDish->name = 'Fritto Misto';
        $newDish->ingredient = 'Verdure miste, Gamberi, Calamari, Zucchine, Fritto misto in pastella';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxOlmTmH7Zi-GIX4LVbvsjahUp2BL-Kf2ceQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 7;
        $newDish->name = 'Ravioli alla Norma';
        $newDish->ingredient = 'Ravioli, Melanzane, Salsa di pomodoro, Ricotta salata, Basilico';
        $newDish->price = 17.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCw7TwvtilzAE6gP3cScTFMFVOAQ6HICWo8Q&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 7;
        $newDish->name = 'Pollo alla Cacciatora con Funghi';
        $newDish->ingredient = 'Petto di pollo, Funghi, Cipolla, Aglio, Vino bianco, Salsa di pomodoro';
        $newDish->price = 19.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqkibBZYsNTJfLwg6hqW0FhKtlslmH7ujR7Q&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 7;
        $newDish->name = 'Crespelle con Nutella';
        $newDish->ingredient = 'Impasto per crespelle, Nutella, Panna montata, Fragole fresche';
        $newDish->price = 10.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0m81rcJl5VJPvE7JNARc3I8ik1jUidZcnfA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 7;
        $newDish->name = 'Tiramisù';
        $newDish->ingredient = 'Savoiardi, Espresso, Mascarpone, Panna montata, Cacao in polvere';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIGMT1iBTYqPkCDvs1BL8a8alP9bZThhWhYw&s';
        $newDish->save();


        //Kebab

        $newDish = new Dish();
        $newDish->restaurant_id = 8;
        $newDish->name = 'Panino Kebab';
        $newDish->ingredient = 'Agnello, pomodoro, cipolla, lattuga, salsa tzatziki, pane pita';
        $newDish->price = 9.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaV39GZAG7mp8hNjM2SJjZUJXKZb2kzF5bqQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 8;
        $newDish->name = 'Piadina Kebab';
        $newDish->ingredient = 'Pollo, pomodoro, cipolla, lattuga, salsa tzatziki, pane piadina';
        $newDish->price = 10.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTa3sA_P93aLtXSAvQJXS5QewxNJrIqWk_BRw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 8;
        $newDish->name = 'Doner Kebab';
        $newDish->ingredient = 'Agnello, pomodoro, cipolla, lattuga, salsa tzatziki, pane pita';
        $newDish->price = 11.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYUAD78P-RX2RAZ8i5Q4TTaGiOMps2Y8HdBA&s';
        $newDish->save();

        //Piatti Italiani

        $newDish = new Dish();
        $newDish->restaurant_id = 9;
        $newDish->name = 'Bruschetta con Prosciutto';
        $newDish->ingredient = ' Pane tostato, Prosciutto, Pomodori freschi, Basilico, Mozzarella';
        $newDish->price = 13.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDIQw-eWtYFaorN_RVkyAFjHTst28yrHVdUQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 9;
        $newDish->name = 'Spaghetti alla Carbonara';
        $newDish->ingredient = 'Spaghetti, Bacon, Uova, Parmigiano Reggiano, Pepe Nero';
        $newDish->price = 16.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLpPrRKn2nKW7AipsdtZ-DeiZmbTDp9cEOpQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 9;
        $newDish->name = 'Pollo alla Milanese';
        $newDish->ingredient = 'Petto di pollo impanato, salsa di pomodoro, formaggio mozzarella, basilico fresco';
        $newDish->price = 18.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRK-ELld2DZ0-1aR345XGmBikhoSEkgH4mHMw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 9;
        $newDish->name = 'Cannoli Siciliani';
        $newDish->ingredient = 'Gusci di cannoli, Ricotta zuccherata, Gocce di cioccolato, Frutta candita';
        $newDish->price = 11.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-tEAZLU0N0mL4Tq7O7ccfUVZ7bXMOoBDKTw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 9;
        $newDish->name = 'Panna Cotta con Frutta';
        $newDish->ingredient = 'Crema di panna cotta, Frutti di bosco misti, Panna montata, Menta fresca';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0McvvJyMPshH2tgJQwMqJjC1ZeqBGOqFxGA&s';
        $newDish->save();

        //Piatti Giapponesi

        $newDish = new Dish();
        $newDish->restaurant_id = 10;
        $newDish->name = 'Tonkatsu';
        $newDish->ingredient = 'Costoletta di maiale impanata, Cavolo tritato, Riso, Zuppa di miso';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTD57-XradmIuMEJkFfrtNZsn-PqQU1YAk07Q&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 10;
        $newDish->name = 'Yakiitori';
        $newDish->ingredient = 'Spiedini di pollo alla griglia, salsa yakitori, riso al vapore';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRM2nbztWB7boK3o8AqsvDC8NmCQ-jZvkl8Ow&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 10;
        $newDish->name = 'Bento Box';
        $newDish->ingredient = 'Salmone alla griglia, Riso al vapore, Verdure miste, Zuppa di miso';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4wRCch8Z9WS34Xx4axxMjuuDsigo1Fo1VOA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 10;
        $newDish->name = 'Onigiri';
        $newDish->ingredient = 'Hamburger di riso triangolari, ripieno di salmone, alga nori';
        $newDish->price = 9.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfNzSOxsfsT0vg6SvD-O143x1Y4CZ4SDrrzQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 10;
        $newDish->name = 'Mochi Ice Cream';
        $newDish->ingredient = 'Guscio di mochi, gelato al tè verde, pasta di fagioli rossi';
        $newDish->price = 6.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0u1wIChFhySbsHxhUfiI_4pYFN_WdMhNVQg&s';
        $newDish->save();

        //Italian dishes

        $newDish = new Dish();
        $newDish->restaurant_id = 11;
        $newDish->name = 'Arancini con Mozzarella';
        $newDish->ingredient = 'Polpette di risotto, Mozzarella, Salsa di pomodoro, Prezzemolo fresco';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_wRqn0nbGFYdyHNrXHlMBFCoUc4UCImZZFg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 11;
        $newDish->name = 'Tortellini en Brodo';
        $newDish->ingredient = 'Tortellini, Brodo di pollo, Prezzemolo fresco, Parmigiano Reggiano';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2j5r9t_R-2wh-egXH-gyh2tP2TO7OrACUug&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 11;
        $newDish->name = 'Spaghetti alla Carbonara';
        $newDish->ingredient = 'Spaghetti, Guanciale, Uova, Parmigiano Reggiano, Pepe Nero';
        $newDish->price = 16.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLpPrRKn2nKW7AipsdtZ-DeiZmbTDp9cEOpQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 11;
        $newDish->name = 'Sfogliatelle con Ricotta';
        $newDish->ingredient = 'Gusci di sfogliatelle, Ricotta zuccherata, Frutta candita, Zucchero a velo';
        $newDish->price = 10.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMjrRBIWkOYu4Nl5JCaQQ2iDZVeEsCJEboAg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 11;
        $newDish->name = 'Caffè Italiano';
        $newDish->ingredient = 'Espresso, Panna montata, Cioccolato in polvere';
        $newDish->price = 4.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMyn2AV0uVkJm0iq4DLbTl-Tt3B7D2MVbZQw&s';
        $newDish->save();

        //Piatti Messicani

        $newDish = new Dish();
        $newDish->restaurant_id = 12;
        $newDish->name = 'Tacos al Pastor';
        $newDish->ingredient = 'Maiale, Ananas, Cipolla, Coriandolo, Tortilla';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2AOqi0onm2yuyl449qok4jk2t-ciEHCKVkA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 12;
        $newDish->name = 'Quesadillas';
        $newDish->ingredient = 'Pollo, Formaggio, Cipolla, Peperoni, Tortilla';
        $newDish->price = 10.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZFqywGnCC1PnY5udTlJQNdo21hOvFtua6yw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 12;
        $newDish->name = 'Enchiladas Rojas';
        $newDish->ingredient = 'Manzo, Salsa di pomodoro, Formaggio, Tortilla';
        $newDish->price = 13.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIZv9x7WiMc3GCMAkwsNU6_pNhj2DCZfadbA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 12;
        $newDish->name = 'Chiles Rellenos';
        $newDish->ingredient = 'Peperoni poblano arrostiti, Formaggio, Carne, Salsa di pomodoro';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6YnNRhut-_N4stDtINgha0BdXvrEfjhvmYA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 12;
        $newDish->name = 'Fajitas';
        $newDish->ingredient = 'Manzo, Peperoni, Cipolla, Tortilla, Panna acida';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoETKLrBniCOf9ZrbLsfx1AywUzgE-SOTmPQ&s';
        $newDish->save();

        //Piatti Francesi

        $newDish = new Dish();
        $newDish->restaurant_id = 13;
        $newDish->name = 'Coq au Vin';
        $newDish->ingredient = 'Pollo, Vino rosso, Funghi, Pancetta, Patate';
        $newDish->price = 18.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkoURSDc0bAgwjk4vpNI2A7wXtmP_Q5NTekQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 13;
        $newDish->name = 'Bouillabaisse';
        $newDish->ingredient = 'Pesce, Crostacei, Verdure, Rouille, Crostini';
        $newDish->price = 19.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMsW601_OiP-YFLDlPveHm44ewJgXcpcqUJw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 13;
        $newDish->name = 'Ratatouille';
        $newDish->ingredient = 'Melanzane, zucchine, peperoni, pomodori, aglio';
        $newDish->price = 12.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRx6Hbvf0GdrSVB-cL-3vqn9Ahrb5FRno7cPw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 13;
        $newDish->name = 'Crème Brûlée';
        $newDish->ingredient = 'Panna, Zucchero, Uova, Vaniglia, Zucchero caramellato';
        $newDish->price = 7.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJzDUOYuRQLTTIfkIvDqWgfJ0x_aju6ht-FQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 13;
        $newDish->name = 'Quiche Lorraine';
        $newDish->ingredient = 'Uova, Panna, Pancetta, Formaggio, Pasticceria';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRz-pAx7YeYpRXyh6WOZQqbwDWsYLlQdhWkqw&s';
        $newDish->save();


        $newDish = new Dish();
        $newDish->restaurant_id = 14;
        $newDish->name = 'Risotto alla Milanese';
        $newDish->ingredient = 'Risotto, Zafferano, Brodo di manzo, Parmigiano Reggiano, Ossobuco';
        $newDish->price = 22.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTabmWcjTyb36Qlzzxul0oPhG_Nsi4TKpvRCQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 14;
        $newDish->name = 'Pizza Margherita';
        $newDish->ingredient = 'Pomodoro, Mozzarella, Basilico, Olio';
        $newDish->price = 9.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKdjUUgea28rz1mhpS7pDI8yyTgIPljmQTrw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 14;
        $newDish->name = 'Lasagna alla Bolognese';
        $newDish->ingredient = 'Fogli di lasagna, ragù alla bolognese, besciamella, parmigiano';
        $newDish->price = 18.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3ZXgamALzyWxUyZ5W3jyi5gHIAWUQ3Hc22w&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 14;
        $newDish->name = 'Spaghetti Carbonara';
        $newDish->ingredient = 'Spaghetti, Uova, Pecorino Romano, Guanciale, Pepe Nero';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDSuIbmFm8SxI_zBEF8S4oyHbvo2MDPKrtvQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 14;
        $newDish->name = 'Pizza Quattro Stagioni';
        $newDish->ingredient = 'Pomodoro, Mozzarella, Funghi, Prosciutto, Carciofi, Olive';
        $newDish->price = 12.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4Ni3bTQV5Spt1KdAcuhMpaHz4ZXm7uiU7FA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 14;
        $newDish->name = 'Gnocchi al Pesto';
        $newDish->ingredient = 'Gnocchi, pesto, parmigiano, olio';
        $newDish->price = 14.25;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIktPW44D3vldOJDjoosNMxvPwuZh90RgK4g&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 14;
        $newDish->name = 'Pizza Diavola';
        $newDish->ingredient = 'Pomodoro, Mozzarella, Salame piccante, Olio';
        $newDish->price = 11.90;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9nngyUoJmEcoCu9KT5wv2ZR5iKCBtlOGGtg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 14;
        $newDish->name = 'Fettuccine Alfredo';
        $newDish->ingredient = 'Fettuccine, Burro, Parmigiano Reggiano';
        $newDish->price = 16.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMs5QqKj9ZI8nkdmxl0AOAuvVw44kZC0I0HA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 14;
        $newDish->name = 'Pizza Capricciosa';
        $newDish->ingredient = 'Pomodoro, Mozzarella, Prosciutto, Carciofi, Funghi, Olive';
        $newDish->price = 13.80;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcEluKIOX73eFmCC8Fe2nXYG4y1Vb4X9GWxQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 14;
        $newDish->name = 'Ravioli al Burro e Salvia';
        $newDish->ingredient = 'Ravioli, Burro, Salvia, Parmigiano Reggiano';
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
        $newDish->ingredient = 'Filetti di pesce, Latte di cocco, Pomodori, Cipolle, Aglio, Coriandolo, Olio';
        $newDish->price = 25.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNhn437Wkz-7fKKluJ6MObbP6HeihA2t0CKQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 16;
        $newDish->name = 'Camarão na Moranga';
        $newDish->ingredient = 'Gamberetti, formaggio cremoso, zucca, latte di cocco, aglio, pomodori';
        $newDish->price = 28.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUkeC-jGfI5ROOJSwCBurAJLL-qP4FO0aLpQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 16;
        $newDish->name = 'Peixe Frito com Acarajé';
        $newDish->ingredient = 'Filetti di pesce fritti, Acarajé (frittelle di fagioli), olio, salsa di gamberi';
        $newDish->price = 23.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUsPbFojIpXnuxoKlV1bGOuwsehqfYgZe9vQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 16;
        $newDish->name = 'Caldeirada de Frutos do Mar';
        $newDish->ingredient = 'Mix di frutti di mare (pesce, gamberi, cozze), pomodori, cipolle, aglio, latte di cocco, coriandolo';
        $newDish->price = 30.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXHconTFAim0ua-ufbKpt4TeYVlg23w0SOXA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 16;
        $newDish->name = 'Bobó de Camarão';
        $newDish->ingredient = 'Gamberetti, purea di manioca, latte di cocco, aglio, olio, cipolle, pomodori';
        $newDish->price = 26.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIwqF9t-fzyr_Sl4wQZPjXP-hnfi4iqObzMw&s';
        $newDish->save();

        // Creazione di piatti Thai

        $newDish = new Dish();
        $newDish->restaurant_id = 17;
        $newDish->name = 'Pad Thai';
        $newDish->ingredient = 'Tagliatelle di riso, gamberi, uova, tofu, arachidi, salsa di tamarindo';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTmf4Gtcg_7-RnknKOP8usaCGPWK1JPHPx-w&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 17;
        $newDish->name = 'Tom Yum Goong';
        $newDish->ingredient = 'Gamberetti, citronella, foglie di lime, galanga, peperoncino, salsa di pesce';
        $newDish->price = 12.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmQfj1ZmQY_ZavTiGKf6erxnnFxVGN2rg-7g&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 17;
        $newDish->name = 'Green Curry Chicken';
        $newDish->ingredient = 'Pollo, pasta di curry verde, latte di cocco, basilico tailandese, melanzane';
        $newDish->price = 16.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8wr2QXYNDT5kUQmkgDHiCovQ95ou7o0zrsg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 17;
        $newDish->name = 'Som Tum (Papaya Salad)';
        $newDish->ingredient = 'Papaya verde, peperoncino, arachidi, lime, salsa di pesce, pomodori';
        $newDish->price = 10.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT93gDIEM4BYePdRi2-1BusI8qBACjpKCbkQQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 17;
        $newDish->name = 'Massaman Curry';
        $newDish->ingredient = 'Manzo, patate, latte di cocco, pasta di curry Massaman, arachidi';
        $newDish->price = 18.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdeXBNuobg85Gg0o7oQC-GhsZW9rpzDKFAfw&s';
        $newDish->save();

        // Creazione dei piatti McDonald's

        $newDish = new Dish();
        $newDish->restaurant_id = 18;
        $newDish->name = 'Big Mac';
        $newDish->ingredient = 'Polpette di manzo, lattuga, formaggio, sottaceti, cipolle, salsa speciale, panino al sesamo';
        $newDish->price = 5.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqPe1vvTBi0xEjR8fEPAqbKGiHhoS7csWSvw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 18;
        $newDish->name = 'Chicken McNuggets';
        $newDish->ingredient = 'Pollo, impanatura, olio per friggere, salse di accompagnamento';
        $newDish->price = 4.49;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGcdP24UDRIBDstoUBU-WZmeylt4ojzDmkug&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 18;
        $newDish->name = 'Filet-O-Fish';
        $newDish->ingredient = 'Filetto di pesce, Salsa tartara, Formaggio, Panino al vapore';
        $newDish->price = 4.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwQxNCyxSX3EQoswhOobHCFTGSLTJT_phMBg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 18;
        $newDish->name = 'McChicken';
        $newDish->ingredient = 'Hamburger di pollo, lattuga, maionese, panino al sesamo';
        $newDish->price = 4.29;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiwYzSTCUcv3N0TfkHNBgzTvLt8vndaFuYkA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 18;
        $newDish->name = 'Quarter Pounder with Cheese';
        $newDish->ingredient = 'Hamburger di manzo, formaggio, sottaceti, cipolle, ketchup, senape, panino al sesamo';
        $newDish->price = 6.19;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_qctTSSNTji_iUXaPasVmoNhUkapgYYsUTw&s';
        $newDish->save();

        // Creazione dei piatti per Burger King

        $newDish = new Dish();
        $newDish->restaurant_id = 19;
        $newDish->name = 'Whopper';
        $newDish->ingredient = 'Hamburger di manzo, lattuga, pomodoro, cipolla, sottaceti, ketchup, maionese, panino ai semi di sesamo';
        $newDish->price = 6.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJHZCZOVwY2T94uKUvhVqYR4Cq_DNwH6VXmg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 19;
        $newDish->name = 'Chicken Royale';
        $newDish->ingredient = 'Hamburger di pollo croccante, lattuga, maionese, panino ai semi di sesamo';
        $newDish->price = 5.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg6cVcIJPKa8PUqi09FMfK7RxYG6wqqrq6fw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 19;
        $newDish->name = 'Double Whopper';
        $newDish->ingredient = 'Due polpette di manzo, lattuga, pomodoro, cipolla, sottaceti, ketchup, maionese, panino ai semi di sesamo';
        $newDish->price = 8.49;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqtQMpUHNgNzhsDHgEzI78pQwZjRBhgSDV_w&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 19;
        $newDish->name = 'Bacon King';
        $newDish->ingredient = 'Due polpette di manzo, bacon, formaggio americano, ketchup, maionese, panino ai semi di sesamo';
        $newDish->price = 7.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkxmbBAdYTStUQN6RiuhQJBkxnAxJHPi4XDQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 19;
        $newDish->name = 'Veggie Burger';
        $newDish->ingredient = 'Hamburger di verdure, lattuga, pomodoro, cipolla, sottaceti, ketchup, maionese, panino ai semi di sesamo';
        $newDish->price = 5.49;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCFYjBFq0eDp7AIuBNECYHxG78qyDwO1KvsA&s';
        $newDish->save();

        // Creazione dei piatti per Old Wild West

        $newDish = new Dish();
        $newDish->restaurant_id = 20;
        $newDish->name = 'Burger Texano';
        $newDish->ingredient = 'Hamburger di manzo, formaggio cheddar, bacon, salsa barbecue, anelli di cipolla, lattuga';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStElcS6lKc0oVmHrQZxj6pZNgIJSLLAf8HoQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 20;
        $newDish->name = 'Ribs alla Griglia';
        $newDish->ingredient = 'Costine di maiale, salsa barbecue, insalata di cavolo, patatine fritte';
        $newDish->price = 19.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgMCnz2Djc6s6wKF5Cs_5c2Ehe_JeyDj1Dnw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 20;
        $newDish->name = 'Nachos con Formaggio e Guacamole';
        $newDish->ingredient = 'Nachos, formaggio cheddar, jalapenos, guacamole, panna acida';
        $newDish->price = 9.90;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWin2qp1ojuDLCTlRg4MkuxPNxLGjH7GW3vA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 20;
        $newDish->name = 'Chicken Wings Piccanti';
        $newDish->ingredient = 'Ali di pollo, salsa piccante, bastoncini di sedano, condimento Ranch';
        $newDish->price = 12.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVlNKcOXRThcCaBXw_V2lF5wGv-c7JxyMQ8w&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 20;
        $newDish->name = 'Chili con Carne';
        $newDish->ingredient = 'Carne macinata, fagioli, pomodori, peperoncini, panna acida';
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
        $newDish->ingredient = 'Melanzane, Carne macinata, Salsa besciamella, Patate, Pomodoro, Cipolla';
        $newDish->price = 17.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxI1Ep07A9BUQUX4s4th3guQT9TtY9du2BJQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 22;
        $newDish->name = 'Souvlaki';
        $newDish->ingredient = 'Maiale alla griglia, pane pita, tzatziki, pomodoro, cipolla';
        $newDish->price = 12.00;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYCVJlcGocHWQPBU0d0jEfDScNjipqb78OlQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 22;
        $newDish->name = 'Spanakopita';
        $newDish->ingredient = 'Pasta fillo, spinaci, formaggio feta, cipolla, uova';
        $newDish->price = 8.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQp0B2JerzfqRUxJ44WGZwBqu2H0eC9s7nEfQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 22;
        $newDish->name = 'Gyros';
        $newDish->ingredient = 'Pane pita, pollo, tzatziki, pomodoro, cipolla, patatine fritte';
        $newDish->price = 10.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZ7EXyv9dQwdOZtaD5Scx91OO3fcTZ-VvZNw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 22;
        $newDish->name = 'Greek Salad';
        $newDish->ingredient = 'Pomodoro, Cetriolo, Cipolla rossa, Formaggio feta, Olive, Olio';
        $newDish->price = 9.90;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQuE-ozL-Dm8BQlittzmktCP-dujc2TqEVBw&s';
        $newDish->save();

        // Creazione di piatti messicani e spagnoli

        $newDish = new Dish();
        $newDish->restaurant_id = 23;
        $newDish->name = 'Tacos al Pastor';
        $newDish->ingredient = 'Tortilla di mais, maiale marinato, ananas, cipolla, coriandolo, salsa';
        $newDish->price = 8.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBSyEazO9kr9xIwZ35ZptfDK81j6pN0EBPTw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 23;
        $newDish->name = 'Paella Valenciana';
        $newDish->ingredient = 'Riso, Pollo, Coniglio, Fagiolini, Zafferano, Olio';
        $newDish->price = 25.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR24c5BzZnC9zRc-LR980gyfzFgR4pvkbBQBQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 23;
        $newDish->name = 'Chiles Rellenos';
        $newDish->ingredient = 'Peperoni poblano, formaggio, salsa di pomodoro, carne macinata, riso, fagioli';
        $newDish->price = 14.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRx8sCpdwWrpgq7ikaizoAvI0TbpL5zO5peLw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 23;
        $newDish->name = 'Gazpacho';
        $newDish->ingredient = 'Pomodori, Cetrioli, Peperoni, Aglio, Olio, Aceto';
        $newDish->price = 9.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKYaAafiHmlzc4f5_oDOmwOcFDyX8Bg-FLEQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 23;
        $newDish->name = 'Enchiladas Verdes';
        $newDish->ingredient = 'Tortillas di mais, Pollo, Salsa verde, Panna acida, Formaggio, Cipolla';
        $newDish->price = 12.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFhDF1G4wp0J90BQb9rXdFID6ih17YejbOtA&s';
        $newDish->save();

        // Creazione dei piatti per Pequeño Atypical Tapas Bar

        $newDish = new Dish();
        $newDish->restaurant_id = 24;
        $newDish->name = 'Gambas al Ajillo';
        $newDish->ingredient = 'Gamberetti, Aglio, Olio, Fiocchi di peperoncino rosso, Prezzemolo';
        $newDish->price = 15.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWK4cE5-CtfjlbrohdAUwliBE2mMtcgmWJEg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 24;
        $newDish->name = 'Patatas Bravas';
        $newDish->ingredient = 'Patate, salsa di pomodoro, aglio, paprika, olio';
        $newDish->price = 10.00;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzfwNTk2JticBIXN3dqa6Sscb6gvNAz2rozg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 24;
        $newDish->name = 'Chorizo al Vino';
        $newDish->ingredient = 'Salsiccia di chorizo, vino rosso, aglio, cipolle, olio';
        $newDish->price = 12.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxw-qyc2F7clm6R9wLejESAYgi49Tgr-Wk5w&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 24;
        $newDish->name = 'Croquetas de Jamón';
        $newDish->ingredient = 'Prosciutto, Farina, Latte, Burro, Pangrattato';
        $newDish->price = 14.00;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0bE_cI_7y3wbucnO3EHNNvMDX0qAn0fvmWw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 24;
        $newDish->name = 'Pulpo a la Gallega';
        $newDish->ingredient = 'Polpo, Paprika, Olio, Sale marino, Patate';
        $newDish->price = 18.00;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbmrzGGfG8XJ3-Rqcbq_1gHrkMuU4uQFx7dQ&s';
        $newDish->save();

        // Creazione dei piatti peruviani

        $newDish = new Dish();
        $newDish->restaurant_id = 25;
        $newDish->name = 'Ceviche de Corvina';
        $newDish->ingredient = 'Pesce corvina, succo di lime, cipolle rosse, coriandolo, peperoncini, patate dolci, mais';
        $newDish->price = 18.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSt1yllwv1zQVvqmmD1xQqr9_huhuzzQ9FBtA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 25;
        $newDish->name = 'Tiradito';
        $newDish->ingredient = 'Pesce crudo, succo di lime, aji amarillo, aglio, coriandolo, cipolle rosse, patate dolci, mais';
        $newDish->price = 19.00;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2pxlZPwaA2KvdiHTOKz4TZz-0QyOAt_uonA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 25;
        $newDish->name = 'Causa Rellena de Atún';
        $newDish->ingredient = 'Patate gialle, tonno, succo di lime, aji amarillo, maionese, avocado, olive';
        $newDish->price = 17.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT747sPhHVj9tqQbtxGGQoRrCwanDQ-Ne2hCQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 25;
        $newDish->name = 'Pescado a la Chorillana';
        $newDish->ingredient = 'Filetti di pesce, pomodori, cipolle, aglio, aji amarillo, vino bianco, coriandolo';
        $newDish->price = 20.00;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1NG1uQ9RYP0zy-NU1SWUT9sEOyAZ-_Vri8Q&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 25;
        $newDish->name = 'Arroz con Mariscos';
        $newDish->ingredient = 'Riso, Frutti di mare misti, Pomodori, Peperoni rossi, Piselli, Aglio, Coriandolo, Vino bianco';
        $newDish->price = 21.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNhuYe1o8uBlTqiKYSAGocH-VMOCPGH2bXcg&s';
        $newDish->save();

        // Creazione dei piatti di sushi italiano

        $newDish = new Dish();
        $newDish->restaurant_id = 26;
        $newDish->name = 'Sushi Roll alla Caprese';
        $newDish->ingredient = 'Salmone, Mozzarella, Pomodoro, Basilico, Olio';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhw_O3wzoTXg2MR9E43DjIOBj-r58QtkzO5A&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 26;
        $newDish->name = 'Sushi Roll al Prosciutto';
        $newDish->ingredient = 'Prosciutto, Cetriolo, Formaggio cremoso, Avocado';
        $newDish->price = 16.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTy_5NOHam9l0O648aVCUkuKUr7S7Ifzvqluw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 26;
        $newDish->name = 'Sushi Roll alla Carbonara';
        $newDish->ingredient = 'Tonno, Parmigiano Reggiano, Uovo, Pepe Nero';
        $newDish->price = 17.25;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStzRghch6Yic-mJckuVi6CHzd0oB1N5PwBmg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 26;
        $newDish->name = 'Sushi Roll al Pesto';
        $newDish->ingredient = 'Gamberetti, pesto, basilico, pinoli';
        $newDish->price = 18.00;
        $newDish->availability = true;
        $newDish->image = 'https://media-cdn.tripadvisor.com/media/photo-s/0e/41/35/27/sushi-con-pesto-alla.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 26;
        $newDish->name = 'Sushi Roll al Gorgonzola';
        $newDish->ingredient = 'Granchio, formaggio Gorgonzola, noci, fette di pera';
        $newDish->price = 19.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTe4jlBwP8jLmSJh1vZOvbHJjmxOyxBgHM68Q&s';
        $newDish->save();

        // Creazione dei piatti di poke

        $newDish = new Dish();
        $newDish->restaurant_id = 27;
        $newDish->name = 'Poke Bowl Classico';
        $newDish->ingredient = 'Tonno pinna gialla, riso, avocado, cetriolo, alghe, salsa di soia';
        $newDish->price = 15.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWip2cdJHpXEsOLaPi_C4qa0H_qb9xEeZCbw&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 27;
        $newDish->name = 'Poke Bowl Salmon';
        $newDish->ingredient = 'Salmone, Riso, Edamame, Mango, Avocado, Maionese piccante';
        $newDish->price = 17.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRd-51p88O9rdJPYThcEka-T2LLpWCx0tK-FA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 27;
        $newDish->name = 'Poke Bowl Veggie';
        $newDish->ingredient = 'Tofu, Riso, Alghe, Cetriolo, Carote, Semi di sesamo';
        $newDish->price = 14.25;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYfGAUQQCA4EtpKU1E9HMSzqD_3BtTCkdVGg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 27;
        $newDish->name = 'Poke Bowl Spicy Tuna';
        $newDish->ingredient = 'Tonno piccante, Riso, Avocado, Jalapenos, Alghe, Salsa di soia';
        $newDish->price = 16.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGWaY8cjZp-BTZOyKgjBPaOoCHR9m0noLh8A&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 27;
        $newDish->name = 'Poke Bowl Tropical';
        $newDish->ingredient = 'Tonno pinna gialla, riso, ananas, avocado, cipolla rossa, coriandolo';
        $newDish->price = 18.00;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOcd75FLhxXAzdNl-FRAjgBUug6rql3nbFzg&s';
        $newDish->save();

        // Creazione dei piatti di cucina tedesca

        $newDish = new Dish();
        $newDish->restaurant_id = 28;
        $newDish->name = 'Wiener Schnitzel';
        $newDish->ingredient = 'Vitello, Farina, Uova, Pangrattato, Limone, Prezzemolo';
        $newDish->price = 24.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREY5c6fRXjFbrUy7qoIrlvDGLtTHtfjHn0OQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 28;
        $newDish->name = 'Bratwurst';
        $newDish->ingredient = 'Salsiccia di maiale, semi di cumino, aglio, sale, pepe';
        $newDish->price = 12.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAWvGwnDr8r0YDXApdt8aQnZYnDgTndAilCQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 28;
        $newDish->name = 'Sauerkraut';
        $newDish->ingredient = 'Cavolo fermentato, Semi di cumino, Foglie di alloro';
        $newDish->price = 8.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2m1VQEtjCI4tyAhaTdfdksM4daS6N5RBx3Q&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 28;
        $newDish->name = 'Kartoffelsalat';
        $newDish->ingredient = 'Patate, aceto, olio, senape, cipolle, sottaceti';
        $newDish->price = 9.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSm8rYqmon1wLRNuCwIO2uwr9MrWNcBbZtGpQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 28;
        $newDish->name = 'Apfelstrudel';
        $newDish->ingredient = 'Mele, Pasta sfoglia, Zucchero, Cannella, Uvetta';
        $newDish->price = 7.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReButNe1EuKJJdc3fjhAyMyJwSnp6P_cRoVQ&s';
        $newDish->save();

        // Creazione dei piatti argentini

        $newDish = new Dish();
        $newDish->restaurant_id = 29;
        $newDish->name = 'Asado';
        $newDish->ingredient = 'Costine di manzo, Chorizo, Morcilla, Chimichurri';
        $newDish->price = 29.99;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaY-z96ag9xT8xBBhudC621tIucf7l__8bWA&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 29;
        $newDish->name = 'Empanadas';
        $newDish->ingredient = 'Pasta sfoglia, Carne macinata, Cipolle, Uova, Olive, Spezie';
        $newDish->price = 12.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSthVrVKTyru-rCxg1KRr4DpC4nTzBXhBLaPQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 29;
        $newDish->name = 'Milanesa a la Napolitana';
        $newDish->ingredient = 'Bistecca di manzo impanata, salsa di pomodoro, prosciutto, formaggio';
        $newDish->price = 18.75;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaCCQggbnCDFhxhhEdx61zo97tP2fvkpUNDQ&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 29;
        $newDish->name = 'Provoleta';
        $newDish->ingredient = 'Formaggio provolone, olio, origano, fiocchi di peperoncino';
        $newDish->price = 14.00;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmi6wTN1PSDDUxYwQuVdDIFDpTKRo3kZqFXg&s';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 29;
        $newDish->name = 'Dulce de Leche';
        $newDish->ingredient = 'Crema spalmabile al caramello al latte dolce';
        $newDish->price = 8.50;
        $newDish->availability = true;
        $newDish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYdVq2cZjU_MaNPywVhqZrknS07q8_mjggCg&s';
        $newDish->save();

        // Assunta madre
        $newDish = new Dish();
        $newDish->restaurant_id = 30;
        $newDish->name = 'Tartare bianca con avocado e lime';
        $newDish->ingredient = 'branzino, avocado, lime, cipolle';
        $newDish->price = 14.50;
        $newDish->availability = true;
        $newDish->image = 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/18/f8/ec/tartare-bianca-con-avocado.jpg?w=1200&h=-1&s=1';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 30;
        $newDish->name = 'Tartare di tonno';
        $newDish->ingredient = 'tonno, avocado, lime, cipolle';
        $newDish->price = 14.50;
        $newDish->availability = true;
        $newDish->image = 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/18/f8/98/tartare-di-tonno.jpg?w=1200&h=-1&s=1';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 30;
        $newDish->name = 'Tagliolini scampi e menta';
        $newDish->ingredient = 'pasta, scampi, menta, pane';
        $newDish->price = 12.50;
        $newDish->availability = true;
        $newDish->image = 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/18/f4/21/tagliolini-scampi-e-menta.jpg?w=1200&h=-1&s=1';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 30;
        $newDish->name = 'Polpette di spigola';
        $newDish->ingredient = 'spigola, pomodoro, basilico, pangrattato';
        $newDish->price = 9.90;
        $newDish->availability = true;
        $newDish->image = 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/18/f0/1c/le-famose-polpette-di.jpg?w=1200&h=-1&s=1';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 30;
        $newDish->name = 'Fritto misto';
        $newDish->ingredient = 'gamberetti, calamaro, bianchetti, acciughe';
        $newDish->price = 11.50;
        $newDish->availability = true;
        $newDish->image = 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/18/f2/57/il-nostro-fritto.jpg?w=1200&h=-1&s=1';
        $newDish->save();

        // Bentu e soi
        $newDish = new Dish();
        $newDish->restaurant_id = 31;
        $newDish->name = 'Ciuppino';
        $newDish->ingredient = 'pesce misto e crostacei, brodo di pesce, aglio, prezzemolo';
        $newDish->price = 14.50;
        $newDish->availability = true;
        $newDish->image = 'https://www.vitalchoice.com/blog/wp-content/uploads/2023/03/Cioppino-recipe.jpeg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 31;
        $newDish->name = 'Burrida';
        $newDish->ingredient = 'pescecane , aglio, pomodoro, capperi, prezzemolo';
        $newDish->price = 14.50;
        $newDish->availability = true;
        $newDish->image = 'https://media-assets.lacucinaitaliana.it/photos/620fbeaed274969b4db75f42/1:1/w_2560%2Cc_limit/burrida-di-pesce-fresco-liguria-la-versione-tradizionale1.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 31;
        $newDish->name = 'Malloreddus di pesce';
        $newDish->ingredient = 'malloreddus, cozze, cipolla, prezzemolo';
        $newDish->price = 12.50;
        $newDish->availability = true;
        $newDish->image = 'https://media-assets.lacucinaitaliana.it/photos/61fd3a6176fbfc8fddc03767/4:3/w_800,h_600,c_limit/Gnocchetti-sardi-con-vongole-e-cozze1.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 31;
        $newDish->name = 'Fregola con Arselle';
        $newDish->ingredient = 'fregola, arselle , arselle , aglio';
        $newDish->price = 9.90;
        $newDish->availability = true;
        $newDish->image = 'https://images.dissapore.com/wp-content/uploads/2022/06/shutterstock_1800987337.jpg?width=1280&height=720&quality=50';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 31;
        $newDish->name = 'Seadas';
        $newDish->ingredient = 'farina di semola , burro, una scorza di limone o arancia, miele sardo';
        $newDish->price = 11.50;
        $newDish->availability = true;
        $newDish->image = 'https://www.viaggioff.it/wp-content/uploads/2022/07/seadas-sardegna.jpg';
        $newDish->save();

        //Moci oriental

        $newDish = new Dish();
        $newDish->restaurant_id = 32;
        $newDish->name = 'Nero Seppia Gyoza';
        $newDish->ingredient = 'gamberi macinati totano e calamari tagliati, castagne d’acqua zenzero, cipollato, nero seppia e bambù';
        $newDish->price = 14.50;
        $newDish->availability = true;
        $newDish->image = 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/29/87/66/df/moci-roma.jpg?w=1100&h=-1&s=1';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 32;
        $newDish->name = 'Yaki Soba';
        $newDish->ingredient = 'spaghetti di grano saraceno con calamari, gamberi e uova e verdure';
        $newDish->price = 14.50;
        $newDish->availability = true;
        $newDish->image = 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/29/87/66/c1/moci-roma.jpg?w=1100&h=-1&s=1';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 32;
        $newDish->name = 'Manzo alla Piastra';
        $newDish->ingredient = 'carne di manzo, semi di sesamo';
        $newDish->price = 12.50;
        $newDish->availability = true;
        $newDish->image = 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/20/ed/97/37/riscoprite-i-veri-sapori.jpg?w=1200&h=-1&s=1';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 32;
        $newDish->name = 'Manzo Piccante';
        $newDish->ingredient = 'manzo con peperoni, cipolla e arachidi';
        $newDish->price = 9.90;
        $newDish->availability = true;
        $newDish->image = 'https://msgimages.s3.eu-central-1.amazonaws.com/5SHe5MrkYOrD7kZQ0LuY9MNAQDCtI3bt/5SHe5MrkYOrD7kZQ0LuY9MNAQDCtI3bt/481da8002665a754cd32186a135c3c299c94d21acd6c89b4355f1e63cd9d5241dc4e77e6fa87785a.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 32;
        $newDish->name = 'Ebi Yaki';
        $newDish->ingredient = 'spiedini di gamberi glassati in salsa teriyaki';
        $newDish->price = 11.50;
        $newDish->availability = true;
        $newDish->image = 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/20/ed/86/54/riscoprite-i-veri-sapori.jpg?w=1200&h=-1&s=1';
        $newDish->save();

        //Wang Xiang Lou

        $newDish = new Dish();
        $newDish->restaurant_id = 33;
        $newDish->name = 'Pollo Kung Pao';
        $newDish->ingredient = "petto di pollo, aglio, cipolla, arachidi, salsa di soia, riso";
        $newDish->price = 14.50;
        $newDish->availability = true;
        $newDish->image = 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/188353BD-9C50-4D76-86E6-A45F525119CF/Derivates/71FB3CEC-4C97-479C-8D6B-354B4EFB513E.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 33;
        $newDish->name = 'Manzo e broccoli saltati in padella';
        $newDish->ingredient = 'manzo, broccoli, salsa di ostriche, salsa di soia, aglio, cipolla  ';
        $newDish->price = 14.50;
        $newDish->availability = true;
        $newDish->image = 'https://recipeimages.migros.ch/crop/v-w-600-h-300-a-center_center/4221f8e76a0b3e5dc928fdecab010f467a0d1839/straccetti-di-manzo-con-broccoli-0-16-9.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 33;
        $newDish->name = 'Zuppa di wonton';
        $newDish->ingredient = 'wonton, carne di maiale macinata, cavolo, cipollotti';
        $newDish->price = 12.50;
        $newDish->availability = true;
        $newDish->image = 'https://www.giallozafferano.it/images/238-23853/Wonton-soup_450x300.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 33;
        $newDish->name = 'Uovo Foo Young';
        $newDish->ingredient = 'uova, riso, cipollotti, salsa di ostriche, salsa di soia, funghi';
        $newDish->price = 9.90;
        $newDish->availability = true;
        $newDish->image = 'https://thumbs.dreamstime.com/z/l-uovo-cinese-foo-young-dell-omelette-%C3%A8-servito-con-il-primo-piano-del-riso-vista-superiore-orizzontale-su-un-piatto-da-sopra-148752429.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 33;
        $newDish->name = 'Maiale in agrodolce';
        $newDish->ingredient = 'maiale, cipolla, peperoni, ketchup, zucchero, ananas,';
        $newDish->price = 11.50;
        $newDish->availability = true;
        $newDish->image = 'https://www.giallozafferano.it/images/236-23668/Maiale-in-agrodolce_450x300.jpg';
        $newDish->save();

          //Gainn
        $newDish = new Dish();
        $newDish->restaurant_id = 34;
        $newDish->name = 'Bibimbap';
        $newDish->ingredient = "riso, zucchine, carote, ribeye, tofu fritto, kimchi, uova";
        $newDish->price = 13.50;
        $newDish->availability = true;
        $newDish->image = 'https://www.seriouseats.com/thmb/9gYczIvS4R7ZvK19ahBns0xOG_k=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/20230113-Bibimbap-AmandaSuarez-hero-331e5e1ffa5b400fbb684e59b14d57c1.JPG';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 34;
        $newDish->name = 'Japchae (spaghetti di riso saltati in padella)';
        $newDish->ingredient = 'spaghetti di vetro (dangmyeon), cipolla, ribeye, salsa di soia';
        $newDish->price = 11.90;
        $newDish->availability = true;
        $newDish->image = 'https://blog.giallozafferano.it/viaggiandomangiando/wp-content/uploads/2021/07/Japchae-scaled.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 34;
        $newDish->name = ' Bulgogi (manzo marinato)';
        $newDish->ingredient = 'ribeye, Gochujang (pasta di peperoncino coreano), salsa di soia, cipolla, aglio';
        $newDish->price = 11.50;
        $newDish->availability = true;
        $newDish->image = 'https://img.hellofresh.com/f_auto,fl_lossy,q_auto,w_1200/hellofresh_s3/image/HF220826_R16_W42_IT_IT125-1_KB_Main_low-e36d4382.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 34;
        $newDish->name = 'Kimbap (sushi in stile coreano)';
        $newDish->ingredient = 'cetriolo, carota, spinaci, manzo, Gochujang (pasta di peperoncino coreano), riso';
        $newDish->price = 13.90;
        $newDish->availability = true;
        $newDish->image = 'https://c8.alamy.com/compit/2g5h1b6/involtini-kimbap-di-sushi-in-stile-coreano-e-giapponese-2g5h1b6.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 34;
        $newDish->name = 'Tteokbokki (dolci di riso piccanti)';
        $newDish->ingredient = 'gallette di riso (tteok), uova sode, Gochujang, cipolle verdi';
        $newDish->price = 10.50;
        $newDish->availability = true;
        $newDish->image = 'https://cdn.ilclubdellericette.it/wp-content/uploads/2021/10/tteokbokki-gnocchi-di-riso-coreani-1280x720.jpg';
        $newDish->save();

            //Galbi34
        $newDish = new Dish();
        $newDish->restaurant_id = 35;
        $newDish->name = 'Naengmyeon (spaghetti freddi)';
        $newDish->ingredient = "spaghetti di grano saraceno, Gochujang (pasta di peperoncino coreana), cetriolo , pera, uovo sodo";
        $newDish->price = 8.90;
        $newDish->availability = true;
        $newDish->image = 'https://cf.creatrip.com/original/spot/13049/06ll0hupz6k0esz8w3gsg2nvocs2tth7.jpg?d=1600x900&q=75&f=webp';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 35;
        $newDish->name = 'Bibimbap';
        $newDish->ingredient = "riso, zucchine, carote, ribeye, tofu fritto, kimchi, uova";
        $newDish->price = 11.50;
        $newDish->availability = true;
        $newDish->image = 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/Korean.food-Bibimbap-02.jpg/800px-Korean.food-Bibimbap-02.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 35;
        $newDish->name = 'Bossam (Maiale avvolto)';
        $newDish->ingredient = 'pancetta di maiale, Gochujang (pasta di peperoncino coreana), riso, broccoli';
        $newDish->price = 10.90;
        $newDish->availability = true;
        $newDish->image = 'https://img.freepik.com/foto-premium/bossam-ventre-di-maiale-al-vapore-avvolto-in-lattuga-con-vari-condimenti-tradizionale_921026-35067.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 35;
        $newDish->name = 'Doenjang Jjigae (stufato di pasta di soia fermentata)';
        $newDish->ingredient = 'doenjang (farina di soia fermentata coreana), Gochujang (pasta di peperoncino coreana), verdure ';
        $newDish->price = 8.90;
        $newDish->availability = true;
        $newDish->image = 'https://www.kimchiebasilico.it/wp-content/uploads/2015/09/dwenjang-and-rice.jpg';
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 35;
        $newDish->name = 'Mandu';
        $newDish->ingredient = 'cipollotti tritati, kimchi';
        $newDish->price = 7.50;
        $newDish->availability = true;
        $newDish->image = 'https://recipecontent.fooby.ch/18968_3-2_1920-1280.jpg';
        $newDish->save();
    }
}
