@extends('base')
@section('contenido')
<form action="{{ url('pokemon/' . $pokemon->id) }}" method="post">
    @csrf
    @method('PUT')
    <table class="table table-striped table-hover">
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
                <input type="text" name="name" id="name" class="name" value="{{ old('name', $pokemon->name) }}">
            </td>
        </tr>
        <tr>
            <td>
                Peso Pokemon
            </td>
            <td>
                <input type="number" name="weight" id="weight" class="weight" value="{{ old('weight', $pokemon->weight) }}">
            </td>
        </tr>
        <tr>
            <td>
                Altura Pokemon
            </td>
            <td>
                <input type="number" name="height" id="height" class="height" value="{{ old('height', $pokemon->height) }}">
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
        <br>
        <td><input type="submit" class="btn btn-success" value="Editar"></td>
    </table>
</form>


@stop