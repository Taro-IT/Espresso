@extends('layouts.app')

@section('title') Casa Medio Camino | Puntos de venta @endsection
@section('content')



<section class="container margin-navbar">
    <h1 class="header text-center" data-aos="fade-up" data-aos-delay="100">
        <span class="underline">&nbsp;&nbsp;NUESTROS PUNTOS DE VENTA&nbsp;&nbsp;</span>
    </h1>
    <p class="subtitle text-center pb-3" data-aos="fade-up" data-aos-delay="200">
        Apoya a nuestros huéspedes y sus familiares comprando productos físicos en cualquiera de nuestros puntos de venta.
        Las ganancias de cada artículo nos permiten seguir con nuestra labor, motivar a los huéspedes y eliminar poco a poco el estigma sobre las personas con experiencias psiquiátricas.
    </p>
    <div id="salespoint">
        <ul>
            <!-- Monono cafe -->
            <li>
                <img class="icon" src="{{asset('images/logos-tiendas/monono_logo.png')}}" alt="Logo Monono Cafe">
                <a class="store-link" href="https://www.facebook.com/mononocafe/">MONONO CAFÉ</a>
                <div class="row mt-0">
                    <p>
                        <i class="bi bi-geo-alt-fill mr-2" style="font-size: 1rem;"></i> 
                        C. Ignacio Pérez 13-Norte, Centro, 76000 Santiago de Querétaro, Qro.
                    </p>
                </div>
                <div class="d-flex justify-content-end">
                    <a data-toggle="collapse" href="#detail_monono">
                        <i class="bi bi-caret-down-square-fill pr-0 purple-icon"></i>
                    </a>
                </div>
                <div class="collapse" id="detail_monono">
                    <div class="row">
                        <div class="col-md-6 more-text">
                            <p><l class="text-purple">Dirección:</l> C. Ignacio Pérez 13-Norte, Centro, 76000.<br>
                            <l class="text-purple">Horario de atención:</l> Lunes a viernes de 9:00 am a 9:00 pm & sábados de 10:00 am a 9:00 pm.</p>
                        </div>
                        <div class="col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d933.73674872879!2d-100.40130480819441!3d20.590222112213752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35bf007619565%3A0x52275e5e99e28e9f!2sMONONO%20COFFEE%20SHOP!5e0!3m2!1ses-419!2smx!4v1635431335821!5m2!1ses-419!2smx" width="450" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </li>
            <!-- La Santa Tostada -->
            <li>
                <img class="icon" src="{{asset('images/logos-tiendas/santa_tostada_logo.jpg')}}" alt="Logo La Santa Tostada">
                <a class="store-link" href="https://www.facebook.com/lasantatostadaqro/">LA SANTA TOSTADA</a>
                <div class="row mt-0">
                    <p>
                        <i class="bi bi-geo-alt-fill mr-2" style="font-size: 1rem;"></i>
                        Epigmenio González No. 1 bis, local 6, San Pablo Tecnológico, 76150 Santiago de Querétaro, Qro.
                    </p>
                </div>
                <div class="d-flex justify-content-end">
                    <a data-toggle="collapse" href="#detail_santa_tostada">
                        <i class="bi bi-caret-down-square-fill pr-0 purple-icon"></i>
                    </a>
                </div>
                <div class="collapse" id="detail_santa_tostada">
                    <div class="row">
                        <div class="col-md-6 more-text">
                            <p><l class="text-purple">Dirección:</l> Epigmenio González No. 1 bis, local 6, San Pablo Tecnológico, 76150. <br>
                            <l class="text-purple">Horario de atención:</l> Domingo a jueves de 12:30 pm a 9:00 pm, viernes y sábados de 12:30 pm a 9:30 pm</p>
                        </div>
                        <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1867.1930579555128!2d-100.40427657409295!3d20.613112746539326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b4e847dbff1%3A0x114b5f127c52cf1c!2sLa%20santa%20tostada!5e0!3m2!1ses-419!2smx!4v1635432937334!5m2!1ses-419!2smx" width="450" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </li>
            <!-- La Pluma Cafe Bar -->
            <li>
                <img class="icon" src="{{asset('images/logos-tiendas/pluma_logo.png')}}" alt="Logo La Pluma Cafe Bar">
                <p class="store-name">LA PLUMA CAFÉ BAR</p>
                <div class="row mt-0">
                    <p>
                        <i class="bi bi-geo-alt-fill mr-2" style="font-size: 1rem;"></i>
                        Manuel Gutiérrez Nájera 30-local 44, La Santa Cruz, La Cruz, 76020 Santiago de Querétaro, Qro.
                    </p>
                </div>
                <div class="d-flex justify-content-end">
                    <a data-toggle="collapse" href="#detail_pluma">
                        <i class="bi bi-caret-down-square-fill pr-0 purple-icon"></i>
                    </a>
                </div>
                <div class="collapse" id="detail_pluma">
                    <div class="row">
                        <div class="col-md-6 more-text">
                            <p><l class="text-purple">Dirección:</l> Manuel Gutiérrez Nájera 30-local 44, La Santa Cruz, La Cruz, 76020. <br>
                            <l class="text-purple">Horario de atención:</l> Lunes y miercoles abierto las 24 horas & martes, jueves, viernes, sábado y domingo de 10:00 am a 11:00 pm</p>
                        </div>
                        <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.8820817107694!2d-100.38714198255617!3d20.59287260000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b2da0758ab7%3A0xf6b01d85d00d6ff9!2sPluma%20Cafe%20Bar!5e0!3m2!1ses-419!2smx!4v1635433546005!5m2!1ses-419!2smx" width="450" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </li>
            <!-- Qronos Cafe -->
            <li>
                <img class="icon" src="{{asset('images/logos-tiendas/qronos_logo.jpg')}}" alt="Logo Qronos Cafe">
                <p class="store-name">QRONOS CAFÉ</p>
                <div class="row mt-0">
                    <p>
                        <i class="bi bi-geo-alt-fill mr-2" style="font-size: 1rem;"></i>
                        C. Rio de la Loza Sur #7-int. 2, La Cruz, 76000 Santiago de Querétaro, Qro.
                    </p>
                </div>
                <div class="d-flex justify-content-end">
                    <a data-toggle="collapse" href="#detail_qronos">
                        <i class="bi bi-caret-down-square-fill pr-0 purple-icon"></i>
                    </a>
                </div>
                <div class="collapse" id="detail_qronos">
                    <div class="row">
                        <div class="col-md-6 more-text">
                            <p><l class="text-purple">Dirección:</l> C. Rio de la Loza Sur #7-int. 2, La Cruz, 76000. <br>
                            <l class="text-purple">Horario de atención:</l> Lunes a domingo de 2:00 pm a 10:00 pm</p>
                        </div>
                        <div class="col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.8706634998007!2d-100.39033294939806!3d20.593338786168307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b2c6dfde9e5%3A0x16f719535be8109b!2sQronos%20Caf%C3%A9!5e0!3m2!1ses-419!2smx!4v1635433909510!5m2!1ses-419!2smx" width="450" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
@endsection