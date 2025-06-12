CREATE DATABASE IF NOT EXISTS instalacion;
USE instalacion;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE,
    pw VARCHAR(255) NOT NULL,
    perfil CHAR(1) -- A de admin o P profesores
);

-- Crear tabla etapas
CREATE TABLE IF NOT EXISTS etapas (
    idetapa INT PRIMARY KEY AUTO_INCREMENT,
    nombreEtapa VARCHAR(50) NOT NULL UNIQUE
);

-- Crear tabla actividad
CREATE TABLE IF NOT EXISTS actividad (
    idactividad INT AUTO_INCREMENT PRIMARY KEY,
    nombreActividad VARCHAR(50) NOT NULL UNIQUE
);

-- Crear tabla actividad_etapa 
CREATE TABLE IF NOT EXISTS actividad_etapa (
    idactividad INT,
    idetapa INT,
    PRIMARY KEY (idactividad, idetapa),
    FOREIGN KEY (idactividad) REFERENCES actividad(idactividad),
    FOREIGN KEY (idetapa) REFERENCES etapas(idetapa)
);

INSERT INTO etapas (idetapa, nombreEtapa) VALUES 
(1, 'Bachillerato'),
(2, 'Ciclo Formativo'),
(3, 'ESO');