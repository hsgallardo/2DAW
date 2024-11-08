// Definir el número de empleados
const numeroEmpleados = 5;

// Inicializar variables
let sueldos = [];
let contadorEntre100y300 = 0;
let contadorMayores300 = 0;
let totalSueldos = 0;

// Leer los sueldos
for (let i = 0; i < numeroEmpleados; i++) {
    let sueldo = parseFloat(prompt(`Ingrese el sueldo del empleado ${i + 1} (entre $100 y $500):`));
    
    // Validar el rango del sueldo
    while (sueldo < 100 || sueldo > 500 || isNaN(sueldo)) {
        sueldo = parseFloat(prompt(`Sueldo inválido. Ingrese el sueldo del empleado ${i + 1} (entre $100 y $500):`));
    }
    
    sueldos.push(sueldo);
    totalSueldos += sueldo; // Acumular el total de sueldos

    // Contar sueldos en los rangos especificados
    if (sueldo >= 100 && sueldo <= 300) {
        contadorEntre100y300++;
    } else if (sueldo > 300) {
        contadorMayores300++;
    }
}

// Mostrar resultados
console.log(`Cantidad de empleados que cobran entre $100 y $300: ${contadorEntre100y300}`);
console.log(`Cantidad de empleados que cobran más de $300: ${contadorMayores300}`);
console.log(`Total gastado en sueldos: $${totalSueldos}`);
