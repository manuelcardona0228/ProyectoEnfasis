@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1>Lista de Barberos</h1>
        <hr>
        <p class="lead"> 
        <a href="{!! url('barberos/create') !!}" class="btn btn-success btn-block">Agregar Barbero</a></p>
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
                @foreach($barberos as $barbero)
                <tbody>
                <tr>
                <th scope="row">{{ $barbero->id }}</th>
                <td>{{ $barbero->nombres }}</td>
                <td>{{ $barbero->updated_at }}</td>
                <td><a href="{{ route('barberos.show', $barbero->id) }}" class="btn btn-outline-primary btn-sm">Ver</a></td>
                <td><a href="{{ route('barberos.edit', $barbero->id) }}" class="btn btn-outline-dark btn-sm">Editar</a></td>
                <td>{!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['barberos.destroy', $barbero->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar este barbero?");'
                ]) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                {!! Form::close() !!}</td>
                </tr>
        
    @endforeach
            </tbody>
        </table>
    {{ $barberos->links() }}
    </div>
</div>
@endsection