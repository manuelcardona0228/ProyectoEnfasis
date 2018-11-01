@extends('layouts.app')

@section('content')

<h1>Editar Sede</h1>
<p class="lead"> 
    <a href="{{ route('sedes.index') }}">Volver.</a></p>
<hr>

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

{!! Form::model($sede, [
    'method' => 'PUT',
    'route' => ['sedes.update', $sede->id]
]) !!}


<div class="form-group">
    {!! Form::label('nit', 'Nit', ['class' => 'control-label']) !!}
    {!! Form::text('nit', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('razonSocial', 'Razón Social', ['class' => 'control-label']) !!}
    {!! Form::text('razonSocial', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('direccion', 'Dirección', ['class' => 'control-label']) !!}
    {{ Form::text('direccion', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {!! Form::label('telefono', 'Telefono', ['class' => 'control-label']) !!}
    {{ Form::text('telefono', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {!! Form::label('barberia_id', 'Barberia', ['class' => 'control-label']) !!}
    {{ Form::select('barberia_id', $barberia, $barberia,['class' => 'form-control']) }}
</div>

<div class="form-group">
    {!! Form::label('admin_id', 'Administrador', ['class' => 'control-label']) !!}
    {{ Form::select('admin_id', $admin, $admin, ['class' => 'form-control']) }}
</div>

{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
<a href="{{ route('sedes.index') }}" class="btn btn-secondary">Cancelar</a>

{!! Form::close() !!}

@stop