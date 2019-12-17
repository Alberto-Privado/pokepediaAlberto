@extends('base')
@section('contenido')
<div>
  @foreach($posts as $post)
  <div>
   <a href="{{url('post/'.$post->id) }}"> 
      <div>
          <div><h1> {{$post->subject}}</h1> </div> </a>  
          <div><p> Creado por:
                @foreach($user as $userP)
                    @if($userP->id == $post->iduser)
                      {{$userP->name}}
                    @endif
                @endforeach
                </p>
                <p> Pokemon favorito: 
                 @foreach($pokemon as $pokemonP)
                    @if($pokemonP->id == $post->idPokemon)
                      {{$pokemonP->name}}
                    @endif
                @endforeach
                </p>
           </div>
        </div> 
        <textarea wrap="hard" rows="7" cols="20" disabled>{{$post->content}}</textarea>
        @if($userP->id == $post->iduser)
            {{$userP->name}}
        @endif
    </div>
    @endforeach
    {{ $posts->links() }}
     <a href="{{url('post/create')}}" class="btn btn-success">Añadir Post</a>
     <a href="{{url('/')}}" class="btn btn-danger destroy">Volver atrás</a>
</div>
@stop