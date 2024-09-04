<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function  index()
    {
        return response()->json([
            'success' => true,
            'types' => Type::all()
        ]);
    }

    public function show($type)
    {
        $typeInstance = Type::where('name', $type)->first();
        if (!$typeInstance) {
            return response()->json([
                'success' => false,
                'message' => 'Type not found'
            ], 404);
        }
        $restaurants = Restaurant::whereHas('types', function ($query) use ($type) {
            $query->where('name', $type);
        })->get();
        return response()->json([
            'success' => true,
            'restaurants' => $restaurants
        ]);
    }
}
