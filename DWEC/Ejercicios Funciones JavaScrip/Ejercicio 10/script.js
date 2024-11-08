function mostrarRaizCuadrada() {
    const valor = parseFloat(prompt("Ingresa un valor:")); // Solicitar el valor

    if (!isNaN(valor) && valor >= 0) { // Verificar que sea un número válido y no negativo
        const raizCuadrada = Math.sqrt(valor); // Calcular la raíz cuadrada
        console.log(`La raíz cuadrada de ${valor} es: ${raizCuadrada}`);
    } else {
        console.log("Por favor, ingresa un número válido y no negativo.");
    }
}

// Llamar a la función
mostrarRaizCuadrada();
