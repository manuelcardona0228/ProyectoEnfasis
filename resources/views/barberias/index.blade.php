@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
    <h1 class="lines-effect">Lista de barberias</h1>
    <hr>
    <a href="{!! url('barberias/create') !!}" class="btn btn-success btn-block">Crear Barberia</a></p>
    <hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">iD</th>
                <th scope="col">Nit</th>
                <th scope="col">Razón Social</th>
                <th scope="col">Fecha Actualizacion</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                </tr>
            </thead>
                @foreach($barberias as $barberia)
                <tbody>
                <tr>
                <th scope="row">{{ $barberia->id }}</th>
                <td>{{ $barberia->nit }}</td>
                <td>{{ $barberia->razonSocial }}</td>
                <td>{{ $barberia->updated_at }}</td>
                <td><a href="{{ route('barberias.show', $barberia->id) }}" class="btn btn-outline-primary btn-sm">Ver</a></td>
                <td><a href="{{ route('barberias.edit', $barberia->id) }}" class="btn btn-outline-dark btn-sm">Editar</a></td>
                <td>{!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['barberias.destroy', $barberia->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar esta barberia?");'
                ]) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                {!! Form::close() !!}</td>
                </tr>
        
    @endforeach
            </tbody>
        </table>
    {{ $barberias->links() }}
    </div>
@endsection
