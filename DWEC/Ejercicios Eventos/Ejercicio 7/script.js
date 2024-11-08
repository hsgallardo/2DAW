window.addEventListener('load', () => {
    const div = document.getElementsByTagName('div')[0];

    div.addEventListener('dblclick', () => {
        div.textContent = div.textContent * 2;
    });
});