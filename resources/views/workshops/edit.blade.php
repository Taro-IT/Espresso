@extends('layouts.app_auth')

@section('title') Casa Medio camino Loohl | {{$workshop->name}} @endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col-md-12">
                <h1 class="section-header modal-title mt-5 mb-5" id="eliminar-{{$workshop->id}}-Label">
                    <span class="underline text-uppercase">&nbsp;&nbsp;MODIFICAR TALLER&nbsp;&nbsp;</span>
                </h1>
            </div>
        </div>
        <form action="{{route('workshop.update',$workshop->id)}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset($workshop->image)}}" alt="{{$workshop->name}}" width="100%"
                         class="rounded"
                         onerror="this.onerror=null;this.src='{{asset('images/image-not-found.png')}}';">
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
                        <label for="name">Nombre:</label>
                        <input type="text" class="form-control" id="name" aria-describedby="Titulo"
                               placeholder="Titulo" name="name" value="{{old('title',$workshop->name)}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Descripción:</label>
                        <textarea class="form-control" id="description" rows="5"
                                  name="description">{{old('description',$workshop->description)}}</textarea>
                    </div>
                </div>
            </div>
            <input type="hidden" name="image_aux" value="{{$workshop->image}}">
            <div class="row col-md-12 justify-content-center text-center mt-5">
                <button type="submit" class="btn btn-principal btn-lg mb-5">Guardar cambios</button>
            </div>
        </form>
    </div>
@endsection
