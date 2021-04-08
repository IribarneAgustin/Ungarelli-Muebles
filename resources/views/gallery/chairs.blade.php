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
    <p>Con mas de 20 años de experiencia en las reparaciones de sillas, ofrecemos una garantía inigualable en todas las sillas y sillones que disponemos para su venta</p>
    <hr>
</div>
<div class="row">
    @foreach($articles as $article)
    <div class="col-md-6 col-lg-4" style="padding:10px">
        <div class="card border-0">
            <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-mdb-ripple-color="light">
                <a class="lightbox" href="#exampleModal"><img src="{{$article->image}}" class="card-img-top">
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
    <!-- -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    @endforeach
</div>
</div>



@stop