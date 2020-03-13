let actionButton = document.querySelector('.action_button');
let timerId;

actionButton.addEventListener('click', actionButtonHandler);

function actionButtonHandler() {
    actionButton.parentNode.removeChild(actionButton);

    let content = document.querySelector('.wrapper_for_home');
    content.style.opacity = '0';
    content.style.display = 'inline-block';

    // actionButton.style.opacity = '0';
    // actionButton.style.pointerEvents = 'none';
    timerId = setInterval(showContent, 100, content);
}

function showContent(content) {
    content.style.opacity = +content.style.opacity + 0.1;

    if (content.style.opacity === '1.0') {
        clearInterval(timerId);
    }
}
