@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Checkout</h1>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <h3>Totale da pagare: {{ $total }} €</h3>

    <form action="{{ route('checkout.process') }}" method="POST" id="payment-form">
        @csrf
        <div id="dropin-container"></div>
        <button type="submit" class="btn btn-primary mt-3">Paga ora</button>
    </form>
</div>

<script src="https://js.braintreegateway.com/web/dropin/1.26.0/js/dropin.min.js"></script>
<script>
    var form = document.querySelector('#payment-form');
    var clientToken = "{{ $token }}";

    braintree.dropin.create({
        authorization: clientToken,
        container: '#dropin-container'
    }, function (err, instance) {
        if (err) {
            console.error(err);
            return;
        }
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            instance.requestPaymentMethod(function (err, payload) {
                if (err) {
                    console.error(err);
                    return;
                }
                // Aggiungi il nonce al form e invia il form
                var nonceInput = document.createElement('input');
                nonceInput.setAttribute('type', 'hidden');
                nonceInput.setAttribute('name', 'payment_method_nonce');
                nonceInput.setAttribute('value', payload.nonce);
                form.appendChild(nonceInput);
                form.submit();
            });
        });
    });
</script>
@endsection
