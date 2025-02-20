CREATE DATABASE sesiones;
USE sesiones;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

INSERT INTO usuarios (usuario, password) VALUES
('admin', '123456'),
('usuario1', 'password1'),
('usuario2', 'password2');