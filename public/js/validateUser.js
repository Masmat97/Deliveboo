
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');
const passwordConfirmInput = document.getElementById('password-confirm');
const nameInput = document.getElementById('name');
const addressInput = document.getElementById('address');
const pIvaInput = document.getElementById('p_iva');
const imageInput = document.getElementById('image');
const typesCheckboxes = document.querySelectorAll('#tipologia-checkbox input[type="checkbox"]');
const submitButton = document.querySelector('button[type="submit"]');

// Error elements
const emailErrorElement = document.createElement('span');
emailErrorElement.classList.add('invalid-feedback');
emailErrorElement.textContent = 'L\'email deve avere un\'estensione (ad esempio, .com, .it, ecc.)';

const passwordErrorElement = document.createElement('span');
passwordErrorElement.classList.add('invalid-feedback');
passwordErrorElement.textContent = 'Le password non sono uguali';

const nameErrorElement = document.createElement('span');
nameErrorElement.classList.add('invalid-feedback');
nameErrorElement.textContent = 'Il nome del ristorante è richiesto';

const addressErrorElement = document.createElement('span');
addressErrorElement.classList.add('invalid-feedback');
addressErrorElement.textContent = 'L\'indirizzo è richiesto';

const pIvaErrorElement = document.createElement('span');
pIvaErrorElement.classList.add('invalid-feedback');
pIvaErrorElement.textContent = 'La partita IVA deve avere 11 caratteri e iniziare con IT';

const imageErrorElement = document.createElement('span');
imageErrorElement.classList.add('invalid-feedback');
imageErrorElement.textContent = 'L\'immagine è richiesta';

const typesErrorElement = document.createElement('span');
typesErrorElement.classList.add('invalid-feedback');
typesErrorElement.textContent = 'Seleziona almeno una tipologia';

// Append error elements
emailInput.parentNode.appendChild(emailErrorElement);
passwordConfirmInput.parentNode.appendChild(passwordErrorElement);
nameInput.parentNode.appendChild(nameErrorElement);
addressInput.parentNode.appendChild(addressErrorElement);
pIvaInput.parentNode.appendChild(pIvaErrorElement);
imageInput.parentNode.appendChild(imageErrorElement);
typesCheckboxes[0].parentNode.appendChild(typesErrorElement);

// Variabile globale per tenere traccia dello stato di validità
let allFieldsValid = false;

// Event listeners
emailInput.addEventListener('input', function () {
    const parts = emailInput.value.split('@');
    const domain = parts[1];
    if (!domain || !domain.includes('.')) {
        emailErrorElement.style.display = 'block';
        allFieldsValid = false;
    } else {
        emailErrorElement.style.display = 'none';
        allFieldsValid = true;
    }
    checkAllFields();
});

passwordConfirmInput.addEventListener('input', function () {
    if (passwordInput.value !== passwordConfirmInput.value) {
        passwordErrorElement.style.display = 'block';
        allFieldsValid = false;
    } else {
        passwordErrorElement.style.display = 'none';
        allFieldsValid = true;
    }
    checkAllFields();
});

nameInput.addEventListener('input', function () {
    if (nameInput.value.length < 1) {
        nameErrorElement.style.display = 'block';
        allFieldsValid = false;
    } else {
        nameErrorElement.style.display = 'none';
        allFieldsValid = true;
    }
    checkAllFields();
});

addressInput.addEventListener('input', function () {
    if (addressInput.value.length < 5) {
        addressErrorElement.style.display = 'block';
        allFieldsValid = false;
    } else {
        addressErrorElement.style.display = 'none';
        allFieldsValid = true;
    }
    checkAllFields();
});

pIvaInput.addEventListener('input', function () {
    if (pIvaInput.value.length !== 11 || !pIvaInput.value.match(/^IT[A-Z0-9]{9}$/)) {
        pIvaErrorElement.style.display = 'block';
        allFieldsValid = false;
    } else {
        pIvaErrorElement.style.display = 'none';
        allFieldsValid = true;
    }
    checkAllFields();
});

imageInput.addEventListener('change', function () {
    if (!imageInput.files[0].type.match(/image\/(jpg|jpeg|png|gif)/)) {
        imageErrorElement.style.display = 'block';
        allFieldsValid = false;
    } else {
        imageErrorElement.style.display = 'none';
        allFieldsValid = true;
    }
    checkAllFields();
});

document.addEventListener("DOMContentLoaded", function () {

    const checkboxes = document.querySelectorAll('input[name="types[]"]');

    const form = document.querySelector('form');


    checkboxes.forEach(function (checkbox) {

        checkbox.addEventListener('change', function () {

            if (checkbox.checked) {

                typesErrorElement.style.display = 'none';

                allFieldsValid = true;

            }

            checkAllFields();

        });

    });


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

            allFieldsValid = false;

        } else {

            allFieldsValid = true;

        }

        checkAllFields();

    });

});

// Funzione per controllare se tutti i campi sono validi
function checkAllFields() {
    if (allFieldsValid) {
        submitButton.disabled = false;
    } else {
        submitButton.disabled = true;
    }
}
