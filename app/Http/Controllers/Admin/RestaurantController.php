<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // In questo modo prende solo i ristoranti dell'utente autenticato
        $restaurants = Restaurant::where('user_id', auth()->id())->get();

        $data = [
            "restaurants" => $restaurants
        ];

        return view('admin.restaurants.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return redirect()->route('admin.restaurants.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        if ($restaurant->user_id != auth()->id()) {
            abort(403); // Non autorizzato a vedere questo ristorante
        }

        return view("admin.restaurants.show", ['restaurant' => $restaurant]);
    }

    public function edit(Restaurant $restaurant)
    {
        if ($restaurant->user_id != auth()->id()) {
            abort(403); // Non autorizzato a modificare questo ristorante
        }

        return view('admin.restaurants.edit', ['restaurant' => $restaurant]);
    }

    public function update(Request $request, Restaurant $restaurant)
    {
        if ($restaurant->user_id != auth()->id()) {
            abort(403); // Non autorizzato a aggiornare questo ristorante
        }

        // Aggiorna il ristorante qui
        $restaurant->update($request->all());
        return redirect()->route('admin.restaurants.index');
    }

    public function destroy(Restaurant $restaurant)
    {
        if ($restaurant->user_id != auth()->id()) {
            abort(403); // Non autorizzato a eliminare questo ristorante
        }

        $restaurant->delete();
        return redirect()->route('admin.restaurants.index');
    }
}