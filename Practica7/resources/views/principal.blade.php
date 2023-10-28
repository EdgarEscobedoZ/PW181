@extends('layouts.plantilla')

@section('contenido')

<h1 class="display-1 text-center text-success mt-4">HOME</h1>

<div class="container mb-5 mt-5">
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img width="500" height="600" src="https://imagenes.elpais.com/resizer/pMEP2Jr2mFafotuOjLog8GhgnkI=/1200x0/filters:focal(2790x795:2800x805)/cloudfront-eu-central-1.images.arcpublishing.com/prisa/5KBHYD62GBEZRDDYFC3MXO2WDY.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img width="500" height="600" src="https://imagenes.elpais.com/resizer/Cdagm9W-167QYWatZJuYG4mVk-w=/1200x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/DJFDSQ5D7VEUBGMJG2OZAAZPFQ.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img width="500" height="600" src="https://imagenes.elpais.com/resizer/eo-siCsMZ70v9EQEjNO9jYVvVks=/980x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/YA3TZASXBJF7TFGGLCSTYY6E7U.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
@endsection