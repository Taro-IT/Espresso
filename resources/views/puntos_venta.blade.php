@extends('layouts.app')

@section('title') Casa Medio Camino | Puntos de venta @endsection
@section('content')

<section id="carrousel" class="margin-navbar">
        <img class="d-block w-100" src="{{asset('images/slider-1.png')}}" alt="First slide">
</section>

<section class="container">
    <h1 class="header text-center" data-aos="fade-up" data-aos-delay="100">
        <span class="underline">&nbsp;&nbsp;NUESTROS PUNTOS DE VENTA&nbsp;&nbsp;</span>
    </h1>
    <p class="subtitle text-center pb-3" data-aos="fade-up" data-aos-delay="200">
        Apoya a nuestros huéspedes y sus familiares comprando productos físicos en cualquiera de nuestros puntos de venta.
        Las ganancias de cada artículo nos permiten seguir con nuestra labor, motivar a los huéspeded y eliminar poco a poco el estigma sobre las enfermedades mentales.
    </p>
    <div id="salespoint">
        <ul>
            <li>
                <img class="icon" src="/about_us/test_image_1.jpg" alt="">
                <p class="store">Nombre del establecimiento</p>
                <div class="row mt-0">
                    <i class="bi bi-geo-alt-fill mr-2" style="font-size: 1rem;"></i>
                    <p>Querétaro, Qro.</p>
                </div>
                <div class="d-flex justify-content-end">
                    <a data-toggle="collapse" href="#detail1">
                        <i class="bi bi-caret-down-square-fill pr-0 purple-icon toogle-icon"></i>
                    </a>
                </div>
                <div class="collapse" id="detail1">
                    <div class="row">
                        <div class="col-md-6 more-text">
                            <p><l class="text-purple">Dirección:</l> Rafael Osuna #245, El Salitre. C.P. 24676 <br>
                            <l class="text-purple">Horario de atención:</l> Lunes a viernes de 8:00 am a 6:00 pm & sábados de 8:00 am a 4:00 pm</p>
                        </div>
                        <div class="col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d239070.13130410784!2d-100.71990583002402!3d20.568822470475222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d3453e9aa6c0e1%3A0x41b399199c8eec3e!2sCreperia%20Villemot!5e0!3m2!1ses!2smx!4v1635355669347!5m2!1ses!2smx" width="450" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img class="icon" src="/about_us/test_image_1.jpg" alt="">
                <p class="store">Nombre del establecimiento</p>
                <div class="row mt-0">
                    <i class="bi bi-geo-alt-fill mr-2" style="font-size: 1rem;"></i>
                    <p>Querétaro, Qro.</p>
                </div>
                <div class="d-flex justify-content-end">
                    <a data-toggle="collapse" href="#detail2">
                        <i class="bi bi-caret-down-square-fill pr-0 purple-icon toogle-icon"></i>
                    </a>
                </div>
                <div class="collapse" id="detail2">
                    <div class="row">
                        <div class="col-md-6 more-text">
                            <p><l class="text-purple">Dirección:</l> Rafael Osuna #245, El Salitre. C.P. 24676 <br>
                            <l class="text-purple">Horario de atención:</l> Lunes a viernes de 8:00 am a 6:00 pm & sábados de 8:00 am a 4:00 pm</p>
                        </div>
                        <div class="col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d239070.13130410784!2d-100.71990583002402!3d20.568822470475222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d3453e9aa6c0e1%3A0x41b399199c8eec3e!2sCreperia%20Villemot!5e0!3m2!1ses!2smx!4v1635355669347!5m2!1ses!2smx" width="450" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
@endsection