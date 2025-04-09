INSERT INTO Jesuitas (nombre, codigo, firma, nombreAlumno)
VALUES ('Padre Lucas', 'J12345', 'FirmaLucas', 'Lucas Moura');

-- 3- Añade un jesuita nuevo. Este jesuita no va a realizar ninguna visita.

-- INSERT INTO: estamos añadiendo un nuevo registro en la tabla Jesuitas.
-- (nombre, codigo, firma, nombreAlumno): son las columnas en las que vamos a insertar datos.
-- VALUES: especificamos los valores que vamos a insertar para cada columna:
--   - 'Padre Lucas': el nombre del jesuita.
--   - 'J12345': el código identificador del jesuita.
--   - 'FirmaLucas' firma del Jesuita.
--   - 'Lucas': el nombre del alumno asociado al jesuita.

-- Este jesuita no realizará ninguna visita, por lo que no es necesario insertar nada en la tabla Visita.