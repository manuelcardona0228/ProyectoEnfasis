@extends('layouts.app')

@section('content')

<h1>Agregar una Servicio</h1>
<p class="lead">Especifique la información del servicio a crear.</p>
<hr>

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

{!! Form::open(['route' => 'servicios.store']) !!}

<div class="form-group">
    {!! Form::label('nombre', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('descripcion', 'Descripción', ['class' => 'control-label']) !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('valor', 'Valor', ['class' => 'control-label']) !!}
    {!! Form::text('valor', null, ['class' => 'form-control']) !!}
</div>


{!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop