@extends('layouts.app')
@section('title', 'User Profile')
@section('content')
    <div class="py-5 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h4>User Profile
                        <a href="{{ url('change-password') }}" class="btn btn-warning float-right text-white">Change Password
                            ?</a>
                    </h4>
                    <div class="my-2" style="background: #F7941D; height: 3px;width:150px;"></div>
                </div>

                <div class="col-md-10">
                    <div class="card-shadow">

                        @if (session('message'))
                            <p class="alert alert-success">{{ session('message') }}</p>
                        @endif

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form action="{{ url('profile') }}" method="POST">
                            @csrf
                            <div class="row my-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">User Name</label>
                                        <input type="text" name="username" value="{{ Auth::user()->name }}"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Email Address</label>
                                        <input type="text" readonly value="{{ Auth::user()->email }}"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Phone Number</label>
                                        <input type="text" name="phone"
                                            value="{{ Auth::user()->userDetail->phone ?? '' }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Zip/Pin Code</label>
                                        <input type="text" name="pin_code"
                                            value="{{ Auth::user()->userDetail->pin_code ?? '' }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <textarea name="address" class="form-control" rows="3">{{ Auth::user()->userDetail->address ?? '' }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Save Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
@endsection
