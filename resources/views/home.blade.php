@extends('layouts.app_auth')

@section('content')
    <br>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Informacion de casa Loohl</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            Nombre: <input type="text" name="name" required value="{{$home->name}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Teléfono:<input type="text" name="phone" required value="{{$home->phone}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Email:<input type="email" name="email" required value="{{$home->email}}">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
