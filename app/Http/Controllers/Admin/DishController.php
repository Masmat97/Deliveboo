<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $restaurant_id = $request->user()->restaurant_id;
        $dishes = Dish::where('restaurant_id', $restaurant_id)->get();
        return view('admin.dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newDish = new Dish();
        $newDish->restaurant_id = $request->user()->restaurant_id;
        $newDish->name = $request->input('name');
        $newDish->ingredient = $request->input('ingredient');
        $newDish->price = $request->input('price');
        $newDish->availability = $request->input('availability');
        $newDish->image = $request->input('image');
        $newDish->save();
        return redirect()->route('admin.dishes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dish $dish)
    {
        return view('admin.dishes.show', compact('dish'));
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
        $dish->name = $request->input('name');
        $dish->ingredient = $request->input('ingredient');
        $dish->price = $request->input('price');
        $dish->availability = $request->input('availability');
        $dish->image = $request->input('image');
        $dish->save();
        return redirect()->route('admin.dishes.index');
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
