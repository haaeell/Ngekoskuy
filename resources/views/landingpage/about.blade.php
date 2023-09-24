@extends('layouts.landingpage')

@section('content')
<div style="height: 100px;"></div>
<style>
    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card-about {
        width: 250px;
        border-radius: 24px;
        background: linear-gradient(to top, #003D64, #008FEB);
        border-bottom: 10px solid #008FEB;
        color: white;

        transition: .5s ease-in;
    }

    .card-about:hover {

        background: linear-gradient(to right, #003D64, #008FEB);
    }

    .card-image {
        overflow: hidden;
        margin: 0 auto;
        border-radius: 50%;
        width: 100px;
        height: 100px;
        border: 3px solid white;
    }

    .card-image img {
        border-radius: 50%;
        width: 50px;
        height: 50px;
    }

    .about-icon i {
        font-size: 40px;
        color: #003D64;
    }
</style>

<div class="text-center fw-bold">
    <h1 class="fw-bold">About us</h1>
</div>
<div class="text-center">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quisquam quae, amet eius quia nemo quod totam provident dolores veniam!</p>
</div> <br>
<div class="container">
    <div class="row d-flex align-items-center">
        <div class="col-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea eum, quae amet accusantium, provident adipisci totam ducimus quisquam expedita quam labore quibusdam nulla deleniti ratione iure illum vel minus dolorem reiciendis libero. Laborum voluptas vitae amet ipsum minima officiis? Amet repellat minima ad cum officia dolores iste voluptatibus in tempora?</p>
            <div class="d-flex about-icon mb-3 gap-5">
                <i class="bi bi-bag-dash-fill"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, magnam!</p>
            </div>
            <div class="d-flex about-icon mb-3 gap-5">
                <i class="bi bi-book-half"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, magnam!</p>
            </div>
            <div class="d-flex about-icon mb-3 gap-5">
                <i class="bi bi-bar-chart-line-fill"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, magnam!</p>
            </div>

        </div>
        <div class="col-6 ">
            <img src="{{asset('../images/team.avif')}}" class="w-100">
        </div>
    </div>
</div>
<div class="container text-center">
    <h1 class="fw-bold">Our Team</h1>
</div>
<div class="container">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card my-5 p-3 card-about">
                    <div class="card-image">
                        <img src="{{ asset('images/mzf.jpg') }}" alt="..." style="object-fit: cover; width: 100%; height: 100%;">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-semibold" style="margin-bottom: 5px;">Nama</h4>
                        <p class="" style="margin-top: -5px; font-size:12px;">~ Full Stack ~</p>
                        <p style="font-size: 14px;">Lorem ium dolor sit amet consectetur adipisicing elit. Rem, quod? </p>
                        <span class="card opacity-75 p-2 rounded fw-semibold" style="font-size:14px;">email</span>
                        <div class="d-flex justify-content-center mt-3 gap-3">
                            <a href="#" class="nav-link"> <i class="bi bi-linkedin "></i></a>
                            <a href="#" class="nav-link"> <i class="bi bi-github"></i></a>
                            <a href="#" class="nav-link"> <i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card my-5 p-3 card-about">
                    <div class="card-image">
                        <img src="{{ asset('images/mzf.jpg') }}" alt="..." style="object-fit: cover; width: 100%; height: 100%;">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-semibold" style="margin-bottom: 5px;">Nama</h4>
                        <p class="" style="margin-top: -5px; font-size:12px;">~ Full Stack ~</p>
                        <p style="font-size: 14px;">Lorem ium dolor sit amet consectetur adipisicing elit. Rem, quod? </p>
                        <span class="card opacity-75 p-2 rounded fw-semibold" style="font-size:14px;">email</span>
                        <div class="d-flex justify-content-center mt-3 gap-3">
                            <a href="#" class="nav-link"> <i class="bi bi-linkedin "></i></a>
                            <a href="#" class="nav-link"> <i class="bi bi-github"></i></a>
                            <a href="#" class="nav-link"> <i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card my-5 p-3 card-about">
                    <div class="card-image">
                        <img src="{{ asset('images/mzf.jpg') }}" alt="..." style="object-fit: cover; width: 100%; height: 100%;">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-semibold" style="margin-bottom: 5px;">Nama</h4>
                        <p class="" style="margin-top: -5px; font-size:12px;">~ Full Stack ~</p>
                        <p style="font-size: 14px;">Lorem ium dolor sit amet consectetur adipisicing elit. Rem, quod? </p>
                        <span class="card opacity-75 p-2 rounded fw-semibold" style="font-size:14px;">email</span>
                        <div class="d-flex justify-content-center mt-3 gap-3">
                            <a href="#" class="nav-link"> <i class="bi bi-linkedin "></i></a>
                            <a href="#" class="nav-link"> <i class="bi bi-github"></i></a>
                            <a href="#" class="nav-link"> <i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card my-5 p-3 card-about">
                    <div class="card-image">
                        <img src="{{ asset('images/mzf.jpg') }}" alt="..." style="object-fit: cover; width: 100%; height: 100%;">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-semibold" style="margin-bottom: 5px;">Nama</h4>
                        <p class="" style="margin-top: -5px; font-size:12px;">~ Full Stack ~</p>
                        <p style="font-size: 14px;">Lorem ium dolor sit amet consectetur adipisicing elit. Rem, quod? </p>
                        <span class="card opacity-75 p-2 rounded fw-semibold" style="font-size:14px;">email</span>
                        <div class="d-flex justify-content-center mt-3 gap-3">
                            <a href="#" class="nav-link"> <i class="bi bi-linkedin "></i></a>
                            <a href="#" class="nav-link"> <i class="bi bi-github"></i></a>
                            <a href="#" class="nav-link"> <i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card my-5 p-3 card-about">
                    <div class="card-image">
                        <img src="{{ asset('images/mzf.jpg') }}" alt="..." style="object-fit: cover; width: 100%; height: 100%;">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-semibold" style="margin-bottom: 5px;">Nama</h4>
                        <p class="" style="margin-top: -5px; font-size:12px;">~ Full Stack ~</p>
                        <p style="font-size: 14px;">Lorem ium dolor sit amet consectetur adipisicing elit. Rem, quod? </p>
                        <span class="card opacity-75 p-2 rounded fw-semibold" style="font-size:14px;">email</span>
                        <div class="d-flex justify-content-center mt-3 gap-3">
                            <a href="#" class="nav-link"> <i class="bi bi-linkedin "></i></a>
                            <a href="#" class="nav-link"> <i class="bi bi-github"></i></a>
                            <a href="#" class="nav-link"> <i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        loop: true, // Menampilkan 1 kartu pada tampilan awal
        breakpoints: {
            768: {
                slidesPerView: 3 // Menampilkan 3 kartu ketika lebar layar >= 768px
            }
        },
        autoplay: {
            delay: 1000, // Menentukan durasi antara perpindahan slide dalam milidetik (misalnya, 3000ms = 3 detik)
        },
        pagination: {
            el: ".swiper-pagination",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>


@endsection