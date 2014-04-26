@extends('layouts.main')

@section('contenido')

{{ HTML::link('login', 'Login') }}


<h1>Bienvenido</h1>
<p>Se ha autenticado exitosamente.</p>

@if (count($data) > 0)
<h2>Ingresos Totales</h2>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Cantidad de Accesos</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($grupo as $fila)
        <tr>
            <td>{{ $fila->nombre }}</td>
            <td>{{ $fila->total }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif

@if (count($data) > 0)
<h2>Últimos Ingresos</h2>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Rut</th>
            <th>Fecha</th>
            <th>IP</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $fila)
        <tr>
            <td>{{ $fila->nombre }}</td>
            <td>{{ $fila->usuario->email }}</td>
            <td>{{ $fila->fecha }}</td>
            <td>{{ $fila->ip }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif

@stop