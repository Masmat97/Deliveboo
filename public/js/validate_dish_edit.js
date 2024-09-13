// CREATE DISH

// Seleziona l'input "price"
const priceInput = document.getElementById('price');
const submitButton = document.querySelector('button[type="submit"]');

priceInput.addEventListener('input', (e) => {
  // Ottieni il valore dell'input
  const priceValue = e.target.value;

  // Rimuovi eventuali errori esistenti
  const errorMessages = priceInput.parentNode.querySelectorAll('.alert.alert-danger');
  errorMessages.forEach((error) => error.remove());

  // Controlla se il valore contiene caratteri speciali non accettati
  if (/[^0-9\.\-,]/.test(priceValue)) {
    // Visualizza un errore
    const errorMessage = document.createElement('div');
    errorMessage.className = 'alert alert-danger';
    errorMessage.textContent = 'Questo carattere non è accettato.';
    priceInput.parentNode.appendChild(errorMessage);
    submitButton.disabled = true; // Disabilita il bottone
  } else if (parseFloat(priceValue) <= 0) {
    // Visualizza un errore
    const errorMessage = document.createElement('div');
    errorMessage.className = 'alert alert-danger';
    errorMessage.textContent = 'Il prezzo deve essere un numero positivo.';
    priceInput.parentNode.appendChild(errorMessage);
    submitButton.disabled = true; // Disabilita il bottone
  } else {
    submitButton.disabled = false; // Abilita il bottone
  }
});

submitButton.addEventListener('click', (e) => {
  if (submitButton.disabled) {
    e.preventDefault(); // Previene la sottomissione del form
  }
});


//---------------------------------------------
//IMAGE
const fileInput = document.getElementById('image');

fileInput.addEventListener('change', (e) => {
  // Ottieni il file selezionato
  const file = e.target.files[0];

  // Rimuovi eventuali errori esistenti
  const errorMessages = fileInput.parentNode.querySelectorAll('.alert.alert-danger');
  errorMessages.forEach((error) => error.remove());

  // Verifica il nome del file
  const fileName = file.name;
  if (/[^a-zA-Z0-9\._-]/.test(fileName)) {
    // Visualizza un errore
    const errorMessage = document.createElement('div');
    errorMessage.className = 'alert alert-danger';
    errorMessage.textContent = 'Il nome del file contiene caratteri non validi.';
    fileInput.parentNode.appendChild(errorMessage);
    submitButton.disabled = true; // Disabilita il bottone
  } else if (!['image/png', 'image/jpeg', 'image/gif'].includes(file.type)) {
    // Visualizza un errore
    const errorMessage = document.createElement('div');
    errorMessage.className = 'alert alert-danger';
    errorMessage.textContent = 'Il file selezionato non è un\'immagine valida. Sono accettati solo file .png, .jpg e .gif.';
    fileInput.parentNode.appendChild(errorMessage);
    submitButton.disabled = true; // Disabilita il bottone
  } else {
    submitButton.disabled = false; // Abilita il bottone
  }
});

submitButton.addEventListener('click', (e) => {
  if (submitButton.disabled) {
    e.preventDefault(); // Previene la sottomissione del form
  }
});

// NAME

const nameInput = document.getElementById('name');

nameInput.addEventListener('input', (e) => {
  // Ottieni il valore dell'input
  const inputValue = e.target.value;

  // Rimuovi eventuali errori esistenti
  const errorMessages = nameInput.parentNode.querySelectorAll('.alert.alert-danger');
  errorMessages.forEach((error) => error.remove());

  // Controlla se il valore contiene caratteri speciali non accettati
  const regex = /^[a-zA-Z\s]+$/;
  const minLength = 4;
  const maxLength = 50;

  if (inputValue !== '') {
    if (!regex.test(inputValue)) {
      // Visualizza un errore
      const errorMessage = document.createElement('div');
      errorMessage.className = 'alert alert-danger';
      errorMessage.textContent = 'Sono ammessi solo lettere e spazi';
      nameInput.parentNode.appendChild(errorMessage);
      submitButton.disabled = true; // Disabilita il bottone
    } else if (inputValue.length < minLength) {
      // Visualizza un errore
      const errorMessage = document.createElement('div');
      errorMessage.className = 'alert alert-danger';
      errorMessage.textContent = `Il nome deve avere almeno ${minLength} caratteri`;
      nameInput.parentNode.appendChild(errorMessage);
      submitButton.disabled = true; // Disabilita il bottone
    } else if (inputValue.length > maxLength) {
      // Visualizza un errore
      const errorMessage = document.createElement('div');
      errorMessage.className = 'alert alert-danger';
      errorMessage.textContent = `Il nome deve avere non più di ${maxLength} caratteri`;
      nameInput.parentNode.appendChild(errorMessage);
      submitButton.disabled = true; // Disabilita il bottone
    } else {
      submitButton.disabled = false; // Abilita il bottone
    }
  } else {
    submitButton.disabled = false; // Abilita il bottone
  }
});

submitButton.addEventListener('click', (e) => {
  if (submitButton.disabled) {
    e.preventDefault(); // Previene la sottomissione del form
  }
});

// INGREDIENTI

const inputField = document.getElementById('ingredient');

inputField.addEventListener('input', (e) => {
  // Ottieni il valore dell'input
  const inputValue = e.target.value;

  // Rimuovi eventuali errori esistenti
  const errorMessages = inputField.parentNode.querySelectorAll('.alert.alert-danger');
  errorMessages.forEach((error) => error.remove());

  // Controlla se il valore contiene caratteri speciali non accettati
  const minLength = 4;
  const maxLength = 255;
  const allowedChars = /^[a-zA-Z0-9\s.,()"\/\-]+$/;

  if (inputValue.length < minLength) {
    // Visualizza un errore
    const errorMessage = document.createElement('div');
    errorMessage.className = 'alert alert-danger';
    errorMessage.textContent = `Errore: Inserisci almeno ${minLength} caratteri.`;
    inputField.parentNode.appendChild(errorMessage);
    submitButton.disabled = true; // Disabilita il bottone
  } else if (inputValue.length > maxLength) {
    // Visualizza un errore
    const errorMessage = document.createElement('div');
    errorMessage.className = 'alert alert-danger';
    errorMessage.textContent = `Errore: Inserisci non più di ${maxLength} caratteri.`;
    inputField.parentNode.appendChild(errorMessage);
    submitButton.disabled = true; // Disabilita il bottone
  } else if (!allowedChars.test(inputValue)) {
    // Visualizza un errore
    const errorMessage = document.createElement('div');
    errorMessage.className = 'alert alert-danger';
    errorMessage.textContent = `Errore: Sono consentiti solo lettere, numeri, spazi e i seguenti caratteri speciali: . , ( ) " / -`;
    inputField.parentNode.appendChild(errorMessage);
    submitButton.disabled = true; // Disabilita il bottone
  } else {
    submitButton.disabled = false; // Abilita il bottone
  }
});

submitButton.addEventListener('click', (e) => {
  if (submitButton.disabled) {
    e.preventDefault(); // Previene la sottomissione del form
  }
});