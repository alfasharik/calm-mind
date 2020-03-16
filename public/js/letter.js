let buttonLetterForYou = document.querySelector('.button_for_letters[data-title="for_you"]');
let buttonLetterForAnother = document.querySelector('.button_for_letters[data-title="for_another"]');

buttonLetterForYou.addEventListener('click', buttonsForLettersHandler);
buttonLetterForAnother.addEventListener('click', buttonsForLettersHandler);

let content = document.querySelector('.content');

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
}

function removeButtons()
{
    buttonLetterForYou.parentNode.removeChild(buttonLetterForYou);
    buttonLetterForAnother.parentNode.removeChild(buttonLetterForAnother);
}

function showForm()
{
    let form = document.querySelector('.letter_form_hidden');

    form.classList.remove('letter_form_hidden');
    form.classList.add('letter_form');
}

function changeActionButtonText(text)
{
    let actionButton = document.querySelector('.action_button');
    actionButton.innerHTML = text;
}
