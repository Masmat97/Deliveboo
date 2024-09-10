<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
    <h1>Pagamento Checkout</h1>

    <!-- Sezione per visualizzare il totale del pagamento -->
    <div id="payment-total">
        <p>Total: <span id="total-amount">Caricamento...</span></p>
        <a href="#total-amount" id="total-link">Vai al Totale</a>
    </div>

    <!-- Contenitore per il Braintree Drop-in UI -->
    <div id="dropin-container"></div>

    <!-- Pulsante per inviare il pagamento -->
    <button id="submit-button">Paga ora</button>

    <!-- Inclusione dello script Braintree -->
    <script src="https://js.braintreegateway.com/web/dropin/1.33.0/js/dropin.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Recupera il totale dal server (Laravel) e aggiorna l'elemento #total-amount
            fetch('/get-cart-total')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('total-amount').textContent = `${data.total} €`;
                })
                .catch(error => {
                    console.error('Errore nel recupero del totale:', error);
                    document.getElementById('total-amount').textContent = 'Errore nel caricamento';
                });

            fetch('/payment/token')
                .then(response => response.json())
                .then(data => {
                    braintree.dropin.create({
                        authorization: data.clientToken,
                        container: '#dropin-container'
                    }, function (err, dropinInstance) {
                        if (err) {
                            console.error('Errore durante la creazione del Braintree Drop-in:', err);
                            return;
                        }

                        document.getElementById('submit-button').addEventListener('click', function () {
                            dropinInstance.requestPaymentMethod(function (err, payload) {
                                if (err) {
                                    console.error('Errore durante il recupero del metodo di pagamento:', err);
                                    return;
                                }

                                fetch('/checkout', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                    },
                                    body: JSON.stringify({
                                        paymentMethodNonce: payload.nonce
                                    })
                                }).then(function (response) {
                                    return response.json();
                                }).then(function (data) {
                                    if (data.success) {
                                        alert('Pagamento effettuato con successo!');
                                    } else {
                                        alert('Errore nel pagamento: ' + (data.error || 'Errore sconosciuto'));
                                    }
                                }).catch(function (error) {
                                    console.error('Errore nella richiesta di pagamento:', error);
                                    alert('Errore nella richiesta di pagamento. Controlla la console per dettagli.');
                                });
                            });
                        });
                    });
                })
                .catch(function (error) {
                    console.error('Errore nella richiesta del token Braintree:', error);
                });
        });
    </script>
</body>
</html>
