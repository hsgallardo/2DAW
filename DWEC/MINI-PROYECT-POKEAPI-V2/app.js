const nombre = document.getElementById('pokemon-input');
const btnBuscar = document.getElementById('search-btn');
const dataPokemon = document.getElementById('pokemon-data');
// const coleccion = [];


/**
 * Ejercicio 1: Buscar y mostrar información del Pokemon con FETCH
 */
/**
 * Función para buscar pokemon ejercicio 1 y 2.
 * 
*/

async function buscarPokemon() {
    try {
        const nombreMinusculas = nombre.value.toLowerCase();

        // Esperamos la respuesta de la API
        const response = await fetch(`https://pokeapi.co/api/v2/pokemon/${nombreMinusculas}`);
        if (!response.ok) {
            throw new Error('Error al cargar la API');
        }

        // Procesamos la respuesta como JSON
        const data = await response.json();

        // Limpiamos el contenido anterior
        dataPokemon.innerHTML = '';

        // Creamos los elementos necesarios
        let h1 = document.createElement('h1');
        let h2 = document.createElement('h2');
        let imagen = document.createElement('img');

        // Extraemos los datos de la respuesta
        const id = data.id;
        const sprite = data.sprites.front_default;

        h1.textContent = `Nombre: ${nombre.value}`;
        h2.textContent = `ID: ${id}`;
        imagen.src = sprite;
        imagen.alt = `${nombre.value}`;
        imagen.style.width = '150px';

        // Añadimos los elementos 
        dataPokemon.appendChild(h1);
        dataPokemon.appendChild(h2);
        dataPokemon.appendChild(imagen);
    } catch (error) {
        console.error(error);
    }
}

// btnBuscar.addEventListener('click', buscarPokemon);

/**
 *  Descomentar para hacer uso de la función.
 */
//document.getElementById('search-btn').addEventListener('click',buscarPokemon);


/**
 * Ejercicio 3: buscar pokemon con JQuery AJAX.
 */

function buscarPokemonJQueryAJAX(){
    const nombre = $('#pokemon-input').val().toLowerCase();

    $.ajax({
        url: `https://pokeapi.co/api/v2/pokemon/${nombre}`,
        method: 'GET',
        success: (data) => {            
            $('#pokemon-data').empty();

            const h1 = $('<h1>').text(`Nombre: ${data.name}`);
            const h2 = $('<h2>').text(`ID: ${data.id}`);
            const imagen = $('<img>')
                .attr('src',data.sprites.front_default)
                .attr('alt', data.name)
                .css('width', '150px');

            const audio = $('<audio>').attr('controls');

            const source = $('<source>')
                .attr('src', data.cries.legacy)
                .attr('type','audio/mpeg');

            audio.append(source);

            $('#pokemon-data').append(h1,h2,imagen);
        },
        error: () => {
            console.error("Error al cargar la API");
            $('#pokemon-data').html('<p>No se ha encontrado al pokemon buscado</p>');
        }
    });
}

// buscarPokemonJQueryAJAX

// $(document).ready(function(){
//     $('#search-btn').on('click', buscarPokemonJQueryAJAX);
// }); 

/* Ejercicio 4: Crear una lista de Pokémon capturados */


function ListaPokemonJQueryAJAX(){
    const nombre = $('#pokemon-input').val().toLowerCase();

    $.ajax({
        url: `https://pokeapi.co/api/v2/pokemon/${nombre}`,
        method: 'GET',
        async: false,
        success: (data) => {
            $('#pokemon-data').empty();

            const h1 = $('<h1>').text(`Nombre: ${data.name}`);
            const h2 = $('<h2>').text(`ID: ${data.id}`);
            const imagen = $('<img>')
                .attr('src',data.sprites.front_default)
                .attr('alt', data.name)
                .addClass('imgPokemon');

            const btnAñadir = $('<button>')
                .text('Añadir Colección')
                .addClass('btn-style');

            const audio = $('<audio>')
                .attr('controls', true);

            const source = $('<source>')
                .attr('src', `${data.cries.latest}`)
                .attr('type', 'audio/mpeg');
                
            audio.append(source);

            $('#pokemon-data').append(h1,h2,imagen,btnAñadir,audio);

            btnAñadir.on('click', () => {
                localStorage.setItem(data.name,data.sprites.front_default);
            });
        },
        error: () => {
            console.error("Error al cargar la API")
            $('#pokemon-data').html('<p>No se ha encontrado al pokemon buscado');
        }
    });
}

$(document).ready(function(){
    $('#search-btn').on('click', ListaPokemonJQueryAJAX);
});

function VisualizarColeccion() {
    $('#collection-list').empty();

    const coleccion = Object.keys(localStorage);
    
    coleccion.forEach(pokemon => {
        const urlImagen = localStorage.getItem(pokemon);
        const h1 = $('<h1>').text(pokemon);
        const imagen = $('<img>').attr('src',urlImagen);
        const borrar = $('<button>' , {id: 'btn-' + pokemon, class: 'btn-style'}).text('Eliminar');

        borrar.on('click', () => {
            localStorage.removeItem(pokemon);
            VisualizarColeccion();
        });

        const div = $('<div>').append(h1,imagen,borrar).addClass('pokemon-item');

        $('#collection-list').append(div);
    });
}

$(document).ready( () => {
    $('#view-collection-btn').on('click', VisualizarColeccion);
});

/* EJERCICIO 5 Filtrar Pokémon por Tipo con Promesas (OPCIONAL) */

function FiltradoTipo(){
    const tipo = $('#pokemon-tipo').val().toLowerCase();

    $.ajax({
        url: `https://pokeapi.co/api/v2/type/${tipo}`,
        method: 'GET',
        async: false,
        success: (data) => {
            
            $('#pokemon-data').empty();

            for(let i = 0;i < 5; i++){
                const nombre = data.pokemon[i].pokemon.name;
                const url = data.pokemon[i].pokemon.url;

                $.ajax({
                    url: url,
                    method: 'GET',
                    success: (pokemondatos) => {
                        const h1 = $('<h1>').text(nombre);
                        const imagen = $('<img>')
                            .attr('src', pokemondatos.sprites.front_default)
                            .addClass('imgPokemon');
                        
                            $('#pokemon-data').append(h1, imagen);
                    }
                });
            }
        }
    });
}

$(document).ready( () => {
    $('#tipo-btn').on('click', FiltradoTipo);
})