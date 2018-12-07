@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1>Lista de Usuarios</h1>
        <hr>
        <p class="lead"> 
        <a href="{!! url('users/create') !!}" class="btn btn-success btn-block">Crear Usuario</a></p>
        <hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">iD</th>
                <th scope="col">Nombres</th>
                <th scope="col">Fecha Actualizacion</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                </tr>
            </thead>
                @foreach($users as $user)
                <tbody>
                <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name}}</td>
                <td>{{ $user->updated_at }}</td>
                <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-outline-primary btn-sm">Ver</a></td>
                <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-dark btn-sm">Editar</a></td>
                <td>{!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['users.destroy', $user->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar este usuario?");'
                ]) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                {!! Form::close() !!}</td>
                </tr>
        
    @endforeach
            </tbody>
        </table>
    {{ $users->links() }}
    </div>
@endsection