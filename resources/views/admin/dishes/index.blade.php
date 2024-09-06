@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <h1 class="text-center p-4">I miei piatti</h1>
    <div class="card_container d-flex flex-wrap justify-content-center align-items-center">
        @foreach ($dishes as $dish)
            <div class="card w-22rem h-40rem m-1 p-1 mb-5" style="background-color: rgba(255, 255, 255, 0.118)">
                <div class="card-header">
                    <h5>{{ $dish->name }}</h5>
                </div>
                <div class="card-body">
                    <div class="img-container mx-auto mb-1" style="width: 18rem; height: 18rem; overflow: hidden; border-radius: 10px; box-shadow: 10px 10px 10px rgba(1, 29, 172, 0.193);">
                        @if (Str::startsWith($dish->image, 'http'))
                            <img class="img-fluid w-100 h-100 object-fit-cover" src="{{ $dish->image }}" alt="">
                        @else
                            <img class="img-fluid w-100 h-100 object-fit-cover" src="{{ asset('storage/' . $dish->image) }}" alt="">
                        @endif
                    </div>
                    <p class="mt-4"><b>Ingredienti:</b> {!! preg_replace('/\n{2,}/', '</p><p>', nl2br(e(Str::limit($dish->ingredient, 100, ' [Read more]')))) !!}</p>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('admin.dishes.show', $dish->id) }}" class="btn btn-primary p-1">Visualizza i dettagli</a>
                    <a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-warning p-1">Modificare</a>
                    <form action="{{ route('admin.dishes.destroy', $dish->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger p-1">Eliminare</button>
                    </form>
                    <!-- Form per aggiungere al carrello -->
                    <form action="{{ route('cart.add', $dish->id) }}" method="POST" class="d-inline">
                        @csrf
                        <input type="hidden" name="quantity" value="1"> <!-- Puoi permettere all'utente di scegliere la quantità -->
                        <button type="submit" class="btn btn-success p-1">Aggiungi al carrello</button>
                    </form>
                </div>
            </div>
        @endforeach
=======
    <h1 class="text-center p-4">Menù</h1>
    <div class="table-responsive p-4">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Immagini</th>
                    <th>Ingredienti</th>
                    <th>Azioni</th>
                </tr>
            <tbody>
                @foreach ($dishes as $dish)
                    <tr>
                        <td>{{ $dish->name }}</td>
                        <td>
                            @if (Str::startsWith($dish->image, 'http'))
                                <img src="{{ $dish->image }}" alt="" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                            @else
                                <img src="{{ asset('storage/' . $dish->image) }}" alt="" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                            @endif
                        </td>
                        <td>{!! preg_replace('/\n{2,}/', '</p><p>', nl2br(e(Str::limit($dish->ingredient, 100, ' [Read more]')))) !!}</td>
                        <td>
                            <a href="{{ route('admin.dishes.show', $dish->id) }}" class="btn btn-primary p-1">Dettagli</a>
                            <!-- Form per aggiungere al carrello -->
                            <form action="{{ route('cart.add', $dish->id) }}" method="POST" class="d-inline">
                                @csrf
                                <input type="hidden" name="quantity" value="1"> <!-- Puoi permettere all'utente di scegliere la quantità -->
                                <button type="submit" class="btn btn-success p-1">Aggiungi al carrello</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
>>>>>>> b41c58b40dae9e6475e215e60f6523374da2d76a
    </div>
@endsection
