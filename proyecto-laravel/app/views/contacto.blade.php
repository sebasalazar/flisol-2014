@extends('layouts.main')

@section('contenido')

{{ HTML::link('login', 'Login') }} // {{ HTML::link('contacto', 'Contacto') }}


<h1>Página de Contacto</h1>

{{ Form::open(array('url' => 'contacto')) }}

<p>{{ Form::label('nombre', 'Nombre') }}</p>
<p>{{ Form::text('nombre') }}</p>

<p>{{ Form::label('email', 'Email') }}</p>
<p>{{ Form::text('email') }}</p>

<p>{{ Form::label('asunto', 'Asunto') }}</p>
<p>{{ Form::text('asunto') }}</p>

<p>{{ Form::label('mensaje', 'Mensaje') }}</p>
<p>{{ Form::textarea('mensaje') }}</p>

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