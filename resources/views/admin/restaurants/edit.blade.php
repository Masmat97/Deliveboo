@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ $restaurant->exists ? 'Modifica Ristorante' : 'Crea Ristorante' }}</h1>
    <form action="{{ $restaurant->exists ? route('admin.restaurants.update', $restaurant->id) : route('admin.restaurants.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if($restaurant->exists)
            @method('PUT')
        @endif
        <div class="mb-3">
            <label for="name" class="form-label">Nome Ristorante</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $restaurant->name ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Indirizzo</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $restaurant->address ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">{{ $restaurant->exists ? 'Aggiorna' : 'Crea' }}</button>
    </form>
</div>
@endsection