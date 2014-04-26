@extends('layouts.main')

@section('contenido')

{{ HTML::link('logout', 'Logout') }}


<h1>Crear Articulo</h1>

{{ Form::open(array('url' => 'crearArticulo')) }}

<p>{{ Form::label('autor', 'Autor') }}</p>
<p>{{ Form::text('autor') }}</p>

<p>{{ Form::label('titulo', 'Título') }}</p>
<p>{{ Form::text('titulo') }}</p>

<p>{{ Form::label('articulo', 'Artículo') }}</p>
<p>{{ Form::textarea('articulo') }}</p>

<p>{{ Form::submit('Enviar') }}</p>

{{ Form::close() }}

@if (Session::has('exito'))
    <p>Su mensaje fue enviado exitosamente</p>
@endif

@if($errors->has())
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
@endif

@stop