@extends('layouts.app')
@section('content')
				<h1 class="text-center p-4">My Dishes</h1>
				<div class="card_container d-flex flex-wrap justify-content-center align-items-center">
								@foreach ($dishes as $progetto)
												<div class="card w-22rem h-40rem m-1 p-1 mb-5" style="background-color: rgba(255, 255, 255, 0.118)">
																<div class="card-header">
																				<h5>{{ $progetto->name }}</h5>
																</div>
																<div class="card-body">
																				<div class="img-container mx-auto w-100 mb-1" style="box-shadow: 10px 10px 10px rgba(1, 29, 172, 0.193)">
																								@if (Str::startsWith($progetto->image, 'http'))
																												<img src="{{ $progetto['image'] }}" alt="">
																								@else
																												<img class="w-100" src="{{ asset('storage/' . $progetto->image) }}" alt="image">
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
