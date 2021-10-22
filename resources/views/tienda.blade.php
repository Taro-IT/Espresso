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
        Las ganancias de cada artículo nos permiten seguir con nuestra labor, motivar a los huéspeded y eliminar poco a poco el estigme sobre las enfermedades mentales.
    </p>  
    
    <div class="row-md">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nombre del artículo</h5>
                            <p class="card-text">Autor</p>
                            <a href="#" class="btn btn-primary">VER DETALLE</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nombre del artículo</h5>
                            <p class="card-text">Autor</p>
                            <a href="#" class="btn btn-primary">VER DETALLE</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nombre del artículo</h5>
                            <p class="card-text">Autor</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              VER DETALLE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row-md">
                    <div class="col-md-5">
                        <img class="d-block img-fluid" src="/about_us/test_image_1.jpg" alt="">
                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            Nombre del artículo
                        </div>
                        <div class="row">
                            Autor o autores.
                        </div>
                        <div class="row text-center">
                            Descripción o historia del producto digital.
                        </div>
                    </div>
                </div>
                <div class="row-md">
                    <p><a href="#" class="tooltip-test" title="Una vez realizado el pago se te enviará a tu correo una URL para la descarga de tu artículo digital.">This link</a></p>
                    <div class="input-group mb-3">
                      <span class="input-group-text">$</span>
                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="100" min="100">
                      <span class="input-group-text">.00</span>
                    </div>
                    <button>Pagar con PayPal</button>
                </div>
                <div class="row-md">
                    <p>Este artículo tiene un precio mínimo de $100.00, pero puedes apoyar el trabajo de los huéspedes pagando otra cantidad que creas justa.</p>
                </div>
              </div>
            </div>
          </div>
</div>
@endsection