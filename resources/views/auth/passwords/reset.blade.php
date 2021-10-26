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
                    <img src="{{asset('images/logo.jpg')}}" id="icon" alt="User Icon"/>
                    <br><br>
                    <h1>Resetear contraseña</h1>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
                </div>

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <div class="col-auto">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="wrap-input100">
                        <div class="col-auto">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="wrap-input100">
                        <div class="col-auto">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <br><br>
                    <div class="wrap-input100">
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">
                                Resetear contraseña
                            </button>
                        </div>
                    </div>
                    <br><br><br>

                </form>
            </div>

        </div>
    </div>
@endsection
