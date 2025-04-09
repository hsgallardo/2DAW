SELECT Lugares.lugar, Jesuitas.nombre
FROM Lugares
LEFT JOIN Visita ON Lugares.ip = Visita.ip
LEFT JOIN Jesuitas ON Visita.idJesuita = Jesuitas.idJesuita
WHERE Jesuitas.nombre IS NULL; --  filtro que mostrará los lugares donde no hay jesuita asociado, los lugares que no han sido visitados

-- Mirando los resultado de la consulta anterior, intenta mostrar solo los lugares que NO se
-- han visitado (es la consulta anterior con una condición).

