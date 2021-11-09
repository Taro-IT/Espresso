@extends('layouts.app_auth')

@section('title') Casa Medio camino Loohl | {{$paciente->name}} @endsection

@section('content')
    <div class="container">
        <div class="row text-center pt-5 mb-5">
            <div class="col-md-12">
                <h1 class="section-header modal-title" id="eliminar-{{$paciente->id}}-Label">
                    <span class="underline text-uppercase">&nbsp;&nbsp;MODIFICAR PACIENTE&nbsp;&nbsp;</span>
                </h1>
            </div>
        </div>
        <br><br>
        <form action="{{route('patients.update',$paciente->id)}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-12 mb-12 text-center">
                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input type="text" class="form-control" id="name" aria-describedby="Nombre" placeholder="Nombre" name="name" value="{{old('name',$paciente->name)}}">
                    </div>
                </div>
            </div>
            <div class="row col-md-12 justify-content-center text-center mt-5">
                <button type="submit" class="btn btn-principal btn-lg">Guardar cambios</button>
            </div>
        </form>
    </div>
@endsection
