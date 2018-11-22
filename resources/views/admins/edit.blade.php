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
        <h1 class="lines-effect mt-2">Editar Administrador</h1>
        <hr>
            <div class="card">
                <div class="card-header text-white bg-dark">{{ __('Especifique que información del administrador va a editar.') }}</div>
                <div class="card-body">
                    {!! Form::model($admin, [
                    'method' => 'PUT',
                    'route' => ['admins.update', $admin->id]
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
                        {!! Form::label('apellidos', 'Apellidos', ['class' => 'control-label']) !!}
                        {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('telefono', 'Telefonos', ['class' => 'control-label']) !!}
                        {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('correo', 'Correo', ['class' => 'control-label']) !!}
                        {!! Form::email('correo', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('fechaNac', 'Fecha De Nacimiento', ['class' => 'control-label']) !!}
                        {!! Form::date('fechaNac', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('nameUser', 'Nombre De Usuario', ['class' => 'control-label']) !!}
                        {!! Form::text('nameUser', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('password', 'Contraseña', ['class' => 'control-label']) !!}
                        {!! Form::text('password', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('cargo_id', 'Cargo', ['class' => 'control-label']) !!}
                        {!! Form::select('cargo_id', $cargo, $admin->cargo_id, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('admins.index') }}" class="btn btn-secondary">Cancelar</a>

                    {!! Form::close() !!}
                </div>
            </div>
    </div>
@endsection