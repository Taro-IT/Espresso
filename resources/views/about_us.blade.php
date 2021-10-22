@extends('layouts.app')

@section('title') Casa Medio Camino | ¿Quiénes somos? @endsection
@section('content')

<section id="carrousel" class="margin-navbar">
    <img class="d-block w-100" src="{{asset('images/slider-1.png')}}" alt="First slide">
</section>

<!-- =======  WHO WE ARE SECTION ======= -->
<div class="container">
<section id="quienes-somos">
    <div class="row justify-content-center">
        <h1 class="section-header" data-aos="fade-up" data-aos-delay="200">
            <span class="underline">&nbsp;&nbsp;¿QUIÉNES SOMOS?&nbsp;&nbsp;</span>
        </h1>
        <p class="subtitle text-center" data-aos="fade-up" data-aos-delay="400">Somos un grupo de psicólogos con experiencia en las áreas de trabajo social, clínico y de
                        investigación
                        sobre el trabajo y seguimiento a pacientes con enfermedades mentales quienes tomamos iniciativa
                        frente a
                        la realidad social en México de las personas que han sido diagnosticadas con padecimientos
                        psiquiátricos
                        o que han tenido dificultades para reintegrarse a sus actividades sociales, familiares,
                        ocupacionales
                        después de una crisis. Con ello buscamos brindar un espacio de integración, interacción y de
                        inclusión
                        en un ambiente de aceptación y comunidad.
        </p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="600">
        <div class="row justify-content-center">
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
                <div>
            </div><!-- /.container -->
</section>

<!-- =======  OUR PHILOSOPHY SECTION ======= -->
<section id="philosophy" class="container">
    <div class="row justify-content-center">
        <h1 class="section-header" data-aos="fade-up" data-aos-delay="200">
            <span class="underline">&nbsp;&nbsp;NUESTRA FILOSOFÍA&nbsp;&nbsp;</span>
        </h1>
        <div data-aos="fade-up" data-aos-delay="400" >
            <p class="subtitle text-center" >Brindamos a los pacientes de las herramientas necesarias para que estos sean capaces de
                            restablecer los vínculos sociales con familiares y amigos, a través de una atmósfera
                            comunitaria, cuyo pilar de trabajo es el de generar un espacio de bienestar y comodidad para
                            el huésped. </p>
            <p class="subtitle text-center">Por lo tanto, quienes integran la comunidad terapéutica tenemos la firme convicción de que el
                            trabajo dirigido y centrado en el paciente, debe ser interdisciplinario e integral para el
                            beneficio de éste y su familia. </p>
            <p class="subtitle text-center">Al ser un programa integral, contamos con talleres dirigidos para el huésped, que le permiten
                            revitalizar sus habilidades cognitivas, psicomotrices, intelectuales, afectivas y sociales,
                            lo que deriva en una reinserción social total.</p>
        </div>
    </div>
</section>

<!-- =======  OUR HISTORY SECTION ======= -->
<section id="history" class="container">
    <div class="row justify-content-center">
        <h1 class="section-header" data-aos="fade-up" data-aos-delay="200">
            <span class="underline">&nbsp;&nbsp;NUESTRA HISTORIA&nbsp;&nbsp;</span>
        </h1>
        <div class="row">
            <div class="col-md-8" data-aos="fade-left" data-aos-delay="400">
                <h2 class="subheader text-left">
                    <span>&nbsp;&nbsp;¿De dónde surge nuestro nombre?&nbsp;&nbsp;</span>
                </h2>
                <p>Casa Loohl, recibe su nombre por su significado en maya que quiere decir “Flor”. Retomamos
                            nuestras raíces mexicanas, pero sobre todo, teniendo en cuenta que el eje de nuestro trabajo es
                            el de hacer crear una comunidad, trabajando de manera colaborativa y a través de un diálogo
                            abierto entre disciplinas (medicina, psicología, psicoterapia, terapia ocupacional y
                            sociología).</p>
            </div>
            <div class="col-md-4" data-aos="fade-left" data-aos-delay="500">
                <img class="d-block img-fluid" src="/about_us/test_image_2.jpg" alt="image-girl">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col" data-aos="fade-left" data-aos-delay="200">
                <h2 class="subheader text-left">
                    <span>&nbsp;&nbsp;¿Cómo surge Casa Loohl?&nbsp;&nbsp;</span>
                </h2>
                <p>Loohl, surge como iniciativa de un grupo de colegas psicólogos con experiencia en las áreas de
                            trabajo social, clínico y de investigación sobre pacientes con enfermedades mentales a partir de
                            la inquietud de que en México las enfermedades mentales son razón de exclusión social y por lo
                            tanto afectan a las familias y personas que han sido diagnosticadas psiquiátricamente.</p>
            </div>
        </div>
        <div class="row justify-content-center" data-aos="fade-left" data-aos-delay="500">
            <img class="d-block img-fluid wide" src="/about_us/test_image_4.jpeg" alt="">
        </div>
    </div>
</section>

@endsection
