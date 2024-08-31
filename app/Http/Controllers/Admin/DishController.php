<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DishController extends Controller
{
    public function index()
    {
        $dishes = Dish::where('restaurant_id', Auth::user()->restaurant->id)->get();
        return view('admin.dishes.index', compact('dishes'));
    }

    public function create()
    {
        return view('admin.dishes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'visible' => 'required|boolean'
        ]);

        $dish = new Dish($request->all());
        $dish->restaurant_id = Auth::user()->restaurant->id;
        $dish->save();

        return redirect()->route('admin.dishes.index');
    }

    public function edit(Dish $dish)
    {
        $this->authorize('update', $dish);
        return view('admin.dishes.edit', compact('dish'));
    }

    public function update(Request $request, Dish $dish)
    {
        $this->authorize('update', $dish);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'visible' => 'required|boolean'
        ]);

        $dish->update($request->all());
        return redirect()->route('admin.dishes.index');
    }

    public function destroy(Dish $dish)
    {
        $this->authorize('delete', $dish);
        $dish->delete();
        return redirect()->route('admin.dishes.index');
    }
}