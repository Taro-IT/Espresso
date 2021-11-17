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
                    Casa de Medio Camino, un modelo integral para el tratamiento de la salud mental, en el que
                    paciente vive en una comunidad que les permite establecer puentes de interacción de manera
                    controlada y segura, aprender de manera colaborativa y hacerse responsable de sus acciones. </p>
                <p class="subtitle text-center" data-aos="fade-up" data-aos-delay="200">Esta forma de atención es una
                    alternativa que se distingue de las instituciones de hospitalización psiquiátrica convencionales por
                    el seguimiento continuo y personalizado al tratamiento de cada paciente, así como por la
                    introducción a una Comunidad Terapéutica.</p>
            </div>
        </section>

        <!-- =======  SERVICES SECTION ======= -->
        <section class="container" id="services">
            <div class="text-center">
                <h1 class="section-header" data-aos="fade-up" data-aos-delay="100">
                    <span class="underline">&nbsp;&nbsp;NUESTROS SERVICIOS&nbsp;&nbsp;</span>
                </h1>
                <p class="subtitle text-center" data-aos="fade-up" data-aos-delay="200">Casa Loohl es una residencia con
                    atención personalizada y seguimiento por parte de profesionales de la salud las 24 horas del día los
                    7 días de la semana.</p>
            </div>
            <div class="subtitle" data-aos="fade-up" data-aos-delay="300">

            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="300">
                <div class="col-md-6 mb-3">
                    <div class="carousel slide carrousel-sizing" id="main-carousel" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block services-img" src="/images/img-sala-2.png" alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block services-img" src="/images/img-sala.jpg" alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block services-img" src="/images/carrousel-1.jpg" alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block services-img" src="/images/carrousel-3.jpg" alt="">
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
            </div>
            <p class="subtitle" data-aos="fade-up" data-aos-delay="400">Todos los espacios de Casa Loohl están diseñados para brindar
            comodidad y seguridad a los huéspedes, haciéndolos sentir como si estuvieran en casa.</p>
            <div class="mt-2" data-aos="fade-up" data-aos-delay="450">
                <p><i class="bi bi-info-circle-fill mr-2" style="font-size: 1rem;"></i>Actualmente, Casa Loohl está acondicionada para recibir un máximo de 12 huéspedes.</p>
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
            Casa Loohl es una Comunidad Terapeútica donde residen personas con experiencias psiquiátricas, su día a día
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
            <div class="col-md-12">
                <p>  <i class="bi bi-info-circle-fill mr-2" style="font-size: 1rem;"></i>Los horarios pueden variar según sea necesario.</p>
            </div>
        </div>
    </section>

    <!-- =======  ACTIVITIES SECTION ======= -->
    <section class="container" id="workshops">
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
                les permitan tener un mejor funcionamiento en cualquier ámbito.</p>
            <p class="subtitle text-center" data-aos="fade-up" data-aos-delay="300">
                La estructuración de los talleres y el contenido de estos se ajustan a la medida de los integrantes del
                grupo y persiguen el objetivo de desarrollar funciones cognoscitivas, conductuales y creativas en los
                huéspedes, además de servir para identificar habilidades y actividades que éstos pudieran realizar con
                perspectiva de una futura inclusión social.
            </p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="400" style="min-height: 550px">
            <div class="col-12">
                <div id="talleresActividades" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        <div style="display: none">{{$flag = false}}</div>
                        @if($talleres != null)
                            @for($i = 0; $i < count($talleres)/3; $i++)
                                @if($flag == false)
                                    <div class="carousel-item active">
                                        <div class="row justify-content-center">
                                            @for($j = 0; $j < 3; $j++)
                                                @if($i*3 + $j >= count($talleres))
                                                    @break
                                                @endif
                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img style="max-width: 100%; max-height: 260px; object-fit: cover;" src="{{asset($talleres[$i + $j]->image)}}" onerror="this.onerror=null;this.src='{{asset('images/image-not-found.png')}}';">
                                                        <div class="card-body justify-content-center">
                                                            <h4 class="card-title text-center">{{strtoupper($talleres[$i*3 + $j]->name) }}</h4>
                                                            <p class="card-text text-center">{{$talleres[$i*3 + $j]->description}} </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                    <div style="display: none">{{$flag = true}}</div>
                                @else
                                    <div class="carousel-item">
                                        <div class="row justify-content-center">
                                            @for($j = 0; $j < 3; $j++)
                                                @if($i*3 + $j >= count($talleres))
                                                    @break
                                                @endif
                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" src="{{asset($talleres[$i + $j]->image)}}" onerror="this.onerror=null;this.src='{{asset('images/image-not-found.png')}}';">
                                                        <div class="card-body justify-content-center">
                                                            <h4 class="card-title text-center">{{strtoupper($talleres[$i*3 + $j]->name)}}</h4>
                                                            <p class="card-text text-center">{{$talleres[$i*3 + $j]->description}} </p>
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
                <div class="card-header faq-header" id="heading1">
                    <a class="btn faq-link faq-btn font-weight-bold w-100 text-left" data-toggle="collapse"
                       data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                       ¿Cuánto cuesta el servicio de Casa Loohl y que incluye?
                    </a>
                </div>
                <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#faq-accordion">
                    <div class="card-body faq-body">
                        <p>Somos una Asociación Civil sin fines de lucro, por lo que la cuota de recuperación se basa en el costo real de los gastos erogados por paciente. </p>
                        <p>Incluye servicios de desayuno, comida, cena, hospedaje, servicios básicos y servicios de atención terapéutica los 7 días de la semana, las 24 horas del día. Incluye la mayoría de los talleres que se imparten dentro de la comunidad. </p>
                        <p>Para mayores informes te atenderemos con gusto en nuestros <a class="faq-answer-link" href="/#contact">medios de contacto</a>.</p>
                    </div>
                </div>
            </div>
            <div class="card faq-card">
                <div class="card-header faq-header" id="heading2">
                    <a class="btn faq-link faq-btn font-weight-bold w-100 text-left" data-toggle="collapse"
                       data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                       ¿Qué tengo que hacer si ya consulté el sitio web y estoy interesado en hospedar a mi familiar en Casa Loohl?
                    </a>
                </div>
                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#faq-accordion">
                    <div class="card-body faq-body">
                    Con gusto, te puedes comunicar en cualquiera de nuestros <a class="faq-answer-link" href="/#contact">medios de contacto</a> para empezar el protocolo de ingreso. El proceso que seguimos es el siguiente: nos ponemos en contacto para agendar una cita de entrevista primero con el familiar responsable y una segunda cita con el paciente para que pueda visitar la comunidad.
                    </div>
                </div>
            </div>
            <div class="card faq-card">
                <div class="card-header faq-header" id="heading3">
                    <a class="btn faq-link faq-btn font-weight-bold w-100 text-left" data-toggle="collapse"
                       data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                       ¿Cada cuanto puedo ver y hablar con mi familiar si ingresa a Casa Loohl?
                    </a>
                </div>
                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#faq-accordion">
                    <div class="card-body faq-body">
                    El objetivo de la Casa de Medio Camino es lograr reestablecer los vínculos y lazos afectivos, familiares y sociales, mediante una estructura cotidiana, por ende los huéspedes pueden salir a convivir con sus familiares una vez a la semana, mantener la comunicación vía telefónica y las visitas de la red de apoyo familiar mediante el consentimiento del familiar responsable. El horario para recibir llamadas todos los días es de 19 a 21 hrs.
                    </div>
                </div>
            </div>
            <div class="card faq-card">
                <div class="card-header faq-header" id="heading4">
                    <a class="btn faq-link faq-btn font-weight-bold w-100 text-left" data-toggle="collapse"
                       data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                       ¿Cómo se me comunica el estado y progreso de mi familiar?
                    </a>
                </div>
                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#faq-accordion">
                    <div class="card-body faq-body">
                    La comunicación es esencial por lo que se da apertura a canales directos con los familiares y se les informa periódicamente el estado de su familiar, a la par que a su médico tratante.
                    </div>
                </div>
            </div>
            <div class="card faq-card">
                <div class="card-header faq-header" id="heading5">
                    <a class="btn faq-link faq-btn font-weight-bold w-100 text-left" data-toggle="collapse"
                       data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                       ¿Cuánto tiempo duran los huéspedes dentro de la casa?
                    </a>
                </div>
                <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#faq-accordion">
                    <div class="card-body faq-body">
                    El tiempo de estancia del huésped depende directamente de la evolución de éste y el seguimiento que dé la familia y/o el cuidador primario en el proceso. Cada persona tiene tiempos para la asimilación, comprensión y compromiso con su propio proceso personal. Por lo tanto, no se puede generalizar. Sin embargo, el tiempo mínimo para brindar las mínimas herramientas de autonomía en los pacientes con experiencias psiquiátricas es de 4 a 5 meses.
                    </div>
                </div>
            </div>
            <div class="card faq-card">
                <div class="card-header faq-header" id="heading6">
                    <a class="btn faq-link faq-btn font-weight-bold w-100 text-left" data-toggle="collapse"
                       data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                       ¿Cuál es el siguiente paso después de que concluye la estadía de los huéspedes?
                    </a>
                </div>
                <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#faq-accordion">
                    <div class="card-body faq-body">
                    Eso dependerá de la situación de cada paciente, pero se realiza un proceso de integración a su futuro entorno familiar, social o laboral.
                    </div>
                </div>
            </div>
            <div class="card faq-card">
                <div class="card-header faq-header" id="heading7">
                    <a class="btn faq-link faq-btn font-weight-bold w-100 text-left" data-toggle="collapse"
                       data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                       ¿Atienden a personas con tendencias suicidas?
                    </a>
                </div>
                <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#faq-accordion">
                    <div class="card-body faq-body">
                    Sí. Sin embargo, para ello es indispensable que la persona cuente previamente con un cuadro farmacológico establecido por su médico tratante.
                    </div>
                </div>
            </div>
            <div class="card faq-card">
                <div class="card-header faq-header" id="heading8">
                    <a class="btn faq-link faq-btn font-weight-bold w-100 text-left" data-toggle="collapse"
                       data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
                       ¿Tengo que llevar despensa para mi familiar si se hospeda en Casa Loohl?
                    </a>
                </div>
                <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#faq-accordion">
                    <div class="card-body faq-body">
                    La cuota de recuperación mínima que manejamos únicamente incluye los servicios básicos. Si el huésped requiere de colaciones u otro tipo de alimento extraordinario es importante fijar un criterio de consumo extraordinario de alimentos. Debido a que los medicamentos psiquiátricos tienen como efectos secundarios la sensación de ansiedad, recomendamos que los familiares consideren como gasto extraordinario las colaciones, las cuales son sugeridas bajo términos de valoración nutrimental.
                    </div>
                </div>
            </div>
            <div class="card faq-card">
                <div class="card-header faq-header" id="heading9">
                    <a class="btn faq-link faq-btn font-weight-bold w-100 text-left" data-toggle="collapse"
                       data-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
                       ¿Qué personal atiende a los huéspedes?
                    </a>
                </div>
                <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#faq-accordion">
                    <div class="card-body faq-body">
                    Los atiende un grupo de psicólogos y enfermeras de diferentes orientaciones clínicas y sociales. Al no ser un dispositivo hospitalario o de clínica, el modelo no incluye a médicos dentro de la comunidad. Sin embargo, el seguimiento médico y el tratamiento, visitas y consultas médicas se da en paralelo y en comunicación constante con el médico tratante.
                    </div>
                </div>
            </div>
            <div class="card faq-card">
                <div class="card-header faq-header" id="heading10">
                    <a class="btn faq-link faq-btn font-weight-bold w-100 text-left" data-toggle="collapse"
                       data-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
                       ¿Los huéspedes pasan todo su tiempo dentro de la casa?
                    </a>
                </div>
                <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#faq-accordion">
                    <div class="card-body faq-body">
                    La mayoría de su estancia, sí. Sin embargo, como parte de su proceso de inclusión social, también tienen tiempo de esparcimiento y actividades personales. Se sale a la tienda o a realizar actividades personales, siempre y cuando el huésped y su familia le den seguimiento. Así mismo, de lunes a viernes, como parte de la estructura cotidiana se imparten 2 talleres. Uno por la mañana y otro por la tarde.
                    </div>
                </div>
            </div>
            <div class="card faq-card">
                <div class="card-header faq-header" id="heading11">
                    <a class="btn faq-link faq-btn font-weight-bold w-100 text-left" data-toggle="collapse"
                       data-target="#collapse11" aria-expanded="true" aria-controls="collapse11">
                       ¿Las medicinas de los huéspedes se las recetan ustedes o usan el tratamiento que ya tenían?
                    </a>
                </div>
                <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#faq-accordion">
                    <div class="card-body faq-body">
                        <p>Damos seguimiento al tratamiento farmacológico ya establecido. Por lo que, a su ingreso, el huésped debe contar con un médico de especialidad en psiquiatría que lleve su tratamiento médico. </p>
                        <p>Nosotros le damos seguimiento, monitoreamos que se cumpla y estamos en constante comunicación con el médico tratante para reportar efectos secundarios, efectos negativos y piramidales, así como morbilidades.</p>
                    </div>
                </div>
            </div>
            <div class="card faq-card">
                <div class="card-header faq-header" id="heading12">
                    <a class="btn faq-link faq-btn font-weight-bold w-100 text-left" data-toggle="collapse"
                       data-target="#collapse12" aria-expanded="true" aria-controls="collapse12">
                       ¿Dónde está ubicada la Casa Loohl?
                    </a>
                </div>
                <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#faq-accordion">
                    <div class="card-body faq-body">
                    Nos encontramos en la ciudad de Querétaro. Nuestra filosofía se centra en brindar herramientas para la inclusión social de pacientes con experiencias psiquiátricas, por tanto, se busca que el espacio físico se encuentre integrado en la sociedad. No en las afueras o aislados. Nuestro objetivo como institución es brindar herramientas de autonomía, por lo que el estar en el seno de una ciudad permite a los huéspedes sentirse y formar parte de ésta sin romper vínculos sociales y de integración.
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
