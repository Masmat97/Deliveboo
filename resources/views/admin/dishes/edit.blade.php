@extends('layouts.app')
@section('content')
				<form method="POST" action="{{ route('admin.dish.update', $dish->id) }}">
								@csrf
								@method('PUT')
								<div class="form-group">
												<label for="name" class="form-label">Name:</label>
												<input type="text" class="form-control" id="name" name="name" value="{{ $dish->name }}">
								</div>
								<div class="form-group">
												<label for="image" class="form-label">Image:</label>
												<input type="file" class="form-control" id="image" name="image" value="{{ $dish->image }}">
								</div>
								<div class="form-group">
												<label for="description" class="form-label">Description:</label>
												<textarea class="form-control" id="description" name="description">{{ $dish->ingredient }}</textarea>
								</div>
								<button type="submit" class="btn btn-primary">Edit</button>
				</form>
@endsection
