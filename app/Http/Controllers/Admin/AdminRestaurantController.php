<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class AdminRestaurantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Mostra tutti i ristoranti dell'utente autenticato
    public function index()
    {
        $restaurants = Restaurant::where('user_id', auth()->id())->get();
        return response()->json($restaurants);
    }

    // Mostra un singolo ristorante
    public function show(Restaurant $restaurant)
    {
        $this->authorize('view', $restaurant);
        return response()->json($restaurant);
    }

    // Crea un nuovo ristorante
    public function store(Request $request)
    {
        $this->authorize('create', Restaurant::class);
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            // altri campi validati qui
        ]);

        $restaurant = new Restaurant($request->all());
        $restaurant->user_id = auth()->id();
        $restaurant->save();

        return response()->json($restaurant, 201);
    }

    // Aggiorna un ristorante esistente
    public function update(Request $request, Restaurant $restaurant)
    {
        $this->authorize('update', $restaurant);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            // altri campi validati qui
        ]);

        $restaurant->update($request->all());

        return response()->json($restaurant);
    }

    // Elimina un ristorante
    public function destroy(Restaurant $restaurant)
    {
        $this->authorize('delete', $restaurant);

        $restaurant->delete();

        return response()->json(null, 204); // Nessun contenuto da restituire
    }
}
