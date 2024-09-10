@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Il tuo Carrello</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(!empty($cart) && count($cart) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Piatto</th>
                    <th>Prezzo</th>
                    <th>Quantità</th>
                    <th>Totale</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $id => $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['price'] }} €</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>{{ $item['price'] * $item['quantity'] }} €</td>
                        <td>
                            <form action="{{ route('cart.remove', $id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Rimuovi</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-between mt-3">
            <a href="{{ route('checkout.show') }}" class="btn btn-primary">Procedi al pagamento</a>
            
            <form action="{{ route('cart.clear') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-warning">Svuota Carrello</button>
            </form>
        </div>
        
        <div class="text-right mt-3">
            <h3>Totale: {{ $total }} €</h3>
        </div>
        
    @else
        <p>Il tuo carrello è vuoto.</p>
    @endif
</div>
@endsection
