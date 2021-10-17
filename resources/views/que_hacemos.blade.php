{{-- Extends the layout main page --}}
@extends('layouts.app')

{{-- Starts web info deployment --}}
@section('content')

{{-- Start the image carousel --}}

<div class="row">
    <div class="col-12">
    {{-- Code for carousel --}}
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            {{--<div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>--}}
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/que_hacemos/cmc3.png" height="500px" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                </div>
                <div class="carousel-item">
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
                                    font-size: 11px; 
                                    background-color:#EAE3F2;
                                    text-align:center; 
                                    display:inline-block; 
                                    margin-top:5em; 
                                    color:black;
                                    text-decoration: none;  
                                    box-shadow: 3.5px 2px;
                                    padding:.2em"
                                    ><strong>¿A qué personas no atendemos?</strong>
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