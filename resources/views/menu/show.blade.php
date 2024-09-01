@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Menu del Ristorante: {{ $restaurant->name }}</h1>
    <div>
        <p>Indirizzo: {{ $restaurant->address }}</p>
        <p>Descrizione: {{ $restaurant->description }}</p>
        <h3>Piatti:</h3>
        @foreach ($dishes as $dish)
            <div>
                <h4>{{ $dish->name }}</h4>
                <p>{{ $dish->description }}</p>
                <p>Prezzo: €{{ number_format($dish->price, 2) }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection