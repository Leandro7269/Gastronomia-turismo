@extends('adminlte::page')

@section('title', 'Modulo Gastronomia')

@section('content_header')
    <h1>Registra tú local</h1>
@stop

@section('content')

<form action="{{route('usuarios.store')}}" method="POST" > 
@csrf

  <div class="form-row">
    
    <div class="form-group col-md-6">
    <label for="" class="form-label">Nombre del local</label>
    <input class="form-control" id="nombre_local" name="nombre_local" type="text" placeholder="Nombre del Local" value="{{ old('nombre_local')}}" required />
    </div>
  
  <div class="form-row">

    <div class="form-group col-md-6">
    <label for="" class="form-label">Tipo de negocio</label>
      
      <input class="form-control" id="tipo_de_negocio" name="tipo_de_negocio" type="text" placeholder="Tipo del Negocio" value="{{ old('tipo_negocio')}}" required />
    </div>

  <div class="form-row">  
    <div class="form-group col-md-4">
      <label for="inputState">Categoria</label>
      <select id="categoria" name="categoria" class="form-control" tabindex= " 3">
        <option selected value="Comida arabe">Comida arabe</option>
        <option selected value="Comida armenia">Comida armenia</option>
      </select>
    </div>

    <div class="form-group col-md-3">
    <label for="inputState" >Cantidad de sucursales</label>
      <select id="sucursales" name="sucursales" class="form-control" tabindex= " 4">
        <option selected value="1">1</option>
        <option selected value="2">2</option>
        <option selected value="3">3</option>
        <option selected value="4">4</option>
        <option selected value="5">5</option>
        <option selected value="6">6</option>
        <option selected value="7">7</option>
        <option selected value="8">8</option>
        <option selected value="9">9</option>
        <option selected value="10">10</option>
      </select>
    </div>

    <div class="form-group col-md-6">
    <label for="" class="form-label">Nombre</label>
      <input id="nombre" class="form-control" type="text" placeholder="" name="nombre" value="{{ old('nombre')}}" />
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Apellido</label>
      <input id="apellido" class="form-control" type="text" placeholder="" name="apellido" tabindex= " 6">
    </div>
  </div>

  <div class="form-group col-md-4">
      <label for="inputPassword4">Telefono</label>
      <input id="telefono" class="form-control" type="text" name="telefono" placeholder="" tabindex= " 7">
    </div>
  </div> 


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input id="email" class="form-control" type="email" name="email" placeholder="" tabindex= " 8">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input id="password" class="form-control" type="password" name="password" placeholder="" tabindex= "9">
    </div>
  

  
    <div class="form-group col-md-5">
    <label for="inputAddress">Direccion</label>
    <input id="direccion_local" class="form-control" type="text" name="direccion_local" placeholder="" tabindex= " 10">
    </div>
  
  <div class="form-group col-md-5">
    <div class="form-group">
    <label for="inputAddress2">Referencias</label>
    <input id="ref" class="form-control" type="text" name="ref" placeholder="" tabindex= " 11">
    </div>
 
<div class="div">
  
  <a href="/usuarios" class="btn btn-primary" placeholder="" tabindex="11">Cancelar</a>
  <button type="submit"class="btn btn-success" placeholder="" tabindex="12">Guardar</button>

 
</form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop