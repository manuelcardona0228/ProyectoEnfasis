@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main">
        <div class="card">
          <div class="card-header text-white bg-dark">{{ __('Barberia') }}</div>
            <div class="card-body">
              <h1>{{ $servicio->nombre }}</h1>
              <p class="lead">Servicio</p>

              <table class="table table-striped table-hover">
              <tr>
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

              <a href="{{ route('servicios.index') }}" class="btn btn-info">Volver al listado</a>
              <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-warning">Editar</a>
              {!! Form::open([
                  'method' => 'DELETE',
                  'route' => ['servicios.destroy', $servicio->id],
                  'onsubmit' => 'return confirm("¿Esta seguro de borrar este servicio?");'
              ]) !!}
              {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
              {!! Form::close() !!}
            </div>
        </div>  
    </div>
@endsection