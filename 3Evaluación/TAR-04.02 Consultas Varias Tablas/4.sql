INSERT INTO Lugares (ip, nombreEquipo, lugar)
VALUES ('192.168.1.4', 'PC-2BACH05', 'Francia'),
       ('192.168.1.24', 'PC-1SMR02', 'Brasil');

-- 4- Añade 2 lugares nuevos. Estos lugares no se van a visitar.

-- INSERT INTO: estamos añadiendo dos nuevos registros en la tabla Lugares.
-- (ip, nombreEquipo, lugar): son las columnas en las que vamos a insertar datos.
-- VALUES: especificamos los valores que vamos a insertar para cada lugar:
--   - '192.168.1.4': la IP del primer lugar (Francia).
--   - 'PC-2BACH05': el nombre del equipo o dispositivo en el primer lugar.
--   - 'Francia': el nombre del primer lugar.
--   - '192.168.1.24': la IP del segundo lugar (Brasil).
--   - 'PC-1SMR02': el nombre del equipo o dispositivo en el segundo lugar.
--   - 'Brasil': el nombre del segundo lugar.

-- Estos lugares no se van a visitar, por lo que no es necesario insertar nada en la tabla Visita.
