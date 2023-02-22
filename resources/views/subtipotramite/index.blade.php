@extends('adminlte::page')

@section('title', 'Subtipotramite')

@section('content_header')

<h1>LISTA SUB TIPO TRAMITE</h1>

@stop

@section('content')
 
<a href="/subtipotramite/create" class="btn btn-primary mb-3">INSERTAR SUB TIPO DE TRAMITE</a>

<div class="table-responsive">

    <table id="subtipotramites" class="table table-striped table-bordered shadow-lg mt-4 " style="width:100%">
        
        <thead class="bg-primary text-white">
            
            <tr>
                <th scope="col">ID</th>
                <th scope="col" class="text-center">NOMBRE</th> 
                <th scope="col" class="text-center">SIGLA</th>  
                <th scope="col" class="text-center">TIPO TRAMITE</th>
                  
                <th scope="col" class="text-center">ACCIONES</th>
                
            </tr>

        </thead>

        <tbody>
            
            @foreach($subtipotramites as $subtipotramite)
            <tr>
                <td>{{$subtipotramite->id}}</td>
                <td>{{$subtipotramite->nombre}}</td>
                <td>{{$subtipotramite->sigla}}</td>
                <td>{{$subtipotramite->tipotramites->nombre}}</td>
                
                <td>
                    
                    <form action="{{ route('subtipotramite.destroy', $subtipotramite->id)}}" method="POST">
                    <a href="/subtipotramite/{{$subtipotramite->id}}/edit" class="fas fa-edit"></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="fas fa-trash"></button>
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
            $('#subtipotramites').DataTable({
                "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
            });
        });
    </script>
@stop