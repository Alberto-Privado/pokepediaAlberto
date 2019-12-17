@extends('base')
@section('contenido')
<div class="containerf">
    <div class="postcard">
        <form action="{{ url('post') }}" method="post" class="formpostcardc">
            @csrf
        <table>
            <tr>
            <td>
                ID Pokemon
            </td>
            <td>
                <select name="postcardtags" id="idpokemon">
                             @foreach($pokemon as $pokemonp)
                                <option value="{{$pokemonp->id}}">{{$pokemonp->id.' '. $pokemonp->name}}</option>
                            @endforeach
                </select>
            </td>
        </tr>
        <tr>
            
            <td>
                Titulo
            </td>
            <td>
                <input type="text" name="subject" id="subject" placeholder="Titulo Post">
            </td>
        </tr>
        <tr>
            <td>
                Contenido
            </td>
            <td>
                <textarea wrap="hard" rows="7" cols="20" class="postcard12" name="content" id="content"></textarea>
            </td>
        </tr>
        <br>
        <td><input type="submit" value="Añadir Post" class="btn btn-success" /></td>
        </table>
        </form>
          <a href="{{url('post')}}" class="btn btn-danger destroy">Volver</a>
         
</div>
</div>
@stop