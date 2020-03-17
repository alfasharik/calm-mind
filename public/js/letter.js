let actionButton = document.querySelector('.action_button');

actionButton.addEventListener('click', showButtonsForLetters);



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
    let buttonLetterForYou = document.querySelector('.button_for_letters[data-title="for_you"]');
    let buttonLetterForAnother = document.querySelector('.button_for_letters[data-title="for_another"]');

    buttonLetterForYou.parentNode.removeChild(buttonLetterForYou);
    buttonLetterForAnother.parentNode.removeChild(buttonLetterForAnother);
}

function showForm()
{
    let form = document.querySelector('.letter_form_hidden');

    form.classList.remove('letter_form_hidden');
    form.classList.add('letter_form');
}

function showButtonsForLetters()
{
    let buttonsForLetters = document.querySelectorAll('.button_for_letters_hidden');

    buttonsForLetters.forEach(function(button) {
        button.classList.remove('button_for_letters_hidden');
        button.classList.add('button_for_letters');
    });

    addListenersAfterShow();
}

function addListenersAfterShow()
{
    let buttonLetterForYou = document.querySelector('.button_for_letters[data-title="for_you"]');
    let buttonLetterForAnother = document.querySelector('.button_for_letters[data-title="for_another"]');

    buttonLetterForYou.addEventListener('click', buttonsForLettersHandler);
    buttonLetterForAnother.addEventListener('click', buttonsForLettersHandler);
}

function changeActionButtonText(text)
{
    let actionButton = document.querySelector('.action_button');
    actionButton.innerHTML = text;
}
