<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart', []);
        $total = array_reduce($cart, function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);
    
        // Aggiungi questo per il debug
        dd($cart, $total); // Visualizza i dati del carrello e il totale
    
        return view('cart.index', [
            'cart' => $cart,
            'total' => $total
        ]);
    }
    

    public function add(Request $request, Dish $dish)
    {
        // Recupera il carrello dalla sessione o inizializza un array vuoto
        $cart = Session::get('cart', []);

        // Aggiungi o aggiorna la quantità del piatto nel carrello
        if (isset($cart[$dish->id])) {
            $cart[$dish->id]['quantity'] += $request->quantity;
        } else {
            $cart[$dish->id] = [
                "name" => $dish->name,
                "quantity" => $request->quantity,
                "price" => $dish->price,
            ];
        }

        // Salva il carrello aggiornato nella sessione
        Session::put('cart', $cart);

        // Reindirizza alla pagina del carrello con un messaggio di successo
        return redirect()->route('cart.index')->with('success', 'Piatto aggiunto al carrello con successo!');
    }

    public function update(Request $request, $id)
    {
        // Recupera il carrello dalla sessione o inizializza un array vuoto
        $cart = Session::get('cart', []);

        // Aggiorna la quantità del piatto nel carrello
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            Session::put('cart', $cart);
        }

        // Reindirizza alla pagina del carrello con un messaggio di successo
        return redirect()->route('cart.index')->with('success', 'Carrello aggiornato con successo!');
    }

    public function remove($id)
    {
        // Recupera il carrello dalla sessione o inizializza un array vuoto
        $cart = Session::get('cart', []);

        // Rimuove il piatto dal carrello
        if (isset($cart[$id])) {
            unset($cart[$id]);
            Session::put('cart', $cart);
        }

        // Reindirizza alla pagina del carrello con un messaggio di successo
        return redirect()->route('cart.index')->with('success', 'Piatto rimosso dal carrello con successo!');
    }

    public function clear()
    {
        // Svuota il carrello
        Session::forget('cart');

        // Reindirizza alla pagina del carrello con un messaggio di successo
        return redirect()->route('cart.index')->with('success', 'Carrello svuotato con successo!');
    }

    public function getTotal()
    {
        $cart = Session::get('cart', []);
        $total = array_reduce($cart, function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);
        
        return response()->json(['total' => number_format($total, 2)]);
    }
}
