//BOTÓN 1 Fetch Promesa
document.getElementById('boton1').addEventListener('click', getDogWithPromise);

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


//BOTÓN 2 Async Await
document.getElementById('boton2').addEventListener('click', getDogWithAsyncAwait);

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
