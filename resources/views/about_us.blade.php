@extends('layouts.app')

@section('title') Casa Medio Camino | ¿Quiénes somos? @endsection
@section('content')

    <section id="carrousel" class="margin-navbar">
        <img class="d-block w-100" src="{{asset('images/slider-3.png')}}" alt="First slide">
    </section>

    <div class="container">
        <!-- =======  WHO WE ARE SECTION ======= -->
        <section id="quienes-somos">
            <div class="text-center">
                <h1 class="section-header" data-aos="fade-up" data-aos-delay="200">
                    <span class="underline">&nbsp;&nbsp;¿QUIÉNES SOMOS?&nbsp;&nbsp;</span>
                </h1>
                <p class="subtitle" data-aos="fade-up" data-aos-delay="400">
                    Somos un grupo de psicólogos con experiencia en las áreas de trabajo social,
                    clínico y de investigación sobre el trabajo y seguimiento de pacientes con
                    experiencias psiquiátricas quienes tomamos iniciativa frente a la realidad
                    social en México de las personas que han sido diagnosticadas con padecimientos
                    psiquiátricos o que han tenido dificultades para reintegrarse a sus actividades
                    sociales y ocupacionales después de una crisis. Con ello buscamos
                    brindar un espacio de integración, interacción e inclusión en un ambiente
                    de aceptación y comunidad.
                </p>
            </div>
            <div class="contaifner" data-aos="fade-up" data-aos-delay="600">
                <div class="d-flex justify-content-center">
                    <div class="carousel slide carrousel-sizing" id="main-carousel" data-ride="carousel">
                    <div class="carousel-inner">
                            <div style="display: none">{{$i = false}}</div>
                            @foreach($images as $image)
                                @if($i == false)
                                    <div class="carousel-item active">
                                        <img class="d-block about-us-img" src="{{asset($image->image)}}" alt="{{$image->image}}">
                                    </div>
                                    <div style="display: none">{{$i = true}}</div>
                                @else
                                    <div class="carousel-item">
                                        <img class="d-block about-us-img" src="{{asset($image->image)}}" alt="{{$image->image}}">
                                    </div>
                                @endif
                            @endforeach
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
                    <div>
                    </div><!-- /.container -->
        </section>

        <!-- =======  OUR PHILOSOPHY SECTION ======= -->
        <section id="philosophy">
            <div class="text-center">
                <h1 class="section-header" data-aos="fade-up" data-aos-delay="200">
                    <span class="underline">&nbsp;&nbsp;NUESTRA FILOSOFÍA&nbsp;&nbsp;</span>
                </h1>
                <div data-aos="fade-up" data-aos-delay="400">
                    <p class="subtitle text-center">
                        En Casa Loohl, el huésped vive en una comunidad que le permite establecer puentes
                        de interacción de manera controlada y segura, al mismo tiempo que aprende de manera colaborativa con
                        el objetivo de desarrollar herramientas para su autonomía a través de un proceso
                        personal que le permita hacerse responsable de sus acciones.
                    </p>
                    <p class="subtitle text-center">
                        Por lo tanto, quienes integran la Comunidad Terapéutica tenemos la firme convicción de que el
                        trabajo dirigido y centrado en el paciente, debe ser interdisciplinario e integral para el
                        beneficio de éste y su familia.
                    </p>
                    <p class="subtitle text-center">
                        Al ser un programa integral, contamos con talleres dirigidos para el huésped, que le permiten
                        revitalizar sus habilidades cognitivas, psicomotrices, intelectuales, afectivas y sociales,
                        lo que deriva en una reinserción social.
                    </p>
                </div>
            </div>
        </section>

        <!-- =======  OUR HISTORY SECTION ======= -->
        <section id="history">
            <h1 class="section-header text-center mb-3" data-aos="fade-up" data-aos-delay="200">
                <span class="underline">&nbsp;&nbsp;NUESTRA HISTORIA&nbsp;&nbsp;</span>
            </h1>
            <div class="row">
                <div class="col-md-8" data-aos="fade-left" data-aos-delay="400">
                    <h2 class="subheader text-left">
                        <span>¿Cómo surge Casa Loohl?</span>
                    </h2>
                    <p>Casa Loohl, surge como iniciativa de un grupo de colegas psicólogos con experiencia en las áreas de
                        trabajo social, clínico y de investigación sobre pacientes con enfermedades mentales a partir de
                        la inquietud de que en México las enfermedades mentales son razón de exclusión social y por lo
                        tanto afectan a las familias y personas que han sido diagnosticadas psiquiátricamente.</p>
                </div>
                <div class="col-md-4" data-aos="fade-left" data-aos-delay="500">
                    <img class="d-block img-fluid" src="{{asset('images/about_us.jpg')}}" alt="Pacientes frente a letrero de Querétaro">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col" data-aos="fade-left" data-aos-delay="200">
                    <h2 class="subheader text-left">
                        <span>¿De dónde surge nuestro nombre?</span>
                    </h2>
                    <p>Casa Loohl, recibe su nombre por su significado en maya que quiere decir “Flor”. Retomamos
                        nuestras raíces mexicanas, pero sobre todo, teniendo en cuenta que el eje de nuestro trabajo es
                        el de crear una comunidad, trabajando de manera colaborativa y a través de un diálogo
                        abierto entre las disciplinas de medicina, psicología, psicoterapia, terapia ocupacional y
                        sociología.</p>
                </div>
            </div>
            <div class="row justify-content-center" data-aos="fade-left" data-aos-delay="500">
                <img class="d-block img-fluid wide" style="object-fit: cover" src="/images/lavender.jpeg" alt="">
            </div>
        </section>

    </div>

    <!-- ======= BACK TO TOP FLOATING BUTTON ======= -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- ======= WHATSAPP FLOATING BUTTON ======= -->
    <a data-scrolly="500" href="https://api.whatsapp.com/send/?phone={{$home->whatsapp}}&text=Tengo%20una%20duda%20sobre%20la%20casa%20Loohl,%20%C2%BFme%20pueden%20ayudar%3F" class="whatsapp-bubble d-flex align-items-center justify-content-center">
        <i class="bi bi-whatsapp"></i>
    </a>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('/css/about_us.css') }}">
@endpush
