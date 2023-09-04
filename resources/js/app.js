import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

// RECUPERO TUTTI I DELETE_BUTTON DI OGNI ANIMALE
const animalDeleteButton = document.querySelectorAll('.animal-delete-button');

// CICLO L'ARRAY CONTENENTE TUTTI I DELETE_BUTTON
animalDeleteButton.forEach((button) => {

    // PER OGNI DELETE_BUTTON, AGGIUNGO UN EVENT_LISTENER "CLICK"
    button.addEventListener('click', (event) => {

        // QUANDO L'UTENTE CLICCA SUL DELETE_BUTTON, IL FORM NON VIENE AVVIATO GRAZIE A QUESTO COMANDO
        event.preventDefault();

        // QUANDO L'UTENTE CLICCA SUL DELETE_BUTTON, MI VIENE PASSATO UN DATA ATTRIBUTE, LO RECUPERO TRAMITE QUESTA STRINGA
        const animalName = button.getAttribute('data-animal-nome');

        // RECUPERO IL TAG HTML DELLA MODALE DOVE INSERIRE IL DATA ATTRIBUTE RECUPERATO PRIMA
        const modalAnimalName = document.getElementById('modal-animal-name');

        // INSERISCO IL DATA ATTRIBUTE DENTRO IL "MODAL_ANIMAL_NAME"
        modalAnimalName.innerText = animalName;

        // RECUPERO L'HTML DELLA MODALE "MODAL_ANIMAL_DELETE", DALLA VIEW ADMIN -> PARTIALS
        const modal = document.getElementById('animalConfirmDeleteModal');

        // CREO LA MODALE COME OGGETTO DI BOOTSTRAP, PARTENDO DALL'HTML DELLA MODALE RECUPERATA PRIMA
        const bootstrapModal = new bootstrap.Modal(modal);

        // QUANDO L'UTENTE CLICCA NEL DELETE_BUTTON, MOSTRO LA "BOOTSTRAP_MODAL"
        bootstrapModal.show();

        // RECUPERO IL PULSANTE DI "CONFERMA CANCELLAZIONE" PRESENTE NELLA MODALE
        const animalConfirmDeleteButton = document.getElementById('animal-confirm-delete-button');

        // AL PULSANTE DI "CONFERMA CANCELLAZIONE", AGGIUNGO UN EVENT_LISTENER "CLICK"
        animalConfirmDeleteButton.addEventListener('click', () => {

            // QUANDO L'UTENTE CLICCA IL PULSANTE DI "CONFERMA CANCELLAZIONE", RECUPERO IL "DELETE_BUTTON", ED ESEGUO LA FORM DI CANCELLAZIONE
            button.submit();
        })
    })
})

// RECUPERO TUTTI I DELETE_BUTTON DI OGNI VACCINAZIONE
const vaccinationDeleteButton = document.querySelectorAll('.vaccination-delete-button');

