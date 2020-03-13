let actionButton = document.querySelector('.action_button');
let timerId;

actionButton.addEventListener('click', actionButtonHandler);

function actionButtonHandler() {
    let content = document.querySelector('.content');
    content.style.opacity = '0';
    content.style.display = 'block';

    actionButton.style.opacity = '0';
    actionButton.style.pointerEvents = 'none';
    timerId = setInterval(showContent, 100, content);
}

function showContent(content) {
    content.style.opacity = +content.style.opacity + 0.1;

    if (content.style.opacity === '0.7') {
        clearInterval(timerId);
    }
}
