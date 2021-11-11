@extends('layouts.app_auth')

@section('title') Casa Medio Camino Loohl | Cambiar contraseña@endsection

@section('content')

    <div class="container margin-home">
        <div class="row">
            <div class="col-md-12">
                <h2>Cambiar contraseña</h2>
                <small lass="text-muted">Recibirás un correo de aviso del cambio de contraseña, puedes ignorarlo.</small>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body">
                        <form method="POST" action="{{ route('change_pwd.update') }}">
                            @csrf
                            @method('PUT')
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="email">Correo electrónico</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                       placeholder="Correo electrónico" value="{{$user->email}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Contraseña nueva</label>
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="new-password" placeholder="Contraseña nueva">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirmación de contraseña nueva</label>
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required autocomplete="new-password"
                                       placeholder="Confirmación de contraseña">
                            </div>
                            <button type="submit" class="btn btn-principal">Cambiar contraseña</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
