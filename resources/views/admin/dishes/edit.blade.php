@extends('layouts.app')
@section('content')
				<form method="POST" action="{{ route('admin.dishes.update', $dish->id) }}">
								@csrf
								@method('PUT')
								<div class="form-group p-3">
												<label for="name" class="form-label">Name:</label>
												<input type="text" class="form-control" id="name" name="name" value="{{ $dish->name }}">
								</div>
								<div class="form-group p-3">
												<label for="image" class="form-label">Image:</label>
												<input type="file" class="form-control" id="image" name="image" value="{{ $dish->image }}">
								</div>
								<div class="form-group p-3">
                                    <label for="ingredient" class="form-label">Ingredient:</label>
												<textarea class="form-control" id="description" name="ingredient">{{ $dish->ingredient }}</textarea>
								</div>
								<div class="form-group p-3">
                                    <label for="price" class="form-label">Price:</label>
                                    <textarea class="form-control" id="description" name="price">{{ $dish->price }}</textarea>
                    </div>
								<button type="submit" class="btn btn-primary m-3">Edit</button>
				</form>
@endsection
