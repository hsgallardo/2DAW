<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panel Administrador</title>
        <link rel="stylesheet" href="css/estilo/style.css">
    </head>
    <body>
        <header>
            <p><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg>+34 924 35 17 61</p>
            <p><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-mail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>guadalupe@fundacionloyola.es</p>
        </header>
        <nav>
            <a href="vistas/panelAdmin.php">Panel de administración</a>
        </nav>
        <main>
            <div class="tabla">
                <div class="container">
                    <h1>Panel Administrador</h1>
                    <hr>

                    <div>
                        <h2>Gestión de libros</h2>
                        <a href="vistas/altaLibros.php" class="boton mb-2 enlaceAdmin bgreen">Añadir libro</a>
                        <a href="vistas/eliminarLibros.php" class="boton mb-2 enlaceAdmin bred">Eliminar libro</a>
                        <a href="vistas/modificarLibros.php" class="boton mb-2 enlaceAdmin bgreen">Modificar libro</a>
                        <a href="vistas/listaLibros.php" class="boton mb-2 enlaceAdmin">Ver libros</a>
                    </div>
                    <div>
                        <h2>Gestión de reservas de libros</h2>
                        <a href="vistas/realizarReserva.php" class="boton mb-2 enlaceAdmin bgreen">Realizar reserva</a>
                        <a href="vistas/verificarReservas.php" class="boton mb-2 enlaceAdmin">Verificar reservas</a>
                        <a href="vistas/librosPedidos.php" class="boton mb-2 enlaceAdmin">Libros pedidos</a>
                        <a href="vistas/confirmarReservas.php" class="boton mb-2 enlaceAdmin">Confirmar entrega</a>
                    </div>
                    <div>
                        <h2>Gestión de editoriales</h2>
                        <a href="vistas/altaEditorial.php" class="boton mb-2 enlaceAdmin bgreen">Añadir editorial</a>
                        <a href="vistas/modificarEditorial.php" class="boton mb-2 enlaceAdmin">Modificar editorial</a>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <a href="vistas/panelAdmin.php">Panel de administración</a>
        </footer>
    </body>
</html>
