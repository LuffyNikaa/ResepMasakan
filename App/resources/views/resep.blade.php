<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ATWON WEBSITE</title>
    <link class="icon" rel="icon" type="img/png" href="Image/image/icon.png">
    <link href="CSS/bootstrap.css" rel="stylesheet">
    <link href="CSS/index1.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="Image/image/Logo.png" alt="Logo" width="70" height="70">
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
        @foreach ($resep as $r)
            <a href="/resep1">
                <img src="{{ $r->gambar }}" alt="" width="200px">
            </a>
        @endforeach
       
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