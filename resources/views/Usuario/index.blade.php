@extends('adminlte::page')

@section('title', 'Modulo Gastronomia')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('plugins.Sweetalert2', true)

@section('content')

<a href="usuarios/create" class="btn btn-success mb-3">Registra tu negocio</a>

<table id="usuarios" class="table table-striped" table-bordered shadow-lg mt-4 style="width:100%">
<thead class="bg-primary text-white">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre local</th>
        <th scope="col">Tipo de negocio</th>
        <th scope="col">Categoría</th>
        <th scope="col">Sucursales</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Direccion local</th>
        <th scope="col">Ref</th>
        
        
    </tr>
</thead>
<tbody>
    
    
    @foreach($usuarios as $usuario)
    <tr>
        <td>{{$usuario->id}}</td>
        <td>{{$usuario->nombre_local}}</td>
        <td>{{$usuario->tipo_de_negocio}}</td>
        <td>{{$usuario->categoria}}</td>
        <td>{{$usuario->sucursales}}</td>
        <td>{{$usuario->nombre}}</td>
        <td>{{$usuario->apellido}}</td>
        <td>{{$usuario->telefono}}</td>
        <td>{{$usuario->email}}</td>
        <td>{{$usuario->password}}</td>
        <td>{{$usuario->direccion_local}}</td>
        <td>{{$usuario->ref}}</td>

        <td>
            <form action="{{route ('usuarios.destroy', $usuario->id)}}" method="POST">

            <button href="/usuarios/{{$usuario->id}}/edit" class="btn btn-info">Editar</button>
            <button  type="submit" class="btn btn-danger">Borrar</button>
        </form>

            @csrf
            

            
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
<script>
    Swal.fire(
  'Ingreso exitoso',
  '',
  'success'
)
</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#usuarios').DataTable();
    
} );
</script>
@stop