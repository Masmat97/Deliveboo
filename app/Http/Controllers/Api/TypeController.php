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

    public function show(Request $request)
    {
        $types = explode(',', $request->input('types')); // Convert string to array

        if (!$types) {
            return response()->json([
                'success' => false,
                'message' => 'No types provided'
            ], 400);
        }

        $restaurants = Restaurant::with(['types', 'dishes'])->where(function ($query) use ($types) {
            foreach ($types as $type) {
                $query->whereHas('types', function ($subQuery) use ($type) {
                    $subQuery->where('name', $type);
                });
            }
        })->get();

        return response()->json([
            'success' => true,
            'restaurants' => $restaurants
        ]);
    }
}
