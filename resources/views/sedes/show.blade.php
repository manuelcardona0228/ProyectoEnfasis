@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
      <h1 class="lines-effect mt-2">Información De La Sede</h1>
        <div class="card">
          <div class="card-header text-white bg-dark">{{ __('Sede Seleccionada') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
              <tr>
                <td style="width: 200px;">Razón Social</td>
                <td>{{ $sede->razonSocial }}</td>
              </tr>
              <tr>
                  <td style="width: 200px;">Nit</td>
                  <td>{{ $sede->nit }}</td>
                </tr>
                <td>Dirección</td>
                  <td>{{ $sede->direccion }}</td>
                </tr>
                <td>Telefono</td>
                  <td>{{ $sede->telefono }}</td>
                </tr>
                <td>Barberia</td>
                  <td>{{ $sede->barberia->razonSocial }}</td>
                </tr>
                <td>Administrador</td>
                  <td>{{ $sede->admin->nombres }}</td>
                </tr>
              <tr>
                <td>Creado en</td>
                <td>{{ $sede->created_at }}</td>
              </tr>
              <tr>
                <td>Actualizado en</td>
                <td>{{ $sede->updated_at }}</td>
              </tr>
              </table>

              <hr>

              <a href="{{ route('sedes.index') }}" class="btn btn-info btn-block">Volver al listado</a>
              </br>
              <a href="{{ route('sedes.edit', $sede->id) }}" class="btn btn-warning btn-block">Editar</a>
              </br>
              {!! Form::open([
                  'method' => 'DELETE',
                  'route' => ['sedes.destroy', $sede->id],
                  'onsubmit' => 'return confirm("¿Esta seguro de borrar esta sede?");'
              ]) !!}
              {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
              {!! Form::close() !!}
          </div>
        </div>  
    </div>
@endsection