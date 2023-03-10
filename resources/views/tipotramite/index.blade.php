@extends('adminlte::page')

@section('title', 'tipotramite')

@section('content_header')

<h1>LISTA TIPO TRAMITE</h1>

@stop

@section('content')
 
<a href="/tipotramite/create" class="btn btn-primary mb-3">INSERTAR TIPO DE TRAMITE</a>

<div class="table-responsive">

    <table id="tipotramites" class="table table-striped table-bordered shadow-lg mt-4 " style="width:100%">
        
        <thead class="bg-primary text-white">
            
            <tr>
                <th scope="col">ID</th>
                <th scope="col" class="text-center">NOMBRE</th>   
                  
                <th scope="col" class="text-center">ACCIONES</th>
                
            </tr>

        </thead>

        <tbody>
            
            @foreach($tipotramites as $tipotramite)
            <tr>
                <td>{{$tipotramite->id}}</td>
                <td>{{$tipotramite->nombre}}</td>
                
                <td>
                    
                    <form action="{{ route('tipotramite.destroy', $tipotramite->id)}}" method="POST">
                    <a title="Editar" href="/tipotramite/{{$tipotramite->id}}/edit" class="fas fa-edit"></a>
                    @csrf
                    @method('DELETE')
                    <button title="Borrar" type="submit" class="fas fa-trash"></button>
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
            $('#tipotramites').DataTable({
                "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
            });
        });
    </script>
@stop