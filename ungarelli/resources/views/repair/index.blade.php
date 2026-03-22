@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<h1>Reparaciones</h1>
@stop

@section('content')
<div class="content">
    <hr>
    <div class="mb-3">
        <form action="{{ url()->current() }}" method="GET" class="form-inline">
            <input type="text" name="search" class="form-control mr-2" placeholder="Buscar cliente, descripción, trabajo..." value="{{ request('search') }}" style="width: 300px; display: inline-block;">
            <button type="submit" class="btn btn-primary">Buscar</button>
            @if(request('search'))
                <a href="{{ url()->current() }}" class="btn btn-secondary ml-2">Limpiar</a>
            @endif
        </form>
    </div>
    <table class="table table-striped table-bordered shadow-lg mt-4" style="width:100%;padding:2px">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col" style="width: 1%">Nº</th>
                <th scope="col" style="width: 10%">Cliente</th>
                <th scope="col" style="width: 5%">Fecha</th>
                <th scope="col" style="width: 10%">Descripción</th>
                <th scope="col" style="width: 10%">Trabajo</th>
                <th scope="col" style="width: 5%">Seña</th>
                <th scope="col" style="width: 5%">Importe</th>
                <th scope="col" style="width: 10%">Estado</th>
                <th scope="col" style="width: 10%">Comentarios</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($repairs as $repair)
            <tr>
                <td> {{$repair->id}} </td>
                <td> {{$repair->client_name}} </td>
                <td>
                    @if ($repair->created_at != "")
                    @foreach(explode(' ', $repair->created_at) as $info)
                    <option>{{date('d-m-Y', strtotime($info))}}</option>
                    @break
                    @endforeach
                    @endif
                </td>
                <td> {{$repair->description}} </td>
                <td> {{$repair->job}} </td>
                <td> {{$repair->paymentSign}} </td>
                <td> {{$repair->price}} </td>
                <td> {{$repair->status}} </td>
                <td> {{$repair->comments}} </td>

            </tr>
            @endforeach

        </tbody>

    </table>
    <div class="mt-3 d-flex justify-content-center">
        {{ $repairs->onEachSide(1)->links('pagination::bootstrap-4') }}
    </div>
</div>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
<!--Sweet Alert 2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>




@if(session('delete') == 'ok')
<script>
    Swal.fire(
        'Reparación eliminada',
        'La reparación fue borrada exitosamente.',
        'success'
    )
</script>
@endif
<script>
    $('.delete-form').submit(function(e) {
        e.preventDefault();

        Swal.fire({
            title: '¿Desea borrar esta reparación?',
            text: " ",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Borrar',
            cancelButtonText: 'Canelar'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            }
        })

    });
</script>
@stop