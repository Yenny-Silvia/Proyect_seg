@extends('adminlte::page')

@section('title', 'Dependencia')

@section('content_header')



@stop

@section('content')
	<h2>CREAR NUEVA DEPENDENCIA</h2>

<form action="{{ route('dependencia.store') }}" method="POST">

	@csrf

	<div class="mb-3">
		<label for="" class="form-label">Nombre:</label>
		<input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Sigla:</label>
        <input id="sigla" name="sigla" type="text" class="form-control" tabindex="2">
	</div>
	
	<a title="Cancelar" href="{{ route('dependencia.index') }}" class="fas fa-undo" tabindex="3"></a>
	<button title="Guardar" type="submit" class="fas fa-save" tabindex="4"></button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop