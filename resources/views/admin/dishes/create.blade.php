@extends('layouts.app')
@section('content')
<form  method="POST" action="{{route('admin.dishes.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group p-3">
        <label for="name" class="form-label p-2"><b>Name:*</b></label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        <div id="name-error"></div>
      </div>
<div class="form-group p-3">
    <label for="image" class="form-label p-2"><b>Image:*</b></label>
    <input type="file" class="form-control" id="image" name="image">

    <div id="error-message"></div>
</div>
<div class="form-group p-3">
    <label for="ingredient" class="form-label p-2"><b>Ingredient:*</b></label>
    <textarea class="form-control" id="ingredient" name="ingredient">{{ old('ingredient') }}</textarea>
    <p id="message"></p>
    @error('ingredient')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
    <div class="form-group p-3">
        <label for="price" class="form-label p-2"><b>Price:*</b></label>
        <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group p-3">
        <label for="availability" class="form-label p-2"><b>Availability:*</b></label>
        <select class="form-control" id="availability" name="availability">
            <option value="1" {{ old('availability') == 1 ? 'selected' : '' }}>Available</option>
            <option value="0" {{ old('availability') == 0 ? 'selected' : '' }}>Unavailable</option>
        </select>
        @error('availability')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mt-3 p-3" style="color: gray">I campi contenenti <b style="color: black">*</b> sono
        obbligatori </div>
    <button type="submit" class="btn btn-primary m-3">Add</button>
</form>
<script src="{{ asset('js/validate_dish_create.js') }}"></script>
@endsection
