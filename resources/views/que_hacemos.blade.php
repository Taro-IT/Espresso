@extends('layouts.app')

@section('title') Casa Medio Camino | ¿Quiénes somos? @endsection
@section('content')

<section id="carrousel" class="margin-navbar">
    <img class="d-block w-100" src="{{asset('images/slider-1.png')}}" alt="First slide">
</section>

<!-- =======  WHAT WE DO SECTION ======= -->
<div class="container">
    <section id="quienes-somos">
        <div class="row justify-content-center">
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
                <li> Ezquizofrenia </li>
                <li> Psicosis </li>
                <li> Transtornos de ánimo alterado </li>
                <li> Transtornos limítrofes de la personalidad </li>
            </ul>
        </div>
        <div class="container d-flex justify-content-end" data-aos="fade-left" data-aos-delay="600">
            <button class="btn btn-read-more" onclick="QuePersonasNoAtendemos()">
                <i>¿A qué personas no atendemos?</i>
            </button>
        </div>
    </section>

    <!-- =======  PEOPLE WE CAN NOT ADMIT ======= -->
    <div id="NoAtendemos" class="col-12" style="display: none; margin-top:2em;">
        <h3 class="subheader text-left font-weight-bold">
            <span class="underline">&nbsp;&nbsp;Personas que no podemos atender&nbsp;&nbsp;</span>
        </h3>
        <div class="row" style="margin-top:2em;">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <img class="img-fluid" src="que_hacemos/no1.png" style="height: 50px; margin-bottom:1em;">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="que_hacemos/no2.png" style="height: 50px; margin-bottom:1em;">
                        </div>
                    </div>
                </div>
                <p class="noAttendTitle"><strong> Personas con adicción</strong></p>
                <p class="noAttend"> Las adicciones y enfermedades mentales se tratan de distinta manera.</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="container">
                    <img class="img-fluid" src="que_hacemos/no2.png" style="height: 50px; margin-bottom:1em;">
                </div>
                <p class="noAttendTitle"><strong> Personas agresivas </strong></p>
                <p class="noAttend"> Ponen en peligro la seguridad de los huéspedes y todas las personas dentro de la casa.</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="container">
                    <img class="img-fluid" src="que_hacemos/no2.png" style="height: 50px; margin-bottom:1em;">
            </div>
            <p class="noAttendTitle"><strong> Personas que requieren infraestructura hospitalaria </strong></p>
            <p class="noAttend"> No se cuenta con infraestructura hospitalaria.</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="container">
                <img class="img-fluid" src="que_hacemos/no2.png" style="height: 50px; margin-bottom:1em;">
            </div>
            <p class="noAttendTitle"><strong> Personas menores a 18 años </strong></p>
            <p class="noAttend"> El tratamiento y seguimiento para personas en estas edades difiere del estilo en Casa Loohl. </p>
        </div>
    </div>

    <div class="row" style="margin-top:2em;">
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="container">
                <img class="img-fluid" src="que_hacemos/no3.png" style="height: 50px; margin-bottom:1em;">
            </div>
            <p class="noAttendTitle"><strong> Personas con situaciones en crisis </strong></p>
            <p class="noAttend">No contamos con el personal y espacio necesario para estabilizarlos y asi evitar el ambiente armonioso.</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="container">
                <img class="img-fluid" src="que_hacemos/no3.png" style="height: 50px; margin-bottom:1em;">
            </div>
            <p class="noAttendTitle"><strong> Personas con Síndrome de Down </strong></p>
            <p class="noAttend"> El Síndrome de Down es una condición de salud por afección genético, no una enferemdad mental.</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="container">
                <img class="img-fluid" src="que_hacemos/no3.png" style="height: 50px; margin-bottom:1em;">
            </div>
            <p class="noAttendTitle"><strong> Personas sin diagnóstico </strong></p>
            <p class="noAttend"> Para un correcto segumiento y tratamiento farmacológico para la estabilidad del paciente.</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="container">
                <img class="img-fluid" src="que_hacemos/no3.png" style="height: 50px; margin-bottom:1em;">
            </div>
            <p class="noAttendTitle"><strong> Personas mayores a 60 años </strong></p>
            <p class="noAttend"> El tratamiento y seguimiento para personas en estas edades no se puede dar debido que requieren de una infraestructura y cuidados especializados que no forman parte del servicio que maneja la Comunidad. </p>
        </div>
    </div>
    </div>
    </section>

<!-- =======  WOW SECTION ======= -->
    <section class="container" id="wow">
        <div class="row justify-content-center">
            <h1 class="section-header" data-aos="fade-up" data-aos-delay="100">
                <span class="underline">&nbsp;&nbsp;NUESTRA FORMA DE TRABAJO&nbsp;&nbsp;</span>
            </h1>
            <p class="subtitle text-center" data-aos="fade-up" data-aos-delay="200">Utilizamos el modelo terapeútico Casa de Medio Camino, un modelo integral para el tratamiento de la salud mental. En este modelo el paciente vive en una comunidad que les permite establecer puentes de interacción de manera controlada y segura, aprender de manera colaborativa y hacerse responsable de sus acciones.  </p>
            <p class="subtitle text-center" data-aos="fade-up" data-aos-delay="200">Esta forma de atención es una alternativa que se distingue de las instituciones de hospitalización psquiátrica convencionales por el seguimiento continuo y personalizado al tratamiento de cada paciente, así como por la introducción a una comunidad terapeútica.</p>
        </div>
    </section>

