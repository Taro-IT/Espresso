<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Meta TAGS-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=”robots” content=”noindex,follow”>
    <meta property=”og:type” content=”https://casademediocamino.com/”/>
    <meta property=”og:title” content=”Casa Medio Camino Loohl”/>

    <!-- Descripción y palabras calves para manejo de SEO-->
    <meta name="description" content="Casa de Medio Camino, es un modelo de comunidad terapéutica que se origina
          como parte de una propuesta integral al tratamiento de salud mental, para personas que han sido diagnosticadas
          por su psiquiatra de cabecera con alguna enfermedad mental. Siendo un punto intermedio entre la
          hospitalización y la casa de origen del paciente.">
    <meta name="keywords"
          content="Pacientes, Ayuda, ayuda, pacientes, alternativa, psicólogos,Psicólogos,salud mental,necesidades,
          psiquiatra,afectivos,">

    <!-- Favicon de Pagina web-->
    <link rel="icon" href="{{asset('images/logo.jpg')}}" type="image/x-icon">

    <!-- Vendor CSS Files -->
    <!-- <link href="{{asset('vendor')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="{{asset('vendor')}}/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('vendor')}}/aos/aos.css" rel="stylesheet">
    <!-- <link href="{{asset('vendor')}}/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{asset('vendor')}}/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{asset('vendor')}}/glightbox/css/glightbox.min.css" rel="stylesheet"> -->
    
    <!-- Materialize Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--CSS Personalizado por blade-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/medium_posts_styles.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    
@stack('css')

<!-- Titulo-->
    <title>@yield('title','Casa Medio camino Loohl | Inicio')</title>

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <img src="{{asset('images/logo.jpg')}}" alt="Casa Loohl: Casa de Medio Camino">
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li class="dropdown"><a href="{{route('quienes-somos')}}"><span>¿QUIÉNES SOMOS?</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">FILOSOFÍA</a></li>
                        <li><a href="#">HISTORIA</a></li>
                        <li><a href="#">EQUIPO</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#about"><span>¿QUÉ HACEMOS?</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">FORMA DE TRABAJO</a></li>
                        <li><a href="#">SERVICIOS</a></li>
                        <li><a href="#">ACTIVIDADES</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#get-involved">INVOLÚCRATE</a></li>
                <li><a class="nav-link scrollto" href="#contact">CONTÁCTANOS</a></li>
                <li><a class="getstarted scrollto" href="#about">DONAR</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<main>
    @yield('content')
</main>

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <img src="{{asset('images/logo.jpg')}}" alt="">
                    </a>

                    <div class="social-links mt-3">
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="spotify"><i class="bi bi-spotify"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start">
                    <p>Casa Loohl es una organización benéfica sin fines de lucro, exenta de impuestos, las donaciones son deducible de impuestos según lo permita la ley.</p>
                </div>

                <br><br>
                <p class="text-center">© 2021 Casa Loohl Casa de medio camino. Todos los derechos reservados</p>
            </div>
        </div>
    </div>
</footer><!-- End Footer -->
</body>

<!-- Boostrap 5 JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script> -->

<!-- Vendor JS Files -->

<script src="{{asset('vendor')}}/aos/aos.js"></script>
<script src="{{asset('vendor')}}/php-email-form/validate.js"></script>
<script src="{{asset('vendor')}}/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('vendor')}}/purecounter/purecounter.js"></script>
<script src="{{asset('vendor')}}/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{asset('vendor')}}/glightbox/js/glightbox.min.js"></script>

<!-- JS Personalizado-->
<script rel="script" src="{{asset('js/main.js')}}" crossorigin="anonymous"></script>
@stack('scripts')

<!-- Bootstrap js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</html>
