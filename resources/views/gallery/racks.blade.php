@extends('layouts.plantillabase')

@section('contenido')

<div class="text-center pt-5">
    <h1>Racks</h1>
    <p>Trabajamos con las mejores marcas en sillas operativas del país</p>
    <div class="row">
        @foreach($articles as $article)
        <div class="col-md-6 col-lg-4" style="padding:10px">
            <div class="card border-0">
                <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-mdb-ripple-color="light">
                    <a class="lightbox" href="{{$article->image}}"><img src="{{$article->image}}" class="card-img-top">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                    <div class="card-body">
                        <h6>Lorem Ipsum</h6>
                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@stop
