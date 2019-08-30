@extends('plantilla')

@section('seccion')

<h1>hola</h1>
@if(!empty($numero))
<h2>La variable existe es <?= $numero ?> </h2>
@endif

@endsection