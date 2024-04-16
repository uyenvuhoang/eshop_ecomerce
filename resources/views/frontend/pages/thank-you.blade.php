@extends('layouts.app')
@section('title', 'Thank you for shopping')
@section('content')
    <div class="py-3 pt-md-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                    <div class="p-4 shadow bg-white">
                        <h2>Your logo</h2>
                        <h4 class="my-3">Thank You for Shopping with {{ $appSetting->wedsite_name ?? 'Wedsite Name' }} </h4>
                        <a href="{{ url('collections') }}" class="btn btn-primary mt-3 text-white">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
