@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="col-md-6 border p-4 mx-auto">
                        <h3 class="text-center pb-2" style="border-bottom: 3px solid #F6931D">Login</h3>
                        <div class="form-group mt-2">
                            <label for="">User Name</label>
                            <input id="email" type="email"
                                class="form-control p-2 @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}"  autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input id="password" type="password"
                                class="form-control p-2 @error('password') is-invalid @enderror" name="password" 
                                autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn rounded btn-block">Login</button>
                        </div>
                    </div>
                    <p class="text-center py-2">Or Sign Up Using</p>
                    <div class="d-flex justify-content-center">
                        <a href="#"
                            class="btn d-flex align-items-center justify-content-center text-white p-0 mx-2"
                            style="width: 45px;height: 45px;border-radius: 50% !important">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="{{ url('login-google') }}"
                            class="btn d-flex align-items-center justify-content-center text-white p-0 mx-2"
                            style="width: 45px;height: 45px;border-radius: 50% !important">
                            <i class="fab fa-google fa-fw"></i>
                        </a>
                        <a href="#"
                            class="btn d-flex align-items-center justify-content-center text-white p-0 mx-2"
                            style="width: 45px;height: 45px;border-radius: 50% !important">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </div>

                    <p class="text-center py-3">Have not account yet ?</p>
                    <a href="{{ route('register') }}" class="d-block text-center" style="cursor: pointer">SIGN UP</a>
                </form>
            </div>
        </div>
    </div>
@endsection
