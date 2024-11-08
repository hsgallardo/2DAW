--Crear la base de datos llamada escuela
CREATE DATABASE escuela;
--Seleccionamos la base de datos para trabajar en ella
USE escuela;

--Crear la tabla alumnos
CREATE TABLE alumnos (
    id INT PRIMARY KEY AUTO_INCREMENT,  -- Identificador único, identifica a cada alumno de manera única
    nombre VARCHAR(50) NOT NULL,        -- Nombre del alumno
    apellido VARCHAR(50) NOT NULL,      -- Apellido del alumno
    edad INT,                            -- Edad del alumno
    email VARCHAR(100)                   -- Correo electrónico
);

-- Insertar registros en la tabla alumnos

-- Primera fila
INSERT INTO alumnos (nombre, apellido, edad, email)
VALUES ('Hugo', 'Sánchez', 19, 'hsanchezgallardo.guadalupe@alumnado.fundacionloyola.net');

-- Segunda fila
INSERT INTO alumnos (nombre, apellido, edad, email)
VALUES ('Victoria', 'López', 19, 'victorialopez30@gmail.com');

-- Tercera fila
INSERT INTO alumnos (nombre, apellido, edad, email)
VALUES ('Julián', 'Álvarez', 24, 'jalvarez19@gmail.com');

-- Cuarta fila
INSERT INTO alumnos (nombre, apellido, edad, email)
VALUES ('Natalia', 'García', 18, 'nataliagarcia05@gmail.com');

-- Quinta fila
INSERT INTO alumnos (nombre, apellido, edad, email)
VALUES ('Carlos', 'Martínez', 9, 'carlos.martinez@email.com');

-- Sexta fila
INSERT INTO alumnos (nombre, apellido, edad, email)
VALUES ('Sofía', 'Ramírez', 64, 'sofia.ramirez@email.com');

-- Séptima fila
INSERT INTO alumnos (nombre, apellido, edad, email)
VALUES ('Diego', 'Hernández', 45, 'diego.hernandez@email.com');

-- Octava fila
INSERT INTO alumnos (nombre, apellido, edad, email)
VALUES ('Camila', 'Pérez', 83, 'camila.perez@email.com');

-- Novena fila
INSERT INTO alumnos (nombre, apellido, edad, email)
VALUES ('Fernando', 'González', 27, 'fernando.gonzalez@email.com');

-- Décima fila
INSERT INTO alumnos (nombre, apellido, edad, email)
VALUES ('Valentina', 'Torres', 55, 'valentina.torres@email.com');


--Esto se pega en heidi y se conecta a localhost del xamp httdocs, esto no influye si cambio datos aquí