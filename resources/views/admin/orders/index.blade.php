@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Ordini Ricevuti</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @forelse($orders as $order)
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Ordine #{{ $order->id }}</h5>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p class="card-text">Cliente: {{ $order->client_name }}</p>
                            <p class="card-text">Data: {{ $order->created_at->format('d/m/Y H:i') }}</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="card-text">Totale: €{{ number_format($order->total, 2) }}</p>
                        </div>
                    </div>


                    <h6 class="mt-3">Piatti Ordinati:</h6>
                    <ul>
                        @foreach ($order->dishes as $dish)
                            <li>{{ $dish->pivot->name_dish }} x {{ $dish->pivot->quantity }}</li>
                        @endforeach
                    </ul>

                    <div class="d-flex justify-content-center mt-3">
                        <form
                            action="{{ route('admin.orders.updateStatus', ['order' => $order->id, 'status' => 'completato']) }}"
                            method="POST" class="me-2">
                            @csrf
                            @method('PATCH')
                        </form>

                        <form
                            action="{{ route('admin.orders.updateStatus', ['order' => $order->id, 'status' => 'in preparazione']) }}"
                            method="POST">
                            @csrf
                            @method('PATCH')
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">Nessun ordine ricevuto.</p>
        @endforelse
    </div>
@endsection
