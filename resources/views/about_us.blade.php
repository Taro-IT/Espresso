<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Quiénes somos?</title>
    <!-- Boostrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Custom css -->
    <link rel="stylesheet" href="{{ asset('/css/about_us_styles.css') }}">
</head>
<body>
    <x-header>
        @yield('header')
    </x-header> 
    <div class="row-md">
        <img class="d-block img-fluid principal" src="/about_us/test_image_3.jpeg" alt="">
    </div>
    <br><br>
    <div class="container">
        <section>
            <h1 class="medium-posts-header text-center font-weight-bold">
                <span class="underline">&nbsp;&nbsp;¿Quiénes somos?&nbsp;&nbsp;</span>
            </h1>
            <p class="text-center subtitle pb-3">
                Somos un grupo de psicólogos con experiencia en las áreas de trabajo social, clínico y de investigación sobre el trabajo y seguimiento a pacientes con enfermedades mentales quienes tomamos iniciativa frente a la realidad social en México de las personas que han sido diagnosticadas con padecimientos psiquiátricos o que han tenido dificultades para reintegrarse a sus actividades sociales, familiares, ocupacionales después de una crisis. Con ello buscamos brindar un espacio de integración, interacción y de inclusión en un ambiente de aceptación y comunidad.
            </p>  
            <div class="container">
                <div class="carousel slide carrousel-sizing" id="main-carousel" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="/about_us/test_image_1.jpg" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="/about_us/test_image_2.jpg" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="/about_us/test_image_5.jpg" alt="">
                        </div>
                    </div><!-- /.carousel-inner -->
      
                    <a href="#main-carousel" class="carousel-control-prev" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="sr-only" aria-hidden="true">Prev</span>
                    </a>
                    <a href="#main-carousel" class="carousel-control-next" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="sr-only" aria-hidden="true">Next</span>
                    </a>
                </div><!-- /.carousel -->
            </div><!-- /.container -->
        </section>
        <br><br><br>

        <aside id="info-block">
            <section class="file-marker">
                <div>
                <div class="box-title">
                    <h1 class="medium-posts-header text-center font-weight-bold">
                        <span class="underline">&nbsp;&nbsp;NUESTRA FILOSOFÍA&nbsp;&nbsp;</span>
                    </h1>
                </div>
                <div class="box-contents">
                    <p>Brindamos a los pacientes de las herramientas necesarias para que estos sean capaces de restablecer los vínculos sociales con familiares y amigos, a través de una atmósfera comunitaria, cuyo pilar de trabajo es el de generar un espacio de bienestar y comodidad para el huésped. </p>
                    <p>Por lo tanto, quienes integran la comunidad terapéutica tenemos la firme convicción de que el trabajo dirigido y centrado en el paciente, debe ser interdisciplinario e integral para el beneficio de éste y su familia. </p>
                    <p>Al ser un programa integral, contamos con talleres dirigidos para el huésped, que le permiten revitalizar sus habilidades cognitivas, psicomotrices, intelectuales, afectivas y sociales, lo que deriva en una reinserción social total.</p>
                </div><!-- /.box-contents -->
                </div>
            </section>
        </aside>
        <br><br><br>

        <section>
            <h1 class="text-center">
                <span class="badge custom-title">NUESTRA HISTORIA</span>
            </h1>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <h2 class="medium-posts-header text-left font-weight-bold">
                        <span class="underline">&nbsp;&nbsp;¿De dónde surge nuestro nombre?&nbsp;&nbsp;</span>
                    </h2>
                    <p>Casa Loohl, recibe su nombre por su significado en maya que quiere decir “Flor”. Retomamos nuestras raíces mexicanas, pero sobre todo, teniendo en cuenta que el eje de nuestro trabajo es el de hacer crear una comunidad, trabajando de manera colaborativa y a través de un diálogo abierto entre disciplinas (medicina, psicología, psicoterapia, terapia ocupacional y sociología).</p>
                </div>
                <div class="col-md-4">
                    <img class="d-block img-fluid" src="/about_us/test_image_2.jpg" alt="">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <h2 class="medium-posts-header text-left font-weight-bold">
                        <span class="underline">&nbsp;&nbsp;¿Cómo surge Casa Loohl?&nbsp;&nbsp;</span>
                    </h2>
                    <p>Loohl, surge como iniciativa de un grupo de colegas psicólogos con experiencia en las áreas de trabajo social, clínico y de investigación sobre pacientes con enfermedades mentales a partir de la inquietud de que en México las enfermedades mentales son razón de exclusión social y por lo tanto afectan a las familias y personas que han sido diagnosticadas psiquiátricamente.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <img class="d-block img-fluid wide" src="/about_us/test_image_4.jpeg" alt="">
            </div>
        </section>
    </div>
    <br><br>
    <x-footer>
        @yield('footer')
    </x-footer>
    <!-- Bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>