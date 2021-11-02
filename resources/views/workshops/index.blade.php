@extends('layouts.app_auth')

@section('title') Casa Medio camino Loohl | Talleres @endsection
@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endpush
@section('content')
        <div class="row">
            <div class="col-md-6 text-left">
                <h3>Talleres de Casa medio camino Loohl</h3>
                <hr>
            </div>
            <div class="col-md-6 text-right">
                <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">+ Agregar Taller</button>
            </div>
        </div>

        <br>
        <div class="row">
            <div class="col-md-12">
                <table id="table_id" class="display table-striped">
                    <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Nombre de Taller</th>
                        <th>Ver mas</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($workshops as $workshop)
                        <tr>
                            <td class="text-center">{{$workshop->id}}</td>
                            <td>{{$workshop->name}}</td>
                           
                            <td>
                                <a href="#">
                                    <button class="btn btn-info" type="button">Ver mas</button>
                                </a>
                            </td>
                            <td>
                                <a href="#">
                                    <button class="btn btn-warning" type="button">Editar</button>
                                </a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminar-{{$workshop->id}}">Eliminar</button>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="eliminar-{{$workshop->id}}" tabindex="-1" role="dialog" aria-labelledby="eliminar-{{$workshop->id}}-Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="eliminar-{{$workshop->id}}-Label">Eliminar {{$workshop->title}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ¿Estas segur@ que deseas eliminar el taller {{$workshop->title}} ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                        <form action="{{route('workshop.destroy',$workshop->id)}}"
                                              method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Si</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                    </tbody>
                </table>
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
