@extends('layouts.app')

@section('content')
    <div class="row justify-content-center my-3">
        <div class="col-md-5">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="border p-4 mx-auto">
                    <h3 class="text-center pb-2" style="border-bottom: 3px solid #F6931D">REGISTER</h3>
                    <div class="form-group mt-2">
                        <label for="">Full Name</label>
                        <input id="name" type="text" class="form-control p-2 @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Email Adress</label>
                        <input id="email" type="email" class="form-control p-2 @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input id="password" type="password" class="form-control p-2 @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control p-2" name="password_confirmation"
                            required autocomplete="new-password">

                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn rounded btn-block">REGISTER</button>
                    </div>

                    <p class="text-center py-3">Have a account yet ?</p>
                    <a href="{{ route('login') }}" class="d-block text-center" style="cursor: pointer">SIGN IN</a>
                </div>
            </form>
        </div>
    </div>
@endsection
