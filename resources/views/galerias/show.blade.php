@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
    <h1 class="lines-effect">Información De La Galeria</h1>
        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Galeria Seleccionada') }}</div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                <tr>
                    <td style="width: 200px;">Nombre De La Galeria</td>
                    <td>{{ $galeria->nombre }}</td>
                </tr>
                <tr>
                    <td style="width: 200px;">Descripción</td>
                    <td>{{ $galeria->descripcion }}</td>
                </tr>
                <tr>
                    <td style="width: 200px;">Barbero</td>
                    <td>{{ $galeria->barbero->nombres }}</td>
                </tr>
                <tr>
                <td>Creado en</td>
                <td>{{ $galeria->created_at }}</td>
                </tr>
                <tr>
                <td>Actualizado en</td>
                <td>{{ $galeria->updated_at }}</td>
                </tr>
                </table>

                <hr>

                <a href="{{ route('galerias.index') }}" class="btn btn-info btn-block">Volver al listado</a>
                </br>
                <a href="{{ route('galerias.edit', $galeria->id) }}" class="btn btn-warning btn-block">Editar</a>
                </br>
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['galerias.destroy', $galeria->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar esta galeria?");'
                ]) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
            </div>
        </div>  
    </div>
@endsection