@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<h1>Agregar artículo</h1>
@stop

@section('content')
<form action="\articles" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input name="name" type="text" class="form-control" id="exampleInputEmail1" required>
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Descripción</label>
        <input name="description" type="text" class="form-control" id="exampleInputPassword1" required>
    </div>
    <div class="form-group">
        <label class="form-label" for="customFile">Imagen</label>
        <input name="image" type="file" class="form-control" id="customFile" accept="image/*" required />
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Categoría</label>

        <select name="categoryId" class="form-control" id="exampleFormControlSelect1" required>
            @foreach ($categories as $category)
            <option value="{{$category->id}}"> {{$category->name}} </option>
            @endforeach
        </select>

    </div>
    <br>
    <div class="form-group">
        <a href="/articles" class="btn btn-primary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </div>
</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop