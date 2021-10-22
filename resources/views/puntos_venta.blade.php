@extends('layouts.app')

@section('title') Casa Medio Camino | Puntos de venta @endsection
@section('content')

<section id="carrousel" class="margin-navbar">
        <img class="d-block w-100" src="{{asset('images/slider-1.png')}}" alt="First slide">
</section>

<section class="container">
    <h1 class="header text-center" data-aos="fade-up" data-aos-delay="100">
        <span class="underline">&nbsp;&nbsp;NUESTROS PUNTOS DE VENTA&nbsp;&nbsp;</span>
    </h1>
    <p class="subtitle text-center pb-3" data-aos="fade-up" data-aos-delay="200">
        Apoya a nuestros huéspedes y sus familiares comprando productos físicos en cualquiera de nuestros puntos de venta.
        Las ganancias de cada artículo nos permiten seguir con nuestra labor, motivar a los huéspeded y eliminar poco a poco el estigme sobre las enfermedades mentales.
    </p>  
</section>
@endsection