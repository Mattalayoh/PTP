@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<a href="usuarios/create" class="btn btn-primary mb-3">CREAR</a>


<table id="usuarios" class="table table-dark table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRES</th>
            <th scope="col">APELLIDOS</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">CORREO</th>
            <th scope="col">EDAD</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->nombres}}</td>
            <td>{{$usuario->apellidos}}</td>
            <td>{{$usuario->telefono}}</td>
            <td>{{$usuario->correo}}</td>
            <td>{{$usuario->edad}}</td>
            <td>
            <form action="{{ route ('usuarios.destroy',$usuario->id)}}" method="POST">
                <a href="/usuarios/{{ $usuario->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#articulos').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>
@stop