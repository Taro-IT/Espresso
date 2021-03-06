@extends('layouts.app_auth')

@section('title') Casa Medio camino Loohl | {{$product->title}} @endsection

@section('content')
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col-md-12">
                <h1 class="section-header modal-title mt-5 mb-5"> 
                    <span class="underline text-uppercase">&nbsp;&nbsp;MODIFICAR PRODUCTO&nbsp;&nbsp;</span>
                </h1>
            </div>
        </div>
        <form action="{{route('products.update',$product->id)}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('put')
            <div class="row mb-3">
                <div class="col-md-6">
                    <label>
                        <i class="bi bi-image-fill mr-2"></i>Imagen del producto:
                    </label>
                    <br>
                    <div class="w-100 text-center">
                        <img src="{{asset($product->image)}}" alt="{{$product->title}}" style="max-width: 100%; max-height: 350px"
                            class="rounded mb-3"
                            onerror="this.onerror=null;this.src='{{asset('images/image-not-found.png')}}';">
                    </div>
                    <div class="input-group">
                        <div class="custom-file" id="customFile">
                            <input type="file" name="image" class="custom-file-input" id="inputGroupFile01"
                                aria-describedby="inputGroupFileAddon01" lang="es" data-browse="Subir"
                                accept="image/*">
                            <label class="custom-file-label" for="inputGroupFile01">Seleccionar archivo...</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="title">Nombre:</label>
                        <input type="text" class="form-control" id="title" aria-describedby="Titulo"
                            name="title" value="{{old('title',$product->title)}}">
                    </div>
                    <div class="form-group">
                        <label for="title"><i class="bi bi-text-left mr-2"></i>Descripci??n:</label>
                        <textarea class="form-control" id="description" rows="5"
                                name="description">{{old('description', $product->description)}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">
                            <i class="bi bi-cash-stack mr-2"></i>Precio m??nimo:
                        </label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="number" step="1" min="0" class="form-control" id="price"
                                aria-describedby="Precio" name="price"
                                value="{{old('price',$product->price)}}">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Archivo:</label>
                        <div class="input-group mb-2">
                            <div class="custom-file" id="customFile">
                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                    aria-describedby="inputGroupFileAddon01" lang="es" data-browse="Subir"
                                    name="file">
                                <label class="custom-file-label" for="inputGroupFile01">Seleccionar archivo...</label>
                            </div>
                        </div>
                        @if(($product->file) != null)
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="{{route('download',$product->id)}}" class="underlined">Descargar
                                        Archivo</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="author" class="form-label"><i class="bi bi-person-fill mr-2"></i>Autor:</label>
                        <div class="input-group mb-3">
                            <select class="custom-select" name="id_patient" required>
                                <option disabled value="N/A">Selecciona el autor...</option>
                                @foreach($patients as $patient)
                                    <option value="{{$patient->id}}"
                                        @if($product->id_patient == $patient->id) selected @endif>
                                        {{$patient->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <a href="{{route('patients.index')}}">
                            <button class="btn btn-principal btn-sm" type="button">Registrar autor</button>
                        </a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="workshop" class="form-label"><i class="bi bi-easel-fill mr-2"></i>Taller:</label>
                        <div class="input-group mb-3">
                            <select class="custom-select" name="id_workshop" required>
                                <option disabled>Selecciona un taller...</option>
                                @foreach($workshops as $workshop)
                                    <option value="{{$workshop->id}}"
                                        @if($product->id_workshop == $workshop->id) selected @endif>
                                        {{$workshop->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <a href="{{route('workshop.index')}}">
                        <button class="btn btn-principal btn-sm" type="button">Registrar taller</button>
                    </a>
                </div>
            </div>
            <input type="hidden" name="image_aux" value="{{$product->image}}">
            <input type="hidden" name="file_aux" value="{{$product->file}}">
            <div class="row col-md-12 justify-content-center text-center mt-5">
                <button type="submit" class="btn btn-principal btn-lg mb-5">Guardar cambios</button>
            </div>
        </form>
    </div>
@endsection
