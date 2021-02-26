@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="/usuarios" method="POST">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">NOMBRES</label>
    <input id="nombres" name="nombres" type="text" class="form-control" tabindex="2" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">APELLIDOS</label>
    <input id="apellidos" name="apellidos" type="text" class="form-control" tabindex="3" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">TELEFONO</label>
    <input id="telefono" name="telefono" type="number"  class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">CORREO</label>
    <input id="correo" name="correo" type="email" class="form-control" tabindex="3" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">EDAD</label>
    <input id="edad" name="edad" type="number"  class="form-control">
  </div>
  <a href="/usuarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop