@extends('adminlte::page')

@section('title', 'tramite')

@section('content_header')
    <h1>TRAMITE</h1>
@stop

@section('content')
<a href="/tramite/create" class="btn btn-primary mb-3">CREAR</a>

<table id="tramites" class="table table-striped table-bordered shadow-lg mt-4 " style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">TIPO TRAMITE</th>
            <th scope="col">SUB TIPO TRAMITE</th>
            <th scope="col">REFERENCIAS</th> 
            <th scope="col">HOJAS</th>
            <th scope="col">REMITENTE</th>
            <th scope="col">NRO CONCEJO</th> 
            <th scope="col">ESTADO</th>
            <th scope="col">ACCIONES</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($tramites as $tramite)
        <tr>
            <td>{{ $tramite->id}}</td>
            <td>{{ $tramite->tipotramites->nombre}}</td>
            <td>{{ $tramite->subtipotramites->nombre}}</td>
            <td>{{ $tramite->referencias}}</td>
            <td>{{ $tramite->Hojas}}</td>
            <td>{{ $tramite->remitente}}</td>
            <td>{{ $tramite->nro_concejo}}</td>
            <td>{{ $tramite->estado}}</td>
            
            <td>
                <form action="{{ route ('tramite.destroy',$tramite->id)}}" method="POST">
                <a href="/tramite/{{ $tramite->id}}/edit" class="fas fa-edit"></a>
                @csrf
                @method('DELETE')
                <button type="submit" class="fas fa-trash"></button>
                
                <a href= "/seguimiento/17/{{$tramite->id}}/create2" class="fas fa-file-import"></a>
                
                
                </form>
            </td>
        </tr>
        @endforeach
    </tbody> 
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="style">

@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#tramites').DataTable({
                "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
            });
        });
    </script>
@stop