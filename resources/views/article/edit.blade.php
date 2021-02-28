@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<h1>Editar artículo</h1>
@stop

@section('content')

<form action="/articles/{{$article->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input value="{{$article->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1" required>
    </div>
    <div class="form-group">
        <label class="form-label" for="customFile">Imagen</label>
        <input value="{{$article->image}}" name="image" type="file" class="form-control" id="customFile" accept="image/*" />
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Descripción</label>
        <input value="{{$article->description}}" name="description" type="text" class="form-control" id="exampleInputPassword1" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Categoría</label>
        <select name="categoryId" class="form-control" id="exampleFormControlSelect1" required>
            @foreach ($categories as $categorie)
            @if($category->id == $categorie->id )
            <option selected="true" value="{{$categorie->id}}"> {{$categorie->name}}</option>
            @else
            <option value="{{$categorie->id}}"> {{$categorie->name}} </option>
            @endif
            @endforeach
        </select>
    </div>
    <label class="form-label" for="flexCheckDefault">Subcategoría (opcional)</label>
    <div class="form-check">
        @if($article->premium == 1)
        <input checked="true" name="premium" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Artículo premium
        </label>
        @else
        <input name="premium" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Artículo premium
        </label>
        @endif
    </div>
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Modificar</button>
        <a href="/articles" class="btn btn-danger">Cancelar</a>
    </div>

</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop