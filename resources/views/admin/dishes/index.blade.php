@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center p-4">Menù</h1>
        <div class="table-responsive p-4">
            <table class="table table-sm table-striped table-bordered">
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
        <td data-label="Nome">{{ $dish->name }}</td>
        <td data-label="Immagini">
            @if (Str::startsWith($dish->image, 'http'))
                <img src="{{ $dish->image }}" alt="" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
            @else
                <img src="{{ asset('storage/' . $dish->image) }}" alt="" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
            @endif
        </td>
        <td data-label="Ingredienti">{!! preg_replace('/\n{2,}/', '</p><p>', nl2br(e(Str::limit($dish->ingredient, 100, ' [Read more]')))) !!}</td>
        <td data-label="Azioni">
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

<style scoped>
    @media (max-width: 425px) {
     .table-sm {
         display: block;
         width: 100%;
     }
     .table-sm thead {
         display: none;
     }
     .table-sm tr {
         display: block;
         margin-bottom: 20px;
         border-bottom: 2px solid #ccc;
     }
     .table-sm td {
         display: block;
         width: 100%;
         padding: 10px;
         border: none;
         border-bottom: 1px solid #ccc;
     }
     .table-sm td:before {
         content: attr(data-label);
         font-weight: bold;
         margin-right: 10px;
     }
     .table-sm tr:not(:last-child) {
         margin-bottom: 30px;
     }
     .table-sm td img {
         width: 50%;
         height: auto;
         margin: 10px auto;
         display: block;
     }
     .table-sm td p {
         margin-bottom: 10px;
     }
 }
 </style>
