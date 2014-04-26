@extends('layouts.main')

@section('contenido')

{{ HTML::link('login', 'Login') }} // {{ HTML::link('contacto', 'Contacto') }}

<?php echo HTML::script('js/colorbox/jquery.colorbox-min.js'); ?>

@if (count($articulos) > 0)
<h2>Articulos</h2>
<ul>
    @foreach ($articulos as $fila)
    <li><a class='inline' href="#inline_content{{ $fila->pk }}">{{ $fila->titulo }}</a></li>
    @endforeach
</ul>
@else
<h2>No existen Articulos</h2>
@endif

@if (count($articulos) > 0)
<div style='display:none'>
    @foreach ($articulos as $fila)
    <div id="inline_content{{ $fila->pk }}" style='padding:10px; background:#fff;'>
        <h3>{{ $fila->titulo }}</h3>
        <p>
            <span style="font-size: 8pt;">Por {{ $fila->autor }}</span>
            <span style="font-size: 7pt;">el {{ $fila->fecha }}</span>
        </p>
        <p>
            {{ $fila->articulo }}
        </p>
    </div>
    @endforeach
</div>
@endif

<script>
    jQuery(document).ready(function() {
        jQuery(".inline").colorbox({inline: true, width: "50%"});
    });
</script>

@stop