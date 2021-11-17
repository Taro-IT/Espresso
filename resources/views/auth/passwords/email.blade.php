@extends('layouts.login_layout')

@push('css')
    <link href="{{asset('css/login.css')}}" rel="stylesheet">
@endpush

@section('content')
<div class="container content">
    <div class="card">
    <div class="card-body">
    <h1 class="section-header text-center"> 
        <span class="underline">&nbsp;&nbsp;RECUPERAR CONTRASEÑA&nbsp;&nbsp;</span>
    </h1>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <form method="POST" action="{{ route('password.email') }}" class="login100-form validate-form">
    @csrf
        <div class=" form-group wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
        <label>Correo electrónico:</label>    
        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group mt-2 container-login100-form-btn">
            <button type="submit" class="btn btn-read-more btn-block"> Enviar link  </button>
        </div> <!-- form-group// --> 
    </form>
</div>
    </div>
</div>
@endsection
