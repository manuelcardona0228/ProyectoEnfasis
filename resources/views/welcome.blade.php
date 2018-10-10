@include('Llamados.links')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema Barberias</title>
</head>
<body>
    <!-- Barra De Navegacion -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" ></a>
            <img src="plugins/bootstrap/img/barberIcon.png" width="30" height="30" class="d-inline-block align-top" alt="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/"> Sistema Barberias </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/login"> Iniciar Sesión </a>
                </li>    
                </ul>
                <ul class="navbar-nav ml-auto">
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
                        <img src="plugins/bootstrap/img/imgInicio.png" style="width: 40%;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header-content-right">
                        <h1 class="display-4">Lorem ipsum dolor</h1>
                        <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas aspernatur veniam expedita, maxime vero ad quam, ipsam alias consectetur necessitatibus harum et corrupti unde saepe, iste adipisci porro nam commodi?</p>
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
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit itaque facere ipsam, quisquam dolorem exercitationem quod necessitatibus alias rem accusantium et, tempora doloribus consectetur voluptas eveniet hic voluptates sequi. Ipsam?
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
                        <h2>Lorem ipsum dolor sit.</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ea assumenda nostrum, totam laudantium laborum asperiores quas officia illo repellat distinctio dolor ullam error culpa consectetur laboriosam corrupti velit omnis!. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ea assumenda nostrum, totam laudantium laborum asperiores quas officia illo repellat distinctio dolor ullam error culpa consectetur laboriosam corrupti velit omnis!</p>
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
                    <h2>Lorem ipsum dolor sit.</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus consequatur maxime iure praesentium tempora explicabo in id cupiditate illo numquam commodi quis sed reprehenderit corrupti accusantium cumque quia, ab quas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus consequatur maxime iure praesentium tempora explicabo in id cupiditate illo numquam commodi quis sed reprehenderit corrupti accusantium cumque quia, ab quas.</p>
                </div>
                <div class="col-md-6 my-4">
                    <h2>Lorem ipsum dolor sit.</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus consequatur maxime iure praesentium tempora explicabo in id cupiditate illo numquam commodi quis sed reprehenderit corrupti accusantium cumque quia, ab quas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus consequatur maxime iure praesentium tempora explicabo in id cupiditate illo numquam commodi quis sed reprehenderit corrupti accusantium cumque quia, ab quas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <form class="card text-white bg-dark my-4">
                        <div class="card-header">Contacto</div>
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" placeholder="Nombre" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <textarea cols="30" rows="10" placeholder="Mensaje" class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-outline-dark btn-block"> 
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