@extends('layouts.app')
@section('title', 'All categories')
@section('content')
    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Our Categories</h4>
                    <div class="my-2" style="background: #F7941D; height: 3px;width:200px;"></div>
                </div>

                @forelse ($categories as $categoryItem)
                    <div class="col-6 col-md-3">
                        <div class="category-card">
                            <a href="{{url('/collections/'.$categoryItem->slug)}}">
                                <div class="category-card-img" style="background: #F6F7FB">
                                    <img src="{{asset("$categoryItem->image")}}" class="w-100" alt="Laptop" style="height:200px;background:tranparent;color:white">
                                </div>
                                <div class="category-card-body">
                                    <h5 class="text-center">{{$categoryItem->name}}</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                @empty
                <div class="col-md-12">
                    <h5>No Categories Available</h5>
                </div>
                @endforelse

            </div>
        </div>
    </div>
@endsection
