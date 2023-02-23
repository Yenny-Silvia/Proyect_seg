@extends('adminlte::page')

@section('title', 'seguimiento')

@section('content_header')


@stop

@section('content')
 
<h2>EDITAR SEGUIMIENTO</h2>

<form action="/seguimiento/{{$seguimiento->id }}" method="POST">

	@csrf
    @method('PUT')
      <div class="mb-3">
            <label for="" class="form-label">Tramite:</label>
                <label for=""  class="form-label">{{$seguimiento->tramites->referencias}}</label>
		<input style="display: none" type="text"  name="id_tramite" value="{{$seguimiento->id_tramite}}" size="50">
	</div>

	<div class="mb-3">
        <label for="" class="form-label">Dependencia origen:</label>
            <label for=""  class="form-label">{{$seguimiento->dependenciasOrigen->nombre}}</label>
	    <input type="text" style="display: none" name="id_dependeciaOrigen" value="{{$seguimiento->id_dependenciaOrigen}}" size="50">
	
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Dependencia destino:</label>
            <label for=""  class="form-label">{{$seguimiento->dependenciasDestino->nombre}}</label>
		<input type="text" style="display: none" name="id_dependeciaDestino" value="{{$seguimiento->id_dependenciaDestino}}"  size="50">
	
    </div>


	<div class="mb-3">
		<label for="" class="form-label">Fecha:</label>
		<input id="fecha" name="fecha" type="date" class="form-control" value="{{$seguimiento->fecha}}">
	</div>

	<div class="mb-3">
		<label for="" class="form-label">Codigo:</label>
		<input id="recepcion" name="recepcion" type="null" class="form-control" value="{{$seguimiento->recepcion}}">
	</div>
	
	<a title="Cancelar" href="{{ route('seguimiento.index') }}" class="fas fa-undo"></a>
	<button title="Guardar" type="submit" class="fas fa-save"></button>
	
</form>


@stop


	
