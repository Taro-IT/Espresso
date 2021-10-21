@extends('layouts.app')

@section('content')

    <!-- ======= About us section ======= -->
    <div class="container-fluid" id="about-us">
        <div class="row about position-relative">
            <div class="col-lg-6">
                <div class="intro-text a">
                    <h1 class="mb-4">
                        Ofreciendo
                        <l class="text-purple">atención</l>
                        y seguimiento al proceso de inclusión social de personas con
                        <l class="text-purple">experiencias psiquiátricas.</l>
                    </h1>
                    <h2 class="mb-4" data-aos="fade-left" data-aos-delay="400">
                        Somos un puente entre la hospitalización y la reinserción social. 
                    </h2>
                    <div data-aos="fade-left" data-aos-delay="600" class="text-center text-lg-start">
                        <a href="#"
                            class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>¿QUIÉNES SOMOS?</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 position-static">
                <img src="{{asset('images/img-sala.jpg')}}" class="main-img fixed-img" id="home-img"
                    alt="Imagen de sala casa medio camino">
            </div>
            <div class="col-lg-6">
                <div class="intro-text b">
                    <h1 class="mb-4">
                        Brindamos un espacio apto para el
                        <l class="text-purple">crecimiento personal</l>
                        de personas con trastornos psicosociales.
                    </h1>
                    <h2 class="mb-4" data-aos="fade-left" data-aos-delay="400">
                        Ayudamos a nuestros huéspedes a tener una mejor calidad de vida con un modelo terapéutico
                        innovador.
                    </h2>
                    <div data-aos="fade-left" data-aos-delay="600" class="text-center text-lg-start">
                        <a href="#"
                            class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>¿QUÉ HACEMOS?</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End About Us Section -->
        
    <main id="main">

        <!-- ======= Values Section ======= -->
        <section id="values" class="values c">

            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12">
                        <div data-aos="fade-up" data-aos-delay="200">
                            <h1 class="header text-center font-weight-bold">
                                <span class="underline">&nbsp;&nbsp;Nuestra Misión&nbsp;&nbsp;</span>
                            </h1>
                            <p class="subtitle text-center">Restablecer los vínculos interpersonales,sociales y ocupacionales de los huéspedes y brindarles herramientas que les permitan sobrellevar sus padecimientos permitiéndoles alcanzar una mejor calidad de vida.</p>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-12 mt-lg-12">
                        <div data-aos="fade-up" data-aos-delay="400">
                            <h1 class="header text-center font-weight-bold">
                                <span class="underline">&nbsp;&nbsp;Comunidad terapeútica&nbsp;&nbsp;</span>
                            </h1>
                            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a egestas turpis,
                                quis
                                commodo ante. Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                                ac
                                turpis egestas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =======  TERAPEUTIC COMMUNITY SECTION ======= -->
    <section id="comunity">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div data-aos="fade-up" data-aos-delay="200">
                    <h1 class="header text-center font-weight-bold">
                        <span class="underline">&nbsp;&nbsp;COMUNIDAD TERAPEÚTICA&nbsp;&nbsp;</span>
                    </h1>
                    <p class="subtitle text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a egestas turpis, quis commodo ante. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= MEDIUM ARTICLES SECTION ======= -->
    <section class="container" data-aos="fade-up">
        <h1 class="header text-center font-weight-bold" data-aos="fade-up" data-aos-delay="100">
            <span class="underline">&nbsp;&nbsp;ACERCANDO LA LOCURA&nbsp;&nbsp;</span>
        </h1>
        <p class="text-center subtitle pb-3" data-aos="fade-up" data-aos-delay="200"> Explora nuestra colección de artículos de divulgación, producciones literarias, producciones narrativas, proyectos e historias de vida de nuestra comunidad.</p>   
        <div class="row" id="medium-posts-container" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg" >
                <div data-medium-post-id="1"></div>
                <hr class="mb-4 d-lg-none">
            </div>
            <div class="col-lg">
                <div data-medium-post-id="2"></div>
                    <hr class="mb-4">
                    <div class="row">
                        <div class="col-sm" >
                            <div data-medium-post-id="3"></div>
                            <hr class="mb-4 d-sm-none">
                        </div>
                        <div class="col-sm" >
                            <div data-medium-post-id="4"></div>
                            <hr class="mb-4 d-sm-none">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center" data-aos="zoom-out" data-aos-delay="250">
                <a href="https://medium.com/@Casademediocamino/following" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>DESCUBRE MÁS ARTÍCULOS</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ======= CONTRIBUTE SECTION ======= -->
    <section class="container" data-aos="fade-up">
        <h1 class="header text-center font-weight-bold">
            <span class="underline">&nbsp;&nbsp;¿Por que contribuir?&nbsp;&nbsp;</span>
        </h1>
        <p class="text-center subtitle pb-3">Todas las contribuciones recibidas se dedican al beneficio de la comunidad, tu contribución nos hace posible dar vida a proyectos de huéspedes y realizar eventos, tanto internos como externos, donde se demuestra el crecimiento de cada uno de ellos.</p>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-sm mb-3 mb-sm-0"> 
                <a class="btn btn-custom-purple btn-lg btn-block  py-sm-5 h-100 donation-btn d-flex justify-content-center align-items-center" href="#" role="button"> 
                    <span class="align-middle">Haz una donación</span> 
                </a>
            </div>
            <div class="col-sm mb-3 mb-sm-0"> 
                <a class="btn btn-custom-purple btn-lg btn-block  py-sm-5 h-100 donation-btn d-flex justify-content-center align-items-center" href="#" role="button">
                    <span class="align-middle">Compra en tienda física</span> 
                </a>
            </div>
            <div class="col-sm"> 
                <a class="btn btn-custom-purple btn-lg btn-block py-sm-5 h-100 donation-btn d-flex justify-content-center align-items-center" href="#" role="button">
                    <span class="align-middle">Compra en linea</span> 
                </a>
            </div>
        </div>
    </section>

    <!-- ======= FACEBOOK POSTS SECTION ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h1 class="header text-center font-weight-bold">
                    <span class="underline">&nbsp;&nbsp;MANTENTE AL DÍA&nbsp;&nbsp;</span>
                </h1>
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
    </section>

    <!-- ======= CONTACT US SECTION ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <h1 class="header text-center font-weight-bold">
                <span class="underline">&nbsp;&nbsp;CONTÁCTANOS&nbsp;&nbsp;</span>
            </h1>
            <p class="subtitle text-center">Ponte en contacto con nosotros, nos encantaría saber de ti y apoyarte en lo que necesites.</p>
            
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-4">
                            <i class="bi bi-telephone-fill" style="font-size: 3rem;"></i>
                            <br><br>
                            <p><a href="tel:4422541353">4422541353</a><br><a href="tel:4422539374">4422539374</a> </p>
                        </div>
                        <div class="col-md-4">
                            <i class="bi bi-phone-fill" style="font-size: 3rem;"></i>
                            <br><br>
                            <p><a href="tel:+524425268903">+52 442 526 8903</a><br><a href="+524424231742">+52 442 423 1742</a></p>
                        </div>
                        <div class="col-md-4">
                            <i class="bi bi-envelope-fill" style="font-size: 3rem;"></i>
                            <br><br>
                            <p><a href="mailto:contacto@casamediocamino.com">contacto@casamediocamino.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <script src="{{ asset('/js/load_medium_posts.js') }}"></script>
    <script src="{{ asset('/js/scroll.js') }}"></script>
    <script>
        loadMediumPosts();
    </script>
    
@endsection
