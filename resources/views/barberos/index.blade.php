@extends('layouts.app')

@section('content')

<h1>Lista de Barberos</h1>
<p class="lead"> 
    <a href="{!! url('barberos/create') !!}" class="btn btn-primary">Agregar Barbero</a></p>
<hr>
@foreach($barberos as $barbero)

<h3>{{ $barbero->nombres }}</h3>
<p>{{ $barbero->updated_at }}</p>

<p>
    <a href="{{ route('barberos.show', $barbero->id) }}" class="btn btn-info">Ver</a>
    <a href="{{ route('barberos.edit', $barbero->id) }}" class="btn btn-warning">Editar</a>

    {!! Form::open([
        'method' => 'DELETE',
        'route' => ['barberos.destroy', $barbero->id],
        'onsubmit' => 'return confirm("¿Esta seguro de borrar este Barbero?");'
    ]) !!}
    {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
</p>
<hr>

@endforeach

{{ $barberos->links() }}

@stop