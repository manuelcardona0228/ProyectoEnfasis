@extends('layouts.app')

@section('content')

<h1>Editar Administrador</h1>
<p class="lead"> 
    <a href="{{ route('admins.index') }}">Volver.</a></p>
<hr>

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

{!! Form::model($admin, [
    'method' => 'PUT',
    'route' => ['admins.update', $admin->id]
]) !!}


<div class="form-group">
    {!! Form::label('documento', 'Documento', ['class' => 'control-label']) !!}
    {!! Form::text('documento', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('nombres', 'Nombres', ['class' => 'control-label']) !!}
    {!! Form::text('nombres', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('apellidos', 'Apellidos', ['class' => 'control-label']) !!}
    {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('telefono', 'Telefonos', ['class' => 'control-label']) !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('correo', 'Correo', ['class' => 'control-label']) !!}
    {!! Form::email('correo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('fechaNac', 'Fecha De Nacimiento', ['class' => 'control-label']) !!}
    {!! Form::date('fechaNac', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('nomUser', 'Nombre De Usuario', ['class' => 'control-label']) !!}
    {!! Form::text('nomUser', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Contraseña', ['class' => 'control-label']) !!}
    {!! Form::text('password', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('cargo_id', 'Cargo', ['class' => 'control-label']) !!}
    {!! Form::select('cargo_id', $cargo, $admin->cargo_id, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
<a href="{{ route('admins.index') }}" class="btn btn-secondary">Cancelar</a>

{!! Form::close() !!}

@stop