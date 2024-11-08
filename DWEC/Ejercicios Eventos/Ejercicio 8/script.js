window.addEventListener('load', () => {
    const div = document.getElementsByTagName('div')[0];

    div.addEventListener('mousedown', () => {
        div.style.backgroundColor = 'yellow';
    });

    div.addEventListener('mouseup', () => {
        div.style.backgroundColor = 'red';
    });
});