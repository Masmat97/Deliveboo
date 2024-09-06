@extends('layouts.app')

@section('content')
<<<<<<< HEAD
				<div class="card_container">
								<div class="card-show">
												<h4 class="mt-4 mb-4">{{ $dish->name }}</h4>
												<div class="img_container">

																{{-- @if (Str::startsWith($dish->image, 'http'))
																				<img src="{{ $dish['image'] }}" alt="">
																@else
																				<img src="{{ asset('storage/' . $dish->image) }}" alt="">
																@endif --}}

												</div>
												<p class="mt-4"><b>Ingredienti:</b> {!! preg_replace('/\n{2,}/', '</p><p>', nl2br(e($dish->ingredient))) !!}</p>
												<p class="mt-4"><b>Prezzo:</b> {{ $dish->price }} </p>
								@endsection
=======
    <h1 class="text-center p-4">{{ $dish->name }}</h1>
    <div class="table-responsive p-4">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Immagini</th>
                    <th>Ingredienti</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $dish->name }}</td>
                    <td>
                        @if (Str::startsWith($dish->image, 'http'))
                            <img src="{{ $dish->image }}" alt="" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                        @else
                            <img src="{{ asset('storage/' . $dish->image) }}" alt="" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                        @endif
                    </td>
                    <td>{!! preg_replace('/\n{2,}/', '</p><p>', nl2br(e($dish->ingredient))) !!}</td>
                    <td>
                        <a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-warning p-1">Modifica</a>
                        <form action="{{ route('admin.dishes.destroy', $dish->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Sei sicuro di eliminare questo piatto?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger p-1">Elimina</button>
                        </form>
                        <!-- Form per aggiungere al carrello -->
                        <form action="{{ route('cart.add', $dish->id) }}" method="POST" class="d-inline">
                            @csrf
                            <input type="hidden" name="quantity" value="1"> <!-- Puoi permettere all'utente di scegliere la quantità -->
                            <button type="submit" class="btn btn-success p-1">Aggiungi al carrello</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
>>>>>>> b41c58b40dae9e6475e215e60f6523374da2d76a
