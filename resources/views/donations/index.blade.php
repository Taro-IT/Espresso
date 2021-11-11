@extends('layouts.app')

@section('title') Casa Medio Camino | Donaciones @endsection

@section('content')
    <div class="container margin-login">

        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <h1 class="section-header text-center" data-aos="fade-up" data-aos-delay="200">
                    <span class="underline">&nbsp;&nbsp;¡APÓYANOS!&nbsp;&nbsp;</span>
                </h1>
                <p class="subtitle text-center" data-aos="fade-up" data-aos-delay="400">
                Nosotros creemos que todas las personas son capaces y optamos por hacer una diferencia en y desde lo singular de cada uno de nuestros huéspedes. Gracias a su apoyo, confianza y fe en Casa Loohl el impacto positivo en la comunidad crece de manera exponencial, pues nos permite traer a la vida proyectos impresionantes.
                </p>
                <div class="row gy-4 text-center">
                    <div class="col-lg-12">
                        <div class="card shadow">
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
                                    <h2 class="subheader text-center mt-3">
                                        <span>¡Toda donación cuenta!</span>
                                    </h2>
                                    <div class="row">
                                        <div class="col-md-6 text-left">
                                            <label>Monto:</label>
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
                                        <div class="col-md-6 text-left">
                                            <label>Moneda:</label>
                                            <select class="custom-select" name="currency" required>
                                                @foreach($currencies as $currency)
                                                    <option value="{{$currency->iso}}"
                                                            @if(($currency->iso) === 'mxn') selected @endif>{{strtoupper($currency->iso)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" value="1" name="payment_plataform">
                                    <!--Aqui se pone estatico el valor ID de la plataforma paypal, en caso de tener mas, se sustituye por un valor dinamico-->
                                    <div class="text-center mt-3 mb-3">
                                        <button type="submit" id="payButton"
                                                class="btn btn-read-more d-inline-flex align-items-center justify-content-center align-self-center paypal-button">Donar con PayPal <i class="bi bi-paypal"></i>
                                        </button>
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
