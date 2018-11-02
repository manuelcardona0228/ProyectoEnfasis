@extends('layouts.app')

@section('content')

<h1>Editar Galeria</h1>
<p class="lead"> 
    <a href="{{ route('galerias.index') }}">Volver.</a></p>
<hr>

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

{!! Form::model($galeria, [
    'method' => 'PUT',
    'route' => ['galerias.update', $galeria->id]
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
    {!! Form::label('barbero_id', 'Barbero', ['class' => 'control-label']) !!}
    {!! Form::select('barbero_id', $barbero, $galeria->barbero_id, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
<a href="{{ route('galerias.index') }}" class="btn btn-secondary">Cancelar</a>

{!! Form::close() !!}

@stop