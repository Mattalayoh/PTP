@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar</h1>
@stop

@section('content')
<form action="/usuarios/{{$usuario->id}}" method="POST">    
   @csrf
   @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">NOMBRES</label>
    <input id="nombres" name="nombres" type="text" class="form-control" value="{{$usuario->nombres}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">APELLIDOS</label>
    <input id="apellidos" name="apellidos" type="text" class="form-control" value="{{$usuario->apellidos}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">TELEFONO</label>
    <input id="telefono" name="telefono" type="number" class="form-control" value="{{$usuario->telefono}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">CORREO</label>
    <input id="correo" name="correo" type="email" class="form-control" value="{{$usuario->correo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">EDAD</label>
    <input id="edad" name="edad" type="number" class="form-control" value="{{$usuario->edad}}">
  </div>
  <a href="/usuarios" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop