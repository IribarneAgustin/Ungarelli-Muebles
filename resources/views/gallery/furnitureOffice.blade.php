@extends('layouts.plantillabase')

@section('contenido')

<div class="text-center pt-5">
<h1>Artículos</h1>
<p>Ungarelli muebles cuenta con los siguientes artículos</p>
    <div class="row">
        @foreach($articles as $article)
        <div class="card col-lg-4" width="100%" height="auto" style="padding:25px">
            <img src="{{$article->image}}" class="card-img-top" width="100%" height="auto" alt="Imagen" />
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
            </div>
        </div>
        @endforeach
    </div>
</div>


@stop