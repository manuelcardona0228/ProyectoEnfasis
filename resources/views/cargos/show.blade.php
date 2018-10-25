@extends('layouts.app')

@section('content')

<h1>{{ $cargo->descripcion }}</h1>
<p class="lead">Cargo</p>

<table class="table table-striped table-hover">
  <tr>
    <td style="width: 200px;">Descripción</td>
    <td>{{ $cargo->descripcion }}</td>
  </tr>
<tr>
  <td>Creado en</td>
  <td>{{ $cargo->created_at }}</td>
</tr>
<tr>
  <td>Actualizado en</td>
  <td>{{ $cargo->updated_at }}</td>
</tr>
</table>

<hr>

<a href="{{ route('cargos.index') }}" class="btn btn-info">Volver al listado</a>
<a href="{{ route('cargos.edit', $cargo->id) }}" class="btn btn-warning">Editar</a>
{!! Form::open([
    'method' => 'DELETE',
    'route' => ['cargos.destroy', $cargo->id],
    'onsubmit' => 'return confirm("¿Esta seguro de borrar este libro?");'
]) !!}
{!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

@stop