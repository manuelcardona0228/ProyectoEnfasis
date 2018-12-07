@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1>Lista de turnos</h1>
        <hr>
        <p class="lead"> 
            <a href="{!! url('turnos/create') !!}" class="btn btn-success btn-block">Crear Turno</a></p>
        <hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">iD</th>
                <th scope="col">Turno</th>
                <th scope="col">Fecha Actualizacion</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                </tr>
            </thead>
                @foreach($turnos as $turno)
                <tbody>
                <tr>
                <th scope="row">{{ $turno->id }}</th>
                <td>{{ $turno->servicio->nombre }}</td>
                <td>{{ $turno->updated_at }}</td>
                <td><a href="{{ route('turnos.show', $turno->id) }}" class="btn btn-outline-primary btn-sm">Ver</a></td>
                <td><a href="{{ route('turnos.edit', $turno->id) }}" class="btn btn-outline-dark btn-sm">Editar</a></td>
                <td>{!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['turnos.destroy', $turno->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar este turno?");'
                ]) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                {!! Form::close() !!}</td>
                </tr>
        
    @endforeach
            </tbody>
        </table>
    {{ $turnos->links() }}
    </div>
@endsection