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
            return redirect()->route('login')->with('error', 'You must be logged in to create a dish');
        }
        $restaurant = Restaurant::where('user_id', auth()->id())->first();
        $data = $request->validate([
            'name' => 'required | min:5 |max:50',
            'ingredient' => 'required |min:10',
            'price' => 'required |numeric',
            'availability' => 'required',
            'image' => 'required |image',
        ]);

        if ($request->has('image')) {
            $image_path = Storage::put('images', $request->image);
            $data['image'] = $image_path;
        }

        $newDish = new Dish();
        $newDish->fill($data);
        $newDish->restaurant_id = $restaurant->id;
        $newDish->save();

        return redirect()->route('admin.dishes.index')->with('success', 'Dish created successfully');
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
        return view('admin.dishes.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dish $dish)
    {
        $data = $request->validate([
            'name' => 'required | min:5 |max:50',
            'ingredient' => 'required |min:10',
            'price' => 'required |numeric',
            'availability' => 'required',
            'image' => 'nullable|image',
        ]);

        if ($request->has('image')) {
            $image_path = Storage::put('images', $request->image);
            $data['image'] = $image_path;
        }

        $dish->fill($data);
        $dish->save();


        return redirect()->route('admin.dishes.index', $dish);
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
