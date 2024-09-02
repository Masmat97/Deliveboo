@extends('layouts.app')
@section('content')
				<h1 class="text-center p-4">My Dishes</h1>
				<div class="card_container">
								@foreach ($dishes as $progetto)
												<div class="card">
																<div class="card-header">
																				<h5>{{ $progetto->name }}</h5>
																</div>
																<div class="card-body">
																				<div class="img-container">
																								@if (Str::startsWith($progetto->image, 'http'))
																												<img src="{{ $progetto['image'] }}" alt="">
																								@else
																												<img src="{{ asset('storage/' . $progetto->image) }}" alt="image">
																								@endif
																				</div>
																				<p class="mt-4"><b>Ingredient:</b> {!! preg_replace('/\n{2,}/', '</p><p>', nl2br(e(Str::limit($progetto->ingredient, 100, ' [Read more]')))) !!}</p>


																</div>
																<div class="card-footer text-center">
																				<a href="{{ route('admin.dishes.show', $progetto->id) }}" class="btn btn-primary p-1">View Details</a>
																				<a href="{{ route('admin.dishes.edit', $progetto->id) }}" class="btn btn-warning p-1">Edit</a>
																				<form action="{{ route('admin.dishes.destroy', $progetto->id) }}" method="POST" class="d-inline">

																								@csrf
																								@method('DELETE')
																								<button type="submit" class="btn btn-danger p-1">Delete</button>
																				</form>
																</div>
												</div>
								@endforeach
				</div>
@endsection