// CICLO L'ARRAY CONTENENTE TUTTI I DELETE_BUTTON
vaccinationDeleteButton.forEach((button) => {

    // PER OGNI DELETE_BUTTON, AGGIUNGO UN EVENT_LISTENER "CLICK"
    button.addEventListener('click', (event) => {

        // QUANDO L'UTENTE CLICCA SUL DELETE_BUTTON, IL FORM NON VIENE AVVIATO GRAZIE A QUESTO COMANDO
        event.preventDefault();

        // QUANDO L'UTENTE CLICCA SUL DELETE_BUTTON, MI VIENE PASSATO UN DATA ATTRIBUTE, LO RECUPERO TRAMITE QUESTA STRINGA
        const vaccinationName = button.getAttribute('data-vaccination-nome');

        // RECUPERO IL TAG HTML DELLA MODALE DOVE INSERIRE IL DATA ATTRIBUTE RECUPERATO PRIMA
        const modalVaccinationName = document.getElementById('modal-vaccination-name');

        // INSERISCO IL DATA ATTRIBUTE DENTRO IL "MODAL_VACCINATION_NAME"
        modalVaccinationName.innerText = vaccinationName;

        // RECUPERO L'HTML DELLA MODALE "MODAL_VACCINATION_DELETE", DALLA VIEW ADMIN -> PARTIALS
        const modal = document.getElementById('vaccinationConfirmDeleteModal');

        // CREO LA MODALE COME OGGETTO DI BOOTSTRAP, PARTENDO DALL'HTML DELLA MODALE RECUPERATA PRIMA
        const bootstrapModal = new bootstrap.Modal(modal);

        // QUANDO L'UTENTE CLICCA NEL DELETE_BUTTON, MOSTRO LA "BOOTSTRAP_MODAL"
        bootstrapModal.show();

        // RECUPERO IL PULSANTE DI "CONFERMA CANCELLAZIONE" PRESENTE NELLA MODALE
        const vaccinationConfirmDeleteButton = document.getElementById('vaccination-confirm-delete-button');

        // AL PULSANTE DI "CONFERMA CANCELLAZIONE", AGGIUNGO UN EVENT_LISTENER "CLICK"
        vaccinationConfirmDeleteButton.addEventListener('click', () => {

            // QUANDO L'UTENTE CLICCA IL PULSANTE DI "CONFERMA CANCELLAZIONE", RECUPERO IL "DELETE_BUTTON", ED ESEGUO LA FORM DI CANCELLAZIONE
            button.submit();
        })
    })
})

// RECUPERO TUTTI I DELETE_BUTTON DI OGNI MALATTIA
const diseaseDeleteButton = document.querySelectorAll('.disease-delete-button');

// CICLO L'ARRAY CONTENENTE TUTTI I DELETE_BUTTON
diseaseDeleteButton.forEach((button) => {

    // PER OGNI DELETE_BUTTON, AGGIUNGO UN EVENT_LISTENER "CLICK"
    button.addEventListener('click', (event) => {

        // QUANDO L'UTENTE CLICCA SUL DELETE_BUTTON, IL FORM NON VIENE AVVIATO GRAZIE A QUESTO COMANDO
        event.preventDefault();

        // QUANDO L'UTENTE CLICCA SUL DELETE_BUTTON, MI VIENE PASSATO UN DATA ATTRIBUTE, LO RECUPERO TRAMITE QUESTA STRINGA
        const diseaseName = button.getAttribute('data-disease-nome');

        // RECUPERO IL TAG HTML DELLA MODALE DOVE INSERIRE IL DATA ATTRIBUTE RECUPERATO PRIMA
        const modalDiseaseName = document.getElementById('modal-disease-name');

        // INSERISCO IL DATA ATTRIBUTE DENTRO IL "MODAL_DISEASE_NAME"
        modalDiseaseName.innerText = diseaseName;

        // RECUPERO L'HTML DELLA MODALE "MODAL_DISEASE_DELETE", DALLA VIEW ADMIN -> PARTIALS
        const modal = document.getElementById('diseaseConfirmDeleteModal');

        // CREO LA MODALE COME OGGETTO DI BOOTSTRAP, PARTENDO DALL'HTML DELLA MODALE RECUPERATA PRIMA
        const bootstrapModal = new bootstrap.Modal(modal);

        // QUANDO L'UTENTE CLICCA NEL DELETE_BUTTON, MOSTRO LA "BOOTSTRAP_MODAL"
        bootstrapModal.show();

        // RECUPERO IL PULSANTE DI "CONFERMA CANCELLAZIONE" PRESENTE NELLA MODALE
        const diseaseConfirmDeleteButton = document.getElementById('disease-confirm-delete-button');

        // AL PULSANTE DI "CONFERMA CANCELLAZIONE", AGGIUNGO UN EVENT_LISTENER "CLICK"
        diseaseConfirmDeleteButton.addEventListener('click', () => {

            // QUANDO L'UTENTE CLICCA IL PULSANTE DI "CONFERMA CANCELLAZIONE", RECUPERO IL "DELETE_BUTTON", ED ESEGUO LA FORM DI CANCELLAZIONE
            button.submit();
        })
    })
})