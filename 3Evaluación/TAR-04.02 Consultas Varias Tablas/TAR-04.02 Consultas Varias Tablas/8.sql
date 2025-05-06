-- Paso 1: Mostrar todos los jesuitas con el nombre del lugar que han visitado
SELECT Jesuitas.nombre, Lugares.lugar
FROM Jesuitas
LEFT JOIN Visita ON Jesuitas.idJesuita = Visita.idJesuita
LEFT JOIN Lugares ON Visita.ip = Lugares.ip;


-- Paso 2: Mostrar todos los lugares con el nombre del jesuita que ha visitado, incluyendo lugares no visitados
SELECT Jesuitas.nombre, Lugares.lugar
FROM Lugares
LEFT JOIN Visita ON Lugares.ip = Visita.ip
LEFT JOIN Jesuitas ON Visita.idJesuita = Jesuitas.idJesuita;



-- 8- Muestra todos los jesuitas con el nombre del lugar que han visitado. 
-- Si algún jesuita no ha realizado visita, también habrá que visualizar sus datos y si algún lugar no se ha visitado también se muestra su nombre (lugar). 
-- Realiza esta consulta en 2 pasos y ve comprobado qué ocurre al hacer el JOIN.