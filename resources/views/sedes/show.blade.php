@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main">
        <div class="card">
          <div class="card-header text-white bg-dark">{{ __('Ver Sede') }}</div>
            <div class="card-body">
              <h1>{{ $sede->razonSocial }}</h1>
              <p class="lead">Sede</p>

              <table class="table table-striped table-hover">
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

              <a href="{{ route('sedes.index') }}" class="btn btn-info">Volver al listado</a>
              <a href="{{ route('sedes.edit', $sede->id) }}" class="btn btn-warning">Editar</a>
              {!! Form::open([
                  'method' => 'DELETE',
                  'route' => ['sedes.destroy', $sede->id],
                  'onsubmit' => 'return confirm("¿Esta seguro de borrar esta sede?");'
              ]) !!}
              {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
              {!! Form::close() !!}
          </div>
        </div>  
    </div>
@endsection