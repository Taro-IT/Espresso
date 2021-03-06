@extends('layouts.app_auth')

@section('title') Casa Medio camino Loohl | Productos @endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endpush

@section('content')
    <div class="row">
        <div class="col-md-6 text-left">
            <h1 class="section-header mt-5 mb-4 mb-md-5">
                <span class="underline">&nbsp;&nbsp;PRODUCTOS DIGITALES&nbsp;&nbsp;</span>
            </h1>
        </div>
        <div class="col-md-6 text-right mt-5 mb-4 mb-md-0">
            <!-- Register new digital product button -->
            <button class="btn btn-principal d-inline-flex align-items-center justify-content-center align-self-center" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Registrar producto
            </button>
        </div>
    </div>

    <!-- Register new digital product modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row col-md-12 justify-content-center text-center">
                    <h2 class="section-header">
                    <span class="underline">&nbsp;&nbsp;REGISTRAR PRODUCTO&nbsp;&nbsp;</span>
                    </h2>
                    </div>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Nombre del producto:</label>
                                    <input type="text" class="form-control" id="title" name="title" required
                                           value="{{old('title')}}">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="price" class="form-label">
                                        <i class="bi bi-cash-stack mr-2"></i>Precio m??nimo:
                                    </label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">$</span>
                                        <input type="number" min="0" step="1" class="form-control" required="true" name="price" value="{{old('price')}}">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">
                                <i class="bi bi-text-left mr-2"></i>Descripci??n:
                            </label>
                            <textarea class="form-control" aria-label="With textarea" name="description"
                                      required>{{old('description')}}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                        <div class="row text-left">
                            <div class="col-md-6">
                                <label>
                                    <i class="bi bi-image-fill mr-2"></i>Imagen del producto:
                                </label>
                                <div class="input-group mb-2">
                                    <div class="custom-file" id="customFile">
                                        <input name="image" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" lang="es" data-browse="Subir" accept="image/*" required>
                                        <label class="custom-file-label" for="inputGroupFile01">Seleccionar archivo...</label>
                                    </div>
                                </div>
                                <small class="text-muted">Se recomienda usar una imagen de 600 x 450px.</small>
                            </div>
                            <div class="col-md-6">
                                <label>
                                    <i class="bi bi-file-earmark-fill mr-2"></i>Archivo del producto:
                                </label>
                                <div class="input-group mb-2">
                                    <div class="custom-file" id="customFile">
                                        <input type="file" name="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" lang="es" data-browse="Subir" required>
                                        <label class="custom-file-label" for="inputGroupFile01">Seleccionar archivo...</label>
                                    </div>
                                </div>
                                <small class="text-muted">Se acepta cualquier tipo de archivo: video, audio, imagen o documento.</small>
                            </div>
                        </div>
                        <div class="row text-left">
                            <div class="col-md-6">
                                <div class="mb-3">
                                <label for="author" class="form-label">
                                    <i class="bi bi-person-fill mr-2"></i>Autor:
                                </label>
                                <div class="input-group mb-3">
                                    <select class="custom-select" id="inputGroupSelect01" name="id_patient" required>
                                        <option disabled selected value="N/A">Selecciona el autor...</option>
                                        @foreach($patients as $patient)
                                            <option value="{{$patient->id}}">{{$patient->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                    <a href="{{route('patients.index')}}">
                                        <button class="btn btn-principal btn-sm" type="button">Registrar otro autor</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="workshop" class="form-label">
                                        <i class="bi bi-easel-fill mr-2"></i>Taller:
                                    </label>
                                    <div class="input-group mb-3">
                                    <select class="custom-select" id="inputGroupSelect01" name="id_workshop" required>
                                        <option disabled selected value="N/A">Selecciona un taller...</option>
                                        @foreach($workshops as $workshop)
                                            <option value="{{$workshop->id}}">{{$workshop->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                    <a href="{{route('workshop.index')}}">
                                        <button class="btn btn-principal btn-sm" type="button">Registrar otro taller</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="submit" class="btn btn-principal px-5">Registrar</button>
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
                            <th>Nombre del producto</th>
                            <th>Autor</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td class="text-center">{{$product->id}}</td>
                            <td>{{$product->title}}</td>
                            <td>
                                @foreach($patients as $patient)
                                    @if(($product->id_patient) == $patient->id)
                                        {{$patient->name}}
                                        @break
                                    @endif
                                @endforeach
                            </td>
                            <td class="d-flex justify-content-around">
                                <!-- Digital product detail button -->
                                <button class="btn btn-info tooltipped-btn" type="button" data-toggle="modal" data-target="#ver-mas-{{$product->id}}" data-tooltip="tooltip" data-placement="right" title="Ver detalle del producto">
                                    <i class="bi bi-eye-fill"></i>
                                </button>
                                <!-- Edit digital product button -->
                                <a class="btn btn-warning tooltipped-btn" href="{{route('products.edit', $product->id)}}" data-tooltip="tooltip" data-placement="right" title="Modificar el producto" role="button">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <!-- Delete digital product button -->
                                <button type="button" class="btn btn-danger tooltipped-btn" data-tooltip="tooltip" data-placement="left" title="Eliminar el producto" data-toggle="modal" data-target="#eliminar-{{$product->id}}">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </td>
                        </tr>

                        <!-- Delete digital product modal -->
                        <div class="modal fade" id="eliminar-{{$product->id}}" tabindex="-1" role="dialog"
                            aria-labelledby="eliminar-{{$product->id}}-Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="row col-md-12 justify-content-center text-center">
                                            <h2 class="section-header modal-title" id="eliminar-{{$product->id}}-Label">
                                                <span class="underline text-uppercase">&nbsp;&nbsp;ELIMINAR PRODUCTO&nbsp;&nbsp;</span>
                                            </h2>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>??Est??s segur@ que deseas eliminar el producto: <l class="text-purple">{{$product->title}} </l>?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary mr-auto" data-dismiss="modal">No</button>
                                        <form action="{{route('products.destroy', $product->id)}}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Si</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Digital product detail modal -->
                        <div class="modal fade" id="ver-mas-{{$product->id}}" tabindex="-1" role="dialog"
                            aria-labelledby="ver-mas-{{$product->id}}-label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="row col-md-12 justify-content-center text-center">
                                            <h2 class="section-header modal-title" id="ver-mas-{{$product->id}}-Title">
                                                <span class="underline text-uppercase">&nbsp;&nbsp;{{strtoupper($product->title)}}&nbsp;&nbsp;</span>
                                            </h2>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-6 mb-4 text-center text-lg-center">
                                                <img src="{{asset($product->image)}}"
                                                    alt="{{$product->title}}-{{$product->title}}"
                                                    class="product-images-ver-mas rounded"
                                                    onerror="this.onerror=null;this.src='{{asset('images/image-not-found.png')}}';">
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="mb-4">
                                                <p><strong><i class="bi bi-cash-stack mr-2"></i>Precio m??nimo: </strong>${{$product->price}}</p>
                                                <p><strong><i class="bi bi-text-left mr-2"></i>Descripci??n: </strong>{{$product->description}}</p>
                                                <p><strong><i class="bi bi-easel-fill mr-2"></i>Taller:</strong>
                                                @foreach($workshops as $workshop)
                                                    @if(($product->id_workshop) == $workshop->id) {{$workshop->name}} @endif
                                                @endforeach</p>
                                                <p><strong><i class="bi bi-person-fill mr-2"></i>Autor:</strong>
                                                @foreach($patients as $patient)
                                                    @if(($product->id_patient) == $patient->id)
                                                        {{$patient->name}}
                                                        @break
                                                    @endif
                                                @endforeach
                                                </div>
                                                @if(($product->file) != null)
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="{{route('download',$product->id)}}">Descargar Archivo</a>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
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
                    "emptyTable": "No hay informaci??n",
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
