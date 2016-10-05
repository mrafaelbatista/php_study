@extends('template')

@section('title')
    Notas.php
@stop

@section('content')
<h1>Notas</h1>

<ul>
    @foreach($notas as $nota)
        <li>{{$nota}}</li>
    @endforeach
</ul>


@stop