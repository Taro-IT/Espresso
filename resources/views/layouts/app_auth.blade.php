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
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor')}}/bootstrap-4.6.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('vendor')}}/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <script src="{{asset('js/app.js')}}"></script>
    
@stack('css')
<!-- Titulo-->
    <title>@yield('title','Casa Medio Camino Loohl | Panel de Administración')</title>

</head>
<body>
    <!-- ======= HEADER ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <!-- ======= LOGO ======= -->
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{asset('home')}}" class="logo d-flex align-items-center">
                <img src="{{asset('images/logo.jpg')}}" alt="Logo Casa Loohl">
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>

        <!-- ======= NAVBAR ======= -->
        <nav class="header-nav ms-auto margin-right">
            <ul class="d-flex align-items-center ">
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name}}</span>
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
                <a class="nav-link" href="{{route('home')}}">
                    <i class="bi bi-person-badge-fill"></i>
                    <span>INFORMACIÓN DE CONTACTO</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('products.index')}}">
                    <i class="bi bi-shop"></i>
                    <span>PRODUCTOS DIGITALES</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('workshop.index')}}">
                    <i class="bi bi-easel-fill"></i>
                    <span>TALLERES</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('patients.index')}}">
                    <i class="bi bi-people-fill"></i>
                    <span>HUÉSPEDES</span>
                </a>
            </li>
        </ul>
    </aside>

    <main>
        <div class="container-loohl">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if (session('error'))
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


<!-- ======= Custom JS file ======= -->
<script src="{{asset('js')}}/dashboard.js"></script>
<!-- Vendor JS Files -->
<script src="{{asset('vendor')}}/bootstrap-4.6.0/js/bootstrap_2.bundle.js"></script>

@stack('scripts')
</html>
