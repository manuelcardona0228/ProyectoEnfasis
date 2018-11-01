@extends('layouts.app')

@section('content')

<h1>Editar Barberia</h1>
<p class="lead"> 
    <a href="{{ route('barberias.index') }}">Volver.</a></p>
<hr>

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

{!! Form::model($barberia, [
    'method' => 'PUT',
    'route' => ['barberias.update', $barberia->id]
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
    {!! Form::label('sitioWeb', 'Sitio Web', ['class' => 'control-label']) !!}
    {{ Form::text('sitioWeb', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {!! Form::label('admin_id', 'Administrador', ['class' => 'control-label']) !!}
    {{ Form::select('admin_id', $admin, $barberia->admin_id, ['class' => 'form-control']) }}
</div>

{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
<a href="{{ route('barberias.index') }}" class="btn btn-secondary">Cancelar</a>

{!! Form::close() !!}

@stop