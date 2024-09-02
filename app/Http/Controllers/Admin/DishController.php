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
    public function index()
    {
        $dishes = Dish::where('restaurant_id',auth()-> id())->get();
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
        $dishes = Dish::where('restaurant_id',auth()-> id())->get();
        $data = [
            'dishes' => $dishes,
        ];
        return view('admin.dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required | min:5 |max:50',
                'image' => 'required |image',
                'ingredient' => 'required |min:10',
                'price' => 'required |numeric',
                'restaurant_id' => 'required',
            ]);
            // if($request->has('image')){
                //     $image_path = Storage::put('images', $request->image);
                //     $data['image'] = $image_path;
                // }

        $newDish = new Dish();
        $newDish->fill($data);
        $newDish->restaurant_id = $data['restaurant_id'];
        $newDish->save();
        return redirect()->route('admin.dishes.show', ['dishes'=> $newDish])->with('success', 'Dish created successfully');


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
