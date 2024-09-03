@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Procedi al Pagamento</h1>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <h3>Totale: {{ $total }} €</h3>

            <form action="{{ route('checkout.process') }}" method="POST" id="payment-form">
                @csrf
                <input type="hidden" name="amount" value="{{ $total }}">

                <div class="mb-3">
                    <label for="card-number" class="form-label">Numero di Carta</label>
                    <div id="card-number"></div>
                </div>

                <div class="mb-3">
                    <label for="expiration-date" class="form-label">Data di Scadenza</label>
                    <div id="expiration-date"></div>
                </div>

                <div class="mb-3">
                    <label for="cvv" class="form-label">CVV</label>
                    <div id="cvv"></div>
                </div>

                <input type="hidden" id="nonce" name="payment_method_nonce">
                <button type="submit" class="btn btn-primary">Paga {{ $total }} €</button>
            </form>
        </div>
    </div>
</div>

<script src="https://js.braintreegateway.com/web/dropin/1.33.6/js/dropin.min.js"></script>
<script>
    var form = document.querySelector('#payment-form');
    var client_token = "{{ $token }}";

    braintree.dropin.create({
        authorization: client_token,
        selector: '#card-number',
        paypal: {
            flow: 'vault'
        }
    }, function (createErr, instance) {
        if (createErr) {
            console.log('Create Error', createErr);
            return;
        }

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            instance.requestPaymentMethod(function (err, payload) {
                if (err) {
                    console.log('Request Payment Method Error', err);
                    return;
                }

                // Add the nonce to the form and submit
                document.querySelector('#nonce').value = payload.nonce;
                form.submit();
            });
        });
    });
</script>
@endsection
