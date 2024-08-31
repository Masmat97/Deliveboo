
@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ isset($dish) ? 'Modifica Piatto' : 'Nuovo Piatto' }}</h1>
    <form action="{{ isset($dish) ? route('admin.dishes.update', $dish->id) : route('admin.dishes.store') }}" method="POST">
        @csrf
        @if(isset($dish))
            @method('PUT')
        @endif
        <div class="mb-3">
            <label for="name" class="form-label">Nome del Piatto</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $dish->name ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" required>{{ $dish->description ?? '' }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $dish->price ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="visible" class="form-label">Visibile</label>
            <select class="form-control" id="visible" name="visible">
                <option value="1" {{ isset($dish) && $dish->visible ? 'selected' : '' }}>Sì</option>
                <option value="0" {{ isset($dish) && !$dish->visible ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($dish) ? 'Aggiorna' : 'Crea' }}</button>
    </form>
</div>
@endsection