@extends('layouts.landingpage')

@section('content')

   <div class="container">
    <h1 class="fw-bold text-center my-5">
      Hasil Kos Terbaik
    </h1>
    <div class="row d-flex align-items-center shadow my-5 p-5 rounded-3" >
        <div class="col-md-7">
            <div style="height:400px;overflow:hidden;">
              <img src="/images/kamar.jpeg" class="w-100 rounded " alt="...">
            </div>
        </div>
        <div class="col-md-5 ">
          <div class="d-flex gap-3 align-items-center mb-4">
            <div style="width:50px;height:50px;border-radius:50%;background-color:rgb(26, 26, 27);" class="p-1 text-center text-white ">
              <h2 class="fw-bold my-auto">1</h2>
            </div>
            <h2 class="fs-2 align-items-center fw-semibold"> Hasil : 0989.990798</h2>
          </div>


            <h1  class="fw-semibold mb-3">Kos Adaha</h1>
            <span  class="p-1 px-3" style="border: 1px solid #aeaeae">Putra</span>
            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ut perferendis aliquid</p>
            <p class="m-0">Lorem ~ ipsum dolor ~ sit amet.</p>
            <p class="my-3"><span class="fw-bold text-danger fs-2 ">RP.20.000.000 </span>/Bulan</p>
            <a href="#" class="btn btn-dark d-block py-3 fw-semibold">Pesan Sekarang</a>
        </div>
    </div>

   </div>


@endsection
