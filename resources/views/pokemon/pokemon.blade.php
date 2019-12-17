@extends('base')
@section('contenido')
    <div class="database">
    <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre Pokemon</th>
            <th>Peso</th>
            <th>Altura</th>
            <th>Imagen</th>
        </tr>
    </thead>
    <tbody>
       @foreach($pokemons as $pokemon)
                <td>{{$pokemon->id}}</td>
                <td>{{$pokemon->name}}</td>
                <td>{{$pokemon->weight}}</td>
                <td>{{$pokemon->height}}</td>
                <td>
                <a href="{{url('pokemon/'.$pokemon->id) }}" >
                   <img src="{{url('/assets/img/'. $pokemon->image)}}" width="42" /> 
                 </a>
                </td>
                <td><a href="{{url('pokemon/' . $pokemon ->id)}}" class="btn btn-info">Ver</a></td>
                @auth
                <td><a href="{{url('pokemon/' . $pokemon ->id . '/edit')}}" class="btn btn-success">Editar</a></td>
                <td>
                    <form action="{{ url('pokemon/' . $pokemon->id) }}" method=post>
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar" class="btn btn-danger destroy"/>
                    </form>
                </td>
                @endauth
            </tr>
            
        @endforeach
                </tbody>
</table>
    </div>
    <br>
    <br>
    {{ $pokemons->links() }}
    <br>
    @auth
    <a href="{{url('pokemon/create')}}" class="btn btn-success">Añadir Pokemon</a>
    @endauth
    <a href="{{url('ability')}}" class="btn btn-info">Lista de ataques</a>
    <a href="{{url('/')}}" class="btn btn-danger destroy">Volver atrás</a>

@stop