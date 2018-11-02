@extends('layouts.app')

@section('content')

<h1>Agregar un Turno</h1>
<p class="lead">Especifique la información del turno a crear.</p>
<hr>

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

{!! Form::open(['route' => 'turnos.store']) !!}

<div class="form-group">
    {!! Form::label('fecha', 'fecha', ['class' => 'control-label']) !!}
    {!! Form::date('fecha', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('barbero_id', 'Barbero', ['class' => 'control-label']) !!}
    {!! Form::select('barbero_id', $barbero, $barbero, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('servicio_id', 'Servicio', ['class' => 'control-label']) !!}
    {!! Form::select('servicio_id', $servicio, $servicio, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('user_id', 'Usuario', ['class' => 'control-label']) !!}
    {!! Form::select('user_id', $usuario, $usuario, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop