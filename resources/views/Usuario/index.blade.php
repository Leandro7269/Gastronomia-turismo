@extends('adminlte::page')

@section('title', 'Modulo de Gastronomia')

@section('content_header')
    <h1>Listado de Usuarios</h1>
@stop

@section('content')
<a href="usuarios/create" class="btn btn-success mb-3">CREAR</a>

<table id="usuarios" class="table table-striped" table-bordered shadow-lg mt-4 style="width:100%">
<thead class="bg-primary text-white">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Codigo</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Precio</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach($usuarios as $usuario)
    <tr>
        <td>{{$usuario->id}}</td>
        <td>{{$usuario->codigo}}</td>
        <td>{{$usuario->descripcion}}</td>
        <td>{{$usuario->cantidad}}</td>
        <td>{{$usuario->acciones}}</td>
        <td>
            <form action="{{route ('usuarios.destroy', $usuario->id)}}" method="POST">
            <a href="/usuarios/{{$usuario->id}}/edit" class="btn btn-info">Editar</a>
            @csrf
            

            <button type="submit" class="btn btn-danger">Borrar</button>
            @method('DELETE')
        </td>
    
    </tr>
    @endforeach

</tbody>
</table>

    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap5.min.css" rel=styleshp>
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#usuarios').DataTable();
    
} );
</script>
@stop