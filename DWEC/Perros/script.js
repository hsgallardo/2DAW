//BOTÓN 1
document.getElementById('load-button').addEventListener('click', getDogWithPromise);

function getDogWithPromise() {
    fetch('https://api.thedogapi.com/v1/images/search')
        .then(response => response.json())
        .then(data => {
            const contenedor = document.getElementById('images');
            
            data.forEach(dog => {
                const imagen = document.createElement('img');
                
                imagen.src = dog.url;
                 
                contenedor.appendChild(imagen); 
            });
        })
        .catch(error => {
            console.error("Error al cargar la imagen:", error);
        });
}


//BOTÓN 2
document.getElementById('load2-button').addEventListener('click', getDogWithAsyncAwait);

async function getDogWithAsyncAwait() {
    try {
        const response = await fetch('https://api.thedogapi.com/v1/images/search');
        const data = await response.json();

        const contenedor = document.getElementById('images');
        
        data.forEach(dog => {
            const imagen = document.createElement('img');
            imagen.src = dog.url; 
            contenedor.appendChild(imagen);
        });
    } catch (error) {
        console.error("Error al cargar la imagen:", error);
    }
}
