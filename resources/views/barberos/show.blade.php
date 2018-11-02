@extends('layouts.app')

@section('content')

<h1>{{ $barbero->nombres }}</h1>
<p class="lead">Barbero</p>

<table class="table table-striped table-hover">
  <tr>
    <td style="width: 200px;">Documento</td>
    <td>{{ $barbero->documento }}</td>
  </tr>
<tr>
  <td>Apellidos</td>
  <td>{{ $barbero->apellidos }}</td>
</tr>
<tr>
  <td>Telefono</td>
  <td>{{ $barbero->telefono }}</td>
</tr>
<tr>
  <td>Correo</td>
  <td>{{ $barbero->apellidos }}</td>
</tr>
<tr>
  <td>Fecha De Nacimiento</td>
  <td>{{ $barbero->fechaNac }}</td>
</tr>
<tr>
  <td>Calificación</td>
  <td>{{ $barbero->calificacion }}</td>
</tr>
<tr>
  <td>Nombre De Usuario</td>
  <td>{{ $barbero->nameUser }}</td>
</tr>
<tr>
  <td>Sede</td>
  <td>{{ $barbero->sede->razonSocial }}</td>
</tr>
<tr>
  <td>Cargo</td>
  <td>{{ $barbero->cargo->descripcion }}</td>
</tr>
<tr>
  <td>Creado en</td>
  <td>{{ $barbero->created_at }}</td>
</tr>
<tr>
  <td>Actualizado en</td>
  <td>{{ $barbero->updated_at }}</td>
</tr>
</table>

<hr>

<a href="{{ route('barberos.index') }}" class="btn btn-info">Volver al listado</a>
<a href="{{ route('barberos.edit', $barbero->id) }}" class="btn btn-warning">Editar</a>
{!! Form::open([
    'method' => 'DELETE',
    'route' => ['barberos.destroy', $barbero->id],
    'onsubmit' => 'return confirm("¿Esta seguro de borrar este barbero?");'
]) !!}
{!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

@stop