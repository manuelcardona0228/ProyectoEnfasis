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
        <h1>Editar Galeria</h1>
        <p class="lead"> 
        <a href="{{ route('galerias.index') }}">Volver.</a></p>
        <hr>
        <div class="card">
            <div class="card-header bg-ligth">{{ __('Especifique la información del cargo a editar.') }}</div>
                <div class="card-body">
                    {!! Form::model($galeria, [
                        'method' => 'PUT',
                        'route' => ['galerias.update', $galeria->id]
                    ]) !!}

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
                        {!! Form::select('barbero_id', $barbero, $galeria->barbero_id, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('galerias.index') }}" class="btn btn-secondary">Cancelar</a>

                    {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection