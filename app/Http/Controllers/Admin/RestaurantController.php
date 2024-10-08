<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        // conta il numero di ristoranti associati all'utente attualmente autenticato
        $restaurantCount = Restaurant::where('user_id', auth()->id())->count();

        if ($restaurantCount == 0) {
            $types = Type::all();
            $data = [
                "types" => $types,
            ];
            return view('admin.restaurants.create', $data);
        } else {
            abort(403); // Non autorizzato a vedere questo ristorante
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $user = User::where('id', auth()->id())->first();

        $data = $request->validate(
            [
                'name' => 'required|min:4|max:50',
                'address' => 'required|min:5',
                'image' => 'required|image',
                'p_iva' => 'required|size:11|regex:/^IT[A-Z0-9]{9}$/',
                'types' => 'required|array|min:1',
            ]
        );

        if ($request->has('image')) {
            $image_path = Storage::put('images', $request->image);
            $data['image'] = $image_path;
        }

        $newRestaurant = new Restaurant();
        $newRestaurant->fill($data);
        $newRestaurant->user_id = $user->id;
        $newRestaurant->save();

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
