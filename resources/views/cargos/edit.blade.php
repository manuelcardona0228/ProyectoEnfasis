@extends('layouts.app')

@section('content')

<h1>Editar Libro</h1>
<p class="lead"> 
    <a href="{{ route('cargos.index') }}">Volver.</a></p>
<hr>

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

{!! Form::model($cargo, [
    'method' => 'PUT',
    'route' => ['cargos.update', $cargo->id]
]) !!}


<div class="form-group">
    {!! Form::label('descripcion', 'Descripción', ['class' => 'control-label']) !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
<a href="{{ route('cargos.index') }}" class="btn btn-secondary">Cancelar</a>

{!! Form::close() !!}

@stop