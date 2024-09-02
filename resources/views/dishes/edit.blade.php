@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifica piatto</h1>
    <form action="{{ route('admin.dishes.update', $dish->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $dish->name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" class="form-control" id="description">{{ $dish->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" name="price" class="form-control" id="price" step="0.01" value="{{ $dish->price }}" required>
        </div>
        <div class="mb-3">
            <label for="visible" class="form-label">Visibile</label>
            <select name="visible" id="visible" class="form-select" required>
                <option value="1" {{ $dish->visible ? 'selected' : '' }}>Sì</option>
                <option value="0" {{ !$dish->visible ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Aggiorna Piatto</button>
    </form>
</div>
@endsection