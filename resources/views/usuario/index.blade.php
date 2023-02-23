@extends('adminlte::page')

@section('title', 'usuario')

@section('content_header')
    <h1>USUARIOS</h1>
@stop

@section('content')
<a href="/usuario/create" class="btn btn-primary mb-3">CREAR</a>

<table id="usuarios" class="table table-striped table-bordered shadow-lg mt-4 " style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE DEPENDENCIA</th>
            <th scope="col">NOMBRE USUARIO</th>
            <th scope="col">ACCIONES</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id}}</td>
            <td>{{ $usuario->dependencias->nombre}}</td>
            <td>{{ $usuario->users->name}}</td>
            
            <td>
                <form action="{{ route ('usuario.destroy',$usuario->id)}}" method="POST">
                <a title="Editar" href="/usuario/{{ $usuario->id}}/edit" class="fas fa-edit"></a>
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
            $('#usuarios').DataTable({
                "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
            });
        });
    </script>
@stop