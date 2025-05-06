SELECT Visita.idVisita, Jesuitas.nombre, Visita.fechaHora
FROM Visita
INNER JOIN Jesuitas ON Visita.idJesuita = Jesuitas.idJesuita;


-- 1- Muestra las visitas con el nombre del jesuita que las has realizado.

-- SELECT: nos dice que columnas queremos ver, pidiendo el idVisita de la tabla visita e igual con los otros dos.
-- FROM: indicamos que la tabla de donde partimos en visita
-- INNER JOIN: queremos unir dos tablas cuando el valor idJesuita sea igual en ambas tablas