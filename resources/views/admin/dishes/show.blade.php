@extends('layouts.app')

@section('content')
				<div class="card_container">
								<div class="card-show">
                                    {{ dd($dish) }}
												<h4 class="mt-4 mb-4">{{ $dish->name }}</h4>
												<div class="img_container">

																{{-- @if (Str::startsWith($dish->image, 'http'))
																				<img src="{{ $dish['image'] }}" alt="">
																@else
																				<img src="{{ asset('storage/' . $dish->image) }}" alt="">
																@endif --}}

												</div>
												<p class="mt-4"><b>Ingredient:</b> {!! preg_replace('/\n{2,}/', '</p><p>', nl2br(e($dish->ingredient))) !!}</p>
												<p class="mt-4"><b>Price:</b> {{ $dish->price }} </p>
								@endsection
