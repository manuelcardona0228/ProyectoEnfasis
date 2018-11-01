@extends('layouts.app')

@section('content')

<h1>{{ $sede->nit }}</h1>
<p class="lead">Sede</p>

<table class="table table-striped table-hover">
<tr>
    <td style="width: 200px;">Razón Social</td>
    <td>{{ $sede->razonSocial }}</td>
  </tr>
  <td>Dirección</td>
    <td>{{ $sede->direccion }}</td>
  </tr>
  <td>Telefono</td>
    <td>{{ $sede->telefono }}</td>
  </tr>
  <td>Barberia</td>
    <td>{{ $sede->barberia->razonSocial }}</td>
  </tr>
  <td>Administrador</td>
    <td>{{ $sede->admin->nombres }}</td>
  </tr>
<tr>
  <td>Creado en</td>
  <td>{{ $sede->created_at }}</td>
</tr>
<tr>
  <td>Actualizado en</td>
  <td>{{ $sede->updated_at }}</td>
</tr>
</table>

<hr>

<a href="{{ route('sedes.index') }}" class="btn btn-info">Volver al listado</a>
<a href="{{ route('sedes.edit', $sede->id) }}" class="btn btn-warning">Editar</a>
{!! Form::open([
    'method' => 'DELETE',
    'route' => ['sedes.destroy', $sede->id],
    'onsubmit' => 'return confirm("¿Esta seguro de borrar esta sede?");'
]) !!}
{!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

@stop