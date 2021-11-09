@extends('layouts.app')

@section('title') Casa Medio Camino | ¿Quiénes somos? @endsection
@section('content')

    <section id="carrousel" class="margin-navbar">
        <img class="d-block w-100" src="{{asset('images/mainslider4.jpg')}}" alt="First slide">
    </section>

    <!-- =======  WHAT WE DO SECTION ======= -->
    <div class="container">
        <section id="quienes-somos">
            <div class="text-center">
                <h1 class="section-header" data-aos="fade-up" data-aos-delay="200">
                    <span class="underline">&nbsp;&nbsp;¿QUÉ HACEMOS?&nbsp;&nbsp;</span>
                </h1>
                <p class="subtitle text-center" data-aos="fade-up" data-aos-delay="400">
                    Nuestro equipo de psicólogos y profesionales de la salud mental trabajan en conjunto
                    para dar seguimiento y atención personalizada a pacientes diagnosticados con alguna de las
                    siguientes enfermedades mentales:
                </p>
            </div>
            <div class="row justify-content-left" data-aos="fade-up" data-aos-delay="500">
                <ul class="list">
                    <li> Esquizofrenia</li>
                    <li> Psicosis</li>
                    <li> Trastornos de ánimo alterado</li>
                    <li> Trastornos limítrofes de la personalidad</li>
                </ul>
            </div>
            <div class="container d-flex justify-content-end" data-aos="fade-left" data-aos-delay="600">
                <button data-toggle="collapse" href="#NoAtendemos" class="btn btn-read-more">
                    <i>¿A qué personas no atendemos?</i>
                </button>
            </div>
        </section>

        <!-- =======  PEOPLE WE CAN NOT ADMIT ======= -->
        <div class="collapse" id="NoAtendemos">
            <h3 class="subheader text-left">
                &nbsp;&nbsp;Personas que no podemos atender&nbsp;&nbsp;</span>
            </h3>
            <div class="row">
                <div class="col-md-3 text-center">
                    <i class="bi bi-x-circle-fill mr-2 inadmissible"></i>
                    <p class="subtitle">Personas con adicción</p>
                    <p class="">Las adicciones y las enfermedades mentales se tratan de diferente manera.</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="bi bi-x-circle-fill mr-2 inadmissible"></i>
                    <p class="subtitle">Personas agresivas</p>
                    <p class="">Ponen en peligro la seguridad de los huéspedes y todas las personas dentro de la
                        casa.</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="bi bi-x-circle-fill mr-2 inadmissible"></i>
                    <p class="subtitle">Personas menores a 18 años</p>
                    <p class="">El tratamiento y seguimiento para personas en estas edades difiere del que se estila en
                        Casa Loohl.</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="bi bi-x-circle-fill mr-2 inadmissible"></i>
                    <p class="subtitle">Personas mayores a 60 años</p>
                    <p class="">Las personas en estas edades requieren de infraestructura y cuidados especializados
                        fuera del servicio que maneja Casa Loohl.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 text-center">
                    <i class="bi bi-x-circle-fill mr-2 inadmissible"></i>
                    <p class="subtitle">Personas en situaciones de crisis</p>
                    <p class="">No contamos con el personal y espacio necesario para estabilizarlos y evitar quebrar el
                        ambiente armonioso.</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="bi bi-x-circle-fill mr-2 inadmissible"></i>
                    <p class="subtitle">Personas con Síndrome de Down</p>
                    <p class="">El Síndrome de Down es una condición de salud por afección genética, no una enfermedad
                        mental.</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="bi bi-x-circle-fill mr-2 inadmissible"></i>
                    <p class="subtitle">Personas sin diagnóstico</p>
                    <p class="">Es necesario que el médico de cabecera haga el diagnóstico y de un tratamiento
                        farmacológico para la estabilidad del paciente.</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="bi bi-x-circle-fill mr-2 inadmissible"></i>
                    <p class="subtitle">Personas que requieren de infraestructura hospitalaria</p>
                    <p class="">No contamos con dicha infraestructura especializada.</p>
                </div>
            </div>
        </div>

        <!-- =======  WOW SECTION ======= -->
        <section class="container" id="wow">
            <div class="text-center">
                <h1 class="section-header" data-aos="fade-up" data-aos-delay="100">
                    <span class="underline">&nbsp;&nbsp;NUESTRA FORMA DE TRABAJO&nbsp;&nbsp;</span>
                </h1>
                <p class="subtitle text-center" data-aos="fade-up" data-aos-delay="200">Utilizamos el modelo terapéutico
                    Casa de Medio Camino, un modelo integral para el tratamiento de la salud mental. En este modelo el
                    paciente vive en una comunidad que les permite establecer puentes de interacción de manera
                    controlada y segura, aprender de manera colaborativa y hacerse responsable de sus acciones. </p>
                <p class="subtitle text-center" data-aos="fade-up" data-aos-delay="200">Esta forma de atención es una
                    alternativa que se distingue de las instituciones de hospitalización psiquiátrica convencionales por
                    el seguimiento continuo y personalizado al tratamiento de cada paciente, así como por la
                    introducción a una comunidad terapéutica.</p>
            </div>
        </section>

        <!-- =======  SERVICES SECTION ======= -->
        <section class="container" id="services">
            <div class="text-center">
                <h1 class="section-header" data-aos="fade-up" data-aos-delay="100">
                    <span class="underline">&nbsp;&nbsp;NUESTROS SERVICIOS&nbsp;&nbsp;</span>
                </h1>
                <p class="subtitle text-center" data-aos="fade-up" data-aos-delay="200">Casa Loohl residencia con
                    atención personalizada y seguimiento por parte de profesionales de la salud las 24 horas del día los
                    7 días de la semana.</p>
            </div>
            <div class="subtitle" data-aos="fade-up" data-aos-delay="300">
                <p class="subheader">Características:</p>
                <ul class="list text-justify">
                    <li> Modalidad proyectada para periodos prolongados, con un periodo mínimo sugerido de 4 meses de
                        estadía.
                    </li>
                    <li> El huésped realiza actividades en comunidad para fortalecer sus habilidades interpersonales.
                    </li>
                    <li> El huésped realiza actividades de manera individual que le permiten sentirse independiente y
                        enfocar su energía en cosas de su total agrado.
                    </li>
                    <li> En la casa se cuentan con reglas definidas para lograr un ambiente armonioso y una sana
                        convivencia.
                    </li>
                </ul>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="400">
                <div class="col-md-6">
                    <div class="carousel slide carrousel-sizing" id="main-carousel" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="/images/img-sala-2.png" alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="/images/img-sala.jpg" alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="/images/carrousel-1.jpg" alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="/images/carrousel-3.jpg" alt="">
                            </div>
                        </div><!-- /.carousel-inner -->

                        <a href="#main-carousel" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only" aria-hidden="true">Prev</span>
                        </a>
                        <a href="#main-carousel" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only" aria-hidden="true">Next</span>
                        </a>
                    </div><!-- /.carousel -->
                </div>
                <div class="col-md-6">
                    <p class="subtitle text-center">Todos los espacios de Casa Loohl están diseñados para brindar
                        comodidad y seguridad a los huéspedes, haciéndolos sentir como si estuvieran en casa.</p>
                </div>
            </div>
            <div class="row mt-1" data-aos="fade-up" data-aos-delay="450">
                <i class="bi bi-info-circle-fill mr-2" style="font-size: 1rem;"></i>
                <p>Actualmente, Casa Loohl está acondicionada para recibir un máximo de 12 huéspedes.</p>
            </div>
    </div>
    </div>
    </section>

    <!-- =======  OUR DAY SECTION ======= -->
    <section class="container" id="activities">
        <h1 class="section-header text-center" data-aos="fade-up" data-aos-delay="200">
            <span class="underline">&nbsp;&nbsp;UN DÍA EN CASA LOOHL&nbsp;&nbsp;</span>
        </h1>
        <p class="subtitle text-center" data-aos="fade-up" data-aos-delay="300">
            Casa Loohl es una comunidad terapeútica donde residen personas con experiencias psiquiátricas, su día a día
            se organiza entre actividades rutinarias, actividades terapeúticas, talleres, clínica y actividades de ocio.
        </p>
        <div class="row activities">
            <div class="col-md-6">
                <ul data-aos="fade-up" data-aos-delay="400">
                    <li class="text-right">Higiene personal<span class="text-center">8:00 - 9:00</span></li>
                    <li class="text-right">Preparación de alimentos<span class="text-center">9:00 - 9:30</span></li>
                    <li class="text-right">Desayuno<span class="text-center">9:30 - 10:30</span></li>
                    <li class="text-right">Apoyo en actividades de limpieza comunitaria<span class="text-center">10:30 - 11:00</span>
                    </li>
                    <li class="text-right">Talleres de la comunidad & actividades individuales<span class="text-center">11:00 - 13:00</span>
                    </li>
                    <li class="text-right">Preparación de alimentos<span class="text-center">13:00 - 14:00</span></li>
                    <li class="text-right">Comida<span class="text-center">14:00 - 15:00</span></li>
                    <li class="text-right">Apoyo en actividades de limpieza comunitaria<span class="text-center">15:00 - 16:00</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul data-aos="fade-up" data-aos-delay="400">
                    <li class="text-right">Otra actividad<span class="text-center">16:00 - 17:00</span></li>
                    <li class="text-right">Talleres de la comunidad<span class="text-center">17:00 - 18:00</span></li>
                    <li class="text-right">Salidas individuales & grupales<span class="text-center">18:00 - 19:00</span>
                    </li>
                    <li class="text-right">Actividades individuales<span class="text-center">19:00 - 19:30</span></li>
                    <li class="text-right">Preparación de alimentos<span class="text-center">19:30 - 20:00</span></li>
                    <li class="text-right">Cena<span class="text-center">20:00 - 20:30</span></li>
                    <li class="text-right">Actividades de ocio<span class="text-center">20:30 - 21:30</span></li>
                    <li class="text-right">Higiene personal<span class="text-center">21:30 - 22:00</span></li>
                </ul>
            </div>
        </div>

        <div class="row mt-1" data-aos="fade-up" data-aos-delay="350">
            <i class="bi bi-info-circle-fill mr-2" style="font-size: 1rem;"></i>
            <p>Los horarios pueden variar según sea necesario.</p>
        </div>
    </section>

    <!-- =======  ACTIVITIES SECTION ======= -->
    <section class="container" id="activities">
        <div class="text-center">
            <h1 class="section-header" data-aos="fade-up" data-aos-delay="200">
                <span class="underline">&nbsp;&nbsp;TALLERES & ACTIVIDADES&nbsp;&nbsp;</span>
            </h1>
            <p class="subtitle text-center" data-aos="fade-up" data-aos-delay="300">
                Una de las principales propuestas clínicas de Casa Loohl es propiciar la construcción y gestión de
                actividades para hacer una diferencia en y desde lo singular para cada huésped con el objetivo de
                sostener enlaces sociales que le generen cierta autonomía económica.
                Los talleres que realizamos en Casa Loohl están dirigidos a contrarrestar la sintomatología negativa que
                presentan los huéspedes, guiándolos en el fortalecimiento de sus habilidades sociales y cognitivas que
                le permita tener un mejor funcionamiento en cualquier ámbito.</p>
            <p class="subtitle text-center" data-aos="fade-up" data-aos-delay="300">
                La estructuración de los talleres y el contenido de estos se ajustan a la medida de los integrantes del
                grupo y persiguen el objetivo de desarrollar funciones cognoscitivas, conductuales y creativas en los
                huéspedes, además de servir para identificar habilidades y actividades que éstos pudieran realizar con
                perspectiva de una futura inclusión social.
            </p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="400">
            <div class="col-12">
                <div id="talleresActividades" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        <div style="display: none">{{$flag = false}}</div>
                        @if($talleres != null)
                            @for($i = 0;$i <= count($talleres)/3; $i++ )
                                @if($flag == false)
                                    <div class="carousel-item active">
                                        <div class="row">
                                            @for($j = 0; $j < 3; $j++)
                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" src="{{asset('storage/'.$talleres[$i + $j]->image)}}" onerror="this.onerror=null;this.src='{{asset('images/image-not-found.png')}}';">
                                                        <div class="card-body justify-content-center">
                                                            <h4 class="card-title text-center">{{strtoupper($talleres[$i + $j]->name) }}</h4>
                                                            <p class="card-text text-center">{{$talleres[$i + $j]->description}} </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                    <div style="display: none">{{$flag = true}}</div>
                                @else
                                    <div class="carousel-item">
                                        <div class="row">
                                            @for($j = 0; $j < 3; $j++)
                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" src="{{asset('storage/'.$talleres[$i + $j]->image)}}" onerror="this.onerror=null;this.src='{{asset('images/image-not-found.png')}}';">
                                                        <div class="card-body justify-content-center">
                                                            <h4 class="card-title text-center">{{strtoupper($talleres[$i + $j]->name)}}</h4>
                                                            <p class="card-text text-center">{{$talleres[$i + $j]->description}} </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                @endif
                            @endfor
                        @endif

                    </div>
                </div>
                <div>
                    <a href="#talleresActividades" class="carousel-control-prev" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="sr-only" aria-hidden="true">Prev</span>
                    </a>
                    <a href="#talleresActividades" class="carousel-control-next" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="sr-only" aria-hidden="true">Next</span>
                    </a>
                </div>
    </section>

    <!-- =======  FAQ SECTION ======= -->
    <section class="container" id="faq">
        <div class="text-center">
            <h1 class="section-header" data-aos="fade-up" data-aos-delay="200">
                <span class="underline">&nbsp;&nbsp;PREGUNTAS FRECUENTES&nbsp;&nbsp;</span>
            </h1>
            <p class="subtitle text-center" data-aos="fade-up" data-aos-delay="300">Debajo podrás encontrar respuestas a
                las dudas que las personas interesadas en la Casa Loohl suelen tener.</p>
        </div>
        <div class="accordion" id="faq-accordion" data-aos="fade-up" data-aos-delay="400">
            <div class="card faq-card">
                <div class="card-header faq-header" id="headingOne">
                    <a class="btn faq-link faq-btn font-weight-bold w-100 text-left" data-toggle="collapse"
                       data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ¿Cuánto tiempo puede estar mi familiar en la Casa Loohl?
                    </a>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#faq-accordion">
                    <div class="card-body faq-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a egestas turpis, quis
                        commodo ante. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                        turpis egestas.
                    </div>
                </div>
            </div>
            <div class="card faq-card">
                <div class="card-header faq-header" id="headingTwo">
                    <a class="btn faq-link faq-btn font-weight-bold w-100 text-left" data-toggle="collapse"
                       data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        ¿Qué personal atiende a los huéspedes?
                    </a>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faq-accordion">
                    <div class="card-body faq-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a egestas turpis, quis
                        commodo ante. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                        turpis egestas.
                    </div>
                </div>
            </div>
            <div class="card faq-card">
                <div class="card-header faq-header" id="headingThree">
                    <a class="btn faq-link faq-btn font-weight-bold w-100 text-left" data-toggle="collapse"
                       data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        ¿Están contratando?
                    </a>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faq-accordion">
                    <div class="card-body faq-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a egestas turpis, quis
                        commodo ante. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                        turpis egestas.
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('/css/que_hacemos.css') }}">
@endpush
