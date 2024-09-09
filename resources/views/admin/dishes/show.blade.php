@extends('layouts.app')

@section('content')
    <div class="container">
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
                                <div class="d-flex flex-column">
                                    <a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-warning btn-sm m-1">Modifica</a>
                                    <form action="{{ route('admin.dishes.destroy', $dish->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Sei sicuro di eliminare questo piatto?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm m-1">Elimina</button>
                                    </form>
                                </div>
                            </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
