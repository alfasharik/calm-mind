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

    axios.post('http://calm-mind/api/thought/add', {
        text: sText,
    }).then(function (response) {
        clearField();
        addDescription();
    }).catch(function (response) {
    });
}

function clearField()
{
    let field = document.querySelector('.thought_text');
    field.value = '';
}

function addDescription()
{
    let description = document.getElementById('modal_window');

    description.classList.remove('visually_hidden');
    description.classList.add('modal_window');
}
