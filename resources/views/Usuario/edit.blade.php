@extends('adminlte::page')

@section('title', 'Modulo Gastronomia')

@section('content_header')
    <h1>Editar Usuarios</h1>
@stop

@section('content')
<form action="/usuarios/{{$usuarios->id}}" method="POST">
@csrf
@method('PUT')
<div class="mb-3">
  <label for="" class="form-label">Nombre del local</label>
  <input id="nombre_local" name= "nombre_local" type="text" class="form control" tabindex= " 1">
</div>
<div class="mb-3">
  <label for= "" class="form-label">Tipo de negocio</label>
  <input id="tipo_de_negocio" name="tipo_de_negocio" type="text" class="form control" tabindex="2">
</div>
<div class="mb-3">
  <label for= "" class="form-label">Categoría</label>
  <input id="categoria" name="categoria" type="text" class="form control" tabindex="3">
</div>
<div class="mb-3">
  <label for="" class="form-label">Cantidad de sucursales</label>
  <input id="sucursales" name="sucursales" type="number" step="amy" value="1000" class="form control" tabindex="4">
</div>
<div class="mb-3">
  <label for= "" class="form-label">Nombre</label>
  <input id="nombre" name="nombre" type="text" class="form control" tabindex="5">
</div>
<div class="mb-3">
  <label for= "" class="form-label">Apellido</label>
  <input id="apellido" name="apellido" type="text" class="form control" tabindex="6">
</div>
<div class="mb-3">
  <label for= "" class="form-label">Teléfono de contacto</label>
  <input id="telefono" name="telefono" type="number" class="form control" tabindex="7">
</div>
<div class="mb-3">
  <label for= "" class="form-label">Correo electrónico</label>
  <input id="email" name="email" type="email" class="form control" tabindex="8">
</div>
<div class="mb-3">
  <label for= "" class="form-label">Password</label>
  <input id="password" name="correo electrónico" type="password" class="form control" tabindex="9">
</div>
<div class="mb-3">
  <label for= "" class="form-label">Dirección del local</label>
  <input id="direccion_local" name="direccion_local" type="text" class="form control" tabindex="10">
</div>
<div class="mb-3">
  <label for= "" class="form-label">Referencia del local</label>
  <input id="ref" name="ref" type="text" class="form control" tabindex="11">
</div>
<a href="/usuarios" class="btn btn-secondory" tabindex="12">Cancelar</a>
<button type="submit"class="btn btn-primary" tabindex="13">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop