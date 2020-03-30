import axios from 'axios';

let actionButton = document.querySelector('.action_button');
let form = document.querySelector('.visually_hidden');
let formSubmit = document.querySelector('.letter_form_submit');

actionButton.addEventListener('click', showForm);
formSubmit.addEventListener('click', requestHandler);

function showForm()
{
    form.classList.remove('visually_hidden');
    form.classList.add('letter_form');

    actionButton.removeEventListener('click', showForm);
    actionButton.style.cursor = 'default';
}

function requestHandler()
{
    let sText = document.querySelector('.letter_form_text').value;

    axios.post('http://calm-mind/api/thought/add', {
        text: sText,
    }).then(function (response) {
        console.log(response.status);
    }).catch(function (response) {
        console.log(response.status);
    });
}

function thoughtAddHandler()
{

    form.submit();
    console.log('вошел в хендлер');
    let sText = document.querySelector('.letter_form_text').value;
    const sParams = 'text=' + sText;

    let obRequest = new XMLHttpRequest();

    obRequest.open('post', 'http://calm-mind/api/thought/add', true);
    obRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    obRequest.onreadystatechange = responseReady;

    obRequest.send(sParams);
}

function responseReady(obRequest)
{
    if(obRequest.readyState === 4 && obRequest.status === 200) {
        console.log(obRequest.responseText);
    }
}
