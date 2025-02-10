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
('Sumas divertidas', 1, 'http://2daw.esvirgua.com/21/Proyecto-Equiquiz/app/user/view/js/menu/mainMenu.php'),
('Resta rápida', 1, 'https://2daw.esvirgua.com/26/'),
('Quiz de planetas', 2, 'http://2daw.esvirgua.com/23/'),
('Cuerpo humano', 2, 'https://2daw.esvirgua.com/25/'),
('Historia antigua', 3, 'https://24.2daw.esvirgua.com/game/'),
('Ortografía básica', 4, 'http://2daw.esvirgua.com/21/Proyecto-Equiquiz/app/user/view/js/menu/mainMenu.php'),
('Capitales del mundo', 5, 'https://2daw.esvirgua.com/26/'),
('Multiplicaciones mágicas', 1, 'http://2daw.esvirgua.com/23/'),
('Experimentos científicos', 2, 'https://2daw.esvirgua.com/25/'),
('Gramática divertida', 4, 'https://24.2daw.esvirgua.com/game/')

('División rápida', 1, 'http://2daw.esvirgua.com/21/Proyecto-Equiquiz/app/user/view/js/menu/mainMenu.php'),
('Ecuaciones básicas', 1, 'https://2daw.esvirgua.com/26/'),
('El ciclo del agua', 2, 'http://2daw.esvirgua.com/23/'),
('Energías renovables', 2, 'https://2daw.esvirgua.com/25/'),
('La Revolución Francesa', 3, 'https://24.2daw.esvirgua.com/game/'),
('Figuras literarias', 4, 'http://2daw.esvirgua.com/21/Proyecto-Equiquiz/app/user/view/js/menu/mainMenu.php'),
('Países y sus banderas', 5, 'https://2daw.esvirgua.com/26/'),
('Fracciones divertidas', 1, 'http://2daw.esvirgua.com/23/'),
('Reacciones químicas', 2, 'https://2daw.esvirgua.com/25/'),
('Análisis sintáctico', 4, 'https://24.2daw.esvirgua.com/game/');

('Resolver ecuaciones', 1, 'http://2daw.esvirgua.com/21/Proyecto-Equiquiz/app/user/view/js/menu/mainMenu.php'),
('Propiedades de los materiales', 2, 'https://2daw.esvirgua.com/26/'),
('La Segunda Guerra Mundial', 3, 'http://2daw.esvirgua.com/23/'),
('Literatura del siglo XX', 4, 'https://2daw.esvirgua.com/25/'),
('Ríos y montañas del mundo', 5, 'https://24.2daw.esvirgua.com/game/'),
('Geometría interactiva', 1, 'http://2daw.esvirgua.com/21/Proyecto-Equiquiz/app/user/view/js/menu/mainMenu.php'),
('Ecosistemas y biodiversidad', 2, 'https://2daw.esvirgua.com/26/'),
('Reinos de la antigüedad', 3, 'http://2daw.esvirgua.com/23/'),
('Ortografía avanzada', 4, 'https://2daw.esvirgua.com/25/'),
('Mapas interactivos', 5, 'https://24.2daw.esvirgua.com/game/');
