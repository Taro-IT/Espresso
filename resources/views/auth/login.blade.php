@extends('layouts.login_layout')


@push('css')
    <link href="{{asset('css/login.css')}}" rel="stylesheet">
@endpush

@section('content')

<div class="container content">
<div class="card">
<div class="card-body">
    <h1 class="section-header text-center"> 
        <span class="underline">&nbsp;&nbsp;CASA LOOHL&nbsp;&nbsp;</span>
    </h1>
	<hr>
	<p class="text-center text-darkpurple">Ingresa tus datos de acceso</p>
	<form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
    @csrf
    <div class="form-group  wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
    	<label>Correo electrónico:</label>
        <input id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="usuario@gmail.com" type="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
        @enderror
    </div> <!-- form-group// -->
    <div class="form-group">
    	<label>Contraseña:</label>
        <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="********" type="password" required autocomplete="current-password">
        @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
    </div> <!-- form-group// --> 
    @if (Route::has('password.request'))
    <p><a href="{{ route('password.request') }}" class="small float-left btn-link">¿Olvidaste la contraseña?</a></p>
    @endif
    <div class="form-group mt-2 container-login100-form-btn">
        <button type="submit" class="btn btn-read-more btn-block"> Iniciar sesión  </button>
    </div> <!-- form-group// -->                                                           
</form>
</div>
</div> <!-- card.// -->
</div>
@endsection
