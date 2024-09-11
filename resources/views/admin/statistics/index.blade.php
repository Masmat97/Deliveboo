
@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1>Statistiche degli Ordini</h1>
    <div class="mt-4">
        <h3>Riepilogo Annuale</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Anno</th>
                    <th>Numero di Ordini</th>
                    <th>Totale Vendite (€)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($yearlyStats as $year => $stats)
                <tr>
                    <td>{{ $year }}</td>
                    <td>{{ $stats['orders_count'] }}</td>
                    <td>{{ number_format($stats['total_sales'], 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
