@extends('layouts.app')

@section('content')

<h1>Agregar un libro</h1>
<p class="lead">Especifique la información del cargo a crear.</p>
<hr>

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

{!! Form::open(['route' => 'cargos.store']) !!}
<div class="form-group">
    {!! Form::label('descripcion', 'Descripción', ['class' => 'control-label']) !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop