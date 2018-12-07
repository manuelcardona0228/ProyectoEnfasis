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
        <h1 class="lines-effect mt-2">Crear Galeria</h1>
        <hr>
        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información de la galeria a crear.') }}</div>
                <div class="card-body">
                    {!! Form::open(['route' => 'galerias.store']) !!}

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
                        {!! Form::select('barbero_id', $barbero, $barbero, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('galerias.index') }}" class="btn btn-secondary">Volver</a>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection