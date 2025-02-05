document.getElementById('boton1').addEventListener('click', obtenerEquipo);

async function obtenerEquipo() {
    try {
        const response = await fetch('https://www.thesportsdb.com/api/v1/json/3/searchteams.php?t=Arsenal');
        const data = await response.json();
        mostrarEquipo(data.teams[0]); 
    } catch (error) {
        console.error("Error al cargar el equipo:", error);
    }
}

function mostrarEquipo(equipo) {
    const contenedor = document.getElementById('images');
    contenedor.innerHTML = `
        <p>Nombre: ${equipo.strTeam}</p>
        <p>País: ${equipo.strCountry}</p>
        <p>Fundación: ${equipo.intFormedYear}</p>
        <p>Estadio: ${equipo.strStadium}</p>
    `;
}
