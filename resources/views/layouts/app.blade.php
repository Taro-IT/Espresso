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
    <link href="{{asset('vendor')}}/bootstrap-4.6.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('vendor')}}/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link href="{{asset('vendor')}}/aos/aos.css" rel="stylesheet">
    <link href="{{asset('vendor')}}/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{asset('vendor')}}/glightbox/css/glightbox.min.css" rel="stylesheet">
    
    <!-- Materialize Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <!--CSS Personalizado por blade -->
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/medium_posts_styles.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/index_styles.css') }}">

@stack('css')
<!-- Titulo-->
    <title>@yield('title','Casa Medio Camino Loohl | Inicio')</title>

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header-nav fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <!-- ======= Navbar ======= -->
        <a href="/" class="logo d-flex align-items-center">
            <img src="{{asset('images/logo.jpg')}}" alt="Casa Loohl: Casa de Medio Camino">
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li class="dropdown"><a href="{{route('quienes-somos')}}"><span>¿QUIÉNES SOMOS?</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('quienes-somos')}}#philosophy">FILOSOFÍA</a></li>
                        <li><a href="{{route('quienes-somos')}}#history">HISTORIA</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="{{route('que-hacemos')}}"><span>¿QUÉ HACEMOS?</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('que-hacemos')}}#wow">FORMA DE TRABAJO</a></li>
                        <li><a href="{{route('que-hacemos')}}#services">SERVICIOS</a></li>
                        <li><a href="{{route('que-hacemos')}}#activities">ACTIVIDADES</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contribute">INVOLÚCRATE</a></li>
                <li><a class="nav-link scrollto" href="#contact">CONTÁCTANOS</a></li>
                <li><a class="getstarted scrollto" href="#">DONAR</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- End Navbar -->

    </div>
</header><!-- End Header -->

<main>
    @yield('content')
</main>

<!-- ======= Footer ======= -->
  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-2">
            <img src="images/logo.jpg" alt="" width="180" class="mb-3">
        </div>
        <div class="col-lg-4 col-md-6">
            <h6 class="font-weight-bold">CONÉCTATE</h6>
            <ul class="list-inline mt-1">
                <li class="list-inline-item"><a href="https://www.facebook.com/Casa-de-Medio-Camino-Quer%C3%A9taro-Casa-Loohl-313251725496600" target="_blank" title="facebook"><i class="bi bi-facebook" style="font-size: 2rem;"></i></a></li>
                <li class="list-inline-item"><a href="https://www.instagram.com/casa_loohl/?hl=es-la" target="_blank" title="instagram"><i class="bi bi-instagram" style="font-size: 2rem;"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="spotify"><i class="bi bi-spotify" style="font-size: 2rem;"></i></a></li>
                <li class="list-inline-item"><a href="https://medium.com/@Casademediocamino/following" target="_blank" title="medium"><i class="bi bi-medium" style="font-size: 2rem;"></i></a></li>
            </ul>
        </div>
        <div class="col-lg-4 col-md-6 mb-lg-0">
          <p class="mb-4">Casa Loohl es una organización benéfica sin fines de lucro y exenta de impuestos. Las donaciones son deducibles de impuesto según lo permita la ley.</p>
        </div>
      </div>
    </div>

    <!-- Copyrights -->
    <div class="copyrights">
      <div class="container text-center">
        <p class="mb-0">© 2021 Casa Loohl: Casa de medio camino. Todos los derechos reservados.</p>
      </div>
    </div>
  </footer>
  <!-- End -->
</body>

<!-- Bootstrap 4.6 JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="{{asset('vendor')}}/bootstrap-4.6.0/js/bootstrap.min.js"></script>

<!-- Vendor JS Files -->
<script src="{{asset('vendor')}}/aos/aos.js"></script>
<script src="{{asset('vendor')}}/php-email-form/validate.js"></script>
<script src="{{asset('vendor')}}/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('vendor')}}/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{asset('vendor')}}/glightbox/js/glightbox.min.js"></script>

<!-- Template JS -->
<script rel="script" src="{{asset('js/main.js')}}" crossorigin="anonymous"></script>
@stack('scripts')

</html>
