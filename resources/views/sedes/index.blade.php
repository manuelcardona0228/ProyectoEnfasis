@extends('layouts.app')

@section('content')

<h1>Lista de cargos</h1>
<p class="lead"> 
    <a href="{!! url('sedes/create') !!}" class="btn btn-primary">Agregar Sede</a></p>
<hr>
@foreach($sedes as $sede)

<h3>{{ $sede->razonSocial }}</h3>
<p>{{ $sede->updated_at }}</p>

<p>
    <a href="{{ route('sedes.show', $sede->id) }}" class="btn btn-info">Ver</a>
    <a href="{{ route('sedes.edit', $sede->id) }}" class="btn btn-warning">Editar</a>

    {!! Form::open([
        'method' => 'DELETE',
        'route' => ['sedes.destroy', $sede->id],
        'onsubmit' => 'return confirm("¿Esta seguro de borrar esta sede?");'
    ]) !!}
    {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
</p>
<hr>

@endforeach

{{ $sedes->links() }}

@stop