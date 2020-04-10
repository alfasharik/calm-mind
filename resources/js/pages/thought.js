import axios from 'axios';

let actionButton = document.querySelector('.action_button');

let form = document.querySelector('.visually_hidden');

let formSubmit = document.querySelector('.letter_form_submit');

actionButton.addEventListener('click', showForm);
formSubmit.addEventListener('click', addThought);

function showForm()
{
    form.classList.remove('visually_hidden');
    form.classList.add('letter_form');

    actionButton.removeEventListener('click', showForm);
    actionButton.style.cursor = 'default';
}

function addThought()
{
    let sText = document.querySelector('.letter_form_text').value;

    axios.post('http://calm-mind/thoughts', {
        text: sText,
    }).then(function (response) {
        clearField();
        addDescription('Форма отправлена!');
    }).catch(function (response) {
        addDescription('Заполните все поля!');
    });
}

function clearField()
{
    let field = document.querySelector('.thought_text');
    field.value = '';
}

function addDescription(textDesc)
{
    let modalWindow = document.getElementById('modal_window');
    let description = document.querySelector('.modal_window_desc');

    description.innerHTML = textDesc;
    modalWindow.classList.remove('visually_hidden');
    modalWindow.classList.add('modal_window');
}
