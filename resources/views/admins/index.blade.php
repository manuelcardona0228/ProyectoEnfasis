@extends('layouts.app')

@section('content')

<h1>Lista de Administradores</h1>
<p class="lead"> 
    <a href="{!! url('admins/create') !!}" class="btn btn-primary">Agregar Administrador</a></p>
<hr>
@foreach($admins as $admin)

<h3>{{ $admin->nombres }}</h3>
<p>{{ $admin->updated_at }}</p>

<p>
    <a href="{{ route('admins.show', $admin->id) }}" class="btn btn-info">Ver</a>
    <a href="{{ route('admins.edit', $admin->id) }}" class="btn btn-warning">Editar</a>

    {!! Form::open([
        'method' => 'DELETE',
        'route' => ['admins.destroy', $admin->id],
        'onsubmit' => 'return confirm("¿Esta seguro de borrar este administrador?");'
    ]) !!}
    {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
</p>
<hr>

@endforeach

{{ $admins->links() }}

@stop