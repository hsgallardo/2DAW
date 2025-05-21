document.getElementById('boton').addEventListener('click', () => {
    fetch('https://rickandmortyapi.com/api/character')
        .then(response => response.json())
        .then(data => {
            const contenedor1 = document.getElementById('imagenes');
            const contenedor2 = document.getElementById('estadisticas');


            contenedor1.innerHTML = '';
            contenedor2.innerHTML = '';

            const character = data.results[0];  

            const imagenes = document.createElement('img');
            imagenes.src = character.image;

            const gender = document.createElement('div');
            gender.textContent = character.gender;

            const name = document.createElement('div');
            name.textContent = character.name;

            const status = document.createElement('div');
            status.textContent = character.status;

            contenedor1.appendChild(imagenes);
            contenedor2.append(gender, name, status);
        });
});
