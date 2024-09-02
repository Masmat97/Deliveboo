@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $dish->name }}</h1>
    <p>{{ $dish->description }}</p>
    <p><strong>Prezzo: </strong>{{ $dish->price }} €</p>
    <p><strong>Visibile: </strong>{{ $dish->visible ? 'Sì' : 'No' }}</p>
    <a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-warning">Modifica</a>
    <form action="{{ route('admin.dishes.destroy', $dish->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Elimina</button>
    </form>
</div>
@endsection