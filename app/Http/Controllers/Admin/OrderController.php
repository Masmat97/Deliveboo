<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // Funzione per visualizzare la lista degli ordini ricevuti
    public function index()
    {
        // Recupera solo gli ordini del ristorante associato all'utente autenticato
        $orders = Order::with(['dishes' => function ($query) {

            $query->where('restaurant_id', Auth::user()->restaurant->id);
        }])
            ->with('dishes') // Carica i dettagli degli utenti e dei piatti
            ->orderBy('created_at', 'desc') // Ordina per data di creazione
            ->get();

        return view('admin.orders.index', compact('orders'));
    }

    // Funzione per aggiornare lo stato dell'ordine
    public function updateStatus(Order $order, $status)
    {
        $this->authorize('update', $order); // Autorizza solo se l'utente è proprietario del ristorante

        $order->status = $status;
        $order->save();

        return redirect()->route('admin.orders.index')->with('success', 'Stato dell ordine aggiornato con successo');
    }
}
