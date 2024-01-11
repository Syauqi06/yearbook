<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
    <style>
        body {
            background-image: url('img/bg.png');
            object-fit: cover;
            position: relative;
        }
    </style>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #FDE2C4; border: 1.5px solid #000000;">
        <div class="container-fluid">
            <img src="{{ asset('img/smk1.png') }}" style="width: 40px; margin-right:30px;" alt="">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Profil</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Isi Buku
                </a>
                <ul class="dropdown-menu" style="background-color: #FDE2C4;">
                  <li style="border-bottom: 2px solid #000000"><a class="dropdown-item" href="#" style="font-weight: 500;">Sambutan Kepsek</a></li>
                  <li style="border-bottom: 2px solid #000000"><a class="dropdown-item" href="#" style="font-weight: 500;">Foto Bersama Guru dan Staf</a></li>
                  <li style="border-bottom: 2px solid #000000"><a class="dropdown-item" href="#" style="font-weight: 500;">Profil Guru dan Staf</a></li>
                  <li style="border-bottom: 2px solid #000000"><a class="dropdown-item" href="#" style="font-weight: 500;">Sambutan Wali Kelas</a></li>
                  <li style="border-bottom: 2px solid #000000"><a class="dropdown-item" href="#" style="font-weight: 500;">Halaman Kelas</a></li>
                  <li style="border-bottom: 2px solid #000000"><a class="dropdown-item" href="#" style="font-weight: 500;">Angket Murid</a></li>
                  <li style="border-bottom: 2px solid #000000"><a class="dropdown-item" href="#" style="font-weight: 500;">Ekstrakulikuler</a></li>
                  <li style="border-bottom: 2px solid #000000"><a class="dropdown-item" href="#" style="font-weight: 500;">Fasilitas Sekolah</a></li>
                  <li style="border-bottom: 2px solid #000000"><a class="dropdown-item" href="#" style="font-weight: 500;">Team Panitia BTS</a></li>
                  <li style="border-bottom: 2px solid #000000"><a class="dropdown-item" href="#" style="font-weight: 500;">Penutup</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Cover Penutup</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>