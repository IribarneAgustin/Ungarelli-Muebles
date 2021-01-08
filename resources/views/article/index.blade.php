@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<h1>Artículos</h1>
@stop

@section('content')
<a href="articles/create" class="btn btn-primary">Agregar</a>
<hr>
<table id="articles" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col" style="width: 5%">Id</th>
            <th scope="col" style="width: 10%">Categoría</th>
            <th scope="col" style="width: 20%">Nombre</th>
            <th scope="col" style="width: 20%">Descripción</th>
            <th scope="col" style="width: 20%">Imagen</th>
            <th scope="col" style="width: 20%"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <td> {{$article->id}} </td>
            @foreach ($categories as $category)
            @if($category->id == $article->categoryId)
            <td>{{$category->name}} </td>
            @endif
            @endforeach
            <td> {{$article->name}} </td>
            <td> {{$article->description}} </td>
            <td> <img src="{{asset($article->image)}}" width="100%" height="auto"></td>
            <td>
                <form action="{{ route('articles.destroy',$article->id) }}" method="post">
                    <a href="/articles/{{$article->id}}/edit" style="width: 40%" class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="width: 40%" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>

</table>



@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#articles').DataTable();
    });
</script>
@stop