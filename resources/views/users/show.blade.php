@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1 class="lines-effect mt-2">Información Del Usuario</h1>
        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Usuario Seleccionado') }}</div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                <tr>
                    <td style="width: 200px;">Nombres</td>
                    <td>{{ $user->name }}</td>
                </tr>
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

                <a href="{{ route('users.index') }}" class="btn btn-info btn-block">Volver al listado</a>
                </br>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-block">Editar</a>
                </br>
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['users.destroy', $user->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar este usuario?");'
                ]) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
            </div>
        </div>  
    </div>
@endsection