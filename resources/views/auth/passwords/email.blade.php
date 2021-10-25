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
                <h1>Recuperar contraseña</h1>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <br>
            </div>

            <!-- Login Form -->
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <input id="email" type="email" class="fadeIn second" name="email" placeholder="Correo electrónico" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <br><br><br>
                <input type="submit" class="fadeIn fourth" value="Enviar Link">
            </form>

        </div>

    </div>
</div>
<br><br><br><br><br>
@endsection
