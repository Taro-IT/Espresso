@extends('layouts.app')

@section('content')

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
                            <a href="{{route('quienes-somos')}}"
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
                            <li class="card-contribution">
                                <p class="text-card">HAZ UNA DONACIÓN</p>
                            </li>
                            <li class="card-contribution">
                                <p class="text-card">COMPRA EN TIENDA FÍSICA</p>
                            </li>
                            <li class="card-contribution">
                                <p class="text-card">COMPRA EN LÍNEA</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </section><!-- End Portfolio Section -->

        <!-- ======= Mantente al día Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>MANTENTE AL DÍA</p>
                </header>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="{{asset('images/img-sala.jpg')}}" class="img-fluid" alt=""></div>
                            <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
                            <span class="post-date">Tue, September 15</span>
                            <a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Ver post</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="{{asset('images/img-sala.jpg')}}" class="img-fluid" alt=""></div>
                            <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
                            <span class="post-date">Fri, August 28</span>
                            <a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Ver post</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="{{asset('images/img-sala.jpg')}}" class="img-fluid" alt=""></div>
                            <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
                            <span class="post-date">Mon, July 11</span>
                            <a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Ver post</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Recent Blog Posts Section -->


        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>CONTACTANOS</p>
                </header>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>Ponte en contacto con nosotros, nos encantaría saber de ti y apoyarte en lo que necesites</p>
                    </div>
                </div>

                <div class="row gy-4 text-center">

                    <div class="col-lg-12">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <br><br>
                                    <p><a href="tel:4422541353">4422541353</a><br><a href="tel:4422539374">4422539374</a> </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-box">
                                    <i class="bi bi-phone"></i>
                                    <br><br>
                                    <p><a href="tel:+524425268903">+52 442 526 8903</a><br><a href="+524424231742">+52 442 423 1742</a></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <br><br>
                                    <p><a href="mailto:contacto@casamediocamino.com">contacto@casamediocamino.com</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </section><!-- End Contact Section -->



        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>



@endsection
