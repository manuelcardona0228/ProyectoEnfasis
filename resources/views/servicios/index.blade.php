@extends('layouts.app')

@section('content')

<h1>Lista de servicios</h1>
<p class="lead"> 
    <a href="{!! url('servicios/create') !!}" class="btn btn-primary">Agregar Servicio</a></p>
<hr>
@foreach($servicios as $servicio)

<h3>{{ $servicio->nombre }}</h3>
<p>{{ $servicio->updated_at }}</p>

<p>
    <a href="{{ route('servicios.show', $servicio->id) }}" class="btn btn-info">Ver</a>
    <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-warning">Editar</a>

    {!! Form::open([
        'method' => 'DELETE',
        'route' => ['servicios.destroy', $servicio->id],
        'onsubmit' => 'return confirm("¿Esta seguro de borrar este servicio?");'
    ]) !!}
    {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
</p>
<hr>

@endforeach

{{ $servicios->links() }}

@stop