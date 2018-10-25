@extends('layouts.app')

@section('content')

<h1>Lista de cargos</h1>
<p class="lead"> 
    <a href="{!! url('cargos/create') !!}" class="btn btn-primary">Agregar cargo</a></p>
<hr>
@foreach($cargos as $cargo)

<h3>{{ $cargo->descripcion }}</h3>
<p>{{ $cargo->updated_at }}</p>

<p>
    <a href="{{ route('cargos.show', $cargo->id) }}" class="btn btn-info">Ver</a>
    <a href="{{ route('cargos.edit', $cargo->id) }}" class="btn btn-warning">Editar</a>

    {!! Form::open([
        'method' => 'DELETE',
        'route' => ['cargos.destroy', $cargo->id],
        'onsubmit' => 'return confirm("¿Esta seguro de borrar este cargo?");'
    ]) !!}
    {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
</p>
<hr>

@endforeach

{{ $cargos->links() }}

@stop