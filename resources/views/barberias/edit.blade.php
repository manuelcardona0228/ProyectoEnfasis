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
        <h1 class="lines-effect mt-2">Editar Barberia</h1>
        <hr>
        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información que va a editar.') }}</div>
                <div class="card-body">
                    {!! Form::model($barberia, [
                        'method' => 'PUT',
                        'route' => ['barberias.update', $barberia->id]
                    ]) !!}


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
                        {{ Form::text('direccion', null, ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        {!! Form::label('telefono', 'Telefono', ['class' => 'control-label']) !!}
                        {{ Form::text('telefono', null, ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        {!! Form::label('sitioWeb', 'Sitio Web', ['class' => 'control-label']) !!}
                        {{ Form::text('sitioWeb', null, ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        {!! Form::label('admin_id', 'Administrador', ['class' => 'control-label']) !!}
                        {{ Form::select('admin_id', $admin, $barberia->admin_id, ['class' => 'form-control']) }}
                    </div>

                    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('barberias.index') }}" class="btn btn-secondary">Cancelar</a>

                    {!! Form::close() !!}
            </div>
        </div>
@endsection