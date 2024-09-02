@extends('layouts.app')

@section('content')
<div class="container">
    <h1>I tuoi piatti</h1>
    <a href="{{ route('admin.dishes.create') }}" class="btn btn-primary mb-3">Aggiungi nuovo piatto</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($dishes->isEmpty())
        <p>Non hai piatti disponibili.</p>
    @else
        <div class="row">
            @foreach ($dishes as $dish)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $dish->name }}</h5>
                            <p class="card-text">{{ $dish->description }}</p>
                            <p class="card-text"><strong>Prezzo: </strong>{{ $dish->price }} €</p>
                            <a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-warning">Modifica</a>
                            <form action="{{ route('admin.dishes.destroy', $dish->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection