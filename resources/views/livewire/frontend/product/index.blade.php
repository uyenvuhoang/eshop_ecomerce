<div>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="/">Home<i class="fa-solid fa-arrow-right"></i></a></li>
                            <li><a href="{{ url('/collections') }}">Categories<i class="fa-solid fa-arrow-right"></i></a>
                            </li>
                            <li class="active"><a href="">{{ $category->name }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 float">
                    <h5><i class="fa-solid fa-code-compare"></i><a href="{{ url('/gotoCompare') }}"> - Go to
                            Compare Page</a></h5>
                    <br>
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                    @if (session('alert'))
                        <div class="alert alert-danger">{{ session('alert') }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <div class="container">
        <section class="product-area shop-sidebar shop section pt-2 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12 mt-5">
                        <div class="shop-sidebar">
                            <!-- Single Widget -->
                            <div class="single-widget category">
                                <h3 class="title">Brands</h3>
                                <ul class="categor-list">
                                    @if ($category->brands)
                                        @foreach ($category->brands as $brandItem)
                                            <li>
                                                <label for="{{ $brandItem->id }}" class="d-block">
                                                    <input type="checkbox" id="{{ $brandItem->id }}"
                                                        wire:model="brandInputs" value="{{ $brandItem->id }}"> <span
                                                        class="mx-2">{{ $brandItem->name }}</span>
                                                </label>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                            <!--/ End Single Widget -->
                            <!-- Shop By Price -->
                            <div class="single-widget range">
                                <h3 class="title">Shop by Price</h3>
                                <ul class="check-box-list">
                                    <li>
                                        <label class="checkbox-inline" for="lowtohight">
                                            <input name="priceSort" id="lowtohight" wire:model="priceInput"
                                                type="radio" value="low-to-hight">
                                            Low To Hight
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-inline" for="highttolow">
                                            <input name="priceSort" id="highttolow" wire:model="priceInput"
                                                type="radio" value="hight-to-low">
                                            Hight To Low
                                        </label>
                                    </li>
                                    <div class="underline mb-3" style="background: #F7941D"></div>
                                    <li>
                                        <label class="checkbox-inline" for="2050">
                                            <input name="priceSort" id="2050" wire:model="priceInput"
                                                type="radio" value="0-1000">
                                            $0 - $1000
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-inline" for="50100">
                                            <input name="priceSort" id="50100" wire:model="priceInput"
                                                type="radio" value="1000-2000">
                                            $1000 - $2000
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-inline" for="100250">
                                            <input name="priceSort" id="100250" wire:model="priceInput"
                                                type="radio" value="2000-">
                                            $2000 Release
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!--/ End Shop By Price -->
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="row">
                            @forelse ($products as $product)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-product">
                                        <div class="product-img">
                                            @if ($product->productImages->count() > 0)
                                                <a
                                                    href="{{ url('/collections/' . $product->category->slug . '/' . $product->slug) }}">

                                                    <img class="default-img"
                                                        src="{{ asset($product->productImages[0]->image) }}"
                                                        alt="{{ $product->name }}" width="550" height="750">
                                                </a>
                                            @endif
                                            <div class="button-head">
                                                <div class="product-action">
                                                    <a data-product-id={{ $product->id }} class="btnQuickView"
                                                        data-toggle="modal" data-target="#quickViewModal"
                                                        title="Quick View"><i class="fa-regular fa-eye"></i><span>Quick
                                                            Shop</span></a>
                                                    <a wire:click="addToWishList({{ $product->id }})"
                                                        title="Wishlist"><i class="fa-regular fa-heart"></i><span>Add
                                                            to
                                                            Wishlist</span></a>
                                                    <a href="{{ url('/addCompare', [$product->id]) }}"
                                                        title="Compare"><i
                                                            class="fa-solid fa-code-compare"></i><span>Add to
                                                            Compare</span></a>
                                                </div>
                                                <div class="product-action-2">
                                                    <a title="Add to cart"
                                                        wire:click="addToCart({{ $product->id }})">Add
                                                        to
                                                        cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a
                                                    href="{{ url('/collections/' . $product->category->slug . '/' . $product->slug) }}">{{ $product->name }}</a>
                                            </h3>
                                            <div class="product-price">
                                                <span>${{ $product->selling_price }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="p-2 single-product">
                                    <h4>No Products Available For {{ $category->name }}</h4>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
