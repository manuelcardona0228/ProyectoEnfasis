@extends('PruebaLayaud.app')

@section('content')

    <div class="col-md-10 offset-md-2 mt-5 main">
        <div class="card">
          <div class="card-header text-white bg-dark">{{ __('Barberia') }}</div>
            <div class="card-body">
              <h1>{{ $turno->fecha }}</h1>
              <p class="lead">Turno</p>

              <table class="table table-striped table-hover">
              <tr>
                <td>Barbero</td>
                  <td>{{ $turno->barbero->nombres }}</td>
                </tr>
                <td>Servicio</td>
                  <td>{{ $turno->servicio->nombre }}</td>
                </tr>
                <td>Usuario</td>
                  <td>{{ $turno->user->name }}</td>
                </tr>
              <tr>
                <td>Creado en</td>
                <td>{{ $turno->created_at }}</td>
              </tr>
              <tr>
                <td>Actualizado en</td>
                <td>{{ $turno->updated_at }}</td>
              </tr>
              </table>

              <hr>

              <a href="{{ route('turnos.index') }}" class="btn btn-info">Volver al listado</a>
              <a href="{{ route('turnos.edit', $turno->id) }}" class="btn btn-warning">Editar</a>
              {!! Form::open([
                  'method' => 'DELETE',
                  'route' => ['turnos.destroy', $turno->id],
                  'onsubmit' => 'return confirm("¿Esta seguro de borrar este turno?");'
              ]) !!}
              {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
              {!! Form::close() !!}

            </div>
        </div>  
    </div>
@endsection