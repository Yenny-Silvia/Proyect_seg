@extends('adminlte::page')

@section('title', 'Tipotramite')

@section('content_header')



@stop

@section('content')
	<h2>CREAR TIPO DE TRAMITE</h2>

<form action="{{ route('tipotramite.store') }}" method="POST">

	@csrf

	<div class="mb-3">
		<label for="" class="form-label">Nombre:</label>
		<input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>
    
	
	<a href="{{ route('tipotramite.index') }}" class="fas fa-undo" tabindex="2"></a>
	<button type="submit" class="fas fa-save" tabindex="3"></button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop