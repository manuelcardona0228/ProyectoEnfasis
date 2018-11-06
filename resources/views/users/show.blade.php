@include('Llamados.links')
<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    
    <!-- CSS Personalizados -->
    <link rel="stylesheet" href="../css/main.css">
    
</head>
<body id="body-verAdmin">

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
        <div class="card">
          <div class="card-header text-white bg-dark">{{ __('Usuario') }}</div>
            <div class="card-body">
              <h1>{{ $user->name }}</h1>
              <p class="lead">Usuario</p>

              <table class="table table-striped table-hover">
              <tr>
                <td style="width: 200px;">Apellidos</td>
                <td>{{ $user->lastName }}</td>
                </tr>
                <tr>
                  <td>Cargo</td>
                  <td>{{ $user->cargo->descripcion }}</td>
                </tr>
                <tr>
                  <td>Creado en</td>
                  <td>{{ $user->created_at }}</td>
                </tr>
                <tr>
                  <td>Actualizado en</td>
                  <td>{{ $user->updated_at }}</td>
                </tr>
                </table>
                <hr>

                <a href="{{ route('users.index') }}" class="btn btn-info">Volver al listado</a>

                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['users.destroy', $user->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar este usuario?");'
                ]) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
          </div>
        </div>  
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>
</body>
</html>