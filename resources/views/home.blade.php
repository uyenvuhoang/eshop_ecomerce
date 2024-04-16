@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>{{ __('You are logged in!') }}</h4>
                </div>
            </div>
            <a href="/" class="btn btn-success mt-3 d-block text-white text-center">SHOP NOW</a>
        </div>
    </div>
</div>
@endsection
