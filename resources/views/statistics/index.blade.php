@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Statistiche degli Ordini</h1>
    <p>Totale Vendite: €{{ number_format($totalSales, 2) }}</p>
    <p>Totale Ordini: {{ $totalOrders }}</p>
    <h3>Vendite Mensili</h3>
    @foreach($monthlySales as $month => $sales)
        <p>Mese {{ $month }}: €{{ number_format($sales, 2) }}</p>
    @endforeach
    <h3>Vendite Annue</h3>
    @foreach($yearlySales as $year => $sales)
        <p>Anno {{ $year }}: €{{ number_format($sales, 2) }}</p>
    @endforeach
</div>
@endsection
