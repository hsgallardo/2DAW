
/**
 * Ejercicio 1 y 2 Función para buscar pokemon.
 **/

async function buscarPokemon() {
    
    const pokemonInput = document.getElementById('pokemon-input');
    const pokemonName = pokemonInput.value.toLowerCase();
    const resultSection = document.getElementById('result-section');
    const pokemonDataDiv = document.getElementById('pokemon-data');

    
    pokemonDataDiv.innerHTML = '';
    resultSection.classList.add('hidden');

    try {
        const response = await fetch(`https://pokeapi.co/api/v2/pokemon/${pokemonName}`);
        
        if (!response.ok) {
            throw new Error('Pokémon no encontrado');
        }
        
        const data = await response.json();
        
        const pokemonInfo = {
            name: data.name,
            id: data.id,
            sprite: data.sprites.front_default
        };
        
        mostrarPokemon(pokemonInfo);

    } catch (error) {
        
        alert(error.message);
    }
}

function mostrarPokemon(pokemonInfo) {
    const pokemonDataDiv = document.getElementById('pokemon-data');
    
    pokemonDataDiv.innerHTML = `
        <h3>${pokemonInfo.name} (ID: ${pokemonInfo.id})</h3>
        <img src="${pokemonInfo.sprite}" alt="${pokemonInfo.name}">`;
   
    document.getElementById('result-section').classList.remove('hidden');
}

//document.getElementById('search-btn').addEventListener('click', buscarPokemon);




/**
 * Ejercicio 3: buscar pokemon con JQuery AJAX.
 **/

function buscarPokemonJQueryAJAX() {
    const pokemonName = $('#pokemon-input').val().toLowerCase();
    const $resultSection = $('#result-section');
    const $pokemonDataDiv = $('#pokemon-data');

    $pokemonDataDiv.html('');
    $resultSection.addClass('hidden');

    $.ajax({
        url: `https://pokeapi.co/api/v2/pokemon/${pokemonName}`,
        method: 'GET',
        success: function(data) {
            const pokemonInfo = {
                name: data.name,
                id: data.id,
                sprite: data.sprites.front_default
            };

            mostrarPokemonJQuery(pokemonInfo);
        },
        error: function() {
            alert('Pokémon no encontrado');
        }
    });
}

function mostrarPokemonJQuery(pokemonInfo) {
    const $pokemonDataDiv = $('#pokemon-data');

    $pokemonDataDiv.html(`
        <h3>${pokemonInfo.name} (ID: ${pokemonInfo.id})</h3>
        <img src="${pokemonInfo.sprite}" alt="${pokemonInfo.name}">
    `);

    $('#result-section').removeClass('hidden');
}

$('#search-btn').on('click', buscarPokemonJQueryAJAX);


/*
$(document).ready(function(){
    $('#search-btn').on('click', buscarPokemonJQueryAJAX);
}); 
*/




/**
 * Ejercicio 4: Crear una lista de Pokémon capturados.
 **/

const coleccionPokemon = [];

// Función para buscar Pokémon usando jQuery AJAX
function buscarPokemonJQueryAJAX() {
    const pokemonName = $('#pokemon-input').val().toLowerCase();
    const $resultSection = $('#result-section');
    const $pokemonDataDiv = $('#pokemon-data');

    $pokemonDataDiv.html('');  
    $resultSection.addClass('hidden');  

    $.ajax({
        url: `https://pokeapi.co/api/v2/pokemon/${pokemonName}`,
        method: 'GET',
        success: function(data) {
            const pokemonInfo = {
                name: data.name,
                id: data.id,
                sprite: data.sprites.front_default
            };

            mostrarPokemonJQuery(pokemonInfo);
        },
        error: function() {
            alert('Pokémon no encontrado');
        }
    });
}

function mostrarPokemonJQuery(pokemonInfo) {
    const $pokemonDataDiv = $('#pokemon-data');

    $pokemonDataDiv.html(`
        <h3>${pokemonInfo.name} (ID: ${pokemonInfo.id})</h3>
        <img src="${pokemonInfo.sprite}" alt="${pokemonInfo.name}">
        <button id="add-to-collection-btn">Agregar a la colección</button>`);

    $('#result-section').removeClass('hidden');  

    $('#add-to-collection-btn').on('click', function() {
        agregarAPokemonColeccion(pokemonInfo);
    });
}

function agregarAPokemonColeccion(pokemonInfo) {
    return new Promise((resolve, reject) => {
        if (coleccionPokemon.some(pokemon => pokemon.name === pokemonInfo.name)) {
            alert('Este Pokémon ya está en tu colección.');
            reject('Este Pokémon ya está en la colección');
        } else {
            coleccionPokemon.push(pokemonInfo);
            console.log('Colección actualizada:', coleccionPokemon);  
            alert(`${pokemonInfo.name} ha sido agregado a tu colección.`);
            resolve('Pokémon agregado');
        }
    });
}

function verColeccion() {
    const $collectionList = $('#collection-list');
    $collectionList.html('');  

    coleccionPokemon.forEach(pokemon => {
        $collectionList.append(`
            <div class="pokemon-item">
                <h4>${pokemon.name} (ID: ${pokemon.id})</h4>
                <img src="${pokemon.sprite}" alt="${pokemon.name}">
            </div>
        `);
    });

    $('#collection-section').removeClass('hidden');  
}

$('#search-btn').on('click', buscarPokemonJQueryAJAX);
$('#view-collection-btn').on('click', verColeccion);



/**
 * Ejercicio 5: Filtrar Pokémon por Tipo con Promesas (OPCIONAL)
 **/

function filtrarPokemonPorTipo() {
    const tipoSeleccionado = $('#type-select').val();  
    const $filteredSection = $('#filtered-section');
    const $filteredPokemonList = $('#filtered-pokemon-list');

    $filteredPokemonList.html('');  
    $filteredSection.addClass('hidden');  

    $.ajax({
        url: `https://pokeapi.co/api/v2/type/${tipoSeleccionado}`,  
        method: 'GET',
        success: function(data) {           
            const pokemonPromises = data.pokemon.slice(0, 5).map(pokemonData => {
                return $.ajax({
                    url: pokemonData.pokemon.url,  
                    method: 'GET',
                });
            });

            Promise.all(pokemonPromises)
                .then(pokemonResults => {
                    pokemonResults.forEach(pokemon => {
                        const pokemonInfo = {
                            name: pokemon.name,
                            sprite: pokemon.sprites.front_default
                        };

                        $filteredPokemonList.append(`
                            <div class="pokemon-item">
                                <h4>${pokemonInfo.name}</h4>
                                <img src="${pokemonInfo.sprite}" alt="${pokemonInfo.name}">
                            </div>
                        `);
                    });

                    $filteredSection.removeClass('hidden'); 
                })
                .catch(err => {
                    console.error('Error al cargar los Pokémon:', err);
                    alert('Hubo un error al cargar los Pokémon de este tipo.');
                });
        },
        error: function() {
            alert('No se pudo obtener los Pokémon de este tipo.');
        }
    });
}

$('#filter-btn').on('click', filtrarPokemonPorTipo);
