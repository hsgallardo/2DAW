-- Crear usuario
CREATE USER 'hugo_evg'@'localhost' IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON applibros.* TO 'hugo_evg'@'localhost' WITH GRANT OPTION;

-- Crear usuario normal con privilegios limitados
CREATE USER 'usuario_normal'@'localhost' IDENTIFIED BY '1234';
GRANT SELECT, INSERT, UPDATE, DELETE ON applibros.* TO 'usuario_normal'@'localhost';

-- Aplicar cambios de privilegios
FLUSH PRIVILEGES;
