<div>
    <div class="shopping-cart section">
        <div class="container">
            <h4 style="font-weight: 500">My WishList
                <a href="/" class="btn btn-warning float-right text-white">Back</a>
            </h4>
            <div class="my-2" style="background: #F7941D; height: 3px;width:150px;"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table shopping-summery">
                        <thead>
                            <tr class="main-hading">
                                <th>PRODUCT</th>
                                <th>NAME</th>
                                <th class="text-center">UNIT PRICE</th>
                                <th class="text-center"><i class="fa-regular fa-trash-can"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($wishlist as $wishlistItem)
                                @if ($wishlistItem->product)
                                    <tr>
                                        <td class="image" data-title="No">
                                            @if ($wishlistItem->product->productImages)
                                                <a
                                                    href="{{ url('collections/' . $wishlistItem->product->category->slug . '/' . $wishlistItem->product->slug) }}">
                                                    <img src="{{ asset($wishlistItem->product->productImages[0]->image) }}"
                                                        style="width: auto; height: 100px" alt="">
                                                </a>
                                            @else
                                                <img src="https://via.placeholder.com/100x100" alt="#">
                                            @endif
                                        </td>
                                        <td class="product-des" data-title="Description">
                                            <p class="product-name">
                                                <a
                                                    href="{{ url('collections/' . $wishlistItem->product->category->slug . '/' . $wishlistItem->product->slug) }}">
                                                    {{ $wishlistItem->product->name }}
                                                </a>
                                            </p>
                                            <p class="product-des">
                                                @if ($wishlistItem->productColor)
                                                    @if ($wishlistItem->productColor->color)
                                                        <span>-Color:
                                                            {{ $wishlistItem->productColor->color->name }}</span>
                                                    @endif
                                                @endif
                                            </p>
                                        </td>
                                        <td class="price" data-title="Price">
                                            <span>${{ $wishlistItem->product->selling_price }}</span>
                                        </td>
                                        <td class="action" data-title="Remove">
                                            <span style="cursor: pointer">
                                                <i class="fa-regular fa-trash-can"
                                                    wire:click="removeWishlistItem({{ $wishlistItem->id }})"></i>
                                            </span>
                                        </td>
                                    </tr>
                                @endif
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">
                                        <h4>No WishList Product Avaiable</h4>
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ End Shopping Summery -->
    </div>
    <!-- Start Shop Services Area  -->
    <section class="shop-services p-5">
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
                                <input name="EMAIL" placeholder="Your email address" required="" type="email">
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
</div>
