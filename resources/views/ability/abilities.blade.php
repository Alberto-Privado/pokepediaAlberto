@extends('base')
@section('contenido')
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre Habilidad</th>
        </tr>
    </thead>
    @foreach($abilities as $ability)
    <tbody>
      <tr>
            <td>{{$ability->id}}</td>
            <td>{{$ability->ability}}</td>
            @auth
            <td>
                <form action="{{ url('ability/' . $ability->id) }}" method=post>
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar" class="btn btn-danger destroy"/>
                </form>
            </td>
            @endauth
        </tr>
    </tbody>
          @endforeach
</table>
    
    <br>
    <br>
    {{$abilities->links()}}
    @auth
    <a href="{{url('ability/create')}}" class="btn btn-success">Añadir ataque</a>
    @endauth
    <a href="{{url('pokemon')}}" class="btn btn-danger destroy">Volver</a>
@stop