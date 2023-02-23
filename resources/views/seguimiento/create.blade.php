@extends('adminlte::page')

@section('title', 'Seguimiento')

@section('content_header')


@stop

@section('content')
 
<h2>CREAR UN NUEVO SEGUIMIENTO</h2>

<form action="{{ route('seguimiento.store') }}" method="POST">

	@csrf

      <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">tramite</label>
                <select  id="id_tramite" name="id_tramite" type="text" class="form-control" tabindex="1">
                <option  value="">--Elegir--</option>
                @foreach($tramites as $tramite)
                <option  value="{{$tramite->id}}">{{$tramite->referencias}}</option>
                @endforeach 
                </select>
       </div>

	<div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">dependencia origen</label>
            <select  id="id_dependeciaOrigen" name="id_dependeciaOrigen" type="text" class="form-control" tabindex="2">
            <option  value="">--Elegir--</option>
            @foreach($dependencias as $dependencia)
            <option  value="{{$dependencia->id}}">{{$dependencia->nombre}}</option>
            @endforeach 
            </select>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">dependencia destino</label>
            <select  id="id_dependeciaDestino" name="id_dependeciaDestino" type="text" class="form-control" tabindex="3">
            <option  value="">--Elegir--</option>
            @foreach($dependencias as $dependencia)
            <option  value="{{$dependencia->id}}">{{$dependencia->nombre}}</option>
            @endforeach 
            </select>
    </div>


	<div class="mb-3">
		<label for="" class="form-label">Fecha:</label>
		<input id="fecha" name="fecha" type="date" class="form-control" tabindex="4">
	</div>

	<div class="mb-3">
		<label for="" class="form-label">Codigo:</label>
		<input id="recepcion" name="recepcion" type="null" class="form-control" tabindex="5">
	</div>
	
	<a title="Cancelar" href="{{ route('seguimiento.index') }}" class="fas fa-undo" tabindex="6"></a>
	<button title="Guardar" type="submit" class="fas fa-save" tabindex="7"></button>
    
</form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop
	
