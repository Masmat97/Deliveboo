@extends('layouts.app')

@section('content')
    <div class="container">
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
                </thead>
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
                                    <div class="d-flex justify-content-around">
                                        <a href="{{ route('admin.dishes.show', $dish->id) }}" class="btn btn-primary btn-sm m-1">Dettagli</a>
                                    </div>
                                </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
