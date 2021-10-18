{{-- Extends the layout main page --}}
@extends('layouts.app')

{{-- Starts web info deployment --}}
@section('content')

{{-- Start the image carousel --}}

{{-- Code for carousel --}}
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    {{--<div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>--}}
    <div class="carousel-inner">
        <div class="carousel-item">
        <img src="img/que_hacemos/cmc3.png" height="500px" class="d-block w-100 img-fluid" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
        </div>
        </div>
        <div class="carousel-item active">
        <img src="img/que_hacemos/moa2.jpg" height="500px" class="d-block w-100 img-fluid" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="img/que_hacemos/moa2b.jpg" height="500px" class="d-block w-100 img-fluid" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
        </div>
        </div>
    </div>
</div>

{{--End Carousel--}}

{{-- Start of the main content --}}
<div class="container">
    {{-- Start Main Title Section--}}
    <div class="row">
        <div class="col-3">
        </div>
        <div class="col-6">
            <div style="background: linear-gradient(180deg, #ffffff 85%, #EAE3F2 15%);">
                <h1 style="text-align:center; padding-top:1em;"> ¿QUÉ HACEMOS? </h1>
            </div>
        </div>
        <div class="col-3">
        </div>
    </div>
    {{-- End Main Title Section--}}


    {{-- Start paragraph "enfermedades mentales" --}}
    <div class="container" style="margin: 2em;">
        <div class="row">
            <div class="col-12">
                <p style="text-align:center; padding-top:1em;">
                    Nuestro equipo de psicólogos y profesionales de la salud mental trabajan en conjunto 
                    para dar seguimiento y atención personalizada a pacientes diagnosticados con alguna de las 
                    siguientes enfermedades mentales: 
                </p>            
            </div>
            {{-- List Items --}}
            <div class="col-9">
                <ul>
                    <strong>
                    <li> Ezquizofrenia </li>
                    <li> Psicosis </li>
                    <li> Transtornos de ánimo alterado </li>
                    <li> Transtornos limítrofes de la personalidad </li>
                    </strong>
                </ul>  
            </div>
            {{-- End List Items --}}

            {{-- Start redirect button "A que perosnas no atendemos" --}}
            <div class="col-3">
                <div class="container">
                   <button class="btn" onclick="QuePersonasNoAtendemos()" style="
                                    font-size: 13px; 
                                    background-color:#EAE3F2;
                                    text-align:center; 
                                    display:inline-block; 
                                    margin-top:5em; 
                                    color:black;
                                    text-decoration: none;  
                                    box-shadow: 3.5px 2px;
                                    padding:.2em"
                                    ><strong><i>¿A qué personas no atendemos?</i></strong>
                    </button>
                </div>
            </div>

            <div id="NoAtendemos" class="col-12" style="display: none; margin-top:1em;">
                <h2>PERSONAS QUE NO PODEMOS ATENDER</h2>
                <div class="row" style="margin-top:2em;">
                    <div class="col-3">
                        <div class="container">
                           <center> <img class="img-fluid" src="img/que_hacemos/no.png" style="height: 50px; margin-bottom:1em;"></center>
                        </div>
                        
                        <p style="text-align: center;"><strong> Personas con adicción </strong></p>
                        <p style="text-align: center;"> Las adicciones y enfermedades mentales se tratan de distinta manera.</p>
                    </div>
                    <div class="col-3">
                        <div class="container">
                            <center> <img class="img-fluid" src="img/que_hacemos/no.png" style="height: 50px; margin-bottom:1em;"></center>
                         </div>
                        <p style="text-align: center;"><strong> Personas agresivas </strong></p>
                        <p style="text-align: center;"> Ponen en peligro la seguridad de los huéspedes y todas las personas dentro de la casa.</p>
                    </div>
                    <div class="col-3">
                        <div class="container">
                            <center> <img class="img-fluid" src="img/que_hacemos/no.png" style="height: 50px; margin-bottom:1em;"></center>
                         </div>
                        <p style="text-align: center;"><strong> Personas menores a 18 años </strong></p>
                        <p style="text-align: center;"> El tratamiento y seguimiento para personas en estas edades difiere del estilo en Casa Loohl. </p>
                    </div>
                    <div class="col-3">
                        <div class="container">
                            <center> <img class="img-fluid" src="img/que_hacemos/no.png" style="height: 50px; margin-bottom:1em;"></center>
                         </div>
                        <p style="text-align: center;"><strong> Personas mayores a 60 años </strong></p>
                        <p style="text-align: center;"> El tratamiento y seguimiento para personas en estas edades no se puede dar debido que requieren de una infraestructura y cuidados especializados que no forman parte del servicio que maneja la Comunidad. </p>
                    </div>
                    </div>

                <div class="row" style="margin-top:2em;">
                    <div class="col-3">
                        <div class="container">
                            <center> <img class="img-fluid" src="img/que_hacemos/no.png" style="height: 50px; margin-bottom:1em;"></center>
                         </div>
                        <p style="text-align: center;"><strong> Personas con situaciones en crisis </strong></p>
                        <p style="text-align: center;">No contamos con el personal y espacio necesario para estabilizarlos y asi evitar el ambiente armonioso.</p>
                    </div>
                    <div class="col-3">
                        <div class="container">
                            <center> <img class="img-fluid" src="img/que_hacemos/no.png" style="height: 50px; margin-bottom:1em;"></center>
                         </div>
                        <p style="text-align: center;"><strong> Personas con Síndrome de Down </strong></p>
                        <p style="text-align: center;"> El Síndrome de Down es una condición de salud por afección genético, no una enferemdad mental.</p>
                    </div>
                    <div class="col-3">
                        <div class="container">
                            <center> <img class="img-fluid" src="img/que_hacemos/no.png" style="height: 50px; margin-bottom:1em;"></center>
                         </div>
                        <p style="text-align: center;"><strong> Personas sin diagnóstico </strong></p>
                        <p style="text-align: center;"> Para un correcto segumiento y tratamiento farmacológico para la estabilidad del paciente.</p>
                    </div>
                    <div class="col-3">
                        <div class="container">
                            <center> <img class="img-fluid" src="img/que_hacemos/no.png" style="height: 50px; margin-bottom:1em;"></center>
                         </div>
                        <p style="text-align: center;"><strong> Personas que requieren infraestructura hospitalaria </strong></p>
                        <p style="text-align: center;"> No se cuenta con infraestructura hospitalaria.</p>
                    </div>
                </div>
            </div>

            </div>
            {{-- End redirect button "A que perosnas no atendemos" --}}

        </div>
    </div>

    {{-- End section personas que no atendemos--}}


    {{-- Start Nuestras Formas de trabajo--}}
    <div class="container" style="background-color: blue;">
        <br>
        <br>
    </div>
    {{-- End Nuestras Formas de trabajo--}}

    {{-- Start Nuestros Servicios--}}
    <div class="container " style="margin-top:1em">
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col-4">
                <div class="border border-secondary border-2 rounded" style="background:#EAE3F2;  ">
                    <h3 style="text-align:center; margin-top:.25em "> NUESTROS SERVICIOS </h3>
                </div>
            </div>
            <div class="col-4">
            </div>
        </div>

        <div class="container" style="margin: 2em;">
            <div class="row">
                <div class="col-12">
                    <p style="text-align: center; margin-top:1em;"><strong>Casa Loohl </strong> resindencia con <strong>atención personalizada</strong> y <strong>seguimiento</strong> por parte de profesionales de la salud las<strong> 24 horas del dia los 7 dias de la semana</strong>.</p>
                    <strong><p>Características: </p></strong>           
                </div>
                {{-- List Items --}}
                <div class="col-12">
                    <ul>
                        <li> Modalidad proyectada para periodos prolongados, con un periodo minimo sugerido de 4 meses de estadia. </li>
                        <li> El huésped realiza actividades en comunidad para fortalecer sus habilidades interpersonales. </li>
                        <li> El huésped realiza actividades de manera individual que le pemiten sentise independiente y enfoca su enegia en cosas de su total agrado. </li>
                        <li> En la casa se cuentan con reglas definidas paa lograr un ambiente armonioso y una sana convicencia. </li> 
                    </ul> 
                </div>
                {{-- End List Items --}}

            </div>
        </div>

        {{-- Carousel of Images & description --}}
        <div class="container" style="margin: 2em;">
            <div class="row">
                {{-- Carousel --}}
                <div class="col-6">
                    <div id="nuestrosservicios" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="img/que_hacemos/cmc3.png" height="500px" class="d-block w-100 img-fluid" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="img/que_hacemos/moa2.jpg" height="500px" class="d-block w-100 img-fluid" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="img/que_hacemos/moa2b.jpg" height="500px" class="d-block w-100 img-fluid" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#nuestrosservicios" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#nuestrosservicios" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>          
                </div>
                 {{-- End Carousel --}}

                {{-- Description --}}
                <div class="col-6">
                    <h5 style="text-align: center; margin:5em; margin-top:3em;">Todos los espacios de Casa Loohl están diseñados para brindar comodidad y seguridad a los pacientes haciéndolos sentir como si estuvieran en casa.</h5>
                </div>
                {{-- End Description --}}

                {{-- Info Point --}}
                <div class="col-12">
                    <p><img src="img/que_hacemos/info.png" style="width:2%; align:right;"><span style="margin-left: 1em"></span> <i>Actualmente, Casa Loohl está acondicionada paa recibir un máximo de 12 huéspedes.</i> </p>
                </div>

            </div>
        </div>

    </div>
    {{-- End Nuestros Servicios--}}

    {{-- Start Un dia en casa Loohl--}}
    <div class="container " style="margin-top:1em">
        <div class="row"><div class="col-4">
                <div style="background: linear-gradient(180deg, #ffffff 85%, #EAE3F2 15%); width:10em:">
                    <h3 style="text-align:left; margin-top:.25em "> UN DÍA EN CASA LOOHL</h3>
                </div>
            </div>  
        </div>

        <div class="container" style="margin: 1em;">
            <div class="row">
                {{-- List Items --}}
                <div class="border-start border-secondary border-2 col-6">
                        <div class="row">
                            <div class="col-6">
                                <ul style="list-style: none;">
                                    <li style="margin:1em; "> <a class="border border-secondary border-2 rounded" style="background-color: #EAE3F2; padding-left:2em; padding-right:2em; text-decoration:none; color:black;"> <strong>8:00 - 9:00</strong></a> </li>
                                    <li style="margin:1em;" > <a class="border border-secondary border-2 rounded" style="background-color: #EAE3F2; padding-left:2em; padding-right:2em; text-decoration:none; color:black;"> <strong>9:00 - 9:30</strong></a> </li>
                                    <li style="margin:1em;" > <a class="border border-secondary border-2 rounded" style="background-color: #EAE3F2; padding-left:1.7em; padding-right:1.7em; text-decoration:none; color:black;"> <strong>9:30 - 10:00</strong></a> </li>
                                    <li style="margin:1em; margin-top:2em;" > <a class="border border-secondary border-2 rounded" style="background-color: #EAE3F2; padding-left:2em; padding-right:2em; text-decoration:none; color:black;"> <strong>10:30 - 11:00</strong></a> </li>
                                    <li style="margin:1em; margin-top:2em;" > <a class="border border-secondary border-2 rounded" style="background-color: #EAE3F2; padding-left:2em; padding-right:2em; text-decoration:none; color:black;"> <strong>11:00 - 13:00</strong></a> </li>
                                    <li style="margin:1em; margin-top:2em;" > <a class="border border-secondary border-2 rounded" style="background-color: #EAE3F2; padding-left:2em; padding-right:2em; text-decoration:none; color:black;"> <strong>13:00 - 14:00</strong></a> </li>
                                    <li style="margin:1em; margin-top:1em;"> <a class="border border-secondary border-2 rounded" style="background-color: #EAE3F2; padding-left:2em; padding-right:2em; text-decoration:none; color:black;"> <strong>14:00 - 15:00</strong></a> </li>  
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul style="list-style: none;">
                                    <li style="margin:1em; "> Higiene personal</li>
                                    <li style="margin:1em; "> Preparación de alimentos</li>
                                    <li style="margin:1em; "> Desayuno</li>
                                    <li style="margin:1em; "> Apoyo en actividades de limpieza</li>
                                    <li style="margin:1em; "> <strong>Talleres de la comunidad</strong> Espacio para actividades individuales.</li>
                                    <li style="margin:1em; "> Preparación de alimentos</li>
                                    <li style="margin:1em; "> Comida</li>
                                </ul>
                            </div>
                        
                    </div> 
                             
                </div>
                
                <div class="border-start border-secondary border-2 col-6">
                   
                        <div class="row">
                            <div class="col-6">
                                <ul style="list-style: none;">
                                    <li style="margin:1em; margin-top:2em;"> <a class="border border-secondary border-2 rounded" style="background-color: #EAE3F2; padding-left:2em; padding-right:2em; text-decoration:none; color:black;"> <strong>15:00 - 16:00</strong></a> </li>
                                    <li style="margin:1em; margin-top:3em;" > <a class="border border-secondary border-2 rounded" style="background-color: #EAE3F2; padding-left:2em; padding-right:2em; text-decoration:none; color:black;"> <strong>16:00 - 19:00</strong></a> </li>
                                    <li style="margin:1em;margin-top:3em;" > <a class="border border-secondary border-2 rounded" style="background-color: #EAE3F2; padding-left:2em; padding-right:2em; text-decoration:none; color:black;"> <strong>19:00 - 19:45</strong></a> </li>
                                    <li style="margin:1em;margin-top:1em;" > <a class="border border-secondary border-2 rounded" style="background-color: #EAE3F2; padding-left:2em; padding-right:2em; text-decoration:none; color:black;"> <strong>19:45 - 20:15</strong></a> </li>
                                    <li style="margin:1em;" > <a class="border border-secondary border-2 rounded" style="background-color: #EAE3F2; padding-left:2em; padding-right:2em; text-decoration:none; color:black;"> <strong>20:15 - 21:30</strong></a> </li>
                                    <li style="margin:1em;" > <a class="border border-secondary border-2 rounded" style="background-color: #EAE3F2; padding-left:2em; padding-right:2em; text-decoration:none; color:black;"> <strong>21:30 - 22:00</strong></a> </li> 
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul style="list-style: none;">
                                    <li style="margin:1em; "> Apoyo en actividades de limpieza</li>
                                    <li style="margin:1em; "> <strong>Talleres de la comunidad</strong> Espacio para actividades individuales. Salidas grupales.</li>
                                    <li style="margin:1em; "> Preparación de alimentos</li>
                                    <li style="margin:1em; "> Cena</li>
                                    <li style="margin:1em; "> Actividades de ocio</li>
                                    <li style="margin:1em; "> Higiene personal</li>
                                </ul>
                            </div>
                        
                    </div> 
                             
                </div>
                {{-- End List Items --}}

            </div>
        </div>

    
    </div>
    {{-- End Un dia en casa Loohl--}}

    {{-- Start Talleres y actividades--}}
    {{-- End Talleres y actividades--}}
   


</div>

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

@endsection