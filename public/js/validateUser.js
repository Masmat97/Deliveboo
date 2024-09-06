
const emailInput = document.getElementById('email');

const passwordInput = document.getElementById('password');

const passwordConfirmInput = document.getElementById('password-confirm');

const nameInput = document.getElementById('name');

const addressInput = document.getElementById('address');

const pIvaInput = document.getElementById('p_iva');

const imageInput = document.getElementById('image');

const typesCheckboxes = document.querySelectorAll('#tipologia-checkbox input[type="checkbox"]');


// Email
const emailErrorElement = document.createElement('span');

emailErrorElement.classList.add('invalid-feedback');

emailErrorElement.textContent = 'L\'email deve avere un\'estensione (ad esempio, .com, .it, ecc.)';

// Password
const passwordErrorElement = document.createElement('span');

passwordErrorElement.classList.add('invalid-feedback');

passwordErrorElement.textContent = 'Le password non sono uguali';

// Nome ristorante
const nameErrorElement = document.createElement('span');

nameErrorElement.classList.add('invalid-feedback');

nameErrorElement.textContent = 'Il nome del ristorante è richiesto';

// Indirizzo
const addressErrorElement = document.createElement('span');

addressErrorElement.classList.add('invalid-feedback');

addressErrorElement.textContent = 'L\'indirizzo è richiesto';

// Partita IVA
const pIvaErrorElement = document.createElement('span');

pIvaErrorElement.classList.add('invalid-feedback');

pIvaErrorElement.textContent = 'La partita IVA deve avere 11 caratteri e iniziare con IT';

// Immagine
const imageErrorElement = document.createElement('span');

imageErrorElement.classList.add('invalid-feedback');

imageErrorElement.textContent = 'L\'immagine è richiesta';

// Tipologia
const typesErrorElement = document.createElement('span');

typesErrorElement.classList.add('invalid-feedback');

typesErrorElement.textContent = 'Seleziona almeno una tipologia';



emailInput.parentNode.appendChild(emailErrorElement);

passwordConfirmInput.parentNode.appendChild(passwordErrorElement);

nameInput.parentNode.appendChild(nameErrorElement);

addressInput.parentNode.appendChild(addressErrorElement);

pIvaInput.parentNode.appendChild(pIvaErrorElement);

imageInput.parentNode.appendChild(imageErrorElement);

typesCheckboxes[0].parentNode.appendChild(typesErrorElement);



emailInput.addEventListener('input', function () {

    const parts = emailInput.value.split('@');

    const domain = parts[1];

    if (!domain || !domain.includes('.')) {

        emailErrorElement.style.display = 'block';

    } else {

        emailErrorElement.style.display = 'none';

    }

});


passwordConfirmInput.addEventListener('input', function () {

    if (passwordInput.value !== passwordConfirmInput.value) {

        passwordErrorElement.style.display = 'block';

    } else {

        passwordErrorElement.style.display = 'none';

    }

});


nameInput.addEventListener('input', function () {

    if (nameInput.value.length < 1) {

        nameErrorElement.style.display = 'block';

    } else {

        nameErrorElement.style.display = 'none';

    }

});


addressInput.addEventListener('input', function () {

    if (addressInput.value.length < 5) {

        addressErrorElement.style.display = 'block';

    } else {

        addressErrorElement.style.display = 'none';

    }

});


pIvaInput.addEventListener('input', function () {

    if (pIvaInput.value.length !== 11 || !pIvaInput.value.match(/^IT[A-Z0-9]{9}$/)) {

        pIvaErrorElement.style.display = 'block';

    } else {

        pIvaErrorElement.style.display = 'none';

    }

});


imageInput.addEventListener('change', function () {

    if (!imageInput.files[0].type.match(/image\/(jpg|jpeg|png|gif)/)) {

        imageErrorElement.style.display = 'block';

    } else {

        imageErrorElement.style.display = 'none';

    }

});



document.addEventListener("DOMContentLoaded", function () {

    const checkboxes = document.querySelectorAll('input[name="types[]"]');
    const form = document.querySelector('form');

    form.addEventListener("submit", function (event) {

        let atLeastOneChecked = false;

        checkboxes.forEach(function (checkbox) {

            if (checkbox.checked) {

                atLeastOneChecked = true;

            }

        });

        if (!atLeastOneChecked) {

            event.preventDefault();

            typesErrorElement.style.display = 'block';

        }

    });

});

