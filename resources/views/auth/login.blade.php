@extends('layouts.app')


@push('css')
    <link href="{{asset('css/login.css')}}" rel="stylesheet">
@endpush

@section('content')

<div class="container margin-login">


    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <!-- Icon -->
            <div class="fadeIn first">
                <img src="{{asset('images/logo.jpg')}}" id="icon" alt="User Icon" />
                <br><br>
                <h1>Administración</h1>
            </div>

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input id="email" type="email" class="fadeIn second" name="email" placeholder="Correo electrónico" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" id="password" name="password" class="fadeIn third @error('password') is-invalid @enderror" name="login" placeholder="Contraseña" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <br><br>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        ¿Olvidaste la contraseña?
                    </a>
                @endif
                <input type="submit" class="fadeIn fourth" value="Iniciar Sesión">
            </form>
        </div>
    </div>
</div>
@endsection
