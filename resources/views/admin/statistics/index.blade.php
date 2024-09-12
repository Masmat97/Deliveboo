@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Statistiche degli Ordini</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Data</th>
                <th>Nome Cliente</th>
                <th>Totale</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ordersDetails as $order)
                <tr>
                    <td>{{ $order->created_at->format('d/m/Y') }}</td>
                    <td>{{ $order->client_name }}</td>
                    <td>€{{ number_format($order->total, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
