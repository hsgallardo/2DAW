window.addEventListener('load', () => {
    const boton1 = document.getElementById('boton1');
    const boton2 = document.getElementById('boton2');
    const boton3 = document.getElementById('boton3');

    boton1.addEventListener('click', () => {
        alert('Botón 1');
    });

    boton2.addEventListener('click', () => {
        alert('Botón 2');
    });

    boton3.addEventListener('click', () => {
        alert('Botón 3');
    });
});