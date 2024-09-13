@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Statistiche degli Ordini</h1>
    <canvas id="myChart" width="300" height="200"></canvas>

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
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar', // Puoi scegliere altri tipi come 'line', 'pie', ecc.
        data: {
            labels: @json($ordersDetails->pluck('date')),
            datasets: [{
                label: 'Totale Vendite',
                data: @json($ordersDetails->pluck('calculated_total')),
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
@endsection
