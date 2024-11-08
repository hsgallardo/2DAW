document.getElementById('load-button').addEventListener('click', fetchImagenes);

function fetchImagenes() {
     
    fetch('https://rickandmortyapi.com/api/character')
        .then(response => response.json())
        .then(data => {
           
            const contenedor = document.getElementById('images');
                        
            data.results.forEach(character => {
                const imagenes = document.createElement('img');
                
                imagenes.src = character.image;                  
                 
                contenedor.appendChild(imagenes); 
            });
        })
}








