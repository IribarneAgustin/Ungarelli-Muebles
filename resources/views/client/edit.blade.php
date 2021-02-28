@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<h1>Editar artículo</h1>
@stop

@section('content')

<form action="/clients/{{$client->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input value="{{$client->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Teléfono</label>
        <input value="{{$client->phone}}" name="phone" type="text" class="form-control" id="exampleInputPassword1" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input value="{{$client->email}}" name="email" type="email" class="form-control" id="exampleInputPassword1">
    </div>
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Modificar</button>
        <a href="/clients" class="btn btn-danger">Cancelar</a>
    </div>

</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop