@extends('layouts.landingpage')

@section('content')
<div style="padding-top: 80px; "></div>
<div class="container shadow my-5" style="border-radius:32px;">
    <div class="row mb-5">
        <div class="col-md-6 mx-auto p-5">
            <h1>Login</h1>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        <div class="col-md-6 d-flex align-items-center text-center" style="border-radius:32px;">
            <div>

                <img src="{{ asset('images/pixel.png') }}" style="width: 110%;" alt="">
            </div>
        </div>
    </div>
</div>
@endsection