let actionButton = document.querySelector('.action_button');
let buttonLetterForYou = document.querySelector('.visually_hidden[data-title="for_you"]');
let buttonLetterForAnother = document.querySelector('.visually_hidden[data-title="for_another"]');

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
    buttonLetterForYou.parentNode.removeChild(buttonLetterForYou);
    buttonLetterForAnother.parentNode.removeChild(buttonLetterForAnother);
}

function showForm()
{
    let form = document.querySelector('form.visually_hidden');

    form.classList.remove('visually_hidden');
    form.classList.add('letter_form');
}

function showButtonsForLetters()
{
    let buttonsForLetters = document.querySelectorAll('button.visually_hidden');


    buttonsForLetters.forEach(function(button) {
        button.classList.remove('visually_hidden');
        button.classList.add('button_for_letters');
    });

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
    console.log(actionButton);
}
