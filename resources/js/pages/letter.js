let actionButton = document.querySelector('.action_button');
let buttonsWrapper = document.querySelector('div.visually_hidden');
let buttonLetterForYou = document.querySelector('.button_for_letters[data-title="for_you"]');
let buttonLetterForAnother = document.querySelector('.button_for_letters[data-title="for_another"]');

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
    console.log(actionButton);
}
