@extends('layouts.app')

@section('title') Casa Medio Camino | Donaciones @endsection

@section('content')
    <div class="container margin-login">

        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>¡Apoyanos!</p>
                </header>
                <br><br>
                <p>Si deseas también puedes apoyarnos con donativos en especie, puedes traerlo a nuestras oficinas para esto por favor <a href="">Contactanos</a></p>
                <br><br>
                <div class="row gy-4 text-center">
                    <div class="col-lg-8"><br><br>
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>LLámanos</h3>
                                    <a href="tel:{{$home->phone_1}}">{{$home->phone_1}}</a>
                                    <br>
                                    <a href="tel:{{$home->phone_2}}">{{$home->phone_2}}</a>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Mandanos un Email</h3>
                                    <a href="mailto:{{$home->email}}">{{$home->email}}</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card my-card shadow">
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                <form action="{{route('donation.pay')}}" method="post" id="paymentForm">
                                    @csrf
                                    <div class="row text-center">
                                        <div class="col-auto">
                                            <label>¡Toda donación cuenta!</label>
                                            <input
                                                type="number"
                                                name="value"
                                                min="1"
                                                step="0.01"
                                                class="form-control"
                                                value="10.00"
                                                required
                                            />
                                            <small class="form-text text-muted">Utilice valores con decimales separados
                                                por puntos "."</small>
                                        </div>
                                        <div class="col-auto">
                                            <label>Moneda</label>
                                            <select class="custom-select" name="currency" required>
                                                @foreach($currencies as $currency)
                                                    <option value="{{$currency->iso}}"
                                                            @if(($currency->iso) === 'mxn') selected @endif>{{strtoupper($currency->iso)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <br><br>
                                    <input type="hidden" value="1" name="payment_plataform">
                                    <!--Aqui se pone estatico el valor ID de la plataforma paypal, en caso de tener mas, se sustituye por un valor dinamico-->
                                    <div class="text-left mt-3">
                                        <button type="submit" id="payButton"
                                                class="btn btn-primary btn-lg paypal-button">Dona con PayPal <img
                                                src="{{asset('images/payment-plataforms/icon-paypal.png')}}"
                                                alt="PayPal" class="paypal-icon"></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </div>
@endsection
