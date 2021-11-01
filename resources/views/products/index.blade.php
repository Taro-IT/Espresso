@extends('layouts.app_auth')

@section('title') Casa Medio camino Loohl | Productos @endsection
@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endpush
@section('content')
        <div class="row">
            <div class="col-md-6 text-left">
                <h3>Productos de Casa medio camino Loohl</h3>
                <hr>
            </div>
            <div class="col-md-6 text-right">
                <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">+ Agregar Producto</button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Agregar Nuevo Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
                @csrf
                  <div class="mb-3">
                    <label for="title" class="form-label">Título</label>
                    <input type="text" class="form-control" id="title" name="title" required="true">
                  </div>
                  <div class="mb-3">
                      <label for="description" class="form-label">Descripción</label>
                      <textarea class="form-control" aria-label="With textarea" name="description" required="true"></textarea>
                    </div>
                  <div class="mb-3">
                    <label for="author" class="form-label">Autor</label>
                    <select class="form-select" aria-label="Default select example" name="id_patient" required="true">
                      <option selected disabled>Escoge el autor</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="workshop" class="form-label">Taller</label>
                    <select class="form-select" aria-label="Default select example" name="id_workshop" required="true">
                      <option selected disabled>Escoge el taller</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                  <div class="mb-3">
                      <label for="price" class="form-label">Precio Mínimo</label>
                      <input type="number" class="form-control" name="price" required="true">
                    </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Agregar Producto</button>
              </div>
              </form>
            </div>
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
                            <td>
                            @foreach($authors as $author)
                            @if ($product->id == $author->id_product)
                                @foreach($patients as $patient)
                                @if ($author->id_patient == $patient->id)
                                {{$patient->name}}
                                <br>
                                @endif
                                @endforeach
                            @endif
                            @endforeach
                        </td>
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
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminar-{{$product->id}}">Eliminar</button>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="eliminar-{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="eliminar-{{$product->id}}-Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="eliminar-{{$product->id}}-Label">Eliminar {{$product->title}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ¿Estas segur@ que deseas eliminar el producto {{$product->title}} ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                        <form action="{{route('products.destroy',$product->id)}}"
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
