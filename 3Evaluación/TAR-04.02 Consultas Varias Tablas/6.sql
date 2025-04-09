SELECT Lugares.lugar, Jesuitas.nombre
FROM Lugares
LEFT JOIN Visita ON Lugares.ip = Visita.ip
LEFT JOIN Jesuitas ON Visita.idJesuita = Jesuitas.idJesuita;

-- 6- Muestra todos los lugares con el nombre del jesuita que realiza la visitada. 
-- Si algún lugar no se ha visitado, también habrá que visualizar sus datos ´mira que ocurre con el
-- valor del campo nombre (jesuita) en estos casos.