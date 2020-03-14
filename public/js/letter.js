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
    form.classList.add('letter_form');

    appendFormChildren(form);

    return form;
}

function appendFormChildren(form) {
    let titleDesc = createTitleDesc();
    let title = createFormTitle();
    let textDesc = createTextDesc();
    let text = createFormText();
    let submit = createFormSubmit();

    form.appendChild(titleDesc);
    form.appendChild(title);
    form.appendChild(textDesc);
    form.appendChild(text);
    form.appendChild(submit);
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

function createButton()
{
    let button = document.createElement('div');
    button.classList.add('letter_form_submit');
    button.innerHTML = 'Отправить!';

    return button;
}

function createFormSubmit()
{
    let anchor = document.createElement('a');
    anchor.href = '#';

    let button = createButton();

    anchor.appendChild(button);

    return anchor;
}

function createTitleDesc()
{
    let titleDesc = document.createElement('p');
    titleDesc.classList.add('letter_form_elem_desc');
    titleDesc.innerHTML = 'Кому пишем?';

    return titleDesc;
}

function createTextDesc()
{
    let textDesc = document.createElement('p');
    textDesc.classList.add('letter_form_elem_desc');
    textDesc.innerHTML = 'Опиши свои чувства!';

    return textDesc;
}

function changeContentTitle()
{
    let contentTitle = document.querySelector('.content_element_title');
    contentTitle.innerHTML = 'Пора писать письмо себе!(не забывай любить себя)';
}
