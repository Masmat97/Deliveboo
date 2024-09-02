@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @foreach ($restaurants as $restaurant)
                    <h5 class="mt-3 fw-bold card-title">{{ $restaurant->name }}</h5>
                    <div class="mt-3 mb-3">
                        <a href="{{ route('admin.dishes.index') }}">

                            @if (Str::startsWith($restaurant->image, 'http'))
                                <img src="{{ $restaurant->image }}" alt="">
                            @else
                                <img src="{{ asset('storage/' . $restaurant->image) }}" alt="">
                            @endif
                        </a>
                    </div>
                    <div>
                        <span>Tipologia di ristorante:</span>
                        @foreach ($restaurant->types as $type)
                            <span>{{ $type->name }}</span>
                        @endforeach
                    </div>



                    <div class="my-3 d-flex flex-column">
                        <button type="button" class="btn btn-primary"><a
                                href="{{ route('admin.dishes.index') }}">Visualizza Menù</a>
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
