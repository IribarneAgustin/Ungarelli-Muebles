@extends('layouts.plantillabase')

@section('contenido')

<div class="text-center pt-5">
    <h2>Muebles de oficina</h2>
    <hr>
    <div class="row">
        @foreach($articles as $article)
        <div class="col-md-6 col-lg-4" style="padding:10px">
            <div class="card border-0">
                <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-mdb-ripple-color="light">
                    <a class="lightbox" href="{{$article->image}}"><img src="{{$article->image}}" class="card-img-top">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                    <div class="card-body">
                        <h6><b>{{$article->name}}</b></h6>
                        <p class="text-muted card-text">{{$article->description}}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@stop

<!--
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
-->