@extends('adminlte::page')

@section('title', 'crud usuario')

@section('content_header')
    <h1>CREAR USUARIO</h1>
@stop

@section('content')
<form action="{{ route('usuario.store') }}" method="POST">
    @csrf

    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Id dependencia</label>
                <select id="id_dependencia" name="id_dependencia" type="text" class="form-control" tabindex="1">
                <option  value="">--Elegir--</option>
                @foreach($dependencias as $dependencia)
                <option  value="{{$dependencia->id}}">{{$dependencia->nombre}}</option>
                @endforeach 
                </select>
       </div>

       <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre Usuario</label>
                <select id="id_user" name="id_user" type="text" class="form-control" tabindex="2">
                <option  value="">--Elegir--</option>
                @foreach($users as $user)
                <option  value="{{$user->id}}">{{$user->name}}</option>
                @endforeach 
                </select>
       </div>

    <a href="{{ route('usuario.index') }}" class="fas fa-undo" tabindex="3"></a>
    <button type="submit" class="fas fa-save" tabindex="4"></button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script
  src="https://code.jquery.com/jquery-3.5.1.js"></script>

</script>
    
@stop