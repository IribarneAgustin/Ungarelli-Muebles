@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<h1>Agregar Reparación</h1>
@stop

@section('content')
<form action="/repairs" method="POST">
    @csrf
    <input type="hidden" name="clientId" value="{{ $clientId }}">

    <div class="form-group">
        <label for="exampleInputEmail1">Descripción</label>
        <input name="description" type="text" class="form-control" id="exampleInputEmail1" required>
    </div>

    <div class="form-group">
        <label for="job">Trabajo a realizar</label>
        <input name="job" type="text" class="form-control" id="job" required>
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Estado</label>
        <select class="form-select" name="status" id="exampleInputPassword1" required>
            <option name="status" value="En espera">En espera</option>
            <option name="status" value="En proceso">En proceso</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Seña (opcional)</label>
        <input name="paymentSign" type="number" min="0" class="form-control" id="exampleInputEmail1">
    </div>

    <div class="form-group">
        <label for="price">Importe total</label>
        <input name="price" type="number" class="form-control" id="price" value="0" min="0" required>
    </div>

    <div class="form-group">
        <label for="comments">Comentarios</label>
        <input name="comments" type="text" class="form-control" id="comments">
    </div>


    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Agregar</button>
        <a href="{{ route('repairs.show',$clientId) }}" class="btn btn-danger">Cancelar</a>
    </div>
</form>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop