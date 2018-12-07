@extends('PruebaLayaud.app')

@section('content')
    
    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif

    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1 class="lines-effect">Editar Turno</h1>
        <p class="lead"> 
        <hr>
        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información que va a editar.') }}</div>
                <div class="card-body">
                    {!! Form::model($turno, [
                        'method' => 'PUT',
                        'route' => ['turnos.update', $turno->id]
                    ]) !!}

                    <div class="form-group">
                        {!! Form::label('fecha', 'Fecha', ['class' => 'control-label']) !!}
                        {!! Form::text('fecha', null, ['class' => 'form-control']) !!}
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

                    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('turnos.index') }}" class="btn btn-secondary">Volver</a>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
