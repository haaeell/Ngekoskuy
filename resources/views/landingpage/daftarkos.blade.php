@extends('layouts.landingpage')
@section('content') 
<h1 class="text-center mt-5">
        Daftar Kos
    </h1>
    <div class="container mb-4">
        <h2>
            Cari Kos Ya Disini
        </h2>
        <h4>
            Dikarenakan sangat keren
        </h4>
</div>
<div class="container mb-4">
    <div class="row">
        <div class="col-4">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
              </form>
        </div>
    </div>
</div>
    <div class="container">
        <div class="row text-center">
            <div class="col-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('../images/gambar 2.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center">Kos Reza</h5>
                      <p class="card-text text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                      <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                  </div>
            </div>
            <div class="col-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('../images/gambar4.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center">Kos Reza</h5>
                      <p class="card-text text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                      <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                  </div>
            </div>
            <div class="col-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('../images/gambar5.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center">Kos Reza</h5>
                      <p class="card-text text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                      <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                  </div>
            </div>
            <div class="col-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('../images/gambar7.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center">Kos Reza</h5>
                      <p class="card-text text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                      <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                  </div>
            </div>
            <div class="col-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('../images/gambar7.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center">Kos Reza</h5>
                      <p class="card-text text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                      <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                  </div>
            </div>
            <div class="col-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('../images/gambar7.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title ">Kos Reza</h5>
                      <p class="card-text ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                      <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection 