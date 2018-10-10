@include('Llamados.links')

<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">

</head>
<body>

    <!-- Navegacion -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Sistema Barberias</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/register"> Registrate </a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Menu Lateral de navegacion y contenido -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar">
                <div class="accordion" id="accordionExample">
                    <div class="card" id="card-accordion">
                    <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-block accordion-btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="flase" aria-controls="collapseOne">
                            Barberias
                        </button>
                    </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul class="botones">
                            <a href="#"><li>Agregar Barberias</li></a>
                            <a href="#"><li>Ver Barberias</li></a>
                            <a href="#"><li>Modificar Barberia</li></a>
                            <a href="#"><li>Eliminar Barberia</li></a>
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="card" id="card-accordion">
                    <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-block collapsed accordion-btn" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Barberos
                        </button>
                    </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul class="botones">
                            <a href="#"><li>Botón</li></a>
                            <a href="#"><li>Botón</li></a>
                            <a href="#"><li>Botón</li></a>
                            <a href="#"><li>Botón</li></a>
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="card" id="card-accordion">
                    <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-block collapsed accordion-btn" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Clientes
                        </button>
                    </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul class="botones">
                            <a href="#"><li>Botón</li></a>
                            <a href="#"><li>Botón</li></a>
                            <a href="#"><li>Botón</li></a>
                            <a href="#"><li>Botón</li></a>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-10 offset-md-2 mt-5 main">
                <h2 class="h2-carrusel mt-2" style="text-align: center;">Noticias</h2>
                <div id="carruselPrincipal" class="carousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <li data-target="#carruselPrincipal" data-slide-to="0" class="active"></li>
                    <li data-target="#carruselPrincipal" data-slide-to="1"></li>
                    <li data-target="#CarruselPrincipal" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="plugins/bootstrap/img/autonoma.jpg" alt="Parqueadero Economia">
                        <div class="carousel-caption">
                            <h3>Universidad Autonoma De Manizales</h3>
                            <p>Parqueadero Economia</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="plugins/bootstrap/img/caldas.jpg" alt="Parqueadero Sede Principal">
                        <div class="carousel-caption">
                            <h3>Universidad De Caldas</h3>
                            <p>Parqueadero Principal</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="plugins/bootstrap/img/catolica.png" alt="Parqueadero Sede Principal UCM">
                        <div class="carousel-caption">
                            <h3>Universidad Catolica De Manizales</h3>
                            <p>Parqueadero Principal UCM</p>
                        </div>
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#carruselPrincipal" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carruselPrincipal" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
        </div>
    </div>


    
</body>
</html>