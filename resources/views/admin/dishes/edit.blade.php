@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ route('admin.dishes.update', $dish->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group p-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $dish->name }}">
        </div>
        <div class="form-group p-3">
            <label for="image" class="form-label">Image:</label>
            <input type="file" class="form-control" id="image" name="image">

        </div>
        <div class="form-group p-3">
            <label for="ingredient" class="form-label">Ingredient:</label>
            <textarea class="form-control" id="description" name="ingredient">{{ $dish->ingredient }}</textarea>
        </div>
        <div class="form-group p-3">
            <label for="price" class="form-label">Price:</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $dish->price }}">
        </div>
        <div class="form-group p-3">
            <label for="availability" class="form-label">Availability:</label>
            <select class="form-control" id="availability" name="availability">
                <option value="1" {{ $dish->availability == 1 ? 'selected' : '' }}>Available</option>
                <option value="0" {{ $dish->availability == 0 ? 'selected' : '' }}>Unavailable</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary m-3">Edit</button>
    </form>
@endsection
