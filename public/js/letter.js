let buttonLetterForYou = document.querySelector('.button_for_letters[data-title="for_you"]');
let buttonLetterForAnother = document.querySelector('.button_for_letters[data-title="for_another"]');

buttonLetterForYou.addEventListener('click', buttonsForLettersHandler);
buttonLetterForAnother.addEventListener('click', buttonsForLettersHandler);

let content = document.querySelector('.content');


function buttonsForLettersHandler()
{
    changeContentTitle();
    removeButtons();

    let form = createForm();
    content.appendChild(form);
}

function removeButtons()
{
    buttonLetterForYou.parentNode.removeChild(buttonLetterForYou);
    buttonLetterForAnother.parentNode.removeChild(buttonLetterForAnother);
}

function createForm()
{
    let form = document.createElement('form');
    form.method = 'post';
    form.classList.add('letter_form');

    let title = createFormTitle();
    let text = createFormText();
    let submit = createFormSubmit();

    form.appendChild(title);
    form.appendChild(text);
    form.appendChild(submit);

    return form;
}

function createFormTitle()
{
    let title = document.createElement('input');
    title.type = 'text';
    title.name = 'title';
    title.classList.add('letter_form_title');

    return title;
}

function createFormText()
{
    let text = document.createElement('textarea');
    text.name = 'text';
    text.classList.add('letter_form_text');

    return text;
}

function createFormSubmit()
{
    let submit = document.createElement('input');
    submit.type = 'submit';
    submit.classList.add('letter_form_submit');

    return submit;
}

function changeContentTitle()
{
    let contentTitle = document.querySelector('.content_element_title');
    contentTitle.innerHTML = 'Пора писать письмо себе!(не забывай любить себя)';
}
