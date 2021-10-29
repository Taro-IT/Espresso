@extends('layouts.app_auth')

@section('title') Casa Medio camino Loohl | Productos @endsection
@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endpush


@section('content')
    <div class="container-loohl">
        <div class="row">
            <div class="col-m-md-12 text-center">
                <h3>Productos de Casa medio camino Loohl</h3>
                <hr>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <table id="table_id" class="display table-striped">
                    <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Titulo</th>
                        <th>Imagen</th>
                        <th>Autor</th>
                        <th>Ver mas</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td class="text-center">{{$product->id}}</td>
                            <td>{{$product->title}}</td>
                            <td>
                                <img src="{{asset('storage/'.$product->image)}}" alt="imagen">
                            </td>
                            <td>{{$product->author}}</td>
                            <td>
                                <a href="#">
                                    <button class="btn btn-info">Ver mas</button>
                                </a>
                            </td>
                            <td>
                                <a href="#">
                                    <button class="btn btn-warning">Editar</button>
                                </a>
                            </td>
                            <td>
                                <a href="#">
                                    <button class="btn btn-danger">Eliminar</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function () {
            $('#table_id').DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
            });
        });
    </script>
@endpush
