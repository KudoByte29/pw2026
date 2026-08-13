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
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" alt="Logo Tienda de Audifonos" class="rounded-circle" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="quienessomos.php">¿Quiénes somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="novedades.php">Novedades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="ofertas.php">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="tucuenta.php">Mi Cuenta</a>
                    </li>
                </ul>
            <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#myModal">Acceder</button>
        </div>
        </nav>
    

        <!--Container-->    
        <div class="container-fluid bg-warning">
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/Aud1.png" alt="Audífonos Negros" class="d-block" style="height: 400px; width: 100%; object-fit: contain;">
                </div>
                <div class="carousel-item">
                <img src="img/Aud2.png" alt="Audífonos Celestes" class="d-block" style="height: 400px; width: 100%; object-fit: contain;">
                </div>
                <div class="carousel-item">
                <img src="img/Aud3.png" alt="Audífonos Blancos" class="d-block" style="height: 400px; width: 100%; object-fit: contain;">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
            </div>
        </div>


        <!--Footer-->

        <!--Modal-->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Accede a tu Cuenta</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                    <form action="tucuenta.php">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                    </div>
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Recordarme
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                    </form>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>