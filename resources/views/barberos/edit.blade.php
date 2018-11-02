@extends('layouts.app')

@section('content')

<h1>Editar Barbero</h1>
<p class="lead"> 
    <a href="{{ route('barberos.index') }}">Volver.</a></p>
<hr>

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

{!! Form::model($barbero, [
    'method' => 'PUT',
    'route' => ['barberos.update', $barbero->id]
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
    {!! Form::label('apellidos', 'apellidos', ['class' => 'control-label']) !!}
    {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('telefono', 'Telefono', ['class' => 'control-label']) !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('correo', 'E-mail', ['class' => 'control-label']) !!}
    {!! Form::email('correo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('fechaNac', 'Fecha De Nacimiento', ['class' => 'control-label']) !!}
    {!! Form::text('fechaNac', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('calificacion', 'Calificación', ['class' => 'control-label']) !!}
    {!! Form::text('calificacion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('nameUser', 'Nombre De Usuario', ['class' => 'control-label']) !!}
    {!! Form::text('nameUser', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Contraseña', ['class' => 'control-label']) !!}
    {!! Form::password('password', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('sede_id', 'Sede', ['class' => 'control-label']) !!}
    {!! Form::select('sede_id', $sede, $barbero->sede_id ,['class' => 'form-control chosen-type', 'placeholder' => 'Seleccione La Sede...']) !!}
</div>


{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
<a href="{{ route('barberos.index') }}" class="btn btn-secondary">Cancelar</a>

{!! Form::close() !!}

@stop