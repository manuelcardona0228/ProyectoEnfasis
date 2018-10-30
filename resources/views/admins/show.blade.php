@extends('layouts.app')

@section('content')

<h1>{{ $admin->nombres }}</h1>
<p class="lead">Administrador</p>

<table class="table table-striped table-hover">
  <tr>
    <td style="width: 200px;">Apellidos</td>
    <td>{{ $admin->apellidos }}</td>
  </tr>
<tr>
  <td>Cargo</td>
  <td>{{ $admin->cargo->descripcion }}</td>
</tr>
<tr>
  <td>Creado en</td>
  <td>{{ $admin->created_at }}</td>
</tr>
<tr>
  <td>Actualizado en</td>
  <td>{{ $admin->updated_at }}</td>
</tr>
</table>

<hr>

<a href="{{ route('admins.index') }}" class="btn btn-info">Volver al listado</a>


{!! Form::open([
    'method' => 'DELETE',
    'route' => ['admins.destroy', $admin->id],
    'onsubmit' => 'return confirm("¿Esta seguro de borrar este administrador?");'
]) !!}
{!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

@stop