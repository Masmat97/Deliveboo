<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    /**
     * Mostra una lista di risorse.
     * Mostra solo i ristoranti che appartengono a quel utente.
     */
    public function index()
    {
        $restaurants = Restaurant::where('user_id', Auth::id())->get();
        return view('admin.restaurants.index', ['restaurants' => $restaurants]);
    }

    /**
     * Creare una nuova risorsa.
     * Questo nuovo ristorante apparterrà a quell'utente che ha eseguito il log in.
     */
    public function create()
    {
        return view('admin.restaurants.create');
    }

    /**
     * Conserva una nuova risorsa nello storage.
     * Assegna automaticamente il ristorante a quel utente che ha eseguito il log in.
     */
    public function store(Request $request)
    {
        $restaurant = new Restaurant($request->all());
        $restaurant->user_id = Auth::id(); // Set the owner of the restaurant
        $restaurant->save();
        return redirect()->route('admin.restaurants.index');
    }

    /**
     * Mostra una risorsa dallo storage.
     * Lo mostra solo all'utente autenticato con il log in.
     */
    public function show(Restaurant $restaurant)
    {
        if ($restaurant->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        return view('admin.restaurants.show', ['restaurant' => $restaurant]);
    }

    /**
     * Può modificare una risorsa dallo storage.
     * Il permesso è unicamente del utente che ha fatto il log in.
     */
    public function edit(Restaurant $restaurant)
    {
        if ($restaurant->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        return view('admin.restaurants.edit', ['restaurant' => $restaurant]);
    }

    /**
     * Aggiorna una risorsa dallo storage.
     * Il permesso è unicamente del utente che ha fatto il log in.
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        if ($restaurant->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        $restaurant->update($request->all());
        return redirect()->route('admin.restaurants.index');
    }

    /**
     * Rimuove una risorsa dallo storage.
     * Il permesso è unicamente del utente che ha fatto il log in.
     */
    public function destroy(Restaurant $restaurant)
    {
        if ($restaurant->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        $restaurant->delete();
        return redirect()->route('admin.restaurants.index');
    }
}