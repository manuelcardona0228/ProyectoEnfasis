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
        <h1>Agregar un Turno</h1>
        <p class="lead">Especifique la información del turno a crear.</p>
        <hr>
        <div class="card">
            <div class="card-header bg-ligth">{{ __('Especifique la información del turno a crear.') }}</div>
                <div class="card-body">
                    {!! Form::open(['route' => 'turnos.store']) !!}

                    <div class="form-group">
                        {!! Form::label('fecha', 'fecha', ['class' => 'control-label']) !!}
                        {!! Form::date('fecha', null, ['class' => 'form-control']) !!}
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

                    {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection