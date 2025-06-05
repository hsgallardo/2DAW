CREATE DATABASE IF NOT EXISTS instalacion;
USE instalacion;


CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE,
    pw VARCHAR(255) NOT NULL,
    perfil CHAR(1) -- A de admin o P personal
);
