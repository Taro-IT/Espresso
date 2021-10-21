@extends('layouts.app')

@section('title') Casa Medio Camino | ¿Quiénes somos? @endsection
@section('content')

    <!-- Carrousel -->
    <section id="carrousel" class="margin-navbar">
        <img class="d-block w-100" src="{{asset('images/slider-1.png')}}" alt="First slide">
    </section>

    <div class="container">

        <section id="quienes-somos" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>¿QUIÉNES SOMOS?</p>
                </header>
                <div class="row">
                    <div class="col-md-12 text-center subtitle">
                        Somos un grupo de psicólogos con experiencia en las áreas de trabajo social, clínico y de
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
                    </div>
                </div>

            </div>

        </section>

        <section id="testimonials" class="testimonials">

            <div class="container" data-aos="fade-up">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="profile mt-auto">
                                    <img src="{{asset('images/carrousel-1.jpg')}}" class="img-carrousel" alt="">

                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="profile mt-auto">
                                    <img src="{{asset('images/carrousel-2.png')}}" class="img-carrousel" alt="">

                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="profile mt-auto">
                                    <img src="{{asset('images/carrousel-3.jpg')}}" class="img-carrousel" alt="">
                                </div>
                            </div>
                        </div><!-- End testimonial item -->


                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section>
        <br><br><br>

        <section id="nuestra-filosofia" class="portfolio card shadow">

            <div class="container m-3" data-aos="zoom-out">
                <br><br>
                <header class="section-header">
                    <p>NUESTRA FILOSOFÍA</p>
                </header>
                <div class="row">
                    <div class="col-md-12 text-right subtitle">
                        <p>Brindamos a los pacientes de las herramientas necesarias para que estos sean capaces de
                            restablecer los vínculos sociales con familiares y amigos, a través de una atmósfera
                            comunitaria, cuyo pilar de trabajo es el de generar un espacio de bienestar y comodidad para
                            el huésped. </p>
                        <p>Por lo tanto, quienes integran la comunidad terapéutica tenemos la firme convicción de que el
                            trabajo dirigido y centrado en el paciente, debe ser interdisciplinario e integral para el
                            beneficio de éste y su familia. </p>
                        <p>Al ser un programa integral, contamos con talleres dirigidos para el huésped, que le permiten
                            revitalizar sus habilidades cognitivas, psicomotrices, intelectuales, afectivas y sociales,
                            lo que deriva en una reinserción social total.</p>
                    </div>
                </div>
                <br><br>
            </div>

        </section>

        <section id="nuestra-filosofia" class="portfolio">

            <div class="container m-3" data-aos="fade-in">
                <br><br>
                <header class="section-header">
                    <p>NUESTRA HISTORIA</p>
                </header>
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="medium-posts-header text-left font-weight-bold">
                            <span class="underline">&nbsp;&nbsp;¿De dónde surge nuestro nombre?&nbsp;&nbsp;</span>
                        </h2>
                        <p>Casa Loohl, recibe su nombre por su significado en maya que quiere decir “Flor”. Retomamos
                            nuestras raíces mexicanas, pero sobre todo, teniendo en cuenta que el eje de nuestro trabajo es
                            el de hacer crear una comunidad, trabajando de manera colaborativa y a través de un diálogo
                            abierto entre disciplinas (medicina, psicología, psicoterapia, terapia ocupacional y
                            sociología).</p>
                    </div>
                    <div class="col-md-4">
                        <img class="d-block img-fluid" src="/about_us/test_image_2.jpg" alt="image-girl">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <h2 class="medium-posts-header text-left font-weight-bold">
                            <span class="underline">&nbsp;&nbsp;¿Cómo surge Casa Loohl?&nbsp;&nbsp;</span>
                        </h2>
                        <p>Loohl, surge como iniciativa de un grupo de colegas psicólogos con experiencia en las áreas de
                            trabajo social, clínico y de investigación sobre pacientes con enfermedades mentales a partir de
                            la inquietud de que en México las enfermedades mentales son razón de exclusión social y por lo
                            tanto afectan a las familias y personas que han sido diagnosticadas psiquiátricamente.</p>
                    </div>
                </div>
                <br><br>
            </div>

        </section>
        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>CONOCE NUESTRO EQUIPO</p>
                </header>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>Conoce a las personas que hacen todo esto posible</p>

                        <p>Todos nuestros colaboradores son personas integras, comprometidos y apasionados por su trabajo</p>
                    </div>
                </div>
                <br><br>

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{asset('images/team-1.jpg')}}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Psiquiatra</span>
                                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{asset('images/team-2.jpg')}}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Enfermera</span>
                                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{asset('images/team-3.jpg')}}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>Doctor especialista</span>
                                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{asset('images/team-4.jpg')}}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Doctora especialista</span>
                                <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Team Section -->

    </div>



@endsection
