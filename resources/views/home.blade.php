@extends('layouts.app_auth')

@section('content')
    <br>
    <div class="container mt-5">
        <div class="row justify-content">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{asset('images/logo.jpg')}}" alt="Logo Casa Loohl" class="logo-casa">
                    <br><br><br>
                </div>
            </div>

            <div class="col-md-12">
                <form action="{{route('homeUpdate')}}" method="post">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Whatsapp">Whatsapp </label>
                                <input type="number" class="form-control" id="Whatsapp" aria-describedby="Whatsapp" name="whatsapp"
                                       placeholder="Whatsapp Ejemplo: 4274277211" value="{{old('whatsapp',$home->whatsapp)}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="email" name="email"
                                       placeholder="Email Ejemplo: espresso@gmail.com" value="{{old('email',$home->email)}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="phone_1">Teléfono 1</label>
                                <input type="number" class="form-control" id="phone_1" aria-describedby="Teléfono 1" name="phone_1"
                                       placeholder="Teléfono No.1 Ejemplo: 1341383" value="{{old('phone_1',$home->phone_1)}}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="phone_2">Teléfono 2</label>
                                <input type="number" class="form-control" id="phone_2" aria-describedby="Teléfono 2" name="phone_2"
                                       placeholder="Teléfono No.2 Ejemplo: 1341383" value="{{old('phone_2',$home->phone_2)}}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="mobile_1">Mobil 1</label>
                                <input type="number" class="form-control" id="mobile_1" aria-describedby="Mobil 1" name="mobile_1"
                                       placeholder="Mobil No.1 Ejemplo: 4274277211" value="{{old('mobile_1',$home->mobile_1)}}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="mobile_2">Mobil 2</label>
                                <input type="number" class="form-control" id="mobile_2" aria-describedby="Mobil 2" name="mobile_2"
                                       placeholder="Mobil No.1 Ejemplo: 4274277211" value="{{old('mobile_2',$home->mobile_2)}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="v">Facebook</label>
                                <input type="text" class="form-control" id="facebook" aria-describedby="facebook" name="facebook"
                                       placeholder="Facebook" value="{{old('facebook',$home->facebook)}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="instagram">Instagram</label>
                                <input type="text" class="form-control" id="instagram" aria-describedby="instagram" name="instagram"
                                       placeholder="Instagram" value="{{old('instagram',$home->instagram)}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="spotify">Spotify </label>
                                <input type="text" class="form-control" id="spotify" aria-describedby="spotify" name="spotify"
                                       placeholder="Spotify" value="{{old('spotify',$home->spotify)}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="medium">Medium</label>
                                <input type="text" class="form-control" id="medium" aria-describedby="medium" name="medium"
                                       placeholder="Medium" value="{{old('medium',$home->medium)}}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Actualizar</button>
                </form>
            </div>

        </div>
    </div>

@endsection
