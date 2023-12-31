<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ngekoskuy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('./css/app.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-body-tertiary fixed-top">
        <div class="container">
          <a href="">
            <img src="{{asset('../images/logo.png')}}" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link  {{ request()->is('/') ? 'active' : ''}}" aria-current="page" href="{{route('welcome')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('daftarkos') ? 'active' : ''}}" href="{{route('daftarkos')}}">Daftar Kos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('spkuser') ? 'active' : ''}}" href="{{route('spkuser')}}">SPK </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('about') ? 'active' : ''}}" href="{{route('about')}}">Tentang Kami </a>
              </li>
            </ul>
            <ul class="navbar-nav gap-2 fw-semibold">
              @if (Route::has('login'))
                    @auth
                        @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2 )
                            <li class="nav-item">
                                <a class="btn btn-dark  btn-login px-4 py-2 fw-semibold nav-link" href="{{ url('/home') }}">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="btn btn-login px-4 py-2 fw-semibold nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endif
                    @else
                        <li class="nav-item">
                            <a class="btn btn-login px-4 py-2 fw-semibold nav-link" href="{{ route('login') }}">Log In</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="btn btn-outline nav-link px-4" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
          </div>
          
        </div>
      </nav>
      
  <div class="min-vh-100">
    @yield('content')
  </div>
  <footer>
    <div class="footer p-5 text-white">
      <div class="container">
        <div class="row  d-flex justify-content-between align-items-center">
          <div class="col-md-5">
            <div class="footer-img">
              <img src="{{asset('../images/logo.png')}}" alt="">
            </div>
            <h5 class="fw-semibold mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil libero .</h5>
            <div class="d-flex gap-3 mt-3">
              <i class="bi bi-facebook"></i>
              <i class="bi bi-instagram"></i>
              <i class="bi bi-twitter"></i>
            </div>
          </div>
          <div class="col-md-2">
            <h5 class="fw-semibold mb-4">Use Full Links</h5>
            <a class="nav-link mb-2" href="">Lorem, ipsum.</a>
            <a class="nav-link mb-2" href="">Lorem, ipsum.</a>
            <a class="nav-link mb-2" href="">Lorem, ipsum.</a>
            <a class="nav-link mb-2" href="">Lorem, ipsum.</a>
          </div>
          <div class="col-md-2 kol-1">
            <h5 class="fw-semibold mb-4">Use Full Links</h5>
            <a class="nav-link mb-2" href="">Lorem, ipsum.</a>
            <a class="nav-link mb-2" href="">Lorem, ipsum.</a>
            <a class="nav-link mb-2" href="">Lorem, ipsum.</a>
            <a class="nav-link mb-2" href="">Lorem, ipsum.</a>
          </div>
          <div class="col-md-2">
            <h5 class="fw-semibold mb-4">Use Full Links</h5>
            <a class="nav-link mb-2" href="">Lorem, ipsum.</a>
            <div class="d-flex gap-2 mb-2 align-items-center">
              <input type="text" name="" class="form-control" id="">
              <i class="bi bi-telegram" style="font-size: 25px"></i>
            </div>
            <a class="nav-link mb-2" href="">Lorem, ipsum.</a>
            <a class="nav-link mb-2" href="">Lorem, ipsum.</a>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>