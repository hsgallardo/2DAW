-- Crear la base de datos
CREATE DATABASE selec;

-- Seleccionar la base de datos
USE selec;

-- Crear tabla etapas
CREATE TABLE etapas (
    idetapa INT PRIMARY KEY AUTO_INCREMENT,
    nombreEtapa VARCHAR(50) NOT NULL UNIQUE
);

-- Crear tabla actividad
CREATE TABLE actividad (
    idactividad INT AUTO_INCREMENT PRIMARY KEY,
    idetapa INT NOT NULL,
    nombreActividad VARCHAR(100) NOT NULL UNIQUE,
    FOREIGN KEY (idetapa) REFERENCES etapas(idetapa)
);

INSERT INTO etapas (idetapa, nombreEtapa) VALUES 
(1, 'Bachillerato'),
(2, 'Ciclo Formativo'),
(3, 'ESO');
