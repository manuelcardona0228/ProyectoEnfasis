@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
      <h1 class="lines-effect">Información Del Servicio</h1>
        <div class="card">
          <div class="card-header text-white bg-dark">{{ __('Servicio Seleccionado') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
              
                <tr>
                  <td style="width: 200px;">Nombre</td>
                  <td>{{ $servicio->nombre }}</td>
                </tr>
                <tr>
                  <td style="width: 200px;">Descripción</td>
                  <td>{{ $servicio->descripcion }}</td>
                </tr>
                <tr>
                  <td style="width: 200px;">Valor</td>
                  <td>{{ $servicio->valor }}</td>
                </tr>
              <tr>
                <td>Creado en</td>
                <td>{{ $servicio->created_at }}</td>
              </tr>
              <tr>
                <td>Actualizado en</td>
                <td>{{ $servicio->updated_at }}</td>
              </tr>
              </table>

              <hr>

              <a href="{{ route('servicios.index') }}" class="btn btn-info btn-block">Volver al listado</a>
              </br>
              <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-warning btn-block">Editar</a>
              </br>
              {!! Form::open([
                  'method' => 'DELETE',
                  'route' => ['servicios.destroy', $servicio->id],
                  'onsubmit' => 'return confirm("¿Esta seguro de borrar este servicio?");'
              ]) !!}
              {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
              {!! Form::close() !!}
            </div>
        </div>  
    </div>
@endsection