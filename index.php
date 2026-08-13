<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Página Principal</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <!--Navbar-->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="quienessomos.php">¿Quiénes somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="novedades.php">Novedades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ofertas.php">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
            </div>
        </div>
        </nav>
        <div class="container-fluid mt-3">
        <h3>Navbar Forms</h3>
        <p>You can also include forms inside the navigation bar.</p>
        </div>

        <!--Container-->    
        <div class="container-fluid bg-warning">
            Pagina Principal<br>
            <a href="index.php">Ir a la Página Principal</a><br>
            <a href="quienessomos.php">¿Quiénes somos?</a><br>
            <a href="productos.php">Productos</a><br>
            <a href="novedades.php">Novedades</a><br>
            <a href="ofertas.php">Ofertas</a><br>
            <a href="contacto.php">Contacto</a><br>
        </div>


        <!--Footer-->

        <!--Modal-->
    </body>
</html>