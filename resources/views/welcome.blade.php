@extends('layouts.landingpage')

@section('content')
    <style>
        /* Gaya CSS untuk lapisan gelap */
        .overlay {
            background-color: rgba(0, 0, 0, 0.7);
            /* Warna gelap dengan tingkat transparansi */
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1;
        }

        .center-about-us {
            text-align: center;
        }

        .btn-cta {
            background: linear-gradient(to right, #003D64, #008FEB);
        }

        .text {
            font-weight: 600;
            font-size: 50px;
        }



        .hover-card:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

        }

        .card-kos {
            transition: .3s ease-in-out;
        }

        .card-kos:hover {
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }

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

        .card-about:hover {

            background: linear-gradient(to bottom, #003D64, #008FEB);
        }

        .card-image {
            overflow: hidden;
            margin: 0 auto;
            border-radius: 8px;
            width: 100%;
            height: 100px;
        }

        .btn-contact {
            background-color: white;
            border: 2px solid #000;
            color: #000;
            border-radius: 8px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-contact:hover {
            background: linear-gradient(to right, #003D64, #008FEB);
        }
    </style>



    <!-- Hero Section -->
    <div class="jumbotron text-center"
        style="background-image: url('images/banner.png'); background-size: cover; background-repeat: no-repeat; position: relative; height: 100vh; display: flex; align-items: center; justify-content: center;">
        <div class="overlay"></div> <!-- Lapisan gelap -->
        <div class=" py-5 mt-5"
            style="position: relative; z-index: 2; color: white; text-align: center; display: flex; justify-content: space-between; flex-direction: column; align-items: center;">
            <div class="col-md-8">
                <p class="m-0">Temukan kosan impian Anda</p>
                <h1 class="mb-3" style="font-weight: 700;font-size :50px;">Feel Better About Finding <br>NgekosKuy</h1>
                <div class="col-md-6"></div>
                <p>Di NgekosKuy, kami menyediakan berbagai pilihan kosan yang nyaman dan sesuai dengan kebutuhan Anda. Nikmati kemudahan mencari tempat tinggal ideal Anda bersama kami!</p>
            </div>
            <div class="d-flex gap-2">
                <a class="btn btn-cta btn-primary px-5" href="#">Button</a>
                <a class="btn btn-outline px-5" href="#">Button</a>
            </div>
        </div>
    </div>





    <!-- About Section -->
    <section class="container mt-5">
        <div class="row">
            <div class="col-md-12 center-about-us mb-5">
                <h2 class="text">About Us</h2>
            </div>
        </div>
        <div class="row  d-flex justify-content-between align-items-center">
            <div class="col-md-6">
                <h2 class="fw-semibold">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, laudantium.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod bibendum sem, id semper purus
                    volutpat eu.Where does it come from? Contrary to popular belief, Lorem Ipsum is not simply random text.
                    It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard
                    McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure
                    Latin words, consectetur, from a Lorem Ipsum passage,</p>
                <button class="btn btn-cta btn-primary text-white px-3 py-2">About Us</button>
            </div>
            <div class="col-md-6 ">
                <img src="{{ asset('images/pexels-v-marin-18069290.jpg') }}" alt="About Us" class="img-fluid"
                    style="border-radius: 16px 64px 16px 16px;">

            </div>
        </div>
    </section>


    <section class=" p-5  mt-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 center-about-us mb-5">
                    <h2 class="text">system explanation</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 hover-card">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/img.jpeg') }}" alt="Hero Image" style="height: 50px;width: 50px;"
                                class="img-fluid rounded-circle my-3">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">SAW</h5>
                            <p class="card-text">Where does it come from?
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece
                                of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,
                                a Latin professor at Hampden.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 hover-card">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/img.jpeg') }}" alt="Hero Image" style="height: 50px;width: 50px;"
                                class="img-fluid rounded-circle my-3">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">SAW</h5>
                            <p class="card-text">Where does it come from?
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece
                                of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,
                                a Latin professor at Hampden.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 hover-card">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/img.jpeg') }}" alt="Hero Image" style="height: 50px;width: 50px;"
                                class="img-fluid rounded-circle my-3">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">SAW</h5>
                            <p class="card-text">Where does it come from?
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece
                                of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,
                                a Latin professor at Hampden.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="mt-5 py-5" style="background-color: white;">
        <!-- Swiper -->
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="text-center">
                    <h2 class="text"> Best Boarding House Rating</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <div class="card card-kos border-0 my-5 p-3 ">
                            <div class="card-image" style="width: 100%; height: 200px; overflow: hidden;">
                                <img src="https://images.fineartamerica.com/images/artworkimages/mediumlarge/3/when-heaven-calls-your-name-evelina-kremsdorf.jpg"
                                    alt="..." style="object-fit: cover; width: 100%; height: 100%;">
                            </div>
                            <div class="text-start p-2">
                                <span class="px-3 mb-2" style="border: 1px solid #aeaeae; font-size:10px; ">Lorem</span>
                                <h4 class="fw-semibold mb-2">Nama Kosan</h4>
                                <p class="fw-semibold mb-1" style="font-size: 14px;">Lorem ium dolo adipisicing elit. Rem,
                                    quod? </p>
                                <p style="font-size: 12px;">Wifi - Kasur - Akses 24jam </p>
                                <p class=""><span class="fw-bold text-primary">Rp.5.000.000,-</span><span
                                        style="font-size: 14px;">/ Bulan</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="card card-kos border-0 my-5 p-3 ">
                            <div class="card-image" style="width: 100%; height: 200px; overflow: hidden;">
                                <img src="https://images.fineartamerica.com/images/artworkimages/mediumlarge/3/when-heaven-calls-your-name-evelina-kremsdorf.jpg"
                                    alt="..." style="object-fit: cover; width: 100%; height: 100%;">
                            </div>
                            <div class="text-start p-2">
                                <span class="px-3 mb-2" style="border: 1px solid #aeaeae; font-size:10px; ">Lorem</span>
                                <h4 class="fw-semibold mb-2">Nama Kosan</h4>
                                <p class="fw-semibold mb-1" style="font-size: 14px;">Lorem ium dolo adipisicing elit. Rem,
                                    quod? </p>
                                <p style="font-size: 12px;">Wifi - Kasur - Akses 24jam </p>
                                <p class=""><span class="fw-bold text-primary">Rp.5.000.000,-</span><span
                                        style="font-size: 14px;">/ Bulan</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="card card-kos border-0 my-5 p-3 ">
                            <div class="card-image" style="width: 100%; height: 200px; overflow: hidden;">
                                <img src="https://images.fineartamerica.com/images/artworkimages/mediumlarge/3/when-heaven-calls-your-name-evelina-kremsdorf.jpg"
                                    alt="..." style="object-fit: cover; width: 100%; height: 100%;">
                            </div>
                            <div class="text-start p-2">
                                <span class="px-3 mb-2" style="border: 1px solid #aeaeae; font-size:10px; ">Lorem</span>
                                <h4 class="fw-semibold mb-2">Nama Kosan</h4>
                                <p class="fw-semibold mb-1" style="font-size: 14px;">Lorem ium dolo adipisicing elit. Rem,
                                    quod? </p>
                                <p style="font-size: 12px;">Wifi - Kasur - Akses 24jam </p>
                                <p class=""><span class="fw-bold text-primary">Rp.5.000.000,-</span><span
                                        style="font-size: 14px;">/ Bulan</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="card card-kos border-0 my-5 p-3 ">
                            <div class="card-image" style="width: 100%; height: 200px; overflow: hidden;">
                                <img src="https://images.fineartamerica.com/images/artworkimages/mediumlarge/3/when-heaven-calls-your-name-evelina-kremsdorf.jpg"
                                    alt="..." style="object-fit: cover; width: 100%; height: 100%;">
                            </div>
                            <div class="text-start p-2">
                                <span class="px-3 mb-2" style="border: 1px solid #aeaeae; font-size:10px; ">Lorem</span>
                                <h4 class="fw-semibold mb-2">Nama Kosan</h4>
                                <p class="fw-semibold mb-1" style="font-size: 14px;">Lorem ium dolo adipisicing elit. Rem,
                                    quod? </p>
                                <p style="font-size: 12px;">Wifi - Kasur - Akses 24jam </p>
                                <p class=""><span class="fw-bold text-primary">Rp.5.000.000,-</span><span
                                        style="font-size: 14px;">/ Bulan</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="card card-kos border-0 my-5 p-3 ">
                            <div class="card-image" style="width: 100%; height: 200px; overflow: hidden;">
                                <img src="https://images.fineartamerica.com/images/artworkimages/mediumlarge/3/when-heaven-calls-your-name-evelina-kremsdorf.jpg"
                                    alt="..." style="object-fit: cover; width: 100%; height: 100%;">
                            </div>
                            <div class="text-start p-2">
                                <span class="px-3 mb-2" style="border: 1px solid #aeaeae; font-size:10px; ">Lorem</span>
                                <h4 class="fw-semibold mb-2">Nama Kosan</h4>
                                <p class="fw-semibold mb-1" style="font-size: 14px;">Lorem ium dolo adipisicing elit. Rem,
                                    quod? </p>
                                <p style="font-size: 12px;">Wifi - Kasur - Akses 24jam </p>
                                <p class=""><span class="fw-bold text-primary">Rp.5.000.000,-</span><span
                                        style="font-size: 14px;">/ Bulan</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="card card-kos border-0 my-5 p-3 ">
                            <div class="card-image" style="width: 100%; height: 200px; overflow: hidden;">
                                <img src="https://images.fineartamerica.com/images/artworkimages/mediumlarge/3/when-heaven-calls-your-name-evelina-kremsdorf.jpg"
                                    alt="..." style="object-fit: cover; width: 100%; height: 100%;">
                            </div>
                            <div class="text-start p-2">
                                <span class="px-3 mb-2" style="border: 1px solid #aeaeae; font-size:10px; ">Lorem</span>
                                <h4 class="fw-semibold mb-2">Nama Kosan</h4>
                                <p class="fw-semibold mb-1" style="font-size: 14px;">Lorem ium dolo adipisicing elit. Rem,
                                    quod? </p>
                                <p style="font-size: 12px;">Wifi - Kasur - Akses 24jam </p>
                                <p class=""><span class="fw-bold text-primary">Rp.5.000.000,-</span><span
                                        style="font-size: 14px;">/ Bulan</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </section>

    <section class="container mt-5">
        <div class="row">
            <div class="col-md-12 center-about-us mb-5">
                <h2 class="text">Our Feature</h2>
            </div>
        </div>
        <div class="row  d-flex justify-content-between">
            <div class="col-md-6 ">
                <img src="{{ asset('images/pexels-v-marin-18069290.jpg') }}" alt="About Us" class="img-fluid"
                    style="border-radius: 64px 16px 64px 16px;">
            </div>
            <div class="col-md-6">
                <h2 class="fw-semibold">Lorem ipsum.</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <div class="row d-flex ">
                    <div class="col-md-5">
                        <div class="d-flex gap-2">
                            <i class="bi bi-envelope-open-heart-fill fs-5 fw-5"></i>
                            <p class="fs-5 fw-semibold">Lorem ipsum </p>
                        </div>
                        <div class="d-flex gap-2">
                            <i class="bi bi-envelope-open-heart-fill fs-5 fw-5"></i>
                            <p class="fs-5 fw-semibold">Lorem ipsum</p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="d-flex gap-2">
                            <i class="bi bi-envelope-open-heart-fill fs-5 fw-5"></i>
                            <p class="fs-5 fw-semibold">Lorem ipsum</p>
                        </div>
                        <div class="d-flex gap-2">
                            <i class="bi bi-envelope-open-heart-fill fs-5 fw-5"></i>
                            <p class="fs-5 fw-semibold">Lorem ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=" my-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div style="text-align: center;">
                    <h2 class="text">Hubungi Kami</h2>
                </div>
            </div>
            <div class=" bg-light row d-flex justify-content-between align-items-center px-4 shadow my-3 "
                style="border-radius: 16px 16px 16px 16px;">
                <div class="col-md-6 my-5 ">
                    <h2 class="fw-semibold">halooo</h2>
                    <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, minima.</h4>
                </div>
                <div class="col-md-4 ">
                    <div style="margin-right: 10px; color: white">
                        <a class="btn btn-cta btn-primary px-5" href="#">Button</a>
                        <a class="btn btn-contact px-5" href="#">Button</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            loop: true, // Menampilkan 1 kartu pada tampilan awal
            breakpoints: {
                992: {
                    slidesPerView: 4, // Halaman besar (>= 992px) - 4 slide per view
                },
                768: {
                    slidesPerView: 3, // Halaman sedang (>= 768px) - 3 slide per view
                },
                0: {
                    slidesPerView: 1, // Halaman kecil (< 768px) - 1 slide per view
                },

            },
            autoplay: {
                delay: 1000, // Menentukan durasi antara perpindahan slide dalam milidetik (misalnya, 3000ms = 3 detik)
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true, // Membuat titik-titiknya bisa diklik
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endsection
