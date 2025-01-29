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
                window.location.reload(); // Recargar la página
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