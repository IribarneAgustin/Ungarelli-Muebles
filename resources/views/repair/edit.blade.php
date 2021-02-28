@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<h1>Editar reparación</h1>
@stop

@section('content')

<form action="/repairs/{{$repair->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="exampleInputEmail1">Descripción</label>
        <textarea value="{{$repair->description}}" name="name" type="text" class="form-control" id="exampleInputEmail1">{{$repair->description}}</textarea>
    </div>
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Modificar</button>
        <a href="{{ route('repairs.show',$repair->clientId) }}"class="btn btn-danger">Cancelar</a>
    </div>

</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop