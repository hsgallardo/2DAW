document.addEventListener('DOMContentLoaded', function() {
    const selects = document.querySelectorAll('select'); // Seleccionamos todos los elementos select

    // Función para actualizar los selectores y deshabilitar las opciones seleccionadas
    function actualizarSelects() {
        // Obtenemos todas las opciones ya seleccionadas
        let seleccionados = [];
        
        // Recorremos todos los select y almacenamos las opciones seleccionadas
        selects.forEach(select => {
            const selectedValue = select.value;
            if (selectedValue) {
                seleccionados.push(selectedValue);
            }
        });

        // Ahora, deshabilitamos las opciones de cada select si ya han sido seleccionadas
        selects.forEach(select => {
            const options = select.querySelectorAll('option');
            options.forEach(option => {
                if (seleccionados.includes(option.value) && option.value !== '') {
                    option.disabled = true; 
                } else {
                    option.disabled = false; 
                }
            });
        });
    }

    // Llamamos a la función cada vez que se cambia un valor en un select
    selects.forEach(select => {
        select.addEventListener('change', actualizarSelects);
    });

    // Llamada inicial para asegurar que las opciones ya estén deshabilitadas si es necesario
    actualizarSelects();
});
