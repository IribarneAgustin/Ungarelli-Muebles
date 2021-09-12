@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<h1>Reparaciones de {{$client->name}} </h1>
<br>
<p><b>Teléfono/s: {{$client->phone}} </b> </p>

@stop

@section('content')
<div class="content">
    <form action="/repairs/create" method="get">
        @csrf
        <input name="clientId" type="hidden" value="{{$client->id}}">
        <button class="btn btn-primary" type="submit">Agregar</button>
    </form>
    <hr>
    <table id="repairs" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%;padding:2px">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col" style="width: 1%">Nº</th>
                <th scope="col" style="width: 5%">Fecha</th>
                <th scope="col" style="width: 10%">Descripción</th>
                <th scope="col" style="width: 5%">Trabajo</th>
                <th scope="col" style="width: 5%">Seña</th>
                <th scope="col" style="width: 5%">Importe</th>
                <th scope="col" style="width: 10%">Comentarios</th>
                <th scope="col" style="width: 10%">Estado</th>
                <th scope="col" style="width: 15%"></th>
            </tr>
        </thead>
        <tbody>

            @foreach ($repairs as $repair)
            @if ($repair->clientId == $client->id)
            <tr>
                <td> {{$repair->id}} </td>
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
                <td> {{$repair->comments}} </td>
                <td>
                    <form action="{{ route('changeStatus') }}" method="post">
                        @csrf
                        <input name="id" type="hidden" value="{{$repair->id}}">
                        <select class="form-select" name="status">
                            <option name="status" selected value="{{$repair->status}}">{{$repair->status}}</option>
                            @foreach($statusList as $status)
                            @if ($repair->status != $status)
                            <option value="{{$status}}" name="status">{{$status}}</option>
                            @endif
                            @endforeach
                        </select>
                        <br>
                        <button type="submit" class="btn btn-warning" style="width:100%">Cambiar</button>
                        @if ($repair->status == 'Terminada')
                        <hr>
                        <a target="_blank" class="btn btn-success" href="https://web.whatsapp.com/">Avisar por WhatsApp! </a>
                        @endif

                    </form>
                </td>
                <td>
                    <div class="text-center">
                        <form action="{{ route('repairs.destroy',$repair->id) }}" method="post" class="delete-form">
                            <a href="/repairs/{{$repair->id}}/edit" style="width: auto" class="btn btn-info">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="width:auto" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endif

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