@extends('PruebaLayaud.app')

@section('content')

    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif

    <div class="col-md-10 offset-md-2 mt-5 main">
        <h1>Editar Sede</h1>
        <p class="lead"> 
        <a href="{{ route('sedes.index') }}">Volver.</a></p>
        <hr>
        <div class="card">
            <div class="card-header bg-ligth">{{ __('Especifique la información del cargo a editar.') }}</div>
                <div class="card-body">
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
            </div>
        </div>
@endsection
