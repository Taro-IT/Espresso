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
                <p>Si deseas también puedes apoyarnos con donativos en especie, puedes traerlo a nuestras oficinas --DIRECCION-- -HORARIOS-- </p>
                <br><br>
                <div class="row gy-4 text-center">
                    <div class="col-lg-8">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Dirección</h3>
                                    <p>A108 Adam Street,<br>New York, NY 535022</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>LLámanos</h3>
                                    <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Mandanos un Email</h3>
                                    <p>info@example.com<br>contact@example.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Horarios </h3>
                                    <p>Lunes - Viernes<br>9:00AM - 05:00PM</p>
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
    <div class="container-fluid">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59750.53047354275!2d-100.44523666388083!3d20.61221376107346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b8fdc5b9255%3A0x97b094aa561b832f!2sSantiago%20de%20Quer%C3%A9taro%2C%20Qro.!5e0!3m2!1ses-419!2smx!4v1635339969368!5m2!1ses-419!2smx"
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
@endsection
