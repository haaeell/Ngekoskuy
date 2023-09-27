@extends('layouts.landingpage')
@section('content') 
<div style="padding-top: 100px">
   
</div>
 
<div class="container  py-5" >
    <nav class="mb-5" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Library</li>
          <li class="breadcrumb-item active" aria-current="page">Detailkos</li>
        </ol>
      </nav>

      <div class="gambar-detail overflow-hidden" >
        <img src="{{asset('../images/gambar 2.jpeg')}}"style="height: 80vh" width="100" class="card-img-top" alt="...">
    </div>
    <div class="row mt-3">
        <div class="col-6">
            <h2 class="fw-semibold">Kost Adaha jalan Brajan Rt/Rw:01/01,Kasihan,Tamantirto</h2>
            <div class="d-flex gap-3 align-items-center">
                <p class="p-2" style="border: 1px solid #aeaeae">Kos Putra</p>
                <div class="d-flex  align-items-center">
                    <p class="p-2"><i class="bi bi-geo-alt-fill "></i>Bantul</p>
                </div>
            </div>
            <div class="card">
                <div class="row d-flex justify-content-between align-items-center p-3">
                    <div class="col-md-5">

                        <p class="fw-semibold m-0">Kos dikelola oleh Iwan</p>
                        <p>Online 2 Jam yang lalu</p>
                    </div>
                    <div class="col-md-3">

                        <img src="{{asset('../images/reza.jpeg')}}"  class="card-img-top"style="border-radius:50%; width:80px; height:80px;" alt="...">
                    </div>
                </div>
            </div>
            <div class="peraturan my-5">

                <h5 class="fw-semibold">Peraturan khusus tipe kamar ini</h5>
                <div class="my-4">

                    <p ><i class="bi bi-activity"></i>  Bebas Biaya Admin</p>
                    <p ><i class="bi bi-door-closed-fill"></i>  Pro Service</p>
                    <p ><i class="bi bi-exclamation-octagon-fill"></i> Dikelola Bapa iwan, Terjamin Nyaman</p>
                </div>
            </div>
        </div>
        <div class="col-6"  >
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection