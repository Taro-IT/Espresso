@extends('layouts.app_auth')

@section('title') Casa Medio camino Loohl | Talleres @endsection
@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endpush
@section('content')
    <div class="row">
        <div class="col-md-6 text-left">
            <h1 class="section-header mt-5 mb-5">
                <span class="underline">&nbsp;&nbsp;TALLERES&nbsp;&nbsp;</span>
            </h1>
        </div>
        <div class="col-md-6 text-right mt-5">
            <button class="btn btn-principal" type="button" data-bs-toggle="modal" data-bs-target="#registerWorkshop">
                Registrar taller
                <!--<i class="bi bi-plus-circle-fill" style="font-size: 20px;"></i>-->
            </button>
        </div>
        <div class="modal fade" id="registerWorkshop" tabindex="-1" aria-labelledby="staticBackdropLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row col-md-12 justify-content-center text-center">
                            <h2 class="section-header modal-title" id="staticBackdropLabel">
                                <span class="underline text-uppercase">&nbsp;&nbsp;REGISTRAR TALLER&nbsp;&nbsp;</span>
                            </h2></div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('workshop.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label for="name" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="name" name="name" required
                                       value="{{old('name')}}" placeholder="Taller de escultura">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="submit" class="btn btn-principal">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="row">
        <div class="col-md-12">
            <table id="table_id" class="display table-striped">
                <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th>Nombre de Taller</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($workshops as $workshop)
                    <tr>
                        <td class="text-center">{{$workshop->id}}</td>
                        <td>{{$workshop->name}}</td>
                        <td class="text-center">
                            <a href="{{route('products.edit',$workshop->id)}}" data-tooltip="tooltip"
                               data-placement="right" title="Modificar el taller.">
                                <button class="btn btn-warning" type="button">
                                    <i class="bi bi-pencil-fill"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#eliminar-{{$workshop->id}}" data-tooltip="tooltip"
                                    data-placement="right" title="Eliminar el taller.">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="eliminar-{{$workshop->id}}" tabindex="-1" role="dialog"
                         aria-labelledby="eliminar-{{$workshop->id}}-Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="row col-md-12 justify-content-center text-center">
                                        <h2 class="section-header modal-title" id="eliminar-{{$workshop->id}}-Label">
                                            <span class="underline text-uppercase">&nbsp;&nbsp;ELIMINAR TALLER&nbsp;&nbsp;</span>
                                        </h2></div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>¿Estás segur@ que deseas eliminar el taller:
                                        <l class="text-purple">{{$workshop->name}} </l>
                                        ?
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary mr-auto" data-dismiss="modal">No
                                    </button>
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
