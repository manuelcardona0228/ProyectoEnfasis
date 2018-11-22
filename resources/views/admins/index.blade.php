@extends('PruebaLayaud.app')

@section('content')

    <div class="col-md-10 offset-md-2 mt-4 main cuerpo-dos">
            <h1>Lista de Administradores</h1>
            <hr>
            <p class="lead"> 
            <a href="{!! url('admins/create') !!}" class="btn btn-success btn-block">Agregar Administrador</a></p>
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
                    @foreach($admins as $admin)
                    <tbody>
                    <tr>
                    <th scope="row">{{ $admin->id }}</th>
                    <td>{{ $admin->nombres }}</td>
                    <td>{{ $admin->updated_at }}</td>
                    <td><a href="{{ route('admins.show', $admin->id) }}" class="btn btn-outline-primary btn-sm">Ver</a></td>
                    <td><a href="{{ route('admins.edit', $admin->id) }}" class="btn btn-outline-dark btn-sm">Editar</a></td>
                    <td>{!! Form::open([
                        'method' => 'DELETE',
                        'route' => ['admins.destroy', $admin->id],
                        'onsubmit' => 'return confirm("¿Esta seguro de borrar este administrador?");'
                    ]) !!}
                    {!! Form::submit('Borrar', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                    {!! Form::close() !!}</td>
                    </tr>
            
        @endforeach
                </tbody>
            </table>
        {{ $admins->links() }}
        </div>
@endsection
