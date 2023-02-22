@extends('adminlte::page')

@section('title', 'Seguimiento')

@section('content_header')


@stop

@section('content')
 
<h2>DERIVAR SEGUIMIENTO</h2>

<form action="/seguimientocreate2/save2" method="POST">

	@csrf

    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">tramite</label>
            </br>
            <label for="exampleInputEmail1" class="form-label">{{$tramite->referencias}}</label>
            <input style="display: none" type="text"  name="id_tramite" value="{{$tramite->id}}" size="50">
    </div>

	<div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">dependencia origen</label>
        </br>
        <label for="exampleInputEmail1" class="form-label">{{$dependencia->nombre}}</label>
        <input style="display: none" type="text"  name="id_dependeciaOrigen" value="{{$dependencia->id}}" size="50">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">dependencia destino</label>
            <select  id="id_dependecia" name="id_dependeciaDestino" type="text" class="form-control" tabindex="3">
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
	
	<a href="{{ route('seguimiento.index') }}" class="fas fa-undo" tabindex="6"></a>
	<button type="submit" class="fas fa-save" tabindex="7"></button>
    
</form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop
	