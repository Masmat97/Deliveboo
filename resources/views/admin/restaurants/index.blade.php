@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-wrap">
                @foreach ($restaurants as $restaurant)
                    <div class="card my-4 mx-2" style="width: 18rem;">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <p class="card-text">
                                <h5 class="fw-bold card-title">{{ $restaurant->name }}</h5>
                                <a href="{{ route('admin.restaurants.show', $restaurant->id) }}">

                                    @if (Str::startsWith($restaurant->image, 'http'))
                                        <img src="{{ $restaurant->image }}" alt="">
                                    @else
                                        <img src="{{ asset('storage/' . $restaurant->image) }}" alt="">
                                    @endif
                                </a>
                                </p>
                                <div>
                                    <p>Tipologie:</p>
                                    @foreach ($restaurant->types as $type)
                                        <p>{{ $type->name }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="my-3 d-flex flex-column">
                            <button type="button" class="btn btn-primary"><a
                                    href="{{ route('admin.dishes.index') }}">Visualizza Menù</a>
                            </button>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    @endsection
