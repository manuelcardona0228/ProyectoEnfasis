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
        <h1 class="lines-effect">Crear Usuario</h1>
        <div class="card mt-2">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información del usuario a crear.') }}</div>
            <div class="card-body">
                {!! Form::open(['route' => 'users.store']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('lastName', 'Apellidos', ['class' => 'control-label']) !!}
                    {!! Form::text('lastName', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('phone', 'Telefono', ['class' => 'control-label']) !!}
                    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'E-mail', ['class' => 'control-label']) !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('nomUser', 'Nombre De Usuario', ['class' => 'control-label']) !!}
                    {!! Form::text('nomUser', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Contraseña', ['class' => 'control-label']) !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('fechaNac', 'Fecha De Nacimiento', ['class' => 'control-label']) !!}
                    {!! Form::date('fechaNac', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
                <a href="{{  route('users.index')  }}" class="btn btn-secondary">Volver</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection