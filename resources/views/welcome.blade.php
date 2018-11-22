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
                    <a class="nav-link" href="/login"> Iniciar Sesión </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#header"> Noticias </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#info-one"> Acerda de </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#contact"> Contacto </a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header id="header">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="header-content-left">
                        <img src="plugins/bootstrap/img/BarberSys1.0.png" style="width: 80%;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header-content-right">
                        <h1 class="display-4">BarberSys</h1>
                        <p class="mt-5">Queremos hacerte sentir bien. en barbersys encontraras los mejores servicios y los mejores profesionales para que te hagas notar y sobresalgas en la sociedad gracias a nuestros excelentes cortes de cabello y barba</p>
                        <a href="#" class="btn btn-lg mt-2 header-btn">Leer Más</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Testimonio -->
    <section id="testimonial">
        <div class="container">
            <p class="h2 mb-2" style="color: #ffffff">
            hace tiempo estaba buscando un sitio donde realizaran cortes de cabello de alta calidad, en barbersys lo encontre, me gusta mucho los cortes originales y el uso de productos de alta calidad que aseguran los buenos resultados en las sesiones
            </p>
            <p class="h4" style="color: #ffffff">- Leonardo Lopez</p>
        </div>
    </section>

    <!-- Informacion 1 -->
    <section id="info-one">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="info-left">
                        <img src="plugins/bootstrap/img/imgDos.png" style="width: 60%;">
                    </div>
                </div>
                <div class="col-md-6 my-auto">
                    <div class="info-right">
                        <h2>Pacinos.</h2>
                        <p>Somos lideres en el mercado para productos del cuidad del cabello y barba!</p>
                        <a href="#" class="btn btn-outline-primary btn-lg info-one-btn">Leer Más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Informacion 2 -->
    <section id="info-two">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-6 my-4">
                    <h2>Misión.</h2>
                    <p>ser los mejores.</p>
                </div>
                <div class="col-md-6 my-4">
                    <h2>Visión.</h2>
                    <p>dominar el mercado local y nacional.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <form action="/enviar" method="post" class="card text-white bg-dark my-4">
                    @csrf
                        <div class="card-header">Contacto</div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="NombreCorreo">Nombre</label>
                                    <input type="text" placeholder="Nombre" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="NombreEmail">Email</label>
                                    <input type="email" placeholder="Email" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="NombreMensaje">Mensaje</label>
                                    <textarea cols="30" rows="10" placeholder="Mensaje" class="form-control" name="mensaje"></textarea>
                                </div>
                                <button type="submit" class="btn btn-outline-light btn-block"> 
                                    Enviar
                                </button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        window.sr = ScrollReveal();
        sr.reveal('.navbar', {
            duration: 2000,
            origin: 'bottom'
        });

        sr.reveal('.header-content-left', {
            duration: 2000,
            origin: 'top',
            distance: '300px'
        });

        sr.reveal('.header-content-right', {
            duration: 2000,
            origin: 'right',
            distance: '300px'
        });

        sr.reveal('.header-btn', {
            duration: 2000,
            origin: 'bottom',
            delay: 1000
        });

        sr.reveal('#testimonial', {
            duration: 2000,
            origin: 'left',
            distance: '300px',
            viewFactor: 0.2
        });

        // Smooth Scrolling

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

    </script>

</body>
</html>