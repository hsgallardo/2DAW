window.addEventListener('load', () => {
    const boton = document.getElementsByTagName('button')[0];

    boton.addEventListener('click', () => {
        const paginaNueva = window.open();
        paginaNueva.document.write(`<h1>${new Date().getDay()} del ${new Date().getMonth()} de ${new Date().getFullYear()}</h1>`);
        paginaNueva.document.close();
    });
});