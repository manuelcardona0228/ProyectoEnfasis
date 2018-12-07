@extends('PruebaLayaud.app')

@section('content')
        <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1 class="lines-effect">Lista De Cargos</h1>
        <p class="lead"> 
        <hr>
        <a href="{!! url('cargos/create') !!}" class="btn btn-success btn-block">Crear Cargo</a></p>
        <hr>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">iD</th>
                    <th scope="col">Descripcion Del Cargo</th>
                    <th scope="col">Fecha Actualizacion</th>
                    <th scope="col">Ver</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                    @foreach($cargos as $cargo)
                    <tbody>
                    <tr>
                    <th scope="row">{{ $cargo->id }}</th>
                    <td>{{ $cargo->descripcion }}</td>
                    <td>{{ $cargo->updated_at }}</td>
                    <td><a href="{{ route('cargos.show', $cargo->id) }}" class="btn btn-outline-primary btn-sm">Ver</a></td>
                    <td><a href="{{ route('cargos.edit', $cargo->id) }}" class="btn btn-outline-dark btn-sm">Editar</a></td>
                    <td>{!! Form::open([
                        'method' => 'DELETE',
                        'route' => ['cargos.destroy', $cargo->id],
                        'onsubmit' => 'return confirm("¿Esta seguro de borrar este cargo?");'
                    ]) !!}
                    {!! Form::submit('Borrar', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                    {!! Form::close() !!}</td>
                    </tr>
            
        @endforeach
                </tbody>
            </table>
        {{ $cargos->links() }}
        </div>
@endsection
