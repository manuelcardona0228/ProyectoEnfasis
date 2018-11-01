@extends('layouts.app')

@section('content')

<h1>{{ $barberia->nit }}</h1>
<p class="lead">Barberia</p>

<table class="table table-striped table-hover">
  <tr>
    <td style="width: 200px;">Razón Social</td>
    <td>{{ $barberia->razonSocial }}</td>
  </tr>
  <td>Dirección</td>
    <td>{{ $barberia->direccion }}</td>
  </tr>
  <td>Telefono</td>
    <td>{{ $barberia->telefono }}</td>
  </tr>
  <td>Sitio Web</td>
    <td>{{ $barberia->sitioWeb }}</td>
  </tr>
  <td>Administrador</td>
    <td>{{ $barberia->admin->nombres }}</td>
  </tr>
  <tr>
    <td>Creado en</td>
    <td>{{ $barberia->created_at }}</td>
  </tr>
<tr>
  <td>Actualizado en</td>
  <td>{{ $barberia->updated_at }}</td>
</tr>
</table>

<hr>

<a href="{{ route('barberias.index') }}" class="btn btn-info">Volver al listado</a>
<a href="{{ route('barberias.edit', $barberia->id) }}" class="btn btn-warning">Editar</a>
{!! Form::open([
    'method' => 'DELETE',
    'route' => ['barberias.destroy', $barberia->id],
    'onsubmit' => 'return confirm("¿Esta seguro de borrar esta barberia?");'
]) !!}
{!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

@stop