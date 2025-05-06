SELECT DISTINCT Lugares.lugar
FROM Lugares
INNER JOIN Visita ON Lugares.ip = Visita.ip;


-- 10- Piensa otra consulta diferente con DISTINCT (con la misma base de datos).
--     --10.1 Muestra los lugares distintos que han sido visitados, es decir, sin repetir los lugares.