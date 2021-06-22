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
        <textarea value="{{ $repair->description }}" name="description" type="text" class="form-control" id="exampleInputEmail1" required>{{$repair->description}}</textarea>
    </div>
    <div class="form-group">
        <label for="comments">Comentarios</label>
        <textarea value="{{ $repair->comments }}" name="comments" type="text" class="form-control" id="comments" >{{$repair->comments}}</textarea>
    </div>
    <div class="form-group">
        <label for="job">Trabajo a realizar</label>
        <input value="{{$repair->job}}" name="job" type="text" class="form-control" id="job" required>
    </div>
    <div class="form-group">
        <label for="price">Precio</label>
        <input value="{{$repair->price}}" name="price" type="number" min="0" class="form-control" id="price" required>
    </div>
    <div class="form-group">
        <label for="paymentSign">Seña</label>
        <input value="{{$repair->paymentSign}}" name="paymentSign" type="number" min="0" class="form-control" id="paymentSign">
    </div>
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Modificar</button>
        <a href="{{ route('repairs.show',$repair->clientId) }}" class="btn btn-danger">Cancelar</a>
    </div>

</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop