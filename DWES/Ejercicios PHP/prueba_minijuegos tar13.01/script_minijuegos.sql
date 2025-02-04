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
('Sumas divertidas', 1, 'https://example.com/sumas'),
('Resta rápida', 1, 'https://example.com/resta'),
('Quiz de planetas', 2, 'https://example.com/planetas'),
('Cuerpo humano', 2, 'https://example.com/cuerpo'),
('Historia antigua', 3, 'https://example.com/historia'),
('Ortografía básica', 4, 'https://example.com/ortografia'),
('Capitales del mundo', 5, 'https://example.com/capitales'),
('Multiplicaciones mágicas', 1, 'https://example.com/multiplicaciones'),
('Experimentos científicos', 2, 'https://example.com/experimentos'),
('Gramática divertida', 4, 'https://example.com/gramatica')

('División rápida', 1, 'https://example.com/division'),
('Ecuaciones básicas', 1, 'https://example.com/ecuaciones'),
('El ciclo del agua', 2, 'https://example.com/cicloagua'),
('Energías renovables', 2, 'https://example.com/energias'),
('La Revolución Francesa', 3, 'https://example.com/revolucion'),
('Figuras literarias', 4, 'https://example.com/figuras-literarias'),
('Países y sus banderas', 5, 'https://example.com/banderas'),
('Fracciones divertidas', 1, 'https://example.com/fracciones'),
('Reacciones químicas', 2, 'https://example.com/reacciones'),
('Análisis sintáctico', 4, 'https://example.com/analisis-sintactico');

('Resolver ecuaciones', 1, 'https://example.com/ecuaciones-avanzadas'),
('Propiedades de los materiales', 2, 'https://example.com/materiales'),
('La Segunda Guerra Mundial', 3, 'https://example.com/segunda-guerra'),
('Literatura del siglo XX', 4, 'https://example.com/literatura-xx'),
('Ríos y montañas del mundo', 5, 'https://example.com/rios-montanas'),
('Geometría interactiva', 1, 'https://example.com/geometria'),
('Ecosistemas y biodiversidad', 2, 'https://example.com/ecosistemas'),
('Reinos de la antigüedad', 3, 'https://example.com/reinos-antiguos'),
('Ortografía avanzada', 4, 'https://example.com/ortografia-avanzada'),
('Mapas interactivos', 5, 'https://example.com/mapas');
