@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="my-4">Elenco Ristoranti</h1>
    <div class="row">
        @foreach ($restaurants as $restaurant)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="{{ $restaurant->image ? asset('storage/' . $restaurant->image) : asset('storage/placeholder.jpg') }}" alt="{{ $restaurant->name }}" style="width:100%; height:auto;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $restaurant->name }}</h5>
                        <p class="card-text">
                            <strong>Indirizzo:</strong> {{ $restaurant->address }}<br>
                            <strong>Tipologie:</strong>
                            @foreach ($restaurant->types as $type)
                                <span class="badge bg-secondary">{{ $type->name }}</span>
                            @endforeach
                        </p>
                        <a href="{{ route('admin.restaurants.show', $restaurant->id) }}" class="btn btn-primary">Dettagli</a>
                        <a href="{{ route('admin.restaurants.edit', $restaurant->id) }}" class="btn btn-warning">Modifica</a>
                        <form action="{{ route('admin.restaurants.destroy', $restaurant->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler eliminare questo ristorante?');">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection