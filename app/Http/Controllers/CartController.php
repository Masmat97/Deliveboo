<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;

class CartController extends Controller
{
    public function add(Request $request, $id)
    {
        $dish = Dish::findOrFail($id);
        // Assumendo che il frontend invii la quantità
        $quantity = $request->quantity;

        return response()->json([
            'id' => $dish->id,
            'name' => $dish->name,
            'quantity' => $quantity,
            'price' => $dish->price,
            'message' => 'Piatto aggiunto al carrello con successo!'
        ]);
    }

    public function update(Request $request, $id)
    {
        $quantity = $request->quantity;
        $dish = Dish::findOrFail($id);

        return response()->json([
            'id' => $dish->id,
            'name' => $dish->name,
            'quantity' => $quantity,
            'price' => $dish->price,
            'message' => 'Carrello aggiornato con successo!'
        ]);
    }

    public function remove($id)
    {
        $dish = Dish::findOrFail($id);

        return response()->json([
            'id' => $dish->id,
            'message' => 'Piatto rimosso dal carrello con successo!'
        ]);
    }

    public function clear()
    {
        return response()->json(['message' => 'Carrello svuotato con successo!']);
    }
}
