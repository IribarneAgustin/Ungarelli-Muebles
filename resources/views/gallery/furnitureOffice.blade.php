@extends('layouts.plantillabase')


@section('contenido')

<!-- Header -->
<div style="background-color: black; height: 100px" >
    <div class="text-center">
        <br>
        <h2 class="header">Muebles de <b>oficina</b> </h2>
        <img src="/logo/ungarelli small.png" style=" width:auto; height: 50px !important;">
    </div>
</div>

<div class="text-center pt-5">
    <p>Contamos con lo mejor en fabricación nacional para tus muebles de oficina</p>
    <hr>
</div>
<div class="row" style="padding: 50px">
    <div class="col-md-6 col-lg-4">
        <h3 class="text-center">Colores línea <b>Classic</b></h3>
        <br>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="/image/nehaya.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="/image/negro.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="/image/nogal.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
    </div>
    <div class="col-md-6 col-lg-4">
        <h3 class="text-center">Colores línea <b>Millenium</b></h3>
        <br>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="/image/ceniza.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="/image/peral.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>

</div>

<div class="text-center pt-5">
    <h2>Muebles línea <b>Classic</b></h2>
</div>
<br>
<div class="row">
    @foreach($articles as $article)
    @if ($article->premium == 0)
    <div class="col-md-6 col-lg-4" style="padding:10px">
        <div class="card border-0">
            <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-mdb-ripple-color="light">
                <a class="lightbox" href="{{$article->image}}"><img src="{{$article->image}}" class="card-img-top">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                </a>
                <div class="card-body">
                    <div class="text-center">
                        <h6><b>{{$article->name}}</b></h6>
                    </div>
                    <p class="text-muted card-text">{{$article->description}}</p>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>
<div class="text-center pt-5">
    <h2>Muebles línea <b>Millenium</b></h2>
</div>
<br>
<div class="row">
    @foreach($articles as $article)
    @if ($article->premium == 1)
    <div class="col-md-6 col-lg-4" style="padding:10px">
        <div class="card border-0">
            <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-mdb-ripple-color="light">
                <a class="lightbox" href="{{$article->image}}"><img src="{{$article->image}}" class="card-img-top">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                </a>
                <div class="card-body">
                    <div class="text-center">
                        <h6><b>{{$article->name}}</b></h6>
                    </div>
                    <p class="text-muted card-text">{{$article->description}}</p>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>


@stop