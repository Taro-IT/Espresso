@extends('layouts.app_auth')
@push('css')
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
@endpush
@section('content')
    <div class="container admin-section">
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-md-12">
                <h1 class="section-header mt-5 mb-5"> 
                    <span class="underline font-weight-normal">&nbsp;&nbsp;INFORMACIÓN DE CONTACTO&nbsp;&nbsp;</span>
                </h1>
                </div>
            </div>

            <div class="col-md-12">
                <form action="{{route('homeUpdate')}}" method="post">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Whatsapp"><i class="bi bi-whatsapp mr-2"></i>Whatsapp:</label>
                                <input type="tel" class="form-control" id="Whatsapp" aria-describedby="Whatsapp" name="whatsapp"
                                       value="{{old('whatsapp',$home->whatsapp)}}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"><i class="bi bi-envelope-fill mr-2"></i>Correo:</label>
                                <input type="email" class="form-control" id="email" aria-describedby="email" name="email"
                                       value="{{old('email',$home->email)}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="phone_1"><i class="bi bi-telephone-fill mr-2"></i>Teléfono 1:</label>
                                <input type="tel" class="form-control" id="phone_1" aria-describedby="Teléfono 1" name="phone_1"
                                       value="{{old('phone_1',$home->phone_1)}}" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="phone_2"><i class="bi bi-telephone-fill mr-2"></i>Teléfono 2:</label>
                                <input type="tel" class="form-control" id="phone_2" aria-describedby="Teléfono 2" name="phone_2"
                                       value="{{old('phone_2',$home->phone_2)}}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="mobile_1"><i class="bi bi-phone-fill mr-2"></i>Celular 1:</label>
                                <input type="tel" class="form-control" id="mobile_1" aria-describedby="Mobil 1" name="mobile_1"
                                       value="{{old('mobile_1',$home->mobile_1)}}" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="mobile_2"><i class="bi bi-phone-fill mr-2"></i>Celular 2:</label>
                                <input type="tel" class="form-control" id="mobile_2" aria-describedby="Mobil 2" name="mobile_2"
                                       value="{{old('mobile_2',$home->mobile_2)}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="facebook"><i class="bi bi-facebook mr-2"></i>Facebook:</label>
                                <input type="text" class="form-control" id="facebook" aria-describedby="facebook" name="facebook"
                                       value="{{old('facebook',$home->facebook)}}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="instagram"><i class="bi bi-instagram mr-2"></i>Instagram:</label>
                                <input type="text" class="form-control" id="instagram" aria-describedby="instagram" name="instagram"
                                       value="{{old('instagram',$home->instagram)}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="spotify"><i class="bi bi-spotify mr-2"></i>Spotify:</label>
                                <input type="text" class="form-control" id="spotify" aria-describedby="spotify" name="spotify"
                                       value="{{old('spotify',$home->spotify)}}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="medium"><i class="bi bi-medium mr-2"></i>Medium:</label>
                                <input type="text" class="form-control" id="medium" aria-describedby="medium" name="medium"
                                       value="{{old('medium',$home->medium)}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="linkedin"><i class="bi bi-linkedin mr-2"></i>LinkedIn:</label>
                                <input type="text" class="form-control" id="linkedin" aria-describedby="linkedin" name="linkedin"
                                       value="{{old('linkedin',$home->linkedin)}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-principal btn-lg mb-5">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
