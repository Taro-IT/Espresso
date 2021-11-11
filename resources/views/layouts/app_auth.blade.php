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

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <!-- some styles break if these css files aren't linked in this order -->

    <!-- Custom CSS -->
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor')}}/bootstrap-4.6.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    @stack('css')

    <!-- Titulo-->
    <title>@yield('title','Casa Medio Camino Loohl | Panel de Administración')</title>

</head>
<body>
    <!-- ======= HEADER ======= -->
    <header id="header" class="header fixed-top d-flex justify-content-between align-items-center">

        <!-- ======= LOGO ======= -->
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{asset('home')}}" class="logo d-flex align-items-center">
                <img src="{{asset('images/logo.jpg')}}" alt="Logo Casa Loohl">
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <!-- ======= NAVBAR ======= -->
        <nav class="header-nav ms-auto margin-right mr-4">
            <ul class="d-flex align-items-center ">
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <span class="dropdown-toggle ps-2">{{Auth::user()->name}}</span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <span>Administrador</span>
                        </li>
                        <li><hr class="m-0"></li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{route('change_pwd.index')}}">
                                <i class="bi bi-shield-lock-fill"></i>
                                <span>Cambiar contraseña</span>
                            </a>
                        </li>
                        <li><hr class="m-0"></li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>¿Necesitas ayuda?</span>
                            </a>
                        </li>
                        <li><hr class="m-0"></li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Cerrar sesión</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item" id="nav-item">
                <a class="nav-link @if(Request::is('home')) active @endif" href="{{route('home')}}">
                    <i class="bi bi-person-badge-fill"></i>
                    <span>INFORMACIÓN DE CONTACTO</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(Request::is('productos') or Request::is('editar-productos/*')) active @endif" href="{{route('products.index')}}">
                    <i class="bi bi-shop"></i>
                    <span>PRODUCTOS DIGITALES</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(Request::is('talleres') or Request::is('editar-talleres/*')) active @endif collapsed" href="{{route('workshop.index')}}">
                    <i class="bi bi-easel-fill"></i>
                    <span>TALLERES</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(Request::is('imagenes')) active @endif collapsed" href="{{route('images.index')}}">
                    <i class="bi bi-images"></i>
                    <span>IMÁGENES</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(Request::is('pacientes')) active @endif collapsed" href="{{route('patients.index')}}">
                    <i class="bi bi-people-fill"></i>
                    <span>HUÉSPEDES</span>
                </a>
            </li>
        </ul>
    </aside>

    <main>
        <div class="container-loohl">
            @if (session('status'))
                <br>
                <div class="alert alert-success">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if (session('error'))
                <br>
                <div class="alert alert-danger">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @yield('content')
        </div>
    </main>
</body>

<!-- Vendor JS Files -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="{{asset('vendor')}}/bootstrap-4.6.0/js/bootstrap_2.bundle.js"></script>

<!-- Custom JS files -->
<script src="{{ asset('js/dashboard.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('/js/tooltips.js') }}"></script>
@stack('scripts')

</html>
