@extends('layouts.app_auth')

@section('title') Casa Medio camino Loohl | {{$product->title}} @endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Edición de {{strtoupper($product->title)}}</h2>
        </div>
    </div>
    <br><br>
    <form action="{{route('products.update',$product->id)}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{asset('storage/'.$product->image)}}" alt="{{$product->title}}" width="100%" class="rounded" onerror="this.onerror=null;this.src='{{asset('images/image-not-found.png')}}';">
                        <br><br>
                        <input type="file" name="image">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <label>Archivo</label>
                        <br>
                        <input type="file" name="file">
                        <br>
                        @if(($product->file) != null)
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="{{route('download',$product->id)}}" class="underlined">Descargar Archivo</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control" id="title" aria-describedby="Titulo" placeholder="Titulo" name="title" value="{{old('title',$product->title)}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <textarea class="form-control" id="description" rows="5" name="description">{{old('description',$product->description)}}</textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="price">$ Precio</label>
                            <input type="number" step="0.01" min="0" class="form-control" id="price" aria-describedby="Precio" placeholder="$ Precio" name="price" value="{{old('price',$product->price)}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="author" class="form-label">Autor</label>
                            <br>
                            <select class="form-select rounded" aria-label="Default select example" name="id_patient"
                                    required>
                                <option disabled value="N/A">Escoge el autor</option>
                                @foreach($patients as $patient)
                                    <option value="{{$patient->id}}" @if(($product->id_patient) == $patient->id ) selected @endif>{{$patient->name}}</option>
                                @endforeach
                            </select>
                            <br><br>
                            <a href="{{route('patients.index')}}">
                                <button class="btn btn-primary btn-sm" type="button">+ Agregar Autores</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="workshop" class="form-label">Taller</label>
                            <br>
                            <select class="form-select rounded" aria-label="Default select example" name="id_workshop"
                                    required>
                                <option disabled>Escoge el taller</option>
                                @foreach($workshops as $workshop)
                                    <option value="{{$workshop->id}}"  @if(($product->id_workshop) == $workshop->id) selected @endif>{{$workshop->name}}</option>
                                @endforeach
                            </select>
                            <br><br>
                            <a href="{{route('workshop.index')}}">
                                <button class="btn btn-primary btn-sm" type="button">+ Agregar Taller</button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <input type="hidden" name="image_aux" value="{{$product->image}}">
        <input type="hidden" name="file_aux" value="{{$product->file}}">
        <button type="submit" class="btn btn-success btn-lg">Guardar Cambios</button>
    </form>
@endsection
