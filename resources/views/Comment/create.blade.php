@extends('base')
@section('contenido')
    <div>
        <form action="{{ url('post/' . $post->id) }}" method="post">
            @csrf
             <div>
                  <div>
                      <label>Comentario</label>
                      <input type="text" name="content" id="content" placeholder="">
                    </div>
            </div>
                <input type="submit" value="Guardar" class="btn btn-success"/>
                <a href="{{url('post/' . $post->id)}}" class="btn btn-danger destroy">Volver</a>
                
            </div>
        </form>
    </div>
@stop