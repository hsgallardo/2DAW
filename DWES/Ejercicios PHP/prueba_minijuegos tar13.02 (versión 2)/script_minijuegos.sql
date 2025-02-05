CREATE DATABASE MinijuegosDB;

USE MinijuegosDB;

CREATE TABLE ambito (
    idambito INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL
);

CREATE TABLE minijuegos (
    idminijuego INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    idambito INT DEFAULT NULL,
    url_juego VARCHAR(255) NOT NULL,
    FOREIGN KEY (idambito) REFERENCES ambito(idambito) ON DELETE SET NULL
);


INSERT INTO ambito (nombre) VALUES 
('Matemáticas'),
('Ciencias'),
('Historia'),
('Lenguaje'),
('Geografía');

INSERT INTO minijuegos (nombre, idambito, url_juego) VALUES 
('Sumas divertidas', 1, 'https://2daw.esvirgua.com/21/Proyecto-Equiquiz/app/admin/'),
('Resta rápida', 1, 'https://2daw.esvirgua.com/25/'),
('Quiz de planetas', 2, 'https://2daw.esvirgua.com/26/'),
('Cuerpo humano', 2, 'https://2daw.esvirgua.com/21/Proyecto-Equiquiz/app/admin/'),
('Historia antigua', 3, 'http://2daw.esvirgua.com/23/'),
('Ortografía básica', 4, 'https://2daw.esvirgua.com/26/'),
('Capitales del mundo', 5, 'https://2daw.esvirgua.com/26/'),
('Multiplicaciones mágicas', 1, 'https://2daw.esvirgua.com/21/Proyecto-Equiquiz/app/admin/'),
('Experimentos científicos', 2, 'https://2daw.esvirgua.com/25/'),
('Gramática divertida', 4, 'http://2daw.esvirgua.com/23/')

('División rápida', 1, 'https://2daw.esvirgua.com/21/Proyecto-Equiquiz/app/admin/'),
('Ecuaciones básicas', 1, 'https://2daw.esvirgua.com/25/'),
('El ciclo del agua', 2, 'http://2daw.esvirgua.com/23/'),
('Energías renovables', 2, 'https://2daw.esvirgua.com/26/'),
('La Revolución Francesa', 3, 'https://2daw.esvirgua.com/21/Proyecto-Equiquiz/app/admin/'),
('Figuras literarias', 4, 'https://2daw.esvirgua.com/25/'),
('Países y sus banderas', 5, 'https://2daw.esvirgua.com/21/Proyecto-Equiquiz/app/admin/'),
('Fracciones divertidas', 1, 'https://2daw.esvirgua.com/25/'),
('Reacciones químicas', 2, 'https://2daw.esvirgua.com/21/Proyecto-Equiquiz/app/admin/'),
('Análisis sintáctico', 4, 'http://2daw.esvirgua.com/23/');

('Resolver ecuaciones', 1, 'https://2daw.esvirgua.com/21/Proyecto-Equiquiz/app/admin/'),
('Propiedades de los materiales', 2, 'https://2daw.esvirgua.com/25/'),
('La Segunda Guerra Mundial', 3, 'https://2daw.esvirgua.com/25/'),
('Literatura del siglo XX', 4, 'https://2daw.esvirgua.com/26/'),
('Ríos y montañas del mundo', 5, 'https://2daw.esvirgua.com/21/Proyecto-Equiquiz/app/admin/'),
('Geometría interactiva', 1, 'https://2daw.esvirgua.com/21/Proyecto-Equiquiz/app/admin/'),
('Ecosistemas y biodiversidad', 2, 'https://2daw.esvirgua.com/26/'),
('Reinos de la antigüedad', 3, 'https://2daw.esvirgua.com/25/'),
('Ortografía avanzada', 4, 'https://2daw.esvirgua.com/21/Proyecto-Equiquiz/app/admin/'),
('Mapas interactivos', 5, 'http://2daw.esvirgua.com/23/');
