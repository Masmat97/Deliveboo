@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Checkout</h1>

    <form action="{{ route('checkout.process') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="address" class="form-label">Indirizzo di Consegna</label>
            <input type="text" name="address" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="payment_method" class="form-label">Metodo di Pagamento</label>
            <select name="payment_method" class="form-select" required>
                <option value="credit_card">Carta di Credito</option>
                <option value="paypal">PayPal</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Completa l'Ordine</button>
    </form>
</div>
@endsection