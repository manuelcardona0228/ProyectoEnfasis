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
        <h1>Agregar una Galeria</h1>
        <p class="lead">Especifique la información de la galeria a crear.</p>
        <hr>
        <div class="card">
            <div class="card-header bg-ligth">{{ __('Especifique la información de la galeria a crear.') }}</div>
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

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection