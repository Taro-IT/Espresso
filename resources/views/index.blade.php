@extends('layouts.app')

@section('content')

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center">
                <img src="{{asset('images/logo.jpg')}}" alt="Casa Medio Camino Loohl">
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li class="dropdown"><a href="#"><span>¿Quiénes somos?</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#about"><span>¿Que hacemos?</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#services">Involucrate</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contactanos</a></li>
                    <li><a class="getstarted scrollto" href="#about">Donar</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Ofreciendo
                        <l class="text-purple">atención</l>
                        y seguimiento al proceso
                        inclusion social de personas con
                        <l class="text-purple">experiencias psiquiátricas</l>
                    </h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Somos un puente entre la hospitalización y la
                        reinserción social </h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#about"
                               class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>¿Quiénes somos?</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{asset('images/img-sala.jpg')}}" class="img-fluid"
                         alt="Imagen de sala casa medio camino">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                         data-aos-delay="200">
                        <div class="content">
                            <h1>Brindamos un espacio apto para el
                                <l class="text-purple">crecimiento personal de personas con trastornos psicosociales</l>
                                .
                            </h1>
                            <p>
                                Ayudamos a nuestros huéspedes a tener una mejor calidad de vida con modelo terapéutico
                                innovador.
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="#"
                                   class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>¿Que Hacemos?</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{asset('images/img-sala-2.png')}}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <!-- ======= Values Section ======= -->
        <section id="values" class="values">

            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box" data-aos="fade-up" data-aos-delay="200">
                            <h3>NUESTRA MISIÓN</h3>
                            <p>Restablecer los vínculos interpersonales,sociales y ocupacionales de los huéspedes y
                                bridarles herramientas que
                                les
                                permitan
                                sobrellevar sus padecimientos permitiéndoles alcanzar una mejor calidad de vida</p>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-12 mt-lg-12">
                        <div class="box" data-aos="fade-up" data-aos-delay="400">

                            <h3>COMUNIDAD TERAPÉUTICA</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a egestas turpis,
                                quis
                                commodo ante. Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                                ac
                                turpis egestas.</p>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-12 mt-lg-12">
                        <div class="box" data-aos="fade-up" data-aos-delay="600">

                            <h3>ACERCANDO LA LOCURA</h3>
                            <p>Explore nuestra colección de artículos de divulgación, producciones literarias,
                                producciones
                                narrativas, proyectos e historias de éxito de nuestra comunidad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Values Section -->

        <section id="services" class="services">

            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box purple">
                            <div class="margin-top">
                                <i class="ri-discuss-line icon"></i>
                                <h3>Titulo Articulo</h3>
                                <p>Autores.</p>
                                <a href="#" class="read-more"><span>Ver más</span> <i class="bi bi-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="service-box purple">
                                    <i class="ri-discuss-line icon"></i>
                                    <h3>Titulo Articulo</h3>
                                    <p>Autores.</p>
                                    <a href="#" class="read-more"><span>Read More</span> <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="service-box purple">
                                    <i class="ri-discuss-line icon"></i>
                                    <h3>Titulo Articulo</h3>
                                    <p>Autores.</p>
                                    <a href="#" class="read-more"><span>Read More</span> <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-box purple">
                                    <i class="ri-discuss-line icon"></i>
                                    <h3>Titulo Articulo</h3>
                                    <p>Autores.</p>
                                    <a href="#" class="read-more"><span>Read More</span> <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Services Section -->
        <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-md-12 text-center">
                <button class="btn-purple">Descubre mas!</button>
            </div>
        </div>
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>¿POR QUE CONTRIBUIR?</p>
                </header>
                <div class="row">
                    <div class="col-md-12 text-center">
                        Todas las contribuciones recibidas se dedican al beneficio de la comunidad, tu contribución nos
                        hace posibles dar vida a proyectos de huéspedes y realizar eventos, tanto internos como
                        externos, donde se demuestra el crecimiento de cada uno de ellos
                    </div>
                </div>
                <br><br><br>
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter=".filter-app">HAZ UNA DONACIÓN</li>
                            <li data-filter=".filter-card">COMPRA EN TIENDA FÍSICA</li>
                            <li data-filter=".filter-web">COMPRA EN LÍNEA</li>
                        </ul>
                    </div>
                </div>

            </div>

        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="assets/img/logo.png" alt="">
                            <span>Casa Medio Camino Loohl</span>
                        </a>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                            valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Secciones</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Inicio</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">¿Quienes somos?</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">¿Que hacemos?</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Involucrate</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Dona</a></li>
                        </ul>
                    </div>


                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contactanos</h4>
                        <a>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Teléfono:</strong><a href="tel:4422561353">442 254 13 53</a><br>
                            <strong>Email:</strong><a href="mailto:contacto@casademediocamino.com"> contacto@casademediocamino.com</a><br>
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>



@endsection
