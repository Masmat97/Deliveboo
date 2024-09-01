@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $restaurant->name }}</h1>
    <p>{{ $restaurant->address }}</p>

    <h2>Menu</h2>
    <div class="row">
        @forelse($dishes as $dish)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $dish->name }}</h5>
                        <p class="card-text">{{ $dish->description }}</p>
                        <p class="card-text"><strong>Price: </strong>{{ $dish->price }} €</p>
                    </div>
                </div>
            </div>
        @empty
            <p>No dishes available.</p>
        @endforelse
    </div>
</div>
@endsection