<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UPComputech</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/about_style.css">
  <link rel="stylesheet" href="css/style_jasa.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="assets/style.css">
  <link rel="shortcut icon" href="assets/icon/logo.png" />


</head>

<body background="/assets/bg/cool-background.png">
  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/" style="color: white; font-weight:bolder">UPComputech</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/" style="color: white; font-weight: bolder;">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
              style="color: white;">
              Fitur
            </a>
            <ul class="dropdown-menu bg-dark">
              <li><a class="dropdown-item" href="/service" style="color: white;">Service Laptop/Komputer</a></li>
              <li><a class="dropdown-item" href="/design" style=" color: white;">Design Grafis</a></li>
              <li><a class="dropdown-item" href="/printing" style="color: white;">Jasa Printing</a></li>
              <li><a class="dropdown-item" href="/joki" style="color: white;">Joki Tugas</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about" style="color: white;">About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    @yield('content')
  
  <div class="col-10"></div>
  <hr />
  <div class="container-footer">
    <div class="cards-footer">
      <div class="card-footer">
        <div class="judul-footer">TENTANG KAMI</div>
        <p class="p-footer">UPComputech adalah layanan yang disediakan untuk umum dari kami mahasiswa sistem komputer
          UPI YPTK Padang.</p>
        <p class="p-footer">Kami siap membantu Anda untuk jasa diatas baik dari segala masalah anda.</p>
      </div>

      <div class="card-footer">
        <div class="judul-footer">LAYANAN KAMI</div>
        <li><a href="/service" class="layanan">Service Komputer</a></li>
        <li><a href="/design" class="layanan">Design Grafis</a></li>
        <li><a href="/joki" class="layanan">Joki Tugas</a></li>
        <li><a href="/printing" class="layanan">Jasa Printing</a></li>
      </div>

      <div class="card-footer">
        <div class="judul-footer">HUBUNGI KAMI</div>
        <p class="p-footer">Gang MTI No 19, Depan UPI YPTK Padang.</p>
        <p>Hubungi Kontak Kami : </p>
        <li class="layanan">Kontak 1 : 085263418202</li>
        <li class="layanan">Kontak 2 : 085356629465</li>
        <a href="https://wa.me/6285263418202?text=Halo%20Admin"><img src="assets/icon/wa.png" class="contact layanan"
            alt="logo-wa" />
        </a>
      </div>

    </div>
</body>

</html>