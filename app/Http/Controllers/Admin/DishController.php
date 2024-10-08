<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dishes = Dish::where('restaurant_id', auth()->id())->get();
        $data = [
            'dishes' => $dishes,
        ];
        return view('admin.dishes.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dishes = Dish::where('restaurant_id', auth()->id())->get();
        $data = [
            'dishes' => $dishes,
        ];
        return view('admin.dishes.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Devi aver effettuato l accesso per creare un piatto');
        }
        $restaurant = Restaurant::where('user_id', auth()->id())->first();
        $data = $request->validate([
            'name' => 'required|string|max:255|min:3|regex:/^[a-zA-Z\s]+$/u',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'ingredient' => 'required|string|min:5|regex:/^[a-zA-Z0-9\s,]+$/u',
            'price' => 'required|numeric|min:0.01',
            'availability' => 'required|in:0,1',
        ], [
            'price.min' => 'Il prezzo deve essere maggiore di 0.',
            'image.max' => 'Il file immagine non può essere più grande di 2 MB.',
            'name.required' => 'Devi inserire il nome del piatto.',
            'name.regex' => 'Il nome può contenere solo lettere e spazi.',
            'ingredient.required' => 'Inserisci un ingrediente.',
            'ingredient.min' => 'Please enter at least one ingredient.',
            'ingredient.regex' => 'Può contenere solo lettere, numeri e spazi.',
        ]);

        if ($request->has('image')) {
            $image_path = Storage::put('images', $request->image);
            $data['image'] = $image_path;
        }

        $newDish = new Dish();
        $newDish->fill($data);
        $newDish->restaurant_id = $restaurant->id;
        $newDish->save();

        return redirect()->route('admin.dishes.index')->with('success', 'Piatto creato con successo');
    }
    /**
     * Display the specified resource.
     */
    public function show(Dish $dish)
    {
        $data =
            [
                'dish' => $dish,
            ];
        return view('admin.dishes.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dish $dish)
    {
        $authorizedRestaurantIds = Restaurant::where('user_id', auth()->id())->pluck('id');

        if (!$authorizedRestaurantIds->contains($dish->restaurant_id)) {

            abort(403); // Non autorizzato a aggiornare questo piatto

        }

        return view('admin.dishes.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dish $dish)
    {



        $data = $request->validate([
            'name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/u',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'ingredient' => 'required|string|min:1|regex:/^[a-zA-Z0-9\s,]+$/u',
            'price' => 'required|numeric|min:0.01',
            'availability' => 'required|in:0,1',
        ], [
            'price.min' => 'Il prezzo deve essere maggiore di 0.',
            'image.max' => 'Il file immagine non può essere più grande di 2 MB.',
            'name.required' => 'Devi inserire il nome del piatto.',
            'name.regex' => 'Il nome può contenere solo lettere e spazi.',
            'ingredient.required' => 'Inserisci un ingrediente.',
            'ingredient.min' => 'Inserisci almeno un ingrediente.',
            'ingredient.regex' => 'Può contenere solo lettere, numeri e spazi.',
        ]);


        if ($request->has('image')) {
            $image_path = Storage::put('images', $request->image);
            $data['image'] = $image_path;

            if ($dish->image && !Str::startsWith($dish->image, 'http')) {
                Storage::delete($dish->image);
            }
        }

        $dish->fill($data);
        $dish->save();

        return redirect()->route('admin.dishes.index', $dish)->with('success', 'Piatto aggiornato con successo');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $dish)
    {
        $dish->delete();
        return redirect()->route('admin.dishes.index');
    }
}
