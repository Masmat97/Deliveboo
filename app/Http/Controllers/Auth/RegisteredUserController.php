<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Type;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $types = Type::all(); // assuming you have a Type model
        return view('auth.register', ['types' => $types]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                function ($attribute, $value, $fail) {
                    $parts = explode('@', $value);
                    $domain = $parts[1];
                    if (!str_contains($domain, '.')) {
                        $fail('L\'email deve avere un\'estensione (ad esempio, .com, .it, ecc.)');
                    }
                },
                'unique:' . User::class,
            ],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'address' => 'required|string|min:5',
            'image' => 'required|image',
            'p_iva' => 'required|size:11|regex:/^IT[A-Z0-9]{9}$/',
            'types' => 'required|array|min:1',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($request->has('image')) {
            $image_path = Storage::put('images', $request->image);
        }

        $restaurant = new Restaurant();
        $restaurant->name = $request->input('name');
        $restaurant->address = $request->input('address');
        $restaurant->p_iva = $request->input('p_iva');
        $restaurant->image = $image_path;
        $restaurant->user_id = $user->id;
        $restaurant->save();

        // Associate types with the restaurant
        $restaurant->types()->sync($request->input('types'));

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
