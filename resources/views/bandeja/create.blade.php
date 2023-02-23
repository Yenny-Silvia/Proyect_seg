@extends('adminlte::page')

@section('title', 'crud tramite')

@section('content_header')
    <h1>CREAR TRAMITE</h1>
@stop

@section('content')
<form action="{{ route('tramite.store') }}" method="POST">
    @csrf

    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tipo Tramite</label>
                <select onchange="onSelectTipo(id_tipotramite.value);"  id="id_tipotramite" name="id_tipotramite" type="text" class="form-control" tabindex="1">
                <option  value="">--Elegir--</option>
                @foreach($tipotramites as $tipotramite)
                <option  value="{{$tipotramite->id}}">{{$tipotramite->nombre}}</option>
                @endforeach 
                </select>
       </div>


    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Sub Tipo Tramite</label>
                <select  id="id_subtipotramite" name="id_subtipotramite" type="text" class="form-control" tabindex="2">
                </select>
       </div>

    <div class="mb-3">
        <label for="" class="form-label">Referencia</label>
        <input id="referencias" name="referencias" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Hojas</label>
        <input id="Hojas" name="Hojas" type="text" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Remitente</label>
        <input id="remitente" name="remitente" type="text" class="form-control" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nro concejo</label>
        <input id="nro_concejo" name="nro_concejo" type="text" class="form-control" tabindex="6">
    </div>

    

    
    <a title="Cancelar" href="{{ route('tramite.index') }}" class="fas fa-undo" tabindex="7"></a>
    <button title="Guardar" type="submit" class="fas fa-save" tabindex="8"></button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script
  src="https://code.jquery.com/jquery-3.5.1.js"></script>

</script>
    <script>
        function onSelectTipo($value){
            var idTipoTramite = $value; 
            console.log(idTipoTramite);
            if(! idTipoTramite){
                $('#nombre').html('<option value="">-Selecciona-</option>');
                return;
            }
            $.get('/api/tipo/'+idTipoTramite+'/subTipo', function (data){
                console.log(data);
                var html_select = '<option value="">-Seleciona-</option>';
                for (var i=0; i<data.length; i++)
                    html_select += '<option value="'+data[i].id+'">'+data[i].nombre+'</option>';
                $('#id_subtipotramite').html(html_select);
            });
            
        }
        </script>
@stop