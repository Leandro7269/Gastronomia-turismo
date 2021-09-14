@extends('adminlte::page')

@section('title', 'Modulo de Gastronomia')

@section('content_header')
    <h1>Editar Usuarios</h1>
@stop

@section('content')
<form action="/usuarios/{{$usuarios->id}}" method="POST">
@csrf
@method('PUT')
<div class="mb-3">
  <label for="" class="form-label">Codigos</label>
  <input id="codigo" name="codigo" type="text" class="form control" value="{{$usuarios->codigo}}">
</div>
<div class="mb-3">
  <label for="" class="form-label">Descripcion</label>
  <input id="descripcion" name="descripcion" type="text" class="form control" value="{{$usuarios->descripcion}}">
</div>
<div class="mb-3">
  <label for="" class="form-label">Cantidad</label>
  <input id="cantidad" name="cantidad" type="number" class="form control" value="{{$usuarios->cantidad}}">
</div>
<div class="mb-3">
  <label for="" class="form-label">Precio</label>
  <input id="precio" name="precio" type="number" step="amy" value="0.00" class="form control" value="{{$usuarios->precio}}">
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