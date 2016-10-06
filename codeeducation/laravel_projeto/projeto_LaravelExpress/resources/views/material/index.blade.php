@extends('material.templatematerial')

@section('title')
Messias Batista | Projeto Laravel Express
@stop

@section('content')

@foreach ($textos as $texto)
<h3>{{ $texto[0] }}</h3>
<p>{{ $texto[1] }}</p>
@endforeach

@stop

