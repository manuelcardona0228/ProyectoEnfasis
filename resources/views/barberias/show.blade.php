@extends('PruebaLayaud.app')

@section('content')
    
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
      <h1 class="lines-effect">Información De La Barberia</h1>
        <div class="card mt-2">
          <div class="card-header text-white bg-dark">{{ __('Barberia Seleccionada') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
                <tr>
                  <td style="width: 200px;">Nit</td>
                  <td>{{ $barberia->nit }}</td>
                </tr>
                <tr>
                  <td style="width: 200px;">Razón Social</td>
                  <td>{{ $barberia->razonSocial }}</td>
                </tr>
                <td>Dirección</td>
                  <td>{{ $barberia->direccion }}</td>
                </tr>
                <td>Telefono</td>
                  <td>{{ $barberia->telefono }}</td>
                </tr>
                <td>Sitio Web</td>
                  <td>{{ $barberia->sitioWeb }}</td>
                </tr>
                <td>Administrador</td>
                  <td>{{ $barberia->admin->nombres }}</td>
                </tr>
                <tr>
                  <td>Creado en</td>
                  <td>{{ $barberia->created_at }}</td>
                </tr>
              <tr>
                <td>Actualizado en</td>
                <td>{{ $barberia->updated_at }}</td>
              </tr>
              </table>

              <hr>

              <a href="{{ route('barberias.index') }}" class="btn btn-info btn-block">Volver al listado</a>
              </br>
              <a href="{{ route('barberias.edit', $barberia->id) }}" class="btn btn-warning btn-block">Editar</a>
              </br>
              {!! Form::open([
                  'method' => 'DELETE',
                  'route' => ['barberias.destroy', $barberia->id],
                  'onsubmit' => 'return confirm("¿Esta seguro de borrar esta barberia?");'
              ]) !!}
              {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
              {!! Form::close() !!}
          </div>
        </div>  
    </div>
@endsection