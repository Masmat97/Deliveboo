@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            @foreach ($restaurants as $restaurant)
                <div class="col-md-4 col-sm-6 col-12 mb-3">
                    <div class="card">
                        <h5 class="mt-3 fw-bold card-title p-2">{{ $restaurant->name }}</h5>
                        <div class="mt-3 mb-3">
                            <a href="{{ route('admin.dishes.index') }}">
                                @if (Str::startsWith($restaurant->image, 'http'))
                                    <img src="{{ $restaurant->image }}" alt="" class="img-fluid">
                                @else
                                    <img src="{{ asset('storage/' . $restaurant->image) }}" alt="" class="img-fluid">
                                @endif
                            </a>
                        </div>
                        <div class="card-body">
                            <span>Tipologia di ristorante:</span>
                            @foreach ($restaurant->types as $type)
                                <span>{{ $type->name }}</span>
                            @endforeach
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary"><a
                                    href="{{ route('admin.dishes.index') }}">Visualizza Menù</a>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
