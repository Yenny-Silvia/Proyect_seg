@extends('adminlte::page')

@section('title', 'tipotramite')

@section('content_header')
    <h1>EDITAR TIPO TRAMITE</h1>
@stop

@section('content')
<form action="/tipotramite/{{$tipotramite->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$tipotramite->nombre}}">
    </div>
    
    
    <a href="{{ route('tipotramite.index') }}" class="fas fa-undo" ></a>
    <button type="submit" class="fas fa-save" ></button>
</form>
@stop