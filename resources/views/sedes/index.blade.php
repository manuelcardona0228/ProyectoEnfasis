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
            <h1>Lista de Sedes</h1>
            <p class="lead"> 
            <a href="{!! url('sedes/create') !!}" class="btn btn-success">Agregar Sede</a></p>
            <hr>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">iD</th>
                    <th scope="col">Razón Social</th>
                    <th scope="col">Fecha Actualizacion</th>
                    <th scope="col">Ver</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                    @foreach($sedes as $sede)
                    <tbody>
                    <tr>
                    <th scope="row">{{ $sede->id }}</th>
                    <td>{{ $sede->razonSocial }}</td>
                    <td>{{ $sede->updated_at }}</td>
                    <td><a href="{{ route('sedes.show', $sede->id) }}" class="btn btn-outline-primary btn-sm">Ver</a></td>
                    <td><a href="{{ route('sedes.edit', $sede->id) }}" class="btn btn-outline-dark btn-sm">Editar</a></td>
                    <td>{!! Form::open([
                        'method' => 'DELETE',
                        'route' => ['sedes.destroy', $sede->id],
                        'onsubmit' => 'return confirm("¿Esta seguro de borrar esta sede?");'
                    ]) !!}
                    {!! Form::submit('Borrar', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                    {!! Form::close() !!}</td>
                    </tr>
            
        @endforeach
                </tbody>
            </table>
        {{ $sedes->links() }}
        </div>
    </div>
</div>

</body>
</html>
@stop