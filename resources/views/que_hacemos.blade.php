{{-- Extends the layout main page --}}
{{--@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('/css/about_us_styles.css') }}">
{{-- Starts web info deployment --}}
{{--@section('content')

{{-- Start the image carousel --}}

{{-- Code for carousel --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Qué Hacemos?</title>
    <!-- Boostrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Custom css -->
    <link rel="stylesheet" href="{{ asset('/css/que_hacemos_styles.css') }}">
</head>
<body>
    <x-header>
        @yield('header')
    </x-header> 

    {{-- Portrait Image --}}
    <div class="row-md">
        <img class="d-block img-fluid principal" src="/about_us/test_image_3.jpeg" alt="">
    </div>

    <br><br>
    <div class="container">
        <section>
            
            {{-- Start Main Title Section--}}
            <h1 class="medium-posts-header text-center font-weight-bold">
                <span class="underline">&nbsp;&nbsp;¿Qué hacemos?&nbsp;&nbsp;</span>
            </h1>
            <p class="text-center subtitle pb-3">
                Nuestro equipo de psicólogos y profesionales de la salud mental trabajan en conjunto 
                para dar seguimiento y atención personalizada a pacientes diagnosticados con alguna de las 
                siguientes enfermedades mentales:
            </p>
            {{-- End Main Title Section--}}
            
            {{-- List Items --}}
            
            <ul class="listSickness">
                <ul>
                    <li> Ezquizofrenia </li>
                    <li> Psicosis </li>
                    <li> Transtornos de ánimo alterado </li>
                    <li> Transtornos limítrofes de la personalidad </li>
                </ul>
            </ul>
            
            {{-- End List Items --}}

            {{-- Start redirect button "A que perosnas no atendemos" --}}
                
            <div class="container d-flex justify-content-end">
                <button class="btn" onclick="QuePersonasNoAtendemos()">
                    <strong><i class="expand">¿A qué personas no atendemos?</i></strong>
                </button>
            </div>
                

            <div id="NoAtendemos" class="col-12" style="display: none; margin-top:2em;">
                <h3 class="medium-posts-header text-left font-weight-bold">
                    <span class="underline">&nbsp;&nbsp;Personas que no podemos atender&nbsp;&nbsp;</span>
                </h3>
                <div class="row" style="margin-top:2em;">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <center> <img class="img-fluid" src="que_hacemos/no1.png" style="height: 50px; margin-bottom:1em;"></center>
                                </div>
                                <div class="col-6">
                                    <center> <img class="img-fluid" src="que_hacemos/no2.png" style="height: 50px; margin-bottom:1em;"></center>
                                </div>
                            </div>
                            </div>
                        
                        <p class="noAttendTitle"><strong> Personas con adicción </strong></p>
                        <p class="noAttend"> Las adicciones y enfermedades mentales se tratan de distinta manera.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="container">
                            <center> <img class="img-fluid" src="que_hacemos/no2.png" style="height: 50px; margin-bottom:1em;"></center>
                            </div>
                        <p class="noAttendTitle"><strong> Personas agresivas </strong></p>
                        <p class="noAttend"> Ponen en peligro la seguridad de los huéspedes y todas las personas dentro de la casa.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="container">
                            <center> <img class="img-fluid" src="que_hacemos/no2.png" style="height: 50px; margin-bottom:1em;"></center>
                            </div>
                        <p class="noAttendTitle"><strong> Personas que requieren infraestructura hospitalaria </strong></p>
                        <p class="noAttend"> No se cuenta con infraestructura hospitalaria.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="container">
                            <center> <img class="img-fluid" src="que_hacemos/no2.png" style="height: 50px; margin-bottom:1em;"></center>
                            </div>
                        <p class="noAttendTitle"><strong> Personas menores a 18 años </strong></p>
                        <p class="noAttend"> El tratamiento y seguimiento para personas en estas edades difiere del estilo en Casa Loohl. </p>
                    </div>
                </div>

                <div class="row" style="margin-top:2em;">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="container">
                            <center> <img class="img-fluid" src="que_hacemos/no3.png" style="height: 50px; margin-bottom:1em;"></center>
                            </div>
                        <p class="noAttendTitle"><strong> Personas con situaciones en crisis </strong></p>
                        <p class="noAttend">No contamos con el personal y espacio necesario para estabilizarlos y asi evitar el ambiente armonioso.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="container">
                            <center> <img class="img-fluid" src="que_hacemos/no3.png" style="height: 50px; margin-bottom:1em;"></center>
                            </div>
                        <p class="noAttendTitle"><strong> Personas con Síndrome de Down </strong></p>
                        <p class="noAttend"> El Síndrome de Down es una condición de salud por afección genético, no una enferemdad mental.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="container">
                            <center> <img class="img-fluid" src="que_hacemos/no3.png" style="height: 50px; margin-bottom:1em;"></center>
                            </div>
                        <p class="noAttendTitle"><strong> Personas sin diagnóstico </strong></p>
                        <p class="noAttend"> Para un correcto segumiento y tratamiento farmacológico para la estabilidad del paciente.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="container">
                            <center> <img class="img-fluid" src="que_hacemos/no3.png" style="height: 50px; margin-bottom:1em;"></center>
                            </div>
                        <p class="noAttendTitle"><strong> Personas mayores a 60 años </strong></p>
                        <p class="noAttend"> El tratamiento y seguimiento para personas en estas edades no se puede dar debido que requieren de una infraestructura y cuidados especializados que no forman parte del servicio que maneja la Comunidad. </p>
                    </div>
                    
                </div>
            </div>
            {{-- End redirect button "A que perosnas no atendemos" --}}
        </section>
        <br><br><br>

        {{-- Start Nuestras Formas de trabajo --}}
        <div class="container" style="background: #ffffff url('img/que_hacemos/tarosquare.png') no-repeat right bottom; padding-bottom:3em">
            <aside id="info-block">
                <section class="file-marker">
                    <div>
                        <div class="box-title">
                            <h1 class="medium-posts-header text-center font-weight-bold">
                                <span class="underline">&nbsp;&nbsp;NUESTRA FORMA DE TRABAJO&nbsp;&nbsp;</span>
                            </h1>
                        </div>
                        <div class="box-contents">
                            <p>Utilizamos el modelo terapeútico Casa de Medio Camino, un modelo integral para el tratamiento de la salud mental. En este modelo el paciente vive en una comunidad que les permite establecer puentes de interacción de manera controlada y segura, aprender de manera colaborativa y hacerse responsable de sus acciones.  </p>
                            <p>Esta forma de atención es una alternativa que se distingue de las instituciones de hospitalización psquiátrica convencionales por el seguimiento continuo y personalizado al tratamiento de cada paciente, así como por la introducción a una comunidad terapeútica.</p>
                        
                        </div><!-- /.box-contents -->
                    </div>
                </section>
            </aside>
        </div>
        {{-- End Nuestras Formas de trabajo--}}
        <br><br><br>


        {{-- Start Nuestros Servicios--}}
        <section>
            <h1 class="text-center">
                <span class="badge custom-title">NUESTROS SERVICIOS</span>
            </h1>
            
            <p class="text-center subtitle pb-3"><strong>Casa Loohl </strong> residencia con <strong>atención personalizada</strong> y <strong>seguimiento</strong> por parte de profesionales de la salud las<strong> 24 horas del dia los 7 dias de la semana</strong>.</p>
            <p class="subtitle" style="margin-left:.5em">Características:</p>
                
            {{-- List Items --}}
            <ul class="listSickness">  
                <ul class="text-justify">
                    <li> Modalidad proyectada para periodos prolongados, con un periodo minimo sugerido de 4 meses de estadia. </li>
                    <li> El huésped realiza actividades en comunidad para fortalecer sus habilidades interpersonales. </li>
                    <li> El huésped realiza actividades de manera individual que le pemiten sentise independiente y enfoca su enegia en cosas de su total agrado. </li>
                    <li> En la casa se cuentan con reglas definidas paa lograr un ambiente armonioso y una sana convicencia. </li> 
                </ul>    
            </ul>
            {{-- End List Items --}}
            <br><br>

            {{-- Carousel of Images & description --}}
            <div class="container">
                <div class="row">
                    {{-- Carousel --}}
                    <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="carousel slide carrousel-sizing" id="main-services" data-ride="carousel">
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
                
                                <a href="#main-services" class="carousel-control-prev" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                    <span class="sr-only" aria-hidden="true">Prev</span>
                                </a>
                                <a href="#main-services" class="carousel-control-next" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                    <span class="sr-only" aria-hidden="true">Next</span>
                                </a>
                            </div><!-- /.carousel -->         
                    </div>
                    {{-- End Carousel --}}

                    {{-- Description --}}
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <h5 style="text-align: center; margin:5em; margin-top:3em;">Todos los espacios de Casa Loohl están diseñados para brindar comodidad y seguridad a los pacientes haciéndolos sentir como si estuvieran en casa.</h5>
                    </div>
                    {{-- End Description --}}

                    {{-- Info Point --}}
                    <div class="col-12">
                        <p><img src="que_hacemos/info.png" style="width:2.5%; align:right;"><span style="margin-left: 1em"></span> <i class="infoLegend">Actualmente, Casa Loohl está acondicionada para recibir un máximo de 12 huéspedes.</i> </p>
                    </div>

                </div>
            </div>
        </section>
        <br><br><br>

        {{-- Agenda --}}
        <section>
            <h1 class="medium-posts-header font-weight-bold">
                <span class="underline">&nbsp;&nbsp;Un día en Casa Loohl&nbsp;&nbsp;</span>
            </h1>
            <br>
            <div class="row">
                {{-- List Items --}}
                <div class="borderAgenda col-sm-12 col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-12">
                            <ul style="list-style: none;">
                                <li style="margin:1em;"> <a class="borderClock rounded"> <strong>8:00 - 9:00</strong></a><span style="margin-left:3.2em">Higiene personal</span> </li>
                                <li style="margin:1em;"> <a class="borderClock rounded"> <strong>9:00 - 9:30</strong></a><span style="margin-left:3.2em">Preparación de alimentos</span> </li>
                                <li style="margin:1em;"> <a class="borderClock rounded"> <strong>9:30 - 10:00</strong></a><span style="margin-left:2.6em">Desayuno</span> </li>
                                <li style="margin:1em;"><a class="borderClock rounded"> <strong>10:30 - 11:00</strong></a><span style="margin-left:2em">Apoyo en actividades de limpieza</span> </li>
                                <li style="margin:1em; margin-top:1em;" ><a class="borderClock rounded"> <strong>11:00 - 13:00</strong></a><span style="margin-left:2em"><strong>Talleres de la comunidad</strong></span><br><span style="margin-left:12.5em "> Espacio para actividades individuales.</span> </li>
                                <li style="margin:1em; margin-top:1em;" ><a class="borderClock rounded"><strong>13:00 - 14:00</strong></a><span style="margin-left:2em">Preparación de alimentos</span> </li>
                                <li style="margin:1em;"> <a class="borderClock rounded"> <strong>14:00 - 15:00</strong></a><span style="margin-left:2em">Comida</span> </li>  
                            </ul>
                        </div>
                    </div>               
                </div>
                
                <div class="borderAgenda col-sm-12 col-md-12 col-lg-6">
                    <div class="row">
                        <div class="row">
                            <div class="col-12">
                                <ul style="list-style: none;">
                                    <li style="margin:1em;"> <a class="borderClock rounded"> <strong>15:00 - 16:00</strong></a></a><span style="margin-left:2em">Apoyo en actividades de limpieza</span> </li>
                                    <li style="margin:1em;"> <a class="borderClock rounded"> <strong>16:00 - 19:00</strong></a><span style="margin-left:2em"><strong>Talleres de la comunidad</strong></span><br><span style="margin-left:12.5em "> Espacio para actividades individuales.</span> </li>
                                    <li style="margin:1em;"> <a class="borderClock rounded">  <strong>19:00 - 19:45</strong></a><span style="margin-left:2em">Preparación de alimentos</span> </li>
                                    <li style="margin:1em;"><a class="borderClock rounded">  <strong>19:45 - 20:15</strong></a><span style="margin-left:2em">Cena</span> </li>
                                    <li style="margin:1em; margin-top:1em;" ><a class="borderClock rounded"><strong>20:15 - 21:30</strong></a><span style="margin-left:2em"><span>Actividades de ocio</span> </li>
                                    <li style="margin:1em; margin-top:1em;" ><a class="borderClock rounded"><strong>21:30 - 22:00</strong></a><span style="margin-left:2em">Higiene personal</span> </li>  
                                </ul>
                            </div>
                        </div> 
                    </div> 
                             
                </div>
                {{-- End List Items --}}
            </div>
            <div class="d-flex justify-content-end">
                <img class="img-fluid" src="que_hacemos/info.png" style="width:2.5%;" data-bs-toggle="tooltip" data-bs-placement="top" title="Los horarios pueden varia según sea agendado.">
            </div>
        </section>
        <br><br><br>
        {{-- End Nuestros Servicios--}}

        {{-- Start Talleres y actividades--}}
        <section>
            <h1 class="medium-posts-header text-center font-weight-bold">
                <span class="underline">&nbsp;&nbsp;Talleres y Actividades&nbsp;&nbsp;</span>
            </h1>
            <br>
            <p class="subtitle text-center">
                Los talleres que realizamos en Casa Loohl están dirigidos a contrarestar la sintomatología negativa que presentan los huéspedes, guiándolos en el fortalecimiento de sus habilidades sociales y cognitivas que le permita tener un mejor funcionamiento en su ámbito familiar y social. 
            </p> 
            <br><br>
            <div class="row">
                <div class="col-12">
                    <div id="talleresActividades" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
    
                                    <div class="col-md-4 mb-3" >
                                        <div class="card cardActivity">
                                            <h4 class="card-title d-flex justify-content-center">Taller 1</h4>
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body">
                                                
                                                <p class="card-text">descripción breve del taller</p>
    
                                            </div>
    
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card cardActivity">
                                            <h4 class="card-title d-flex justify-content-center">Taller 2</h4>
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body">
                                                
                                                <p class="card-text">descripción breve del taller</p>
    
                                            </div>
    
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card cardActivity">
                                            <h4 class="card-title d-flex justify-content-center">Taller 3</h4>
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body">
                                                
                                                <p class="card-text">descripción breve del taller</p>
    
                                            </div>
    
                                        </div>
                                    </div>
    
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
    
                                    <div class="col-md-4 mb-3" >
                                        <div class="card cardActivity">
                                            <h4 class="card-title d-flex justify-content-center">Taller 4</h4>
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body">
                                                
                                                <p class="card-text">descripción breve del taller</p>
    
                                            </div>
    
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card cardActivity">
                                            <h4 class="card-title d-flex justify-content-center">Taller 5</h4>
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body">
                                                
                                                <p class="card-text">descripción breve del taller</p>
    
                                            </div>
    
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card cardActivity">
                                            <h4 class="card-title d-flex justify-content-center">Taller 6</h4>
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body">
                                                
                                                <p class="card-text">descripción breve del taller</p>
    
                                            </div>
    
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                        </div>

                        <div>
                            <a href="#talleresActividades" class="carousel-control-prev" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                                <span class="sr-only" aria-hidden="true">Prev</span>
                            </a>
                            <a href="#talleresActividades" class="carousel-control-next" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                                <span class="sr-only" aria-hidden="true">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


</body>
<br><br>
    <x-footer>
        @yield('footer')
    </x-footer>
    <!-- Bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script>
        function QuePersonasNoAtendemos() {
          var x = document.getElementById("NoAtendemos");
          if (x.style.display === "none") {
            x.style.display = "block";
          } else {
            x.style.display = "none";
          }
        }
        </script>
</body>
</html>