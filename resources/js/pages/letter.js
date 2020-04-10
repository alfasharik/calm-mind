import axios from "axios";

let actionButton = document.querySelector('.action_button');

let buttonsWrapper = document.querySelector('div.visually_hidden');
let buttonLetterForYou = document.querySelector('.button_for_letters[data-title="for_you"]');
let buttonLetterForAnother = document.querySelector('.button_for_letters[data-title="for_another"]');

let formSubmit = document.querySelector('.letter_form_submit');

actionButton.addEventListener('click', showButtonsForLetters);
formSubmit.addEventListener('click', addLetter);

function buttonsForLettersHandler(event)
{
    let text = 'Уверен тебе есть что написать близкому, просто начни!';

    if (event.target.dataset.title === 'for_you') {
        let titleDesc = document.querySelector('.letter_form_elem_desc');
        let title = document.querySelector('.letter_form_title');

        titleDesc.parentNode.removeChild(titleDesc);
        title.parentNode.removeChild(title);

        text = 'Пора писать письмо себе!(не забывай любить себя)';
    }

    changeActionButtonText(text);
    removeButtons();

    showForm();
    actionButton.removeEventListener('click', showButtonsForLetters);
}

function removeButtons()
{
    buttonsWrapper.parentNode.removeChild(buttonsWrapper);
}

function showForm()
{
    let form = document.querySelector('form.visually_hidden');

    form.classList.remove('visually_hidden');
    form.classList.add('letter_form');
}

function showButtonsForLetters()
{
    let buttonsWrapper = document.querySelector('div.visually_hidden');

    buttonsWrapper.classList.remove('visually_hidden');
    buttonsWrapper.classList.add('buttons_wrapper');

    actionButton.style.cursor = 'default';
    addListenersAfterShow();
}

function addListenersAfterShow()
{
    buttonLetterForYou.addEventListener('click', buttonsForLettersHandler);
    buttonLetterForAnother.addEventListener('click', buttonsForLettersHandler);
}

function changeActionButtonText(text)
{
    let actionButton = document.querySelector('.action_button');
    actionButton.innerHTML = text;
}

function addLetter() {
    let sToWhom;

    if (document.getElementById('to_whom')) {
        sToWhom = document.getElementById('to_whom').value;
    } else {
        sToWhom = null;
    }

    axios.post('http://calm-mind/letters', {
        to_whom: sToWhom,
        wrath_text: document.getElementById('wrath_text').value,
        sad_text: document.getElementById('sad_text').value,
        fear_text: document.getElementById('fear_text').value,
        regret_text: document.getElementById('regret_text').value,
        love_text: document.getElementById('love_text').value,
    }).then(function (response) {
        clearFields();
        addDescription('Форма отправлена!');
    }).catch(function (response) {
        addDescription('Заполните все поля!');
    });
}

function clearFields()
{
    if (document.getElementById('to_whom')) {
        document.getElementById('to_whom').value = '';
    }

    document.getElementById('wrath_text').value = '';
    document.getElementById('sad_text').value = '';
    document.getElementById('fear_text').value = '';
    document.getElementById('regret_text').value = '';
    document.getElementById('love_text').value = '';
}

function addDescription(textDesc)
{
    let modalWindow = document.getElementById('modal_window');
    let description = document.querySelector('.modal_window_desc');

    description.innerHTML = textDesc;
    modalWindow.classList.remove('visually_hidden');
    modalWindow.classList.add('modal_window');
}
