SELECT Jesuitas.nombre, Lugares.lugar
FROM Jesuitas
LEFT JOIN Visita ON Jesuitas.idJesuita = Visita.idJesuita
LEFT JOIN Lugares ON Visita.ip = Lugares.ip;

-- 5- Muestra todos los jesuitas con el nombre del lugar que han visitado. Si algún jesuita no ha realizado visita, también habrá que visualizar sus datos, mira que ocurre con el valor del campo lugar en estos casos.
-- Realiza 2 versiones de la misma consulta, una usando LEFT:

-- LEFT JOIN: 

-- Con el LEFT JOIN, se asegura que todos los jesuitas se muestren en el resultado.
-- Si un jesuita no ha realizado ninguna visita, el campo 'lugar' será NULL, pero su nombre aparecerá en la lista. 
-- Esto es porque el LEFT JOIN incluye todos los registros de la tabla de la izquierda (Jesuitas),



SELECT Jesuitas.nombre, Lugares.lugar
FROM Jesuitas
RIGHT JOIN Visita ON Jesuitas.idJesuita = Visita.idJesuita
RIGHT JOIN Lugares ON Visita.ip = Lugares.ip;

-- 5- Muestra todos los jesuitas con el nombre del lugar que han visitado. Si algún jesuita no ha realizado visita, también habrá que visualizar sus datos, mira que ocurre con el valor del campo lugar en estos casos.
-- Realiza 2 versiones de la misma consulta, una usando RIGHT:

-- RIGHT JOIN: 

-- Con el RIGHT JOIN, se asegura que todos los registros de Visita y Lugares se muestren.
-- Si un jesuita no ha realizado ninguna visita, no aparecerá en el resultado, ya que RIGHT JOIN
-- solo incluye los registros de la tabla de la derecha (Visita y Lugares).
-- Los jesuitas que no hayan visitado ningún lugar no aparecerán en este caso.
