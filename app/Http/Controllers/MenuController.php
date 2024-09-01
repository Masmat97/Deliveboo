<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function show(Restaurant $restaurant)
    {
        // Assicurati che il modello Restaurant abbia una relazione 'dishes' definita
        return view('menus.show', ['restaurant' => $restaurant, 'dishes' => $restaurant->dishes]);
    }
}