<!-- =======  SERVICES SECTION ======= -->
    <section class="container" id="services">
        <div class="row justify-content-center">
            <h1 class="section-header" data-aos="fade-up" data-aos-delay="100">
                <span class="underline">&nbsp;&nbsp;NUESTROS SERVICIOS&nbsp;&nbsp;</span>
            </h1>
            <p class="subtitle text-center" data-aos="fade-up" data-aos-delay="200">Casa Loohl residencia con atención personalizada y seguimiento por parte de profesionales de la salud las 24 horas del día los 7 dias de la semana.</p>
        </div>
        <div class="subtitle" data-aos="fade-up" data-aos-delay="300">
            <p class="subheader">Características:</p>
            <ul class="list text-justify">  
                <li> Modalidad proyectada para periodos prolongados, con un periodo mínimo sugerido de 4 meses de estadía. </li>
                <li> El huésped realiza actividades en comunidad para fortalecer sus habilidades interpersonales. </li>
                <li> El huésped realiza actividades de manera individual que le permiten sentirse independiente y enfocar su energía en cosas de su total agrado. </li>
                <li> En la casa se cuentan con reglas definidas para lograr un ambiente armonioso y una sana convivencia. </li>    
            </ul>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="400">
            <div class="col-md-6">
                <div class="carousel slide carrousel-sizing" id="main-carousel" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="/about_us/test_image_1.jpg" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="/about_us/test_image_2.jpg" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="/about_us/test_image_5.jpg" alt="">
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
            <div class="col-md-6" >
                <p class="subtitle text-center">Todos los espacios de Casa Loohl están diseñados para brindar comodidad y seguridad a los huéspedes, haciéndolos sentir como si estuvieran en casa.</p>
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
        <h1 class="section-header text-center" data-aos="fade-up" data-aos-delay="200" >
            <span class="underline">&nbsp;&nbsp;UN DÍA EN CASA LOOHL&nbsp;&nbsp;</span>
        </h1>
        <div class="row activities">
            <div class="col-md-6">
                <ul data-aos="fade-up" data-aos-delay="300">
                    <li>Higiene personal<span>8:00 - 9:00</span></li>
                    <li>Preparación de alimentos<span>9:00 - 9:30</span></li>
                    <li>Desayuno<span>9:30 - 10:30</span></li>
                    <li>Apoyo en actividades de limpieza comunitaria<span>10:30 - 11:00</span></li>
                    <li>Talleres de la comunidad & actividades individuales<span>11:00 - 13:00</span></li>
                    <li>Preparación de alimentos<span>13:00 - 14:00</span></li>
                    <li>Comida<span>14:00 - 15:00</span></li>
                    <li>Apoyo en actividades de limpieza comunitaria<span>15:00 - 16:00</span></li>
                </ul>
            </div>  
            <div class="col-md-6">
                <ul data-aos="fade-up" data-aos-delay="300">
                    <li>Otra actividad<span>16:00 - 17:00</span></li>
                    <li>Talleres de la comunidad<span>17:00 - 18:00</span></li>
                    <li>Salidas individuales & grupales<span>18:00 - 19:00</span></li>
                    <li>Actividades individuales<span>19:00 - 19:30</span></li>
                    <li>Preparación de alimentos<span>19:30 - 20:00</span></li>
                    <li>Cena<span>20:00 - 20:30</span></li>
                    <li>Actividades de ocio<span>20:30 - 21:30</span></li>
                    <li>Higiene personal<span>21:30 - 22:00</span></li>
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
        <div class="row justify-content-center">
            <h1 class="section-header" data-aos="fade-up" data-aos-delay="200">
                <span class="underline">&nbsp;&nbsp;TALLERES & ACTIVIDADES&nbsp;&nbsp;</span>
            </h1>
            <p class="subtitle text-center" data-aos="fade-up" data-aos-delay="300">Los talleres que realizamos en Casa Loohl están dirigidos a contrarestar la sintomatología negativa que presentan los huéspedes, guiándolos en el fortalecimiento de sus habilidades sociales y cognitivas que le permita tener un mejor funcionamiento en su ámbito familiar y social.</p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="400">
            <div class="col-12">
                <div id="talleresActividades" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4 mb-3" >
                                    <div class="card">
                                        <img class="img-fluid" src="/about_us/test_image_1.jpg">
                                        <div class="card-body justify-content-center">
                                            <h4 class="card-title text-center">HUERTO</h4>
                                            <p class="card-text text-center">Descripción breve del taller</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3" >
                                    <div class="card">
                                        <img class="img-fluid" src="/about_us/test_image_1.jpg">
                                        <div class="card-body justify-content-center">
                                            <h4 class="card-title text-center">HUERTO</h4>
                                            <p class="card-text text-center">Descripción breve del taller</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3" >
                                    <div class="card">
                                        <img class="img-fluid" src="/about_us/test_image_1.jpg">
                                        <div class="card-body justify-content-center">
                                            <h4 class="card-title text-center">HUERTO</h4>
                                            <p class="card-text text-center">Descripción breve del taller</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 mb-3" >
                                    <div class="card">
                                        <img class="img-fluid" src="/about_us/test_image_1.jpg">
                                        <div class="card-body justify-content-center">
                                            <h4 class="card-title text-center">HUERTO</h4>
                                            <p class="card-text text-center">Descripción breve del taller</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3" >
                                    <div class="card">
                                        <img class="img-fluid" src="/about_us/test_image_1.jpg">
                                        <div class="card-body justify-content-center">
                                            <h4 class="card-title text-center">HUERTO</h4>
                                            <p class="card-text text-center">Descripción breve del taller</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3" >
                                    <div class="card">
                                        <img class="img-fluid" src="/about_us/test_image_1.jpg">
                                        <div class="card-body justify-content-center">
                                            <h4 class="card-title text-center">HUERTO</h4>
                                            <p class="card-text text-center">Descripción breve del taller</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
</div>

@endsection