-- Crear la base de datos
CREATE DATABASE checkbox;

-- Seleccionar la base de datos
USE checkbox;

-- Crear tabla etapas
CREATE TABLE etapas (
    idetapa INT PRIMARY KEY AUTO_INCREMENT,
    nombreEtapa VARCHAR(50) NOT NULL UNIQUE
);

-- Crear tabla actividad
CREATE TABLE actividad (
    idactividad INT AUTO_INCREMENT PRIMARY KEY,
    nombreActividad VARCHAR(50) NOT NULL UNIQUE
);

-- Crear tabla actividad_etapa 
CREATE TABLE actividad_etapa (
    idactividad INT,
    idetapa INT,
    PRIMARY KEY (idactividad, idetapa),
    FOREIGN KEY (idactividad) REFERENCES actividad(idactividad) ON DELETE CASCADE,
    FOREIGN KEY (idetapa) REFERENCES etapas(idetapa) ON DELETE CASCADE
);

INSERT INTO etapas (idetapa, nombreEtapa) VALUES 
(1, 'Bachillerato'),
(2, 'Ciclo Formativo'),
(3, 'ESO');


INSERT INTO actividad (nombreActividad) VALUES 
('Planificación'),
('Diseño'),
('Desarrollo'),
('Pruebas'),
('Despliegue'),
('Mantenimiento');

