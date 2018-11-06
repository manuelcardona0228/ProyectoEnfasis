@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    
    <!-- CSS Personalizados -->
    <link rel="stylesheet" href="../css/main.css">
    
</head>
<body id="body-indexAdmin">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-10">
            <h1>Lista de servicios</h1>
            <p class="lead"> 
            <a href="{!! url('servicios/create') !!}" class="btn btn-success">Agregar Servicio</a></p>
            <hr>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">iD</th>
                    <th scope="col">Nombre Del Servicio</th>
                    <th scope="col">Fecha Actualizacion</th>
                    <th scope="col">Ver</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                    @foreach($servicios as $servicio)
                    <tbody>
                    <tr>
                    <th scope="row">{{ $servicio->id }}</th>
                    <td>{{ $servicio->nombre }}</td>
                    <td>{{ $servicio->updated_at }}</td>
                    <td><a href="{{ route('servicios.show', $servicio->id) }}" class="btn btn-outline-primary btn-sm">Ver</a></td>
                    <td><a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-outline-dark btn-sm">Editar</a></td>
                    <td>{!! Form::open([
                        'method' => 'DELETE',
                        'route' => ['servicios.destroy', $servicio->id],
                        'onsubmit' => 'return confirm("¿Esta seguro de borrar este servicio?");'
                    ]) !!}
                    {!! Form::submit('Borrar', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                    {!! Form::close() !!}</td>
                    </tr>
            
        @endforeach
                </tbody>
            </table>
        {{ $servicios->links() }}
        </div>
    </div>
</div>

</body>
</html>
@stop