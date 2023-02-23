@extends('adminlte::page')

@section('title', 'seguimiento')

@section('content_header')


@stop

@section('content')

 
<h2>{{$id}}</h2>
<h2>REGISTRO DE CODIGO</h2>

<form action="/guardarSeguimientoRegistro/{{$id}}/edit"  method="POST">

	@csrf
	@method('PUT')
 
      
	<div class="mb-3">
		<label for="" class="form-label">Registrar codigo:</label>
		<input id="recepcion" name="recepcion" type="text" class="form-control" tabindex="1">
	</div>
	
	<a title="Cancelar" href="{{ route('seguimiento.index') }}" class="fas fa-undo" tabindex="2"></a>
	<button title="Guardar" type="submit" class="fas fa-save" tabindex="3"></button>
</form>


@stop