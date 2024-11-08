function obtenerCuatrimestre() {
    const mes = new Date().getMonth() + 1; // Obtener el mes actual (0-11, sumamos 1)

    let cuatrimestre;

    if (mes >= 1 && mes <= 4) {
        cuatrimestre = 1; // Primer cuatrimestre: enero a abril
    } else if (mes >= 5 && mes <= 8) {
        cuatrimestre = 2; // Segundo cuatrimestre: mayo a agosto
    } else {
        cuatrimestre = 3; // Tercer cuatrimestre: septiembre a diciembre
    }

    return cuatrimestre;
}

// Ejemplo de uso
const cuatrimestreActual = obtenerCuatrimestre();
console.log("Estamos en el cuatrimestre:", cuatrimestreActual);
