@extends('adminlte::page')

@section('title', 'crud tramite')

@section('content_header')
    <h1>EDITAR TRAMITE</h1>
@stop

@section('content')
<form action="/tramite/{{$tramite->id }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
            <label for="" class="form-label">Tipo Tramite:</label>
                <label for=""  class="form-label">{{$tramite->tipotramites->nombre}}</label>
		<input style="display: none" type="text"  name="id_tipotramite" value="{{$tramite->id_tipotramite}}" size="50">
	</div>

    <div class="mb-3">
        <label for="" class="form-label">Sub Tipo Tramite:</label>
            <label for=""  class="form-label">{{$tramite->subtipotramites->nombre}}</label>
		<input type="text" style="display: none" name="id_subtipotramite" value="{{$tramite->id_subtipotramite}}"  size="50">
	
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Referencia</label>
        <input id="referencias" name="referencias" type="text" class="form-control" value="{{$tramite->referencias}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Hojas</label>
        <input id="Hojas" name="Hojas" type="text" class="form-control" value="{{$tramite->Hojas}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Remitente</label>
        <input id="remitente" name="remitente" type="text" class="form-control" value="{{$tramite->remitente}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nro concejo</label>
        <input id="nro_concejo" name="nro_concejo" type="text" class="form-control" value="{{$tramite->nro_concejo}}">
    </div>

    
    
    <a title="Cancelar" href="{{ route('tramite.index') }}" class="fas fa-undo"></a>
    <button title="Guardar" type="submit" class="fas fa-save"></button>
</form>
@stop
