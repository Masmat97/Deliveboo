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
     * Mostra solo i ristoranti che appartengono all'utente autenticato.
     */
    public function index()
    {
        $restaurants = Restaurant::where('user_id', Auth::id())->get();
        return view('admin.restaurants.index', ['restaurants' => $restaurants]);
    }

    /**
     * Prepara la vista per creare una nuova risorsa.
     * Passa una nuova istanza di Restaurant alla vista.
     */
    public function create()
    {
        $restaurant = new Restaurant();
        return view('admin.restaurants.create', ['restaurant' => $restaurant]);
    }

    /**
     * Conserva una nuova risorsa nello storage.
     * Assegna automaticamente il ristorante all'utente autenticato.
     */
    public function store(Request $request)
    {
        $restaurant = new Restaurant($request->all());
        $restaurant->user_id = Auth::id();
        $restaurant->save();
        return redirect()->route('admin.restaurants.index');
    }

    /**
     * Mostra una risorsa specifica dallo storage.
     * Accessibile solo dall'utente proprietario del ristorante.
     */
    public function show(Restaurant $restaurant)
    {
        if ($restaurant->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        return view('admin.restaurants.show', ['restaurant' => $restaurant]);
    }

    /**
     * Prepara la vista per modificare una risorsa esistente.
     * Accessibile solo dall'utente proprietario del ristorante.
     */
    public function edit(Restaurant $restaurant)
    {
        if ($restaurant->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        return view('admin.restaurants.edit', ['restaurant' => $restaurant]);
    }

    /**
     * Aggiorna una risorsa nello storage.
     * Accessibile solo dall'utente proprietario del ristorante.
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
     * Accessibile solo dall'utente proprietario del ristorante.
     */
    public function destroy(Restaurant $restaurant)
    {
        if ($restaurant->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        $restaurant->delete();
        return redirect()->route('admin.restaurants.index');
    }

    /**
     * Filtra i ristoranti per tipologia e ritorna i dati in formato JSON.
     */
    public function search(Request $request)
    {
        try {
            $typeId = $request->type;
            $restaurants = Restaurant::whereHas('types', function ($query) use ($typeId) {
                $query->where('types.id', $typeId);  // Qualifica il riferimento a 'id' con 'types.id'
            })->get();

            return response()->json($restaurants);
        } catch (\Exception $e) {
            \Log::error("Errore durante la ricerca dei ristoranti: " . $e->getMessage());
            return response()->json(['error' => 'Errore server'], 500);
        }
    }
}