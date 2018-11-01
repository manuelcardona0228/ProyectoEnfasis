@extends('layouts.app')

@section('content')

<h1>Lista de barberias</h1>
<p class="lead"> 
    <a href="{!! url('barberias/create') !!}" class="btn btn-primary">Agregar Barberia</a></p>
<hr>
@foreach($barberias as $barberia)

<h3>{{ $barberia->nit }}</h3>
<h3>{{ $barberia->razonSocial }}</h3>
<p>{{ $barberia->updated_at }}</p>

<p>
    <a href="{{ route('barberias.show', $barberia->id) }}" class="btn btn-info">Ver</a>
    <a href="{{ route('barberias.edit', $barberia->id) }}" class="btn btn-warning">Editar</a>

    {!! Form::open([
        'method' => 'DELETE',
        'route' => ['barberias.destroy', $barberia->id],
        'onsubmit' => 'return confirm("¿Esta seguro de borrar esta barberia?");'
    ]) !!}
    {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
</p>
<hr>

@endforeach

{{ $barberias->links() }}

@stop