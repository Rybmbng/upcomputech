@extends('layouts.app')

@section('content')
  
<div class="container-corausel" <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/assets/img/pictures/designer.jpg" class="d-block w-100" alt="gambar-service">
    </div>
    <div class="carousel-item">
      <img src="/assets/img/pictures/designer.jpg" class="d-block w-100" alt="gambar-install">
    </div>
    <div class="carousel-item">
      <img src="/assets/img/pictures/designer.jpg" class="d-block w-100" alt="gambar-cleanlaptop">
    </div>
  </div>
</div>
</div>

<div class="cards-jasa">
  <div class="card-jasa">
    <div class="judul-jasa">
      <h2>Service Komputer / Laptop</h2>
    </div>
    <p class="p-jasa">UPComputech Menyediakan layanan jasa service komputer kepada anda semua.</p>
    <p class="p-jasa">Beberapa problem Komputer yang bisa kami tangani yaitu:</p>
    <li>Tidak bisa loading Windows (Crash)</li>
    <li>Komputer mengeluarkan bunyi beep secara terus menerus</li>
    <li>Lupa password windows</li>
    <li>Kinerja komputer menjadi lambat</li>
    <li>Komputer sering hang</li>
    <li>Windows corrupt / blue screen</li>
    <li>Komputer tiba-tiba restart sendiri</li>
    <li>Restore file hilang</li>
    <li>dan lain-lain</li>
  </div>
</div>
@endsection