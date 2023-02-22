@extends('adminlte::page')

@section('title', 'tipotramite')

@section('content_header')
    <h1>EDITAR SUB TIPO TRAMITE</h1>
@stop

@section('content')
<form action="/subtipotramite/{{$subtipotramite->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$subtipotramite->nombre}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Sigla</label>
        <input id="sigla" name="sigla" type="text" class="form-control" value="{{$subtipotramite->sigla}}">
    </div>
    
    
    
    <div class="mb-3">
            <label for="" class="form-label">Tipo Tramite:</label>
                <label for=""  class="form-label">{{$subtipotramite->tipotramites->nombre}}</label>
		<input style="display: none" type="text"  name="id_tipotramite" value="{{$subtipotramite->id_tipotramite}}" size="50">
	</div>

    <a href="{{ route('subtipotramite.index') }}" class="fas fa-undo" ></a>
    <button type="submit" class="fas fa-save" ></button>
</form>
@stop