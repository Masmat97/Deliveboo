@extends('layouts.app')
@section('content')
    <h1 class="text-center p-4">My Dishes</h1>
    <div class="card_container d-flex flex-wrap justify-content-center align-items-center">
        @foreach ($dishes as $dish)
            <div class="card w-22rem h-40rem m-1 p-1 mb-5" style="background-color: rgba(255, 255, 255, 0.118)">
                <div class="card-header">
                    <h5>{{ $dish->name }}</h5>
                </div>
                <div class="card-body">
                    <div class="img-container mx-auto w-100 mb-1" style="box-shadow: 10px 10px 10px rgba(1, 29, 172, 0.193)">
                        @if (Str::startsWith($dish->image, 'http'))
                            <img src="{{ $dish->image }}" alt="">
                        @else
                            <img src="{{ asset('storage/' . $dish->image) }}" alt="">
                        @endif
                    </div>
                    <p class="mt-4"><b>Ingredient:</b> {!! preg_replace('/\n{2,}/', '</p><p>', nl2br(e(Str::limit($dish->ingredient, 100, ' [Read more]')))) !!}</p>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('admin.dishes.show', $dish->id) }}" class="btn btn-primary p-1">View Details</a>
                    <a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-warning p-1">Edit</a>
                    <form action="{{ route('admin.dishes.destroy', $dish->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger p-1">Delete</button>
                    </form>
                    <!-- Form per aggiungere al carrello -->
                    <form action="{{ route('cart.add', $dish->id) }}" method="POST" class="d-inline">
                        @csrf
                        <input type="hidden" name="quantity" value="1"> <!-- Puoi permettere all'utente di scegliere la quantità -->
                        <button type="submit" class="btn btn-success p-1 mt-2">Add to Cart</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection