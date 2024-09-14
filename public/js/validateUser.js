document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector('form');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const passwordConfirmInput = document.getElementById('password-confirm');
    const nameInput = document.getElementById('name');
    const addressInput = document.getElementById('address');
    const pIvaInput = document.getElementById('p_iva');
    const imageInput = document.getElementById('image');
    const typesCheckboxes = document.querySelectorAll('input[name="types[]"]');

    // Email
    const emailErrorElement = document.createElement('span');
    emailErrorElement.classList.add('invalid-feedback');
    emailErrorElement.textContent = 'L\'email deve avere un\'estensione (ad esempio, .com, .it, ecc.)';
    emailInput.parentNode.appendChild(emailErrorElement);

    // Password
    const passwordErrorElement = document.createElement('span');
    passwordErrorElement.classList.add('invalid-feedback');
    passwordErrorElement.textContent = 'Le password non sono uguali';
    passwordConfirmInput.parentNode.appendChild(passwordErrorElement);

    // Nome ristorante
    const nameErrorElement = document.createElement('span');
    nameErrorElement.classList.add('invalid-feedback');
    nameErrorElement.textContent = 'Il nome del ristorante è richiesto';
    nameInput.parentNode.appendChild(nameErrorElement);

    // Indirizzo
    const addressErrorElement = document.createElement('span');
    addressErrorElement.classList.add('invalid-feedback');
    addressErrorElement.textContent = 'L\'indirizzo è richiesto';
    addressInput.parentNode.appendChild(addressErrorElement);

    // Partita IVA
    const pIvaErrorElement = document.createElement('span');
    pIvaErrorElement.classList.add('invalid-feedback');
    pIvaErrorElement.textContent = 'La partita IVA deve avere 11 caratteri e iniziare con IT';
    pIvaInput.parentNode.appendChild(pIvaErrorElement);

    // Immagine
    const imageErrorElement = document.createElement('span');
    imageErrorElement.classList.add('invalid-feedback');
    imageErrorElement.textContent = 'L\'immagine è richiesta';
    imageInput.parentNode.appendChild(imageErrorElement);

    // Tipologia
    const typesErrorElement = document.createElement('span');
    typesErrorElement.classList.add('invalid-feedback');
    typesErrorElement.textContent = 'Seleziona almeno una tipologia';
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

    form.addEventListener("submit", function (event) {
        let isValid = true;

        if (emailInput.value.split('@')[1] && !emailInput.value.split('@')[1].includes('.')) {
            emailErrorElement.style.display = 'block';
            isValid = false;
        }

        if (passwordInput.value !== passwordConfirmInput.value) {
            passwordErrorElement.style.display = 'block';
            isValid = false;
        }

        if (nameInput.value.length < 1) {
            nameErrorElement.style.display = 'block';
            isValid = false;
        }

        if (addressInput.value.length < 5) {
            addressErrorElement.style.display = 'block';
            isValid = false;
        }

        if (pIvaInput.value.length !== 11 || !pIvaInput.value.match(/^IT[A-Z0-9]{9}$/)) {
            pIvaErrorElement.style.display = 'block';
            isValid = false;
        }

        if (!imageInput.files[0].type.match(/image\/(jpg|jpeg|png|gif)/)) {
            imageErrorElement.style.display = 'block';
            isValid = false;
        }

        let atLeastOneChecked = false;
        typesCheckboxes.forEach(function (checkbox) {
            if (checkbox.checked) {
                atLeastOneChecked = true;
            }
        });

        if (!atLeastOneChecked) {
            typesErrorElement.style.display = 'block';
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault();
            alert('Correggi i campi sbagliati');
        }
    });
});
