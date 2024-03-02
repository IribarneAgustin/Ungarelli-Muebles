@extends('layouts.plantillabase')

@section('contenido')
<!-- Header -->
<div style="background-color: black; height: 100px">
    <div class="text-center">
        <br>
        <h2 class="header">Sillas de <b>oficina</b> </h2>
        <img src="/logo/ungarelli small.png" style=" width:auto; height: 50px !important;">
    </div>
</div>
<div class="text-center pt-5">
    <p>Amplia variedad en sillas y sillones de oficina, acorde a cada necesidad. Contamos con servicio de mantenimiento y reparaci贸n</p>
    <hr>
</div>

<div class="text-center pt-5">
    <h2>Sillas <b>Fijas</b></h2>
</div>
<br>
<div class="row">
    @foreach($fixedChairs as $article)
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
    @endforeach
</div>

<div class="text-center pt-5">
    <h2>Sillas <b>Operativas</b></h2>
</div>
<br>
<div class="row">
    @foreach($taskChairs as $article)
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
    @endforeach
</div>

<div class="text-center pt-5">
    <h2>Sillones <b>Gerenciales</b></h2>
</div>
<br>
<div class="row">
    @foreach($managmentChairs as $article)
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
    @endforeach
</div>
<div class="text-center pt-5">
    <h2>Sillas <b>Cajeras</b></h2>
</div>
<br>
<div class="row">
    @foreach($cashierChairs as $article)
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
    @endforeach
</div>
<div class="text-center pt-5">
    <h2>Sala de <b>Espera</b></h2>
</div>
<br>
<div class="row">
    @foreach($waitingRoom as $article)
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
    @endforeach
</div>

<div class="text-center pt-5">
    <h2><b>OFERTAS</b> Sillas y Sillones Reacondicionados</h2>
</div>
<br>
<div class="row">
    @foreach($offers as $article)
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
    @endforeach
</div>



</div>



@stop