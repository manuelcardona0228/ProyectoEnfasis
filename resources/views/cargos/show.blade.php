@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
      <h1>Información Del Cargo</h1>
        <div class="card mt-2">
          <div class="card-header text-white bg-dark">{{ __('Cargo Seleccionado') }}</div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                  <tr>
                    <td style="width: 200px;">Descripción</td>
                    <td>{{ $cargo->descripcion }}</td>
                  </tr>
                <tr>
                  <td>Creado en</td>
                  <td>{{ $cargo->created_at }}</td>
                </tr>
                <tr>
                  <td>Actualizado en</td>
                  <td>{{ $cargo->updated_at }}</td>
                </tr>
                </table>

                <hr>
                <a href="{{ route('cargos.index') }}" class="btn btn-info btn-block">Volver al listado</a>
                <br>
                <a href="{{ route('cargos.edit', $cargo->id) }}" class="btn btn-warning btn-block">Editar</a>
                <br>
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['cargos.destroy', $cargo->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar este libro?");'
                ]) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
          </div>
        </div>  
      </div>
@endsection