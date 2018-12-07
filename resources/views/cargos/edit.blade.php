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
        <h1>Editar Cargo</h1>
        <p class="lead"> 
        <hr>
        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información que va a editar.') }}</div>
                <div class="card-body">
                    {!! Form::model($cargo, [
                        'method' => 'PUT',
                        'route' => ['cargos.update', $cargo->id]
                    ]) !!}


                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripción', ['class' => 'control-label']) !!}
                        {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('cargos.index') }}" class="btn btn-secondary">Volver</a>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection