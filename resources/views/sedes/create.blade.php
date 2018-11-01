@extends('layouts.app')

@section('content')

<h1>Agregar una sede</h1>
<p class="lead">Especifique la información de la sede a crear.</p>
<hr>

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

{!! Form::open(['route' => 'sedes.store']) !!}
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
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('telefono', 'Telefono', ['class' => 'control-label']) !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('barberia_id', 'Barberia', ['class' => 'control-label']) !!}
    {!! Form::select('barberia_id', $barberia, $barberia ,['class' => 'form-control chosen-type', 'placeholder' => 'Seleccione La Barberia...']) !!}
</div>

<div class="form-group">
    {!! Form::label('admin_id', 'Administrador', ['class' => 'control-label']) !!}
    {!! Form::select('admin_id', $admin, $admin ,['class' => 'form-control chosen-type', 'placeholder' => 'Seleccione El Admin...']) !!}
</div>

{!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop