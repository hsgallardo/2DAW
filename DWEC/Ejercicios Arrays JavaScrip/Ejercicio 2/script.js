// Inicializar contadores
let contMayorIgual7 = 0;
let contMenor7 = 0;

// Leer 10 notas de alumnos
for (let i = 0; i < 10; i++) {
    let nota = parseFloat(prompt(`Ingrese la nota del alumno ${i + 1}:`));

    // Verificar si la nota es válida
    if (nota >= 0 && nota <= 10) {  //Está línea nos indica si la nota está dentro del rango válido
        if (nota >= 7) {
            contMayorIgual7++;
        } else {
            contMenor7++;
        }
    } else {
        console.log("Nota inválida. Debe estar entre 0 y 10.");
        i--; // Decrementar i para repetir la entrada
    }
}

// Mostrar resultados
console.log(`Cantidad de alumnos con notas mayores o iguales a 7: ${contMayorIgual7}`);
console.log(`Cantidad de alumnos con notas menores a 7: ${contMenor7}`);
