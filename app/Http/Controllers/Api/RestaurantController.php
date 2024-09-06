<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function  index()
    {
        return response()->json([
            'success' => true,
            'restaurants' => Restaurant::with(['types', 'dishes'])->orderByDesc('id')->paginate(12)
        ]);
    }

    public function show($name)
    {
        $restaurants = Restaurant::with(['types', 'dishes'])->where('name', $name)->first();

        if ($restaurants) {
            return response()->json([
                'success' => true,
                'restaurants' => $restaurants
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => "404 not found"
            ]);
        }
        // Remove the dd() function as it's not needed here
    }
}
