@extends('partials.layout')
@section('title', 'Home page')
@section('content')
<div class="container">
    <h1>Hello Laravel</h1>
    <button class="btn btn-primary">Click me</button>
    <div class="alert alert-primary" role="alert">
        A simple primary alert—check it out!
    </div>
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://placekitten.com/1280/960" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://placekitten.com/1280/961" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://placekitten.com/1280/962" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>
@endsection
