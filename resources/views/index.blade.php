@extends('base')
@section('contenido')
<div class="indexc">
    <div class="indexc1">
        <div class="indexc11"></div>
    </div>
    <div class="indexc2">
        <h1>Pokepedia</h1>
        <p>
        Bienvenidos a la Pokepedia</p>
        <a href="{{url('pokemon')}}" class="btn btn-success">Pokemon</a>
        @auth
        <a href="{{url('post')}}" class="btn btn-success">Foro</a>
        @endauth
    </div>
</div>



@stop