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
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">

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
    @stack('css')

    <!-- Titulo-->
    <title>@yield('title','Casa Medio Camino Loohl | Inicio')</title>

</head>

<body>
    <header>
    <a href="/" class="logo d-flex align-items-center">
            <img src="{{asset('images/logo.jpg')}}" alt="Casa Loohl: Casa de Medio Camino">
        </a>
    </header>

<main>
    @yield('content')
</main>

<!-- ======= Footer ======= -->
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