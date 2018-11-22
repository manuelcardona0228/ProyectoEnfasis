@extends('PruebaLayaud.app')

@section('content')
      <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
      <h1>Información Del Barbero</h1>
        <div class="card mt-2">
          <div class="card-header text-white bg-dark">{{ __('Barbero Seleccionado') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
                <tr>
                  <td style="width: 200px;">Nombre</td>
                  <td>{{ $barbero->nombres }}</td>
                </tr>
                <tr>
                  <td style="width: 200px;">Documento</td>
                  <td>{{ $barbero->documento }}</td>
                </tr>
              <tr>
                <td>Apellidos</td>
                <td>{{ $barbero->apellidos }}</td>
              </tr>
              <tr>
                <td>Telefono</td>
                <td>{{ $barbero->telefono }}</td>
              </tr>
              <tr>
                <td>Correo</td>
                <td>{{ $barbero->apellidos }}</td>
              </tr>
              <tr>
                <td>Fecha De Nacimiento</td>
                <td>{{ $barbero->fechaNac }}</td>
              </tr>
              <tr>
                <td>Calificación</td>
                <td>{{ $barbero->calificacion }}</td>
              </tr>
              <tr>
                <td>Nombre De Usuario</td>
                <td>{{ $barbero->nameUser }}</td>
              </tr>
              <tr>
                <td>Sede</td>
                <td>{{ $barbero->sede->razonSocial }}</td>
              </tr>
              <tr>
                <td>Cargo</td>
                <td>{{ $barbero->cargo->descripcion }}</td>
              </tr>
              <tr>
                <td>Creado en</td>
                <td>{{ $barbero->created_at }}</td>
              </tr>
              <tr>
                <td>Actualizado en</td>
                <td>{{ $barbero->updated_at }}</td>
              </tr>
              </table>

              <hr>

              <a href="{{ route('barberos.index') }}" class="btn btn-info btn-block">Volver al listado</a>
              </br>
              <a href="{{ route('barberos.edit', $barbero->id) }}" class="btn btn-warning btn-block">Editar</a>
              </br>
              {!! Form::open([
                  'method' => 'DELETE',
                  'route' => ['barberos.destroy', $barbero->id],
                  'onsubmit' => 'return confirm("¿Esta seguro de borrar este barbero?");'
              ]) !!}
              {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
              {!! Form::close() !!}
          </div>
        </div>  
      </div>
@endsection