document.addEventListener("DOMContentLoaded", () => {
    // Función para actualizar los selects de alumnos
    const actualizarSelects = () => {
        const selects = document.querySelectorAll("select[id^='idAlumno_']");
        const alumnosSeleccionados = [];

        // Recoger valores seleccionados para deshabilitar opciones
        selects.forEach(select => {
            const alumnoSeleccionado = select.value;
            if (alumnoSeleccionado) {
                alumnosSeleccionados.push(alumnoSeleccionado);
            }
        });

        // Actualizar las opciones en cada select
        selects.forEach(select => {
            const options = select.querySelectorAll("option");
            options.forEach(option => {
                if (alumnosSeleccionados.includes(option.value) && option.value !== "") {
                    option.disabled = true;
                } else {
                    option.disabled = false;
                }
            });
        });
    };

    // Función para validar los datos antes de enviarlos
    const validarDatos = () => {
        const selects = document.querySelectorAll("select[id^='idAlumno_']");
        let datosValidos = true;

        selects.forEach(select => {
            if (!select.value) {
                // Mostrar alerta si algún select no tiene una selección
                alert(`Debe seleccionar un alumno para la prueba con ID ${select.id.split("_")[1]}`);
                datosValidos = false;
            }
        });

        return datosValidos;
    };

    // Función para recoger los datos del formulario
    const recogerDatos = () => {
        const selects = document.querySelectorAll("select[id^='idAlumno_']");
        const datos = {};

        selects.forEach(select => {
            const idPrueba = select.id.split("_")[1]; // Extraer ID de la prueba
            const idAlumno = select.value; // Valor seleccionado
            datos[`idAlumno_${idPrueba}`] = idAlumno; // Añadir al objeto
        });

        return datos;
    };
    // Manejar el envío del formulario con fetch
    const enviarFormulario = async (event) => {
        event.preventDefault(); // Evitar el envío tradicional del formulario

        // Validar los datos antes de enviarlos
        if (!validarDatos()) {
            return;
        }

        // Recoger los datos del formulario
        const datos = recogerDatos();

        try {
            // Realizar la petición con fetch
            const respuesta = await fetch("../controladores/InscripcionController.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(datos)
            });

            // Verificar que la respuesta sea correcta
            const resultado = await respuesta.json();
            console.log('Respuesta del servidor:', resultado); // Aquí se muestra lo que responde el servidor

            // Procesar la respuesta del servidor
            if (respuesta.ok) {
                if (resultado.exito) {
                    alert("¡Inscripción realizada con éxito!");
                    // Ocultar el formulario y mostrar un mensaje de éxito en lugar de recargar
                    document.querySelector('form').style.display = 'none';
                    const mensajeExito = document.createElement('p');
                    mensajeExito.textContent = "¡Inscripción realizada con éxito!";
                    document.body.appendChild(mensajeExito);
                } else {
                    alert("Hubo un error al realizar la inscripción. Inténtalo de nuevo.");
                }
            } else {
                alert("Error en el servidor. Por favor, inténtalo más tarde.");
            }
        } catch (error) {
            console.error("Error al enviar los datos:", error);
            alert("Hubo un error al procesar la inscripción.");
        }
    };

    // Agregar listener para actualizar selects
    const selects = document.querySelectorAll("select[id^='idAlumno_']");
    selects.forEach(select => {
        select.addEventListener("change", actualizarSelects);
    });

    // Agregar listener al formulario para manejar el envío
    const formulario = document.querySelector("form");
    formulario.addEventListener("submit", enviarFormulario);

    // Inicializar los selects al cargar la página
    actualizarSelects();
});
