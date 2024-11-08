// 1 Cargamos los datos
let dataEmpleados = `12345,Javier Arias Carroza,45,Masculino,Gerente
67890,Pablo Caldito Gomez,33,Masculino,Desarrollador
11223,Levi Josue Candeias de Figueiredo,29,Masculino,Analista
44556,Jose Luis del Valle del Pino,50,Masculino,Contador
33445,David Fariña Morena,40,Masculino,Diseñador
22883,Alvaro Gomez Delgado,31,Masculino,Desarrollador
56789,Fernando Jose Gonzalez Bernaldez,38,Masculino,Consultor
34567,Angel Guiberteau Franco,47,Masculino,Administrador
12333,Paloma Hernandez Sanchez,28,Femenino,Marketing
67676,Miriam Lopez Vega,34,Femenino,Recursos Humanos
99887,Ceus Martin Llera,29,Masculino,Asistente
77665,Celia Moruno Herrojo,32,Femenino,Analista
55665,Ismael Paz Bernal,41,Masculino,Gerente de Proyecto
66778,Mauricio Peña Dominguez,36,Masculino,Auditor
88777,Carlos Rodriguez Botello,45,Masculino,Programador
33211,Alberto Sanchez Diaz,39,Masculino,Ingeniero
99123,David Silva Vega,35,Masculino,Soporte Técnico
78111,Hugo Sanchez Gallardo,28,Masculino,Diseñador
66112,Joaquin Francisco Telo Nuñez,52,Masculino,Director Financiero
11234,Maria Vidigal Barroso,30,Femenino,Contadora `;

// 2 Convertimos los datos en un array de objetos

// Dividir la cadena en líneas
let lineas = dataEmpleados.split('\n'); 
let empleados = [];

// Procesar cada línea
lineas.forEach(linea => {
    let datos = linea.split(',');
    let empleado = {
        numeroDocumento: datos[0].trim(),
        nombre: datos[1].trim(),
        edad: parseInt(datos[2].trim()),
        sexo: datos[3].trim(),
        puesto: datos[4].trim()
    };
    empleados.push(empleado);
});

// 3 Mostrar los datos de forma legible

function mostrarEmpleados() {
    empleados.forEach(empleado => {
        console.log(`Número de Documento: ${empleado.numeroDocumento}`);
        console.log(`Nombre: ${empleado.nombre}`);
        console.log(`Edad: ${empleado.edad}`);
        console.log(`Sexo: ${empleado.sexo}`);
        console.log(`Puesto: ${empleado.puesto}`);
        console.log('-----------------------------');
    });
}

// 4 Función para buscar un empleado por el número de documento
function buscarEmpleadoPorDocumento(numeroDocumento) {
    let empleadoEncontrado = empleados.find(empleado => empleado.numeroDocumento === numeroDocumento);
    
    if (empleadoEncontrado) {
        return empleadoEncontrado;
    } else {
        return `Empleado con número de documento ${numeroDocumento} no encontrado.`;
    }
}

// 5 Función para agregar un empleado
function agregarEmpleado(numeroDocumento, nombre, edad, sexo, puesto) {
    if (empleados.some(emp => emp.numeroDocumento === numeroDocumento)) {
        return `Error: El empleado con número de documento ${numeroDocumento} ya existe.`;
    }
    
    const nuevoEmpleado = {
        numeroDocumento: numeroDocumento.trim(),
        nombre: nombre.trim(),
        edad: parseInt(edad) || 0,
        sexo: sexo.trim(),
        puesto: puesto.trim()
    };
    
    empleados.push(nuevoEmpleado);
    
    return `Empleado ${nuevoEmpleado.nombre} agregado.`;
}


// 6 Función para eliminar un empleado por el número de documento
function eliminarEmpleado(numeroDocumento) {
    const indiceEmpleado = empleados.findIndex(empleado => empleado.numeroDocumento === numeroDocumento);
    
    if (indiceEmpleado !== -1) {
        empleados.splice(indiceEmpleado, 1);
        return `Empleado con número de documento ${numeroDocumento} eliminado.`;
    } else {
        return `Empleado con número de documento ${numeroDocumento} no encontrado.`;
    }
}

// Ejemplo de uso

console.log(eliminarEmpleado('12345')); // Cambia '12345' por el documento que desees eliminar

// Agregar un empleado nuevo
console.log(agregarEmpleado('56984', 'Carlos Mendez', 29, 'Masculino', 'Marketing'));

// Mostrar todos los empleados
mostrarEmpleados();





