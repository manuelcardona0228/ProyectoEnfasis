@include('Llamados.links')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>BarberSys</title>
</head>
<body>
    <!-- Barra De Navegacion -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" ></a>
            <img src="plugins/bootstrap/img/BarberSys 1.0 Logo Icono.png" width="40" height="40" class="d-inline-block align-top" alt="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/"> BarberSys </a>
                </li>    
                </ul>
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/login"> Regresar </a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="header-contacto">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <h2>Contacto Con El Sitio<h2>
                        <p>Nombre: {{$datos->name}}</p>
                        <p>E-mail: {{$datos->email}}</p>
                        <p>Mensaje: {{$datos->mensaje}}</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>

