@extends('adminlte::page')

@section('title', 'crud dependencia')

@section('content_header')
    <h1>EDITAR DEPENDENCIA</h1>
@stop

@section('content')
<form action="/dependencia/{{$dependencia->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$dependencia->nombre}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Sigla</label>
        <input id="sigla" name="sigla" type="text" class="form-control" value="{{$dependencia->sigla}}">
    </div>
    
    <a title="Cancelar" href="{{ route('dependencia.index') }}" class="fas fa-undo" ></a>
    <button title="Guardar" type="submit" class="fas fa-save" ></button>
</form>
@stop