<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use App\Models\Type;
use App\Models\Restaurant;

class RegisteredUserController extends Controller
{
    public function create()
    {
        $types = Type::all(); // assuming you have a Type model
        return view('auth.register', ['types' => $types]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'name' => 'required|string',
            'address' => 'required|string',
            'p_iva' => 'required|string|size:11',
            'image' => 'required|image',
            'types' => 'required|array',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new user
        $user = new User();
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->name = $request->input('name'); // Add this line
        $user->save();

        // Create a new restaurant
        $restaurant = new Restaurant();
        $restaurant->name = $request->input('name');
        $restaurant->address = $request->input('address');
        $restaurant->p_iva = $request->input('p_iva');
        $restaurant->image = $request->file('image');
        $restaurant->user_id = $user->id;
        $restaurant->save();

        // Associate types with the restaurant
        $restaurant->types()->sync($request->input('types'));

        return redirect()->route('admin.restaurants.index')->with('success', 'Restaurant created successfully!');
    }
}
