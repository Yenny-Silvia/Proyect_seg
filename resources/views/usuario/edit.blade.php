@extends('adminlte::page')

@section('title', 'edit usuario')

@section('content_header')
    <h1>EDITAR USUARIO</h1>
@stop

@section('content')
<form action="/usuario/{{$usuario->id }}" method="POST">
    @csrf
    @method('PUT')
    
    
    
    
    <div class="mb-3">
            <label for="" class="form-label">Nombre Dependencia:</label>
                <label for=""  class="form-label">{{$usuario->dependencias->nombre}}</label>
		<input style="display: none" type="text"  name="id_dependencia" value="{{$usuario->id_dependencia}}" size="50">
	</div>
    <div class="mb-3">
            <label for="" class="form-label">Nombre Usuario:</label>
                <label for=""  class="form-label">{{$usuario->users->nombre}}</label>
		<input style="display: none" type="text"  name="id_user" value="{{$usuario->id_user}}" size="50">
	</div>

    <a title="Cancelar" href="{{ route('subtipotramite.index') }}" class="fas fa-undo" ></a>
    <button title="Guardar" type="submit" class="fas fa-save" ></button>
</form>
@stop