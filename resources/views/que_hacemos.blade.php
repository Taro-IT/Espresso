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
                <img src="img/que_hacemos/cmc3.png" height="500px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/que_hacemos/moa2.jpg" height="500px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/que_hacemos/moa2b.jpg" height="500px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection