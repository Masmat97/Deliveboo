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
            'name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/u',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'ingredient' => 'required|string|min:1|regex:/^[a-zA-Z0-9\s,]+$/u',
            'price' => 'required|numeric|min:0.01',
            'availability' => 'required|in:0,1',
        ], [
            'price.min' => 'The price must be greater than 0.',
            'image.max' => 'The image file cannot be larger than 2MB.',
            'name.required' => 'You must enter the name of the dish.',
            'name.regex' => 'The name can only contain letters and spaces.',
            'ingredient.required' => 'Please enter an ingredient.',
            'ingredient.min' => 'Please enter at least one ingredient.',
            'ingredient.regex' => 'Ingredient can only contain letters, numbers, and spaces.',
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
            'name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/u',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'ingredient' => 'required|string|min:1|regex:/^[a-zA-Z0-9\s,]+$/u',
            'price' => 'required|numeric|min:0.01',
            'availability' => 'required|in:0,1',
        ], [
            'price.min' => 'The price must be greater than 0.',
            'image.max' => 'The image file cannot be larger than 2MB.',
            'name.required' => 'You must enter the name of the dish.',
            'name.regex' => 'The name can only contain letters and spaces.',
            'ingredient.required' => 'Please enter an ingredient.',
            'ingredient.min' => 'Please enter at least one ingredient.',
            'ingredient.regex' => 'Ingredient can only contain letters, numbers, and spaces.',
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

        return redirect()->route('admin.dishes.index', $dish)->with('success', 'Dish updated successfully');
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
