@extends('layouts.app')

@section('content')

<h1>Lista de turnos</h1>
<p class="lead"> 
    <a href="{!! url('turnos/create') !!}" class="btn btn-primary">Agregar Turno</a></p>
<hr>
@foreach($turnos as $turno)

<h3>{{ $turno->fecha }}</h3>
<p>{{ $turno->updated_at }}</p>

<p>
    <a href="{{ route('turnos.show', $turno->id) }}" class="btn btn-info">Ver</a>
    <a href="{{ route('turnos.edit', $turno->id) }}" class="btn btn-warning">Editar</a>

    {!! Form::open([
        'method' => 'DELETE',
        'route' => ['turnos.destroy', $turno->id],
        'onsubmit' => 'return confirm("¿Esta seguro de borrar este turno?");'
    ]) !!}
    {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
</p>
<hr>

@endforeach

{{ $turnos->links() }}

@stop