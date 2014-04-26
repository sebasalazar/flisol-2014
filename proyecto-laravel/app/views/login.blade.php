@extends('layouts.main')

@section('contenido')
<h1>Formulario de Login</h1>
<p>Para ingresar por favor utilice sus credenciales.</p>

{{ Form::open(array('url' => 'login')) }}

@if (Session::has('login_errors'))
<span class="error">Usuario o contraseña incorrectas.</span>
@endif

<p>{{ Form::label('email', 'Email') }}</p>
<p>{{ Form::text('email') }}</p>

<p>{{ Form::label('password', 'Password') }}</p>
<p>{{ Form::password('password') }}</p>

<p>{{ Form::submit('Login') }}</p>

{{ Form::close() }}

@stop
