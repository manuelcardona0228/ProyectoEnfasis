@extends('layouts.app')

@section('content')

<h1>Editar Servicio</h1>
<p class="lead"> 
    <a href="{{ route('servicios.index') }}">Volver.</a></p>
<hr>

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

{!! Form::model($servicio, [
    'method' => 'PUT',
    'route' => ['servicios.update', $servicio->id]
]) !!}

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

{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
<a href="{{ route('servicios.index') }}" class="btn btn-secondary">Cancelar</a>

{!! Form::close() !!}

@stop