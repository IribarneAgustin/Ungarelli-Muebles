@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<h1>Reparaciones</h1>
@stop

@section('content')
<div class="content">
    <hr>
    <table id="repairs" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%;padding:2px">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col" style="width: 1%">Id</th>
                <th scope="col" style="width: 10%">Cliente</th>
                <th scope="col" style="width: 10%">Fecha</th>
                <th scope="col" style="width: 20%">Descripción</th>
                <th scope="col" style="width: 5%">Seña</th>
                <th scope="col" style="width: 10%">Estado</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($repairs as $repair)
            <tr>
                <td> {{$repair->id}} </td>
                @foreach ($clients as $client)
                @if ($client->id == $repair->clientId)
                <td> {{$client->name}} </td>
                @endif
                @endforeach
                <td> {{$repair->created_at}} </td>
                <td> {{$repair->description}} </td>
                <td> {{$repair->paymentSign}} </td>
                <td> {{$repair->status}}</td>

            </tr>
            @endforeach

        </tbody>

    </table>
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

<!-- Datatables -->
<script>
    $('#repairs').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "No se encontró ningun resultado",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)",
            "search": "Buscar:",
            "paginate": {
                'next': "Siguiente",
                'previous': "Anterior"
            }
        }

    });
</script>


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