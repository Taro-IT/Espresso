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

            <form method="POST" action="{{ route('password.email') }}" class="login100-form validate-form">
                @csrf

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input id="email" type="email" class="@error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" placeholder="Correo electrónico" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="container-login100-form-btn">
                    <input type="submit" class="fadeIn fourth" value="Enviar Link">
                </div>

            </form>
        </div>

    </div>
</div>
<br><br><br><br><br>
@endsection
