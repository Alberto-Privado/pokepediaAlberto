@extends('base')
@section('contenido')
<table class="table table-striped table-hover">
    <tbody>
        <tr>
            <td>
                ID Pokemon
            </td>
            <td>
                {{ $pokemon->id }}
            </td>
        </tr>
        <tr>
            
            <td>
                Nombre Pokemon
            </td>
            <td>
                {{ $pokemon->name }}
            </td>
        </tr>
        <tr>
            <td>
                Peso Pokemon
            </td>
            <td>
                {{ $pokemon->weight }}
            </td>
        </tr>
        <tr>
            <td>
                Altura Pokemon
            </td>
            <td>
                {{ $pokemon->height }}
            </td>
        </tr>
        <tr>
            <td>
                Imagen
            </td>
            <td>
                <img src="{{url('/assets/img/'. $pokemon->image)}}" width="100" />
            </td>
        </tr>
        </tbody>
        <br>
    </table>
    <form action="{{ url('') }}" method="post">
        @auth
        Añadir Habilidad
        <select name="" id="idpokemon">
            @foreach($abilities as $ability)
                <option value="{{$ability->id}}">{{$ability->ability}}</option>
            @endforeach
            <input type="submit" value="Añadir" class="btn btn-info"/>
        </select>
        @endauth
    </form>
        <br>
        <br>
        <a href="{{url('pokemon')}}" class="btn btn-danger destroy">Atrás</a>
</div>
@stop