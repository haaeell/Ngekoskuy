@extends('layouts.landingpage')

@section('content')
<div class="text-center fw-bold">
    <h1>About us</h1>
</div>
<div class="text-center">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quisquam quae, amet eius quia nemo quod totam provident dolores veniam!</p>
</div> <br>
<div class="container">
    <div class="row d-flex align-items-center">
        <div class="col-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea eum, quae amet accusantium, provident adipisci totam ducimus quisquam expedita quam labore quibusdam nulla deleniti ratione iure illum vel minus dolorem reiciendis libero. Laborum voluptas vitae amet ipsum minima officiis? Amet repellat minima ad cum officia dolores iste voluptatibus in tempora?</p>
            <div class="d-flex gap-5">
                <i class="bi bi-bag-dash-fill"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, magnam!</p>
            </div>
            <div class="d-flex gap-5">
                <i class="bi bi-book-half"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, magnam!</p>
            </div>
            <div class="d-flex gap-5">
                <i class="bi bi-bar-chart-line-fill"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, magnam!</p>
            </div>

        </div>
        <div class="col-6 ">
            <img src="{{asset('../images/team.avif')}}" class="w-100">
        </div>
    </div>
</div>

@endsection