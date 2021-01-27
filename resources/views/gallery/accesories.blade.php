@extends('layouts.plantillabase')
<!-- Header -->
<div style="background-color: black; height: 100px">
    <div class="text-center">
        <br>
        <h2 class="header">Accesorios</h2>
        <img src="/logo/logo.png" style=" width:auto; height: 50px !important;">
    </div>
</div>
@section('contenido')

<div class="text-center pt-5">
    <p>Contamos con la mejor calidad y precios del mercado</p>
    <hr>
</div>
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