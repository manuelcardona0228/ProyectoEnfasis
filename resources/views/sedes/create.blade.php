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
        <h1 class="lines-effect mt-2">Agregar Sede</h1>
        <hr>
        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información de la sede a crear.') }}</div>
                <div class="card-body">
                    {!! Form::open(['route' => 'sedes.store']) !!}
                    <div class="form-group">
                        {!! Form::label('nit', 'Nit', ['class' => 'control-label']) !!}
                        {!! Form::text('nit', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('razonSocial', 'Razón Social', ['class' => 'control-label']) !!}
                        {!! Form::text('razonSocial', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('direccion', 'Dirección', ['class' => 'control-label']) !!}
                        {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('telefono', 'Telefono', ['class' => 'control-label']) !!}
                        {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('barberia_id', 'Barberia', ['class' => 'control-label']) !!}
                        {!! Form::select('barberia_id', $barberia, $barberia ,['class' => 'form-control chosen-type', 'placeholder' => 'Seleccione La Barberia...']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('admin_id', 'Administrador', ['class' => 'control-label']) !!}
                        {!! Form::select('admin_id', $admin, $admin ,['class' => 'form-control chosen-type', 'placeholder' => 'Seleccione El Admin...']) !!}
                    </div>

                    {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('sedes.index') }}" class="btn btn-secondary">Volver</a>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection