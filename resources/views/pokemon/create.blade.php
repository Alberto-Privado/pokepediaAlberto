@extends('base')
@section('contenido')
         <form action="{{ url('pokemon') }}" method="post" class="formpostcardcf" enctype="multipart/form-data">
            @csrf
            <label>Nombre Pokemon</label>
             <input type="text" name="name" id="name" class="name">
             <br>
             <label>Peso Pokemon</label>
             <input type="number" name="weight" id="weight" class="weight">
             <br>
             <label>Altura Pokemon</label>
             <input type="number" name="height" id="height" class="height">
             <br>
             <label>Imagen Pokemon</label>
             <input type="file" name="file" id="file" class="postadd2f">
             <br>
             <input type="submit" value="Guardar" class="btn btn-success" />
             <a href="{{url('pokemon')}}" class="btn btn-danger destroy">Volver</a>
        </form>
@stop