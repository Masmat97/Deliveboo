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
                    <td>€{{ number_format($order->total, 2) }}</td>
                    <td>
                        <ul>
                            @foreach($order->dishes as $dish)
                                <li>{{ $dish->name }} ({{ rand(1, 10) }})</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Piatti Casuali</h2>
    <table class="table table-hover" id="randomDishesTable">
        <thead>
            <tr>
                <th>Nome Piatto</th>
                <th>Prezzo (€)</th>
                <th>Quantità Casuale</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dishes->random(5) as $dish)
                <tr>
                    <td>{{ $dish->name }}</td>
                    <td>€{{ number_format($dish->price, 2) }}</td>
                    <td>{{ rand(1, 10) }}</td> <!-- Quantità generata casualmente -->
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
