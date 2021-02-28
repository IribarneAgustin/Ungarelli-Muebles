@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<h1>Clientes</h1>
@stop

@section('content')
<div class="content">
    <a href="clients/create" class="btn btn-primary">Agregar</a>
    <hr>
    <table id="articles" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col" style="width: 5%">Id</th>
                <th scope="col" style="width: 10%">Nombre</th>
                <th scope="col" style="width: 5%">Teléfono</th>
                <th scope="col" style="width: 10%">Email</th>
                <th scope="col" style="width: 10%">Reparaciones</th>
                <th scope="col" style="width: 10%"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
                <td> {{$client->id}} </td>
                <td> {{$client->name}} </td>
                <td> {{$client->phone}} </td>
                <td> {{$client->email}} </td>
                <td> <a style="width: 100%" class="btn btn-warning" href="{{ route('repairs.show',$client->id) }}">Ver reparaciones</a> </td>
                <td>
                    <form action="{{ route('clients.destroy',$client->id) }}" method="post" class="delete-form">
                        <a href="/clients/{{$client->id}}/edit" style="width: 40%" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="width: 40%" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
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
    $('#articles').DataTable({
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
        'Cliente borrado',
        'El cliente fue borrado exitosamente.',
        'success'
    )
</script>
@endif
<script>
    $('.delete-form').submit(function(e) {
        e.preventDefault();

        Swal.fire({
            title: '¿Desea borrar este cliente?',
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