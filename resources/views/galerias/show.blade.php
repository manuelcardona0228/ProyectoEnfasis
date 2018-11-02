@extends('layouts.app')

@section('content')

<h1>{{ $galeria->nombre }}</h1>
<p class="lead">Galeria</p>

<table class="table table-striped table-hover">
  <tr>
    <td style="width: 200px;">Descripción</td>
    <td>{{ $galeria->descripcion }}</td>
  </tr>
  <tr>
    <td style="width: 200px;">Descripción</td>
    <td>{{ $galeria->barbero->nombres }}</td>
  </tr>
<tr>
  <td>Creado en</td>
  <td>{{ $galeria->created_at }}</td>
</tr>
<tr>
  <td>Actualizado en</td>
  <td>{{ $galeria->updated_at }}</td>
</tr>
</table>

<hr>

<a href="{{ route('galerias.index') }}" class="btn btn-info">Volver al listado</a>
<a href="{{ route('galerias.edit', $galeria->id) }}" class="btn btn-warning">Editar</a>
{!! Form::open([
    'method' => 'DELETE',
    'route' => ['galerias.destroy', $galeria->id],
    'onsubmit' => 'return confirm("¿Esta seguro de borrar esta galeria?");'
]) !!}
{!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

@stop