window.addEventListener('load', () => {
    const h1 = document.getElementsByTagName('h1')[0];

    h1.addEventListener('mouseover', () => {
        h1.style.color = 'blue';
        h1.style.backgroundColor = 'green';
    });

    h1.addEventListener('mouseout', () => {
        h1.style.color = 'white';
        h1.style.backgroundColor = 'black';
    });
});