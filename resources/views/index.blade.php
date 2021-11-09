@extends('layouts.app')

@section('content')

    <!-- ======= ABOUT US SECTION ======= -->
    <div class="container-fluid" id="about-us">
        <div class="row about-us position-relative">
            <div class="col-lg-6">
                <div class="intro-text a">
                    <h1 class="mb-4" data-aos="fade-left" data-aos-delay="200">Ofreciendo<l class="text-purple"> atención y seguimiento</l> al proceso de inclusión social de personas con<l class="text-purple"> experiencias psiquiátricas</l></h1>
                    <h2 class="mb-4" data-aos="fade-left" data-aos-delay="400">Somos un puente entre la hospitalización y la reinserción social. </h2>
                    <div data-aos="fade-left" data-aos-delay="600" class="text-center text-lg-start">
                        <a href="{{route('quienes-somos')}}" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>¿QUIÉNES SOMOS?</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 position-static">
                <img src="{{asset('images/img-sala.jpg')}}" class="main-img fixed-img" id="home-img" alt="Imagen de sala casa medio camino">
            </div>
            <div class="col-lg-6">
                <div class="intro-text b">
                    <h1 class="mb-4" data-aos="fade-left" data-aos-delay="200">Brindamos un espacio apto para el<l class="text-purple"> crecimiento personal </l>de personas con trastornos psicosociales</h1>
                    <h2 class="mb-4" data-aos="fade-left" data-aos-delay="400">Ayudamos a nuestros huéspedes a tener una mejor calidad de vida con un modelo terapéutico innovador.</h2>
                    <div data-aos="fade-left" data-aos-delay="600" class="text-center text-lg-start">
                        <a href="{{route('que-hacemos')}}" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>¿QUÉ HACEMOS?</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =======  MISSION AND TERAPEUTIC COMMUNITY SECTION ======= -->
    <section class="container-fluid mission-section">
        <div class="row">
            <div class="col-lg pb-5 pb-lg-0 px-5 text-center">
                <h1 class="header text-center" data-aos="fade-up" data-aos-delay="200">
                    <span>CASA DE MEDIO CAMINO</span>
                </h1>
                <p class="subtitle text-center" data-aos="fade-up" data-aos-delay="400">Es un modelo de comunidad terapéutica donde los huéspedes de la casa conviven diariamente en un espacio seguro, junto con el seguimiento y atención personalizada de psicólogos y profesionales de la salud mental.</p>
            </div>
            <div class="col-lg px-5 text-center">
                <h1 class="header" data-aos="fade-up" data-aos-delay="200">
                    <span>NUESTRA MISIÓN</span>
                </h1>
                <p class="subtitle text-center" data-aos="fade-up" data-aos-delay="400">Restablecer los vínculos interpersonales, sociales y ocupacionales de los huéspedes y brindarles herramientas que les permitan sobrellevar sus padecimientos permitiéndoles alcanzar una mejor calidad de vida.</p>
            </div>
        </div>
    </section>

    <!-- ======= MEDIUM ARTICLES SECTION ======= -->
    <section class="container" >
        <h1 class="header text-center" data-aos="fade-up" data-aos-delay="100">
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
        </div>
        <div data-aos="fade-left" data-aos-delay="400" class="d-flex justify-content-center" data-aos="zoom-out" data-aos-delay="250">
            <a href="https://medium.com/@Casademediocamino/following" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span id="medium-posts-see-more">DESCUBRE MÁS ARTÍCULOS</span>
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </section>

    <!-- ======= CONTRIBUTE SECTION ======= -->
    <section class="container" data-aos="fade-up" id="contribute">
        <h1 class="header text-center" data-aos="fade-up" data-aos-delay="100">
            <span class="underline">&nbsp;&nbsp;¿PORQUÉ CONTRIBUIR?&nbsp;&nbsp;</span>
        </h1>
        <p class="text-center subtitle" data-aos="fade-up" data-aos-delay="200">Todas las contribuciones recibidas se dedican al beneficio de la comunidad, tu contribución nos hace posible dar vida a proyectos de huéspedes y realizar eventos, tanto internos como externos, donde se demuestra el crecimiento de cada uno de ellos.</p>
        <div class="row">

            <div class="col-md mb-3 mb-md-0" data-aos="fade-up" data-aos-delay="300">
                <a class="btn btn-read-more py-md-5 h-100 d-flex justify-content-center align-items-center" href="{{route('donation.index')}}" role="button">
                    <span class="white-text">HAZ UNA DONACIÓN</span>
                </a>
            </div>
            <div class="col-md mb-3 mb-md-0" data-aos="fade-up" data-aos-delay="300">
                <a class="btn btn-read-more py-md-5 h-100 d-flex justify-content-center align-items-center" href="{{route('puntos-venta')}}" role="button">
                    <span class="white-text">COMPRA EN TIENDA FÍSICA</span>
                </a>
            </div>
            <div class="col-md mb-3 mb-md-0" data-aos="fade-up" data-aos-delay="300">
                <a class="btn btn-read-more py-md-5 h-100 d-flex justify-content-center align-items-center" href="{{route('tienda')}}" role="button">
                    <span class="white-text">COMPRA EN LÍNEA</span>
                </a>
            </div>
        </div>
    </section>

    <!-- ======= FACEBOOK POSTS SECTION ======= -->
    <section class="recent-blog-posts">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h1 class="header text-center font-weight-bold pb-lg-3 mb-lg-3">
                <span class="underline">&nbsp;&nbsp;MANTENTE AL DÍA&nbsp;&nbsp;</span>
            </h1>
            
            <div class="row">
                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                    <p class="text-center subtitle" data-aos="fade-right" data-aos-delay="200">Entérate de todos los eventos y noticias sobre la Casa Loohl con nuestras publicaciones en facebook.</p>
                    <div data-aos="fade-right" data-aos-delay="400" class="d-flex justify-content-center d-block d-sm-none d-lg-block" data-aos="zoom-out" data-aos-delay="250">
                        <a href="https://www.facebook.com/Casa-de-Medio-Camino-Quer%C3%A9taro-Casa-Loohl-313251725496600/" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                            <span id="medium-posts-see-more">DESCUBRE NUESTRO PERFIL</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- {{-- @foreach($fb_posts as $post)
                    <div class="col-lg-4">
                        <div class="post-box p-0">
                            <div id="fb-root"></div>
                            {!! $post !!}
                        </div>
                    </div>
                @endforeach --}} -->
                <div class="col-12 col-lg-6 d-none d-sm-flex justify-content-center" data-aos="fade-left" data-aos-delay="200" style="height: 400px">
                    <!-- <div id="fb-root"></div> -->
                    <div class="post-box d-inline-block shadow-sm text-center">
                        {!! $fb_page !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= CONTACT US SECTION ======= -->
    <section id="contact" class="container">
        <h1 class="header text-center" data-aos="fade-up" data-aos-delay="100">
            <span class="underline">&nbsp;&nbsp;CONTÁCTANOS&nbsp;&nbsp;</span>
        </h1>
        <p class="subtitle text-center" data-aos="fade-up" data-aos-delay="200">Ponte en contacto con nosotros, nos encantaría saber de ti y apoyarte en lo que necesites.</p>

        <div class="row text-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone-fill" style="font-size: 3rem;"></i>
                        <br><br>
                        <p><a href="tel:{{$home->phone_1}}">{{$home->phone_1}}</a><br><a href="tel:{{$home->phone_2}}">{{$home->phone_2}}</a> </p>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-phone-fill" style="font-size: 3rem;"></i>
                        <br><br>
                        <p><a href="tel:+52{{$home->mobile_1}}">+52 {{$home->mobile_1}}</a><br><a href="+52{{$home->mobile_2}}">+52 {{$home->mobile_2}}</a></p>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-envelope-fill" style="font-size: 3rem;"></i>
                        <br><br>
                        <p><a href="mailto:{{$home->email}}">{{$home->email}}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= BACK TO TOP FLOATING BUTTON ======= -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- ======= WHATSAPP FLOATING BUTTON ======= -->
    <a href="https://api.whatsapp.com/send/?phone={{$home->whatsapp}}&text=Tengo%20una%20duda%20sobre%20la%20casa%20Loohl,%20%C2%BFme%20pueden%20ayudar%3F" class="whatsapp-bubble d-flex align-items-center justify-content-center">
        <i class="bi bi-whatsapp"></i>
    </a>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('/css/index_styles.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('/js/load_medium_posts.js') }}"></script>
    <script src="{{ asset('/js/scroll.js') }}"></script>
    <script>
        loadMediumPosts();
    </script>
@endpush
