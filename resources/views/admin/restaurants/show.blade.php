@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ $restaurant->name }}</h1>
    <p>{{ $restaurant->address }}</p>
    <img src="{{ $restaurant->image ? asset('storage/' . $restaurant->image) : asset('storage/placeholder.jpg') }}" alt="{{ $restaurant->name }}" style="width:100%; height:auto;">
    {{-- Inserisci qui ulteriori dettagli se necessario --}}
</div>
@endsection