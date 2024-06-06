<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ATWON WEBSITE</title>
    <link class="icon" rel="icon" type="img/png" href="{{ asset('image') }}/icon.png">
    <link href="{{ asset('css') }}/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('css') }}/index1.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('image') }}/Logo.png" alt="Logo" width="70" height="70">
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
    
    <section class="resep text-center">
        <header id="resep">RESEP MASAKAN</header>
    </section>

    <div class="recipe">
      <div class="image-placeholder">
        <a href="/resep1">
        <img src="{{asset('image') }}/1.nasgor.jpg" alt="" width="200px">
        </a>
      </div>
      <div class="image-placeholder">
        <a href="/resep2">
        <img src="{{ asset('image') }}/2.ayam_cabe.jpg" alt="" width="200px">
        </a>
      </div>
      <div class="image-placeholder">
        <a href="/resep3">
        <img src="{{ asset('image') }}/3.sate_kulitayam.jpg" alt="" width="200px">
        </a>
      </div>
      <div class="image-placeholder">
        <a href="/resep4">
        <img src="{{ asset('image') }}/4.ayam_geprek.jpg" alt="" width="200px">
        </a>
      </div>
      <div class="image-placeholder">
        <a href="/resep5">
        <img src="{{ asset('image') }}/5.ayam_goreng.jpg" alt="" width="200px">
        </a>
      </div>
  </div>
  <div class="recipe">
      <div class="image-placeholder">
        <a href="/resep6">
        <img src="{{ asset('image') }}/6.ayam_fillet.jpg" alt="" width="200px">
        </a>
      </div>
      <div class="image-placeholder">
        <a href="/resep7">
        <img src="{{ asset('image') }}/7.oseng_buncis.png" alt="" width="200px">
        </a>
      </div>
      <div class="image-placeholder">
        <a href="/resep8">
        <img src="{{ asset('image') }}/8.rendang_jengkol.jpg" alt="" width="200px">
        </a>
      </div>
      <div class="image-placeholder">
        <a href="/resep9">
        <img src="{{ asset('image') }}/9.kentang_balado.jpg" alt="" width="200px">
        </a>
      </div>
      <div class="image-placeholder">
        <a href="/resep10">
        <img src="{{ asset('image') }}/10.ayam_gorangtepung.jpg" alt="" width="200px">
        </a>
      </div>
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
</body>
</html>