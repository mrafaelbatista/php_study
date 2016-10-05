@extends('template')

@section('title')
    Ola.php
@stop

@section('content')
<!--As duas chaves e com a variável dentro destas chaves
        o ideal, assim você utiliza recursos do blade, o próprio
        template do laravel-->
<h1>Olá {{$nome}}!</h1>

@stop