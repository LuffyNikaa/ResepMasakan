<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ATWON WEBSITE</title>
    <link class="icon" rel="icon" type="img/png" href="Image/icon.png">
    <link href="CSS/bootstrap.css" rel="stylesheet">
    <link href="CSS/index1.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="Image/Logo.png" alt="Logo" width="70" height="70">
        </a>    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/resep">Resep</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/artikel">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/favorit">Favorit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login">Masuk</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> 
            <button class="btn" type="submit"><i class="bi bi-search"></i></button>
          </form>    
        </div>
      </div>
    </nav>
  
    <section class="home text-center" id="home">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-slide="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Image/14.bubur_ayam.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Image/2.ayam_cabe.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Image/3.sate_kulitayam.jpg" class="d-block w-100" alt="...">
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
    </section>

    <div class="gallery">
      <div class="gallery-item">
          <img src="Image/1.nasgor.jpg" alt="Gambar 1">
          <div class="caption">Nasi Goreng</div>
      </div>
      <div class="gallery-item">
          <img src="Image/2.ayam_cabe.jpg" alt="Gambar 2">
          <div class="caption">Ayam Cabe</div>
      </div>
      <div class="gallery-item">
          <img src="Image/3.sate_kulitayam.jpg" alt="Gambar 3">
          <div class="caption">Sate Kulit Ayam</div>
      </div>
      <!-- Tambahkan item galeri sesuai kebutuhan -->
  </div>
  <div class="gallery">
    <div class="gallery-item">
        <img src="Image/4.ayam_geprek.jpg" alt="Gambar 1">
        <div class="caption">Ayam Geprek</div>
    </div>
    <div class="gallery-item">
        <img src="Image/5.ayam_goreng.jpg" alt="Gambar 2">
        <div class="caption">Ayam Goreng</div>
    </div>
    <div class="gallery-item">
        <img src="Image/6.ayam_fillet.jpg" alt="Gambar 3">
        <div class="caption">Ayam Fillet</div>
    </div>
    <!-- Tambahkan item galeri sesuai kebutuhan -->
</div>
<div class="gallery">
  <div class="gallery-item">
      <img src="Image/7.oseng_buncis.png" alt="Gambar 1">
      <div class="caption">Oseng Buncis</div>
  </div>
  <div class="gallery-item">
      <img src="Image/8.rendang_jengkol.jpg" alt="Gambar 2">
      <div class="caption">Rendang Jengkol</div>
  </div>
  <div class="gallery-item">
      <img src="Image/9.kentang_balado.jpg" alt="Gambar 3">
      <div class="caption">Kentang Balado</div>
  </div>
  <!-- Tambahkan item galeri sesuai kebutuhan -->
</div>

    <section class="contack text-center">
      <header id="contack">Ikuti kami</header>
      <div class="sosmed">
      <a href="https://www.instagram.com/amindtmstr/"><i class="bi bi-instagram"></i></a>
      <a href="https://wa.me/+6287700288011"><i class="bi bi-whatsapp"></i></a>
      <a href="https://www.tiktok.com/@amindtmstr?_t=8lDeyeQBjKj&_r=1"><i class="bi bi-tiktok"></i></a>
      <a href="https://www.youtube.com/@amindtmstr"><i class="bi bi-youtube"></i></a>
    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        const carousel = new bootstrap.Carousel('#myCarousel')
    </script>
  </body>
</html>