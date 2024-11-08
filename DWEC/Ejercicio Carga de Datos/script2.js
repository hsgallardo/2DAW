window.onload = () => {
    let datosEmpleados = [];
    function cargarDatosConFetch() {
        fetch('./empleados2DAW.txt')
            .then(response => {
                if(!response.ok)
                    throw new Error('Error al cargar el archivo');
                return response.text();
            })
            .then(data => {
                datosEmpleados = cargarDatos(data);

                mostrarEmpleados(datosEmpleados);
            })
            .catch(error => {
                console.error('Error:',error);
            });
    }

    let cargarDatos = data => {

        const empleados = [];
        const numEmpleados = data.split('\n');

        for (let i = 0; i < numEmpleados.length; i++) {
            let empleado = numEmpleados[i].split(',');
            empleados.push({
                numDoc: empleado[0],
                nombre: empleado[1],
                edad: Number(empleado[2]),
                sexo: empleado[3],
                puesto: empleado[4]
            });
        }

        return empleados;
    };

    let mostrarEmpleados = empleados => {
        console.log(empleados);
    };

    cargarDatosConFetch();
}