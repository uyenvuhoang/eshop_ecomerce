<div>
    <!-- Start Small Banner  -->
    <div class="small-banner section">
        <div class="container-fluid">
            <div class="row">
                @foreach ($sliders as $item)
                    <div class="col-lg-4 col-md-6 col-12" style="cursor: pointer">
                        <div class="single-banner" onclick="openModalBanner();currentBanner({{ $loop->index + 1 }})">
                            <img src="{{ $item->image }}" alt="#" style="width:600px; height:220px">
                            <div class="content">
                                <p>{{ $item->title }}</p>
                                <h5>{!! $item->description !!}</h5>
                                {{-- <a href="" class="btn-sm text-white" style="background: rgba(0, 0, 0, 0.5) !important">Shop Now</a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Small Banner -->

    <!-- Start Trending Product  -->
    <div class="product-area section" style="padding:50px 0 !important">
        <div class="container">
            <div class="section-title p-0 m-0">
                <h2>Trending Item</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-info">
                        <div class="tab-pane fade show active" id="man" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">
                                    @if ($trendingProducts)
                                        @foreach ($trendingProducts as $product)
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        @if ($product->productImages->count() > 0)
                                                            <a
                                                                href="{{ url('/collections/' . $product->category->slug . '/' . $product->slug) }}">

                                                                <img src="{{ asset($product->productImages[0]->image) }}"
                                                                    class="default-img" width='550' height="750"
                                                                    alt="{{ $product->name }}">
                                                            </a>
                                                        @endif
                                                        <div class="button-head">
                                                            <div class="product-action">
                                                                <a data-product-id={{ $product->id }}
                                                                    class="btnQuickView" data-toggle="modal"
                                                                    data-target="#quickViewModal" title="Quick View"><i
                                                                        class="fa-regular fa-eye"></i><span>Quick
                                                                        Shop</span></a>

                                                                <a wire:click="addToWishList({{ $product->id }})"
                                                                    title="Wishlist"><i
                                                                        class="fa-regular fa-heart"></i><span>Add to
                                                                        Wishlist</span></a>
                                                            </div>
                                                            <div class="product-action-2">
                                                                <a title="Add to cart"
                                                                    wire:click="addToCart({{ $product->id }})">Add to
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
                                        @endforeach
                                    @else
                                        <div class="p-2">
                                            <h4>No Products Available </h4>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Trending Product  -->


    <!-- Start Featured Product -->
    <div class="product-area most-popular section" style="padding:25px 0 !important">
        <div class="container">
            <div class="section-title p-0 m-0">
                <h2>Hot Item</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider" wire:ignore>
                        @if ($featuredProducts)
                            @foreach ($featuredProducts as $product)
                                <div class="single-product">
                                    <div class="product-img">
                                        @if ($product->productImages->count() > 0)
                                            <a
                                                href="{{ url('/collections/' . $product->category->slug . '/' . $product->slug) }}">

                                                <img src="{{ asset($product->productImages[0]->image) }}"
                                                    class="default-img" width='550' height="750"
                                                    alt="{{ $product->name }}">
                                                <span class="out-of-stock">Hot</span>
                                            </a>
                                        @endif
                                        <div class="button-head">
                                            <div class="product-action">
                                                <a data-product-id={{ $product->id }}
                                                    class="btnQuickView" data-toggle="modal"
                                                    data-target="#quickViewModal" title="Quick View"><i
                                                        class="fa-regular fa-eye"></i><span>Quick
                                                        Shop</span></a>
                                                <a wire:click="addToWishList({{ $product->id }})" title="Wishlist"><i
                                                        class="fa-regular fa-heart"></i><span>Add to
                                                        Wishlist</span></a>
                                                <a title="Compare"><i class="fa-solid fa-code-compare"></i><span>Add
                                                        to Compare</span></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a wire:click="addToCart({{ $product->id }})" title="Add to cart">Add
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
                                            <span class="old">${{ $product->original_price }}</span>
                                            <span>${{ $product->selling_price }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="p-2">
                                <h4>No Products Available </h4>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Featured Product -->

    <!-- Start Shop Services Area  -->
    <section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="fa-solid fa-rocket"></i>
                        <h4>Free shiping</h4>
                        <p>Orders over $100</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="fa-solid fa-arrows-rotate"></i>
                        <h4>Free Return</h4>
                        <p>Within 30 days returns</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="fa-solid fa-lock"></i>
                        <h4>Sucure Payment</h4>
                        <p>100% secure payment</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="fa-solid fa-tag"></i>
                        <h4>Best Peice</h4>
                        <p>Guaranteed price</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Services -->

    <!-- Start Shop Newsletter  -->
    <section class="shop-newsletter section">
        <div class="container">
            <div class="inner-top">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <!-- Start Newsletter Inner -->
                        <div class="inner">
                            <h4>Newsletter</h4>
                            <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="EMAIL" placeholder="Your email address" required=""
                                    type="email">
                                <button class="btn">Subscribe</button>
                            </form>
                        </div>
                        <!-- End Newsletter Inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Newsletter -->

    <div id="myBaner" class="modal-banner" style="z-index: 100000000">
        <span class="close cursor" onclick="closeModalBanner()">&times;</span>
        <div class="modal-content-banner position-relative">
            @foreach ($sliders as $item)
                <div class="myBanners">
                    <div class="numbertext">{{ $loop->index + 1 }} / {{ $sliders->count() }}</div>
                    <img src="{{ $item->image }}" style="width:100%;height:500px">
                </div>
            @endforeach

            <a class="prev" onclick="plusBanner(-1)">&#10094;</a>
            <a class="next" onclick="plusBanner(1)">&#10095;</a>
            <div class="caption-container">
                <p id="caption"></p>
            </div>

        </div>
    </div>

</div>

@push('scripts')
    <script>
        function openModalBanner() {
            document.getElementById("myBaner").style.display = "block";
        }

        function closeModalBanner() {
            document.getElementById("myBaner").style.display = "none";
        }

        var slideIndex = 1;
        showBanner(slideIndex);

        function plusBanner(n) {
            showBanner(slideIndex += n);
        }

        function currentBanner(n) {
            showBanner(slideIndex = n);
        }

        function showBanner(n) {
            var i;
            var slides = document.getElementsByClassName("myBanners");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>
@endpush
