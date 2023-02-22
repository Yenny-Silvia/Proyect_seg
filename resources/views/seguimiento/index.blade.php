@extends('adminlte::page')

@section('title', 'seguimiento')

@section('content_header')

<h1>LISTA DE SEGUIMIENTO</h1>

@stop

@section('content')
 
<a href="/seguimiento/create" class="btn btn-primary mb-3">INSERTAR SEGUIMIENTO</a>

@if (session('status'))
    <div class="alert alert-success mt-4">
        {{ session('status') }}
    </div>
@endif

<div class="table-responsive">

    <table id="seguimientos" class="table table-striped table-bordered shadow-lg mt-4 " style="width:100%">
        
        <thead class="bg-primary text-white">
            
            <tr>
                <th scope="col">ID</th>
                <th scope="col">TRAMITE</th>
                <th scope="col">DEPENDENCIA ORIGEN</th>
                <th scope="col">DEPENDENCIA DESTINO</th>
                <th scope="col">FECHA</th>     
                <th scope="col">CODIGO</th>
                <th>ACCIONES</th>
                
            </tr>

        </thead>

        <tbody>
            
            @foreach($seguimientos as $seguimiento)
            <tr>
                <td>{{$seguimiento->id}}</td>
                <td>{{$seguimiento->tramites->referencias}}</td>
                <td>{{$seguimiento->dependenciasOrigen->nombre}}</td>
                <td>{{$seguimiento->dependenciasDestino->nombre}}</td>
                <td>{{$seguimiento->fecha}}</td>
                <td>{{$seguimiento->recepcion}}</td>
                <td>
                    <form action="{{ route('seguimiento.destroy', $seguimiento->id)}}" method="POST">
                    <a href="/seguimiento/{{$seguimiento->id }}/edit" class="fas fa-edit blue-color"></a>
                    
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="fas fa-trash"></button>
                    <a href="/seguimiento/{{$seguimiento->id}}/registro" class="fas fa-file-signature"></a>
                    
                    @if($seguimiento->recepcion)
                    <a href="/seguimiento/{{$seguimiento->dependenciasDestino->id}}/{{$seguimiento->tramites->id}}/create2" class="fas fa-file-import "></a>
                    @endif
                    
                    </div>
                                    
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
            $('#seguimientos').DataTable({
                "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
            });
        });
    </script>
@stop