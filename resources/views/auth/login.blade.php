@extends('layouts.landingpage')

@section('content')
    <div style="padding-top: 80px; "></div>
    <div class="container shadow my-5" style="border-radius:32px;">
        <div class="row mb-5">
            <div class="col-md-5 mx-auto p-5">
                <h2 class="fw-semibold text-center mb-5">Login</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3 row">
                            <label for="exampleInputEmail1" class="col-md-4 col-form-label">Email</label>
                            <div class="col-md-8">
                                <input placeholder="Email" id="email" type="email"
                                    class="form-control py-2 px-4 @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="exampleInputPassword1" class="col-md-4 col-form-label">Password</label>
                            <div class="col-md-8">
                                <input placeholder="Password" id="password" type="password"
                                    class="form-control py-2 px-4 @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <p class="text-end small">
                                <a href="{{ route('password.request') }}" class="nav-link mt-3">Forgot password?</a>
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-cta text-white px-4 d-block w-100 py-2">Login</button>
                                <p class="text-center small">
                                    <a href="{{ route('register') }}" class="nav-link text-secondary fw-semibold mt-4 mb-5">Dont have an account? Create account</a>
                                </p>
                            </div>
                        </div>
                    </form>
                    
            </div>
            <div class="col-md-7 d-flex align-items-center text-center" style="border-radius:32px;">
                <div>

                    <img src="{{ asset('images/pixel.png') }}" style="width: 110%;" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
