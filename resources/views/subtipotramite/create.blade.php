@extends('adminlte::page')

@section('title', 'subTipotramite')

@section('content_header')



@stop

@section('content')
	<h2>CREAR SUB TIPO DE TRAMITE</h2>

<form action="{{ route('subtipotramite.store') }}" method="POST">

	@csrf

	<div class="mb-3">
		<label for="" class="form-label">Nombre:</label>
		<input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>
	<div class="mb-3">
		<label for="" class="form-label">Sigla:</label>
		<input id="sigla" name="sigla" type="text" class="form-control" tabindex="2">
    </div>
    
	<div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tipo Tramite</label>
                <select  id="id_tipotramite" name="id_tipotramite" type="text" class="form-control" tabindex="3">
                <option  value="">--Elegir--</option>
                @foreach($tipotramites as $tipotramite)
                <option  value="{{$tipotramite->id}}">{{$tipotramite->nombre}}</option>
                @endforeach 
                </select>
       </div>
	
	<a title="Cancelar" href="{{ route('subtipotramite.index') }}" class="fas fa-undo" tabindex="4"></a>
	<button title="Guardar" type="submit" class="fas fa-save" tabindex="5"></button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop