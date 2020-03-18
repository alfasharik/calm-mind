let actionButton = document.querySelector('.action_button');
let timerId;

actionButton.addEventListener('click', actionButtonHandler);

function actionButtonHandler()
{
    let wrapper = document.querySelector('.visually_hidden');

    wrapper.classList.remove('visually_hidden');
    wrapper.style.opacity = '0';
    wrapper.style.display = 'inline-block';

    timerId = setInterval(showContent, 100, wrapper);
}

function showContent(wrapper)
{
   wrapper.style.opacity = +wrapper.style.opacity + 0.1;

    if (wrapper.style.opacity === '1') {
        clearInterval(timerId);
        actionButton.removeEventListener('click', actionButtonHandler);
        actionButton.style.cursor = 'default';
    }
}
