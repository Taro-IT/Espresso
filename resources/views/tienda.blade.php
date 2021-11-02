@extends('layouts.app')

@section('title') Casa Medio Camino | Tienda @endsection
@section('content')

<section id="carrousel" class="margin-navbar">
        <img class="d-block w-100" src="{{asset('images/slider-1.png')}}" alt="First slide">
</section>

<section class="container">
    <h1 class="header text-center" data-aos="fade-up" data-aos-delay="100">
        <span class="underline">&nbsp;&nbsp;APOYA NUESTRA MISIÓN&nbsp;&nbsp;</span>
    </h1>
    <p class="subtitle text-center pb-3" data-aos="fade-up" data-aos-delay="200">
        Apoya a nuestros huéspedes y sus familiares comprando productos que demuestran el valor y la unicidad de cada uno de ellos.
        Las ganancias de cada artículo nos permiten seguir con nuestra labor, motivar a los huéspedes y eliminar poco a poco el estigma sobre las enfermedades mentales.
    </p>  
    
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="/about_us/test_image_2.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">Nombre del artículo</h5>
                    <div class="row card-text ml-1">
                        <i class="bi bi-person-circle mr-2" style="font-size: 1rem;"></i>
                        <p>Nombre del autor</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#exampleModal" data-toggle="modal" class="btn-read-more">
                            <span>VER DETALLE</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="/about_us/test_image_2.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">Nombre del artículo</h5>
                    <div class="row card-text ml-1">
                        <i class="bi bi-person-circle mr-2" style="font-size: 1rem;"></i>
                        <p>Nombre del autor</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#exampleModal" data-toggle="modal" class="btn-read-more">
                            <span>VER DETALLE</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="/about_us/test_image_2.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">Nombre del artículo</h5>
                    <div class="row card-text ml-1">
                        <i class="bi bi-person-circle mr-2" style="font-size: 1rem;"></i>
                        <p>Nombre del autor</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#exampleModal" data-toggle="modal" class="btn-read-more">
                            <span>VER DETALLE</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <a href="" class="close d-inline-flex" data-dismiss="modal">
                        <i class="bi bi-x-circle-fill" style="color:black; font-size: 1rem;"></i>
                </a>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5">
                        <img class="img-fluid" src="/about_us/test_image_1.jpg" alt="">
                    </div>
                    <div class="col-md-7">
                        <p class="subtitle mb-0">Nombre del artículo</p>
                        <div class="row card-text ml-1 mb-0">
                            <i class="bi bi-person-circle mr-2" style="font-size: 1rem;"></i>
                            <p>Nombre del autor</p>
                        </div>
                        <p>Descripción o historia del producto digital.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 ml-1 mt-2">
                        <a data-toggle="tooltip" data-placement="right" title="Una vez realizado el pago se te enviará a tu correo una URL para la descarga de tu artículo digital."><i class="bi bi-info-circle-fill mr-2" style="font-size: 1rem; color:black;"></i></a>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="100" min="100">
                        <span class="input-group-text">.00</span>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2">
                        <a href="" class="btn-read-more pl-3 pr-3 pt-2 pb-2">
                            <span>Pagar</span>
                            <i class="bi bi-paypal"></i>
                        </a>
                    </div>
                </div>
                <div class="row-md">
                    <p>Este artículo tiene un precio mínimo de $100.00, pero puedes apoyar el trabajo de los huéspedes pagando otra cantidad que creas justa.</p>
                </div>
              </div>
            </div>
          </div>
</div>
@endsection