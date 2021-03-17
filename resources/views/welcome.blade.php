<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <title>Landing Page</title>
</head>
<body>
    {{-- Navbar Start --}}
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Gitar <span>Akustik</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#tunning">Tunning Gitar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Galeri Gitar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    {{-- Navbar End --}}

    {{-- Home Section Start --}}
    <section class="home section-padding" id="home">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="home-img">
              <img src="{{ asset('storage/web-img/main-image.png') }}" alt="main-image">
            </div>
          </div>
          <div class="col-md-6">
            <div class="content">
              <div class="home-title">
                <h2>setel kunci gitarmu</h2>
                <h2>disini</h2>
              </div>
              <div class="home-content">
                <p>Menyetem kunci gitar akustik lebih mudah dan menyenangkan. Kamu bisa melihat banyak sekali macam-macam gitar akustik yang kamu inginkan. </p>
                <a href="#" class="btn btn-1">pelajari lanjut</a>
              </div>
            </div>
            </div>
        </div>
      </div>
    </section>
    {{-- Home Section End --}}

    {{-- Tuning Section Start --}}
    <section class="tunning section-padding" id="tunning">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="tunning-img">
              <img src="{{ asset('storage/web-img/main-image.png') }}" alt="main-image">
            </div>
          </div>
          <div class="col-md-6">
            <div class="content">
              <div class="tunning-title">
                <h2>Tuning Gitar</h2>
                <h2>Akustik</h2>
              </div>
              <div class="tunning-content">
                <p>Menyetem kunci gitar akustik lebih mudah dan menyenangkan. Kamu bisa menyetem gitar akustikmu dengan metode stem berdasarkan chord yang kamu inginkan. </p>
                <a href="#" class="btn btn-1">Tuning Sekarang?</a>
              </div>
            </div>
            </div>
        </div>
      </div>
    </section>
    {{-- Tuning Section End --}}


    <script src="{{ asset('js/landing.js') }}"></script>
</body>
</html>