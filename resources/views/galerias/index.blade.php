@extends('layouts.app')

@section('content')

<h1>Lista de cargos</h1>
<p class="lead"> 
    <a href="{!! url('barberias/create') !!}" class="btn btn-primary">Agregar Galeria</a></p>
<hr>
@foreach($galerias as $galeria)

<h3>{{ $galeria->nombre }}</h3>
<p>{{ $galeria->updated_at }}</p>

<p>
    <a href="{{ route('galerias.show', $galeria->id) }}" class="btn btn-info">Ver</a>
    <a href="{{ route('galerias.edit', $galeria->id) }}" class="btn btn-warning">Editar</a>

    {!! Form::open([
        'method' => 'DELETE',
        'route' => ['galerias.destroy', $galeria->id],
        'onsubmit' => 'return confirm("¿Esta seguro de borrar esta galeria?");'
    ]) !!}
    {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
</p>
<hr>

@endforeach

{{ $galerias->links() }}

@stop