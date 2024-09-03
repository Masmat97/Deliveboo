@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Checkout</h1>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form id="payment-form" action="{{ route('checkout') }}" method="POST">
        @csrf
        <div id="dropin-container"></div>
        <input type="hidden" name="amount" value="{{ $total }}">
        <button type="submit" class="btn btn-success mt-3">Paga {{ $total }} €</button>
    </form>
</div>
@endsection

@push('scripts')
<script src="https://js.braintreegateway.com/web/dropin/1.26.0/js/dropin.min.js"></script>
<script>
    fetch('{{ route('payment.token') }}')
        .then(response => response.json())
        .then(data => {
            braintree.dropin.create({
                authorization: data.token,
                container: '#dropin-container'
            }, function (err, instance) {
                if (err) {
                    console.error(err);
                    return;
                }
                const form = document.getElementById('payment-form');
                form.addEventListener('submit', function (event) {
                    event.preventDefault();
                    instance.requestPaymentMethod(function (err, payload) {
                        if (err) {
                            console.error(err);
                            return;
                        }
                        const nonceInput = document.createElement('input');
                        nonceInput.type = 'hidden';
                        nonceInput.name = 'payment_method_nonce';
                        nonceInput.value = payload.nonce;
                        form.appendChild(nonceInput);
                        form.submit();
                    });
                });
            });
        });
</script>
@endpush