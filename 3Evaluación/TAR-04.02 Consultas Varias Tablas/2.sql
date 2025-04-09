SELECT Visita.idVisita, Jesuitas.nombre, Visita.fechaHora, Lugares.lugar
FROM Visita
INNER JOIN Jesuitas ON Visita.idJesuita = Jesuitas.idJesuita
INNER JOIN Lugares ON Visita.ip = Lugares.ip;

-- 2- Muestra todas las visitas con el nombre del jesuita que las ha realizado y el nombre (lugar) del lugar visitado.

-- SELECT: seleccionamos el id de la visita, el nombre del jesuita, la fecha/hora de la visita y el nombre del lugar donde se realizó la visita.
-- FROM: partimos de la tabla Visita, ya que allí se registran las visitas.
-- INNER JOIN: unimos las tablas Jesuitas y Lugares:
--   - Con Jesuitas: unimos la tabla Visita con Jesuitas usando el idJesuita, para obtener el nombre del jesuita.
--   - Con Lugares: unimos la tabla Visita con Lugares usando la IP (Visita.ip = Lugares.ip), para obtener el nombre del lugar donde se realizó la visita.
