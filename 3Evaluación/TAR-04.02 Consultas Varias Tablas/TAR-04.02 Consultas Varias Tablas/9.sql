SELECT DISTINCT Jesuitas.nombre
FROM Jesuitas
INNER JOIN Visita ON Jesuitas.idJesuita = Visita.idJesuita;

-- 9- Muestra el nombre de los jesuitas que han realizado alguna 
-- visitas (no hay que mostrar ningún dato más de la visita).