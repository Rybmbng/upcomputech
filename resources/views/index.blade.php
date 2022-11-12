@extends('layouts.app')

@section('content')
      <div class="container-content">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
          aria-label="Slide 5"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
          <img src="/assets/corausel/1.png" class="d-block w-100" alt="home">
          <div class="carousel-caption d-none d-md-block">

          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="/assets/corausel/2.png" class="d-block w-100" alt="Service">
          <div class="carousel-caption d-none d-md-block">

          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="/assets/corausel/3.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">

          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="/assets/corausel/4.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="/assets/corausel/5.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <h2 style="font-weight: bolder; color:white;" class="judul">Layanan Kami</h2>
  <div class="cards flex-center">
    <div class="card bg-dark">
      <img src="/assets/icon/service.png" class="logo-card" style="width: 70px; height: 70px;" />
      <a href="/service" class="jasa">Service Laptop/Komputer</a>
      <p class="pjasa">Melayani jasa Service Komputer...</p>
    </div>

    <div class="card bg-dark">
      <img src="/assets/icon/design.png" class="logo-card" style="width: 70px; height: 70px;" />
      <a href="/design" class="jasa">Design Grafis</a>
      <p class="pjasa">Melayani jasa Design Grafis...</p>
    </div>

    <div class="card bg-dark">
      <img src="/assets/icon/joki.png" class="logo-card" style="width: 70px; height: 70px;" />
      <a href="/joki" class="jasa">Jasa Joki</a>
      <p class="pjasa">Melayani jasa joki tugas atau alat...</p>
    </div>

    <div class="card bg-dark">
      <img src="/assets/icon/print.png" class="logo-card" style="width: 70px; height: 70px;" />
      <a href="/printing" class="jasa">Jasa Printing</a>
      <p class="pjasa">Melayani jasa print tugas atau spanduk...</p>
    </div>
  </div>
@endsection