@include('Llamados.links')
<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">

    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif

    
    <!-- CSS Personalizados -->
    <link rel="stylesheet" href="../css/main.css">

</head>
<body id="body-crearAdmin">

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">BarberSys</a>
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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 sidebar">
            <div class="accordion" id="accordionExample">
                <div class="card" id="card-accordion">
                <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-block accordion-btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="flase" aria-controls="collapseOne">
                        Administradores
                    </button>
                </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <ul class="botones">
                        <a href="{{ route('admins.create') }}"><li>Agregar Administrador</li></a>
                        <a href="{{ route('admins.index') }}"><li>Ver Administradores</li></a>
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
            <h1>Agregar una Servicio</h1>
            <p class="lead">Especifique la información del servicio a crear.</p>
            <hr>
            <div class="card">
                <div class="card-header bg-ligth">{{ __('Especifique la información de el servicio a crear.') }}</div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'servicios.store']) !!}

                        <div class="form-group">
                            {!! Form::label('nombre', 'Nombre', ['class' => 'control-label']) !!}
                            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('descripcion', 'Descripción', ['class' => 'control-label']) !!}
                            {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('valor', 'Valor', ['class' => 'control-label']) !!}
                            {!! Form::text('valor', null, ['class' => 'form-control']) !!}
                        </div>


                        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Scripts Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>
</body>
</html>