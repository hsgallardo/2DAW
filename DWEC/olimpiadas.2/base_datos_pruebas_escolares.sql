-- Creación de la base de datos
CREATE DATABASE Olimpiadas;
USE Olimpiadas;

-- Tabla PROFESORES
CREATE TABLE PROFESORES (
    idProfesor INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Tabla CLASES
CREATE TABLE CLASES (
    idClase INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    idTutor INT,
    FOREIGN KEY (idTutor) REFERENCES PROFESORES(idProfesor)
);

-- Tabla ALUMNOS
CREATE TABLE ALUMNOS (
    idAlumno INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    idClase INT,
    FOREIGN KEY (idClase) REFERENCES CLASES(idClase)
);

-- Tabla PRUEBAS
CREATE TABLE PRUEBAS (
    idPrueba INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);

-- Tabla INSCRIPCIONES
CREATE TABLE INSCRIPCIONES (
    idInscripciones INT AUTO_INCREMENT PRIMARY KEY,
    idAlumno INT,
    idPrueba INT,
    FOREIGN KEY (idAlumno) REFERENCES ALUMNOS(idAlumno),
    FOREIGN KEY (idPrueba) REFERENCES PRUEBAS(idPrueba)
);
