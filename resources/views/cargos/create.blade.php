@extends('PruebaLayaud.app')

@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    
    <div class="col-md-10 offset-md-2 mt-4 main cuerpo-dos">
        <h1 class="lines-effect">Crear Cargo</h1>
        <hr>
        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información del cargo a crear.') }}</div>
                <div class="card-body">
                    {!! Form::open(['route' => 'cargos.store']) !!}
                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripción', ['class' => 'control-label']) !!}
                        {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Crear', ['class' => 'btn btn-primary btn-block']) !!}
                    <a class="btn btn-secondary btn-block" href="{{ route('cargos.index') }}">Volver</a></p>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection