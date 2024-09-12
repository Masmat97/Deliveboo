@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Statistiche degli Ordini</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Data</th>
                <th>Nome Cliente</th>
                <th>Totale (€)</th>
                <th>Piatti Ordinati (Quantità)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ordersDetails as $order)
                <tr>
                    <td>{{ $order->date }}</td>
                    <td>{{ $order->client_name }}</td>
                    <td>€{{ number_format($order->calculated_total, 2) }}</td>
                    <td>
                        <ul>
                            @foreach($order->dishes as $dish)
                                <li>{{ $dish->name }} ({{ $dish->pivot->quantity }} a €{{ number_format($dish->price, 2) }} ciascuno)</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
