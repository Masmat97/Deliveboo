// CREATE DISH

// Seleziona l'input "price"
const priceInput = document.getElementById('price');

// Aggiungi un evento di input all'input "price"
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
    } else if (parseFloat(priceValue) <= 0) {
      // Visualizza un errore
      const errorMessage = document.createElement('div');
      errorMessage.className = 'alert alert-danger';
      errorMessage.textContent = 'Il prezzo deve essere un numero positivo.';
      priceInput.parentNode.appendChild(errorMessage);
    }
  });



//---------------------------------------------
//IMAGE
const fileInput = document.getElementById('fileInput');

document.addEventListener('DOMContentLoaded', function() {
    // Seleziona l'elemento input di tipo file
    const fileInput = document.getElementById('image');

    // Aggiungi un evento change all'elemento input
    fileInput.addEventListener('change', verificaTipoFile);

    function verificaTipoFile(event) {
        // Ottieni il file selezionato
        const file = event.target.files[0];
        console.log('Selected file:', file);

        // Verifica il nome del file
        const fileName = file.name;
        let errorMessage = '';
        if (/[^a-zA-Z0-9\._-]/.test(fileName)) {
            errorMessage = 'Il nome del file contiene caratteri non validi.';
        } else if (!['image/png', 'image/jpeg', 'image/gif'].includes(file.type)) {
            errorMessage = 'Il file selezionato non è un\'immagine valida. Sono accettati solo file .png, .jpg e .gif.';
        }

        if (errorMessage) {
            // Visualizza un errore
            const errorContainer = document.getElementById('error-message');
            if (!errorContainer) {
                const errorElement = document.createElement('div');
                errorElement.className = 'alert alert-danger';
                errorElement.id = 'error-message';
                errorElement.textContent = errorMessage;
                fileInput.parentNode.appendChild(errorElement);
                fileInput.classList.add('is-invalid'); // Aggiungi la classe is-invalid per mostrare la fascia rossa
            } else {
                errorContainer.className = 'alert alert-danger';
                errorContainer.textContent = errorMessage;
            }
            // Svuota l'input file
            event.target.value = '';
        } else {
            const errorContainer = document.getElementById('error-message');
            if (errorContainer) {
                errorContainer.parentNode.removeChild(errorContainer);
            }
            fileInput.classList.remove('is-invalid'); // Rimuovi la classe is-invalid se non c'è errore
        }
    }
});

//-----------------------------------------------------
//NAME

const nameInput = document.getElementById('name');
const nameErrorDiv = document.getElementById('name-error');

nameInput.addEventListener('input', (e) => {
  const inputValue = e.target.value;
  const regex = /^[a-zA-Z\s]+$/; // only allow letters and spaces
  const minLength = 4;
  const maxLength = 50;

  if (inputValue !== '') { // only check for errors when user starts typing
    if (!regex.test(inputValue)) {
      // invalid input, show error message
      nameErrorDiv.innerHTML = "Sono ammessi solo lettere e spazi";
      nameErrorDiv.className = 'alert alert-danger';
    } else if (inputValue.length < minLength) {
      // input too short, show error message
      nameErrorDiv.innerHTML ="Il nome deve avere almeno ${minLength} caratteri";
      nameErrorDiv.className = 'alert alert-danger';
    } else if (inputValue.length > maxLength) {
      // input too long, show error message
      nameErrorDiv.innerHTML = "Il nome deve avere non più di ${maxLength} caratteri";
      nameErrorDiv.className = 'alert alert-danger';
    } else {
      // input is valid, remove error message and class
      nameErrorDiv.innerHTML = '';
      nameErrorDiv.className = '';
    }
  } else {
    // input is empty, remove error message and class
    nameErrorDiv.innerHTML = '';
    nameErrorDiv.className = '';
  }
});

//-----------------------------------------------
//INGREDIENTI

const inputField = document.getElementById('ingredient'); // assume a textarea with id "ingredient"
const messageElement = document.getElementById('message'); // assume a message element with id "message"

inputField.addEventListener('input', (e) => {
    const inputValue = e.target.value;
    const minLength = 4;
    const maxLength = 255;
    const allowedChars = /^[a-zA-Z0-9\s.,()"\/\-]+$/; // allowed characters: letters, numbers, spaces, and specific special characters

    if (inputValue.length < minLength) {
        messageElement.textContent = `Errore: Inserisci almeno ${minLength} caratteri.`;
        messageElement.className = 'alert alert-danger';
        return;
    }

    if (inputValue.length > maxLength) {
        messageElement.textContent = `Errore: Inserisci non più di ${maxLength} caratteri.`;
        messageElement.className = 'alert alert-danger';
        return;
    }

    if (!allowedChars.test(inputValue)) {
        messageElement.textContent = `Errore: Sono consentiti solo lettere, numeri, spazi e i seguenti caratteri speciali: . , ( ) " / -`;
        messageElement.className = 'alert alert-danger';
        return;
    }

    // if all checks pass, the input is valid
    messageElement.textContent = '';
    messageElement.className = '';
});
