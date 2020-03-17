let actionButton = document.querySelector('.action_button');
let form = document.querySelector('.letter_form_hidden');

actionButton.addEventListener('click', showForm);

function showForm()
{
    form.classList.remove('letter_form_hidden');
    form.classList.add('letter_form');

    actionButton.removeEventListener('click', showForm);
}

