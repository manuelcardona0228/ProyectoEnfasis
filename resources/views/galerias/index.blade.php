@extends('PruebaLayaud.app')

@section('content')
        <div class="col-md-10 offset-md-2 mt-5 main">
            <h1>Lista De Galerias</h1>
            <p class="lead"> 
            <a href="{!! url('galerias/create') !!}" class="btn btn-success">Agregar Galeria</a></p>
            <hr>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">iD</th>
                    <th scope="col">Nombre De La Galeria</th>
                    <th scope="col">Ultima Fecha De Actualizacion</th>
                    <th scope="col">Ver</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                    @foreach($galerias as $galeria)
                    <tbody>
                    <tr>
                    <th scope="row">{{ $galeria->id }}</th>
                    <td>{{ $galeria->nombre }}</td>
                    <td>{{ $galeria->updated_at }}</td>
                    <td><a href="{{ route('galerias.show', $galeria->id) }}" class="btn btn-outline-primary btn-sm">Ver</a></td>
                    <td><a href="{{ route('galerias.edit', $galeria->id) }}" class="btn btn-outline-dark btn-sm">Editar</a></td>
                    <td>{!! Form::open([
                        'method' => 'DELETE',
                        'route' => ['galerias.destroy', $galeria->id],
                        'onsubmit' => 'return confirm("¿Esta seguro de borrar esta galeria?");'
                    ]) !!}
                    {!! Form::submit('Borrar', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                    {!! Form::close() !!}</td>
                    </tr>
            
        @endforeach
                </tbody>
            </table>
        {{ $galerias->links() }}
        </div>
@endsection