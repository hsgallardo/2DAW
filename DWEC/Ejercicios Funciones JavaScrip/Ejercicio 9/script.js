function elevarACubica() {
    const numero = parseFloat(prompt("Ingresa un número:")); // Solicitar el número

    if (!isNaN(numero)) { // Verificar que sea un número válido
        const resultado = Math.pow (numero, 3); // Elevar a la tercera potencia
        console.log(`El número ${numero} elevado a la tercera potencia es: ${resultado}`);
    } else {
        console.log("Ingresa un número válido.");
    }
}

// Llamar a la función
elevarACubica();
