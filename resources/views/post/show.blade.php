@extends('base')
@section('contenido')
<div class="containerf">
    <div class="postcard">
      <div>
      <div>
          <div> 
                @foreach($pokemon as $pokemonP)
                    @if($pokemonP -> id == $post -> idpokemon)
                      <p>{{$pokemonP -> name}}</p>
                    @endif
                @endforeach
          </div>
          <div><h1> {{$post -> subject}}</h1></div>       
          <div><p> Creado por:
                @foreach($user as $userP)
                    @if($userP->id == $post -> iduser)
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
        <textarea wrap="hard" rows="7" cols="20" class="postcard12" disabled>{{$post->content}}</textarea>
      </div>  
    </div>
    <div class="comments">
        <div>
            @foreach($comment as $commentP)
                @if($commentP -> idpost == $post -> id)
                <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                          @foreach($user as $userP)
                            @if($userP->id == $commentP->iduser)
                              <td> &nbsp;{{$userP->name}}</td>
                            @endif
                          @endforeach
                    </tr>
                    <tr>
                          <td>{{$commentP -> content}}</td>
                    </tr>  
                  </tbody>
                </table>
                @endif
            @endforeach
        </div>
         <a href="{{url('Comment/create')}}" class="btn btn-info">Añadir Comentario</a>
    </div>
</div>
       <a href="{{url('post')}}" class="btn btn-danger destroy">Volver</a>
    </div>
    
</div>
@stop
