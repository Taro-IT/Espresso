@extends('layouts.app')

@section('title') Casa Medio Camino | Tienda @endsection
@section('content')

    <section class="container margin-navbar">
        <h1 class="header text-center" data-aos="fade-up" data-aos-delay="100">
            <span class="underline">&nbsp;&nbsp;APOYA NUESTRA MISIÓN&nbsp;&nbsp;</span>
        </h1>
        <p class="subtitle text-center pb-3" data-aos="fade-up" data-aos-delay="200">
            Apoya a nuestros huéspedes y sus familiares comprando productos que demuestran el valor y la unicidad de
            cada uno de ellos.
            Las ganancias de cada artículo nos permiten seguir con nuestra labor, motivar a los huéspedes y eliminar
            poco a poco el estigma sobre las enfermedades mentales.
        </p>
        <div class="row" data-aos="fade-up" data-aos-delay="400">
            @foreach($productos as $product)
                <div class="col-md-4 mt-5">
                    <div class="card product-animation rounded h-100">
                        <div class="w-100 text-center">
                            <img class="product-showcase-img rounded" src="{{asset($product->image)}}" alt="{{$product->title}}"
                                onerror="this.onerror=null;this.src='{{asset('images/image-not-found.png')}}';">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$product->title}}</h5>
                            <div class="row card-text ml-1">
                                <i class="bi bi-person-circle mr-2" style="font-size: 1rem;"></i>
                                <p>@foreach($authors as $author)
                                        @if ($product->id == $author->id_product)
                                            @foreach($patients as $patient)
                                                @if ($author->id_patient == $patient->id)
                                                    {{$patient->name}}
                                                    <br>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="#producto-{{$product->id}}" data-toggle="modal" class="btn-read-more">
                                    <span>VER DETALLE</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MODAL PARA PAGAR-->

                <form action="{{route('donation.pay')}}" method="post" id="paymentForm">
                    @csrf
                    <div class="modal fade" id="producto-{{$product->id}}" tabindex="-1"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <a href="" class="close d-inline-flex" data-dismiss="modal">
                                        <i class="bi bi-x-circle-fill" style="color:black; font-size: 1rem;"></i>
                                    </a>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-5 text-center">
                                            <img class="rounded" style="max-width: 100%; max-height: 350px" src="{{asset($product->image)}}"
                                                 alt="{{$product->title}}"
                                                 onerror="this.onerror=null;this.src='{{asset('images/image-not-found.png')}}';">
                                        </div>
                                        <div class="col-md-7">
                                            <p class="subtitle mb-0">{{$product->title}}</p>
                                            <div class="row card-text ml-1 mb-0">
                                                <i class="bi bi-person-circle mr-2" style="font-size: 1rem;"></i>
                                                <p>@foreach($authors as $author)
                                                        @if ($product->id == $author->id_product)
                                                            @foreach($patients as $patient)
                                                                @if ($author->id_patient == $patient->id)
                                                                    {{$patient->name}}
                                                                    <br>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    @endforeach</p>
                                            </div>
                                            <p>{{$product->description}}.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mt-3">
                                            <label>Moneda</label>
                                            <select class="custom-select" name="currency" required>
                                                @foreach($currencies as $currency)
                                                    <option value="{{$currency->iso}}"
                                                            @if(($currency->iso) === 'mxn') selected @endif>{{strtoupper($currency->iso)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4 mt-5">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">$</span>
                                                <input type="number" class="form-control"
                                                       aria-label="Amount (to the nearest dollar)"
                                                       value="{{$product->price}}" step="0.01" min="{{$product->price}}"
                                                       name="value" required>
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-md mt-n3">
                                        <small class="form-text text-muted">Este artículo tiene un precio mínimo de ${{$product->price}}, pero puedes
                                            apoyar el trabajo de los
                                            huéspedes pagando otra cantidad que creas justa.</small>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email"
                                                       aria-describedby="email" name="email" required>
                                                <small id="emailHelp" class="form-text text-muted">Tu correo no será compartido con nadie.</small>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ml-1 d-flex">
                                            <a data-toggle="tooltip" data-placement="right" class="align-self-center pb-1"
                                               title="Una vez realizado el pago se te enviará a tu correo una URL para la descarga de tu artículo digital."><i
                                                    class="bi bi-info-circle-fill mr-2"
                                                    style="font-size: 1rem; color:black;"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="hidden" value="1" name="payment_plataform">
                                            <input type="hidden" value="{{$product->id}}" name="product_id">
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-read-more pl-3 pr-3 pt-2 pb-2 mb-2">
                                                    <span>Pagar</span>
                                                    <i class="bi bi-paypal"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>


            @endforeach
        </div>
        <br><br><br>
        <div class="row">
            <div class="col-md-12 text-center">
                {{ $productos->links("pagination::bootstrap-4") }}
            </div>
        </div>
    </section>

    <!-- Modal -->

@endsection
