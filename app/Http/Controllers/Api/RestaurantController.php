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
    public function show($slug)
    {
        $restaurant = Restaurant::with(['types', 'dishes'])->where('slug', $slug)->first();

        if ($restaurant) {
            return response()->json([
                'success' => true,
                'restaurants' => $restaurant// Return an array with a single restaurant
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => "404 not found"
            ]);
        }
    }

    }

