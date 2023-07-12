<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{asset('img/logo_kampung.png')}}">
        <title>Tabalar Muara</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body >
    <div class="top bg-light py-1">
        <div class="container  ">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container">
                <a class="navbar-brand" href="#"><img src="{{asset('img/logo_kampung.png')}}" alt="Logo" class="logo">Nama Website</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sejarah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Komoditas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>
        </div>
    </div>
          
    <div class="p-5 mb-4 custom-jumbotron" >
        <div class="banner">
            <div class="container  py-5">
                <h1 class="display-5 fw-bold">Selamat Datang Di Tabalar Muara</h1>
                <p class="col-md-8 fs-4">Mahasiswa KKN angkatan 49 Berau 06 yang dengan bangga mempersembahkan website ini kepada Anda..</p>
                <button class="btn btn-danger btn-lg" type="button">Selengkapnya...</button>
            </div>
        </div>
    </div>
  
    <section class="about">
        <div class="container">
        <h2>Tentang Kampungku</h2>
        <p>Kampungku adalah sebuah kampung yang indah, terletak di tengah-tengah alam yang hijau. Kami memiliki budaya yang kaya dan masyarakat yang ramah.</p>
        </div>
    </section>
  
    <!-- Tambahkan bagian lain dari konten halaman di sini -->
    <footer class="pt-3 mt-4 text-body-secondary border-top">
        &copy; 2023 KKN49_Berau06
    </footer>

    </body>
</html>
