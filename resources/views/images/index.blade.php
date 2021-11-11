@extends('layouts.app_auth')

@section('title') Casa Medio camino Loohl | Imagenes @endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endpush

@section('content')
    <div class="row">
        <div class="col-md-6 text-left">
            <h1 class="section-header mt-5 mb-4 mb-md-5">
                <span class="underline">&nbsp;&nbsp;IMÁGENES&nbsp;&nbsp;</span>
            </h1>
        </div>
        <div class="col-md-6 text-right mt-5 mb-4 mb-md-0">
            <!-- Register new digital product button -->
            <button class="btn btn-principal d-inline-flex align-items-center justify-content-center align-self-center" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Agregar Imagen
            </button>
        </div>
    </div>

    <!-- Register new digital product modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row col-md-12 justify-content-center text-center">
                        <h2 class="section-header">
                            <span class="underline">&nbsp;&nbsp;AGREGAR IMÁGEN&nbsp;&nbsp;</span>
                        </h2>
                    </div>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('images.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row text-left">
                            <div class="col-md-12">
                                <label><i class="bi bi-image-fill mr-2"></i>Imagen:</label>
                                <div class="input-group mb-2">
                                    <div class="custom-file" id="customFile">
                                        <input name="image" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" lang="es" data-browse="Subir" accept="image/*">
                                        <label class="custom-file-label" for="inputGroupFile01">Seleccionar archivo...</label>
                                    </div>
                                </div>
                                <small class="text-muted">Se recomienda usar una imagen de 600 x 450px.</small>
                            </div>

                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="submit" class="btn btn-principal pl-5 pr-5">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Digital products table -->
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive mb-5">
                <table id="table_id" class="display table-striped">
                    <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($images as $image)
                        <tr>
                            <td class="text-center">{{$image->id}}</td>
                           <td class="text-center">
                               <img src="{{asset($image->image)}}" width="60%" height="250vh" alt="Imagen-{{$image->id}}">
                           </td>
                            <td class="d-flex justify-content-around">
                                <!-- Digital product detail button -->
                                <button class="btn btn-info tooltipped-btn" type="button" data-toggle="modal" data-target="#ver-mas-{{$image->id}}" data-tooltip="tooltip" data-placement="right" title="Ver detalle del producto">
                                    <i class="bi bi-eye-fill"></i>
                                </button>
                                <!-- Delete digital product button -->
                                <button type="button" class="btn btn-danger tooltipped-btn" data-tooltip="tooltip" data-placement="left" title="Eliminar el producto" data-toggle="modal" data-target="#eliminar-{{$image->id}}">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </td>
                        </tr>

                        <!-- Delete digital product modal -->
                        <div class="modal fade" id="eliminar-{{$image->id}}" tabindex="-1" role="dialog"
                             aria-labelledby="eliminar-{{$image->id}}-Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="row col-md-12 justify-content-center text-center">
                                            <h2 class="section-header modal-title" id="eliminar-{{$image->id}}-Label">
                                                <span class="underline text-uppercase">&nbsp;&nbsp;ELIMINAR IMÁGEN&nbsp;&nbsp;</span>
                                            </h2>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>¿Estás segur@ que deseas eliminar esta imagen?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary mr-auto" data-dismiss="modal">No</button>
                                        <form action="{{route('images.destroy', $image->id)}}"
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
