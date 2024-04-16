<div>
    <div class="shopping-cart section">
        <div class="container">
            <h4 style="font-weight: 500">My Cart
                <a href="/" class="btn btn-warning float-right text-white">Back</a>
            </h4>
            <div class="my-2" style="background: #F7941D; height: 3px;width:100px;"></div>
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
                                <th class="text-center">QUANTITY</th>
                                <th class="text-center">TOTAL</th>
                                <th class="text-center"><i class="fa-regular fa-trash-can"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($cart as $cartItem)
                                @if ($cartItem->product)
                                    <tr>
                                        <td class="image" data-title="No">
                                            @if ($cartItem->product->productImages)
                                                <a
                                                    href="{{ url('collections/' . $cartItem->product->category->slug . '/' . $cartItem->product->slug) }}">
                                                    <img src="{{ asset($cartItem->product->productImages[0]->image) }}"
                                                        style="width: auto; height: 100px" alt="">
                                                </a>
                                            @else
                                                <img src="https://via.placeholder.com/100x100" alt="#">
                                            @endif
                                        </td>
                                        <td class="product-des" data-title="Description">
                                            <p class="product-name">
                                                <a
                                                    href="{{ url('collections/' . $cartItem->product->category->slug . '/' . $cartItem->product->slug) }}">
                                                    {{ $cartItem->product->name }}
                                                </a>
                                            </p>
                                            <p class="product-des">
                                                @if ($cartItem->productColor)
                                                    @if ($cartItem->productColor->color)
                                                        <span style="text-transform: capitalize">Color:
                                                            {{ $cartItem->productColor->color->name }}</span>
                                                    @endif
                                                @endif
                                            </p>
                                        </td>
                                        <td class="price" data-title="Price">
                                            <span>${{ $cartItem->product->selling_price }}</span>
                                        </td>
                                        <td class="qty" data-title="Qty">
                                            <div class="input-group">
                                                <div class="button minus">
                                                    <button type="button" class="btn btn-primary btn-number"
                                                        wire:loading.attr="disabled"
                                                        wire:click="decrementQuantity({{ $cartItem->id }})"
                                                        data-type="minus">
                                                        <i class="fa-solid fa-minus"></i>
                                                    </button>
                                                </div>
                                                <input type="text" name="quant[1]" class="input-number"
                                                    data-min="1" data-max="100" value="{{ $cartItem->quantity }}">
                                                <div class="button plus">
                                                    <button type="button" class="btn btn-primary btn-number"
                                                        data-type="plus" wire:loading.attr="disabled"
                                                        wire:click="incrementQuantity({{ $cartItem->id }})">
                                                        <i class="fa-solid fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="total-amount" data-title="Total">
                                            <span>${{ $cartItem->product->selling_price * $cartItem->quantity }}</span>
                                        </td>
                                        @php
                                            $totalPrice += $cartItem->product->selling_price * $cartItem->quantity;
                                        @endphp
                                        <td class="action" data-title="Remove">
                                            <span style="cursor: pointer"
                                                wire:click="removeCartItem({{ $cartItem->id }})">
                                                <i class="fa-regular fa-trash-can"></i>
                                            </span>
                                        </td>
                                    </tr>
                                @endif
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">
                                        <h4>No Cart Product Avaiable</h4>
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                    <!--/ End Shopping Summery -->
                </div>
            </div>

            <!-- Total Amount -->
            <div class="row">
                <div class="col-12">
                    <div class="total-amount">
                        <div class="row">
                            <div class="col-lg-8 col-md-5 col-12">
                                <div class="left">
                                    <div class="coupon">
                                        <form action="#" target="_blank">
                                            <input name="Coupon" placeholder="Enter Your Coupon">
                                            <button class="btn">Apply</button>
                                        </form>
                                    </div>
                                    <div class="checkbox">
                                        <label class="checkbox-inline" for="2"><input name="news"
                                                id="2" type="checkbox"> Shipping (+10$)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-7 col-12">
                                <div class="right">
                                    <ul>
                                        <li>Cart Subtotal<span>${{ $totalPrice }}</span></li>
                                        <li>Shipping<span>Free</span></li>
                                        <li>You Save<span>$20.00</span></li>
                                        <li class="last">You Pay<span>${{ $totalPrice }}</span></li>
                                    </ul>
                                    <div class="button5">
                                        <a href="{{ url('/checkout') }}" class="btn">Checkout</a>
                                        <a href="{{ url('/collections') }}" class="btn">Continue shopping</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Total Amount -->
        </div>
    </div>
    <!-- Start Shop Services Area  -->
    <section class="shop-services pt-5">
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
</div>
