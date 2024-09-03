@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ route('admin.dishes.update', $dish->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group p-3">
            <label for="name" class="form-label">Name:*</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $dish->name }}">
            @error('name')
                @if($message == 'You must enter the name of the dish.')
                    <div class="alert alert-danger">You must enter the name of the dish.</div>
                @elseif($message == 'The name can only contain letters and spaces.')
                    <div class="alert alert-danger">The name can only contain letters and spaces.</div>
                @endif
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="image" class="form-label">Image:</label>
            <input type="file" class="form-control" id="image" name="image" value="{{ $dish->image }}">
            @error('image')
                @if($message == 'The image file cannot be larger than 2MB.')
                    <div class="alert alert-danger">The image file cannot be larger than 2MB.</div>
                @endif
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="ingredient" class="form-label">Ingredient:*</label>
            <textarea class="form-control" id="description" name="ingredient">{{ $dish->ingredient }}</textarea>
            @error('ingredient')
                @if($message == 'Please enter an ingredient.')
                    <div class="alert alert-danger">Please enter an ingredient.</div>
                @elseif($message == 'Please enter at least one ingredient.')
                    <div class="alert alert-danger">Please enter at least one ingredient.</div>
                @elseif($message == 'Ingredient can only contain letters, numbers, and spaces.')
                    <div class="alert alert-danger">Ingredient contains prohibited characters. Please enter only alphanumeric characters and spaces.</div>
                @endif
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="price" class="form-label">Price:*</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $dish->price }}">
            @error('price')
                @if($message == 'The price must be greater than 0.')
                    <div class="alert alert-danger">The price must be greater than 0.</div>
                @endif
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="availability" class="form-label">Availability:*</label>
            <select class="form-control" id="availability" name="availability">
                <option value="1" {{ $dish->availability == 1 ? 'selected' : '' }}>Available</option>
                <option value="0" {{ $dish->availability == 0 ? 'selected' : '' }}>Unavailable</option>
            </select>
            @error('availability')
                @if($message == 'The selected availability is invalid.')
                    <div class="alert alert-danger">The selected availability is invalid.</div>
                @endif
            @enderror
        </div>
        <div class="mt-3 p-3" style="color: gray">I campi contenenti <b style="color: black">*</b> sono
                        obbligatori </div>
        <button type="submit" class="btn btn-primary m-3">Edit</button>
    </form>
@endsection
