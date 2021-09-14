@extends('adminlte::page')

@section('title', 'Modulo Gastronomia')

@section('content_header')
    <h1>Crear Usuarios</h1>
@stop

@section('content')
<form action="/usuarios" method="POST">
@csrf
<div class="mb-3">
  <label for="" class="form-label">Codigos</label>
  <input id="codigo" name="codigo" type="text" class="form control" tabindex="1">
</div>
<div class="mb-3">
  <label for="" class="form-label">Descripcion</label>
  <input id="descripcion" name="descripcion" type="text" class="form control" tabindex="2">
</div>
<div class="mb-3">
  <label for="" class="form-label">Cantidad</label>
  <input id="cantidad" name="cantidad" type="number" class="form control" tabindex="3">
</div>
<div class="mb-3">
  <label for="" class="form-label">Precio</label>
  <input id="precio" name="precio" type="number" step="amy" value="0.00" class="form control" tabindex="4">
</div>
<a href="/usuarios" class="btn btn-secondory" tabindex="5">Cancelar</a>
<button type="submit"class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop