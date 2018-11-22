@extends('PruebaLayaud.app')

@section('content')
      <div class="col-md-10 offset-md-2 mt-4 main cuerpo-dos">
        <h1 class="lines-effect">Información Del Administrador</h1>
        <hr>
        <div class="card">
          <div class="card-header text-white bg-dark">{{ __('Administrador Seleccionado') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
              <tr>
              <td style="width: 200px;">Nombres</td>
                <td>{{ $admin->nombres }}</td>
                </tr>
                <td style="width: 200px;">Apellidos</td>
                <td>{{ $admin->apellidos }}</td>
                </tr>
                <tr>
                  <td>Cargo</td>
                  <td>{{ $admin->cargo->descripcion }}</td>
                </tr>
                <tr>
                  <td>Creado en</td>
                  <td>{{ $admin->created_at }}</td>
                </tr>
                <tr>
                  <td>Actualizado en</td>
                  <td>{{ $admin->updated_at }}</td>
                </tr>
                </table>
                <hr>

                <a href="{{ route('admins.index') }}" class="btn btn-info btn-block">Volver al listado</a>
                </br>
                <a href="{{ route('admins.edit', $admin->id) }}" class="btn btn-warning btn-block">Editar</a>
                </br>
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['admins.destroy', $admin->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar este administrador?");'
                ]) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
          </div>
        </div>  
      </div>
@endsection
