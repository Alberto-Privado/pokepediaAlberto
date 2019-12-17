@extends('base')
@section('contenido')
<div class="createforma">
    <div class="createforma1">
        <form action="{{ url('ability') }}" method="post">
            @csrf
             <div class="abilitycard">
                  <div class="abilitycard1">
                      <label>Nombre Ataque</label>
                      <input type="text" name="ability" id="ability" placeholder="">
                    </div>
            </div>
                <input type="submit" value="Guardar" class="btn btn-success"/>
                <a href="{{url('ability')}}" class="btn btn-danger destroy">Volver</a>
                
            </div>
        </form>
    </div>
</div>
@stop