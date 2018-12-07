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
        <h1 class="lines-effect">Editar Barbero</h1>
        <hr>
        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información que va a editar.') }}</div>
            <div class="card-body">
                {!! Form::model($barbero, [
                    'method' => 'PUT',
                    'route' => ['barberos.update', $barbero->id]
                ]) !!}


                <div class="form-group">
                    {!! Form::label('documento', 'Documento', ['class' => 'control-label']) !!}
                    {!! Form::text('documento', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('nombres', 'Nombres', ['class' => 'control-label']) !!}
                    {!! Form::text('nombres', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('apellidos', 'apellidos', ['class' => 'control-label']) !!}
                    {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('telefono', 'Telefono', ['class' => 'control-label']) !!}
                    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'E-mail', ['class' => 'control-label']) !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('fechaNac', 'Fecha De Nacimiento', ['class' => 'control-label']) !!}
                    {!! Form::text('fechaNac', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('calificacion', 'Calificación', ['class' => 'control-label']) !!}
                    {!! Form::text('calificacion', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('nameUser', 'Nombre De Usuario', ['class' => 'control-label']) !!}
                    {!! Form::text('nameUser', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Contraseña', ['class' => 'control-label']) !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('barberia_id', 'Barberia', ['class' => 'control-label']) !!}
                    {!! Form::select('barberia_id', $barberia, $barbero->barberia_id ,['class' => 'form-control chosen-type', 'placeholder' => 'Seleccione La Sede...']) !!}
                </div>


                {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('barberos.index') }}" class="btn btn-secondary">Volver</a>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection