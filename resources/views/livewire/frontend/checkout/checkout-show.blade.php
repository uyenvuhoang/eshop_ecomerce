<section class="shop checkout section">
    <div class="container">
        @if ($this->totalProductAmount != 0)
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="checkout-form">
                        <h2>Make Your Checkout Here</h2>
                        <p>Please register in order to checkout more quickly</p>
                        <form class="form" method="post" action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" wire:model.defer="fullname" id="fullname"
                                            class="form-control" />
                                        @error('fullname')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" wire:model.defer="email" id="email"
                                            class="form-control" />
                                        @error('email')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="number" wire:model.defer="phone" id="phone"
                                            class="form-control" />
                                        @error('phone')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Pin-code (Zip-code)</label>
                                        <input type="number" wire:model.defer="pincode" id="pincode"
                                            class="form-control" />
                                        @error('pincode ')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Full Address</label>
                                        <input wire:model.defer="address" id="address" class="form-control" />
                                        @error('address')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="order-details">
                        <div class="single-widget">
                            <h2>CART TOTALS</h2>
                            <div class="content">
                                <ul>
                                    <li>Sub Total<span>${{ $this->totalProductAmount }}</span></li>
                                    <li>(+) Shipping<span>$00.00</span></li>
                                    <li class="last">Total<span>${{ $this->totalProductAmount }}</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-widget px-4" wire:ignore>
                            <h2>Payments</h2>
                            <br>
                            <div class="d-flex flex-column">
                                <ul class="nav nav-tabs mb-3" id="myTab" role="tablist" style="width: 100%">
                                    <li class="nav-item" role="presentation" style="cursor: pointer; width:50%;">
                                        <span class="nav-link active" id="home-tab" data-toggle="tab"
                                            data-target="#home" type="button" role="tab" aria-controls="home"
                                            aria-selected="true">
                                            Cash on Delivery
                                        </span>
                                    <li class="nav-item" role="presentation" style="cursor: pointer; width:50%">
                                        <span class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile"
                                            type="button" role="tab" aria-controls="profile"
                                            aria-selected="false">Online Payment</span>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" 
                                        aria-labelledby="home-tab">
                                        <div wire:loading.attr="disabled" style="cursor: pointer" wire:click="codOrder"
                                            class="btn btn-primary d-flex justify-content-center rounded">
                                            <span wire:loading.remove wire:target="codOrder">
                                                Place Order
                                            </span>
                                            <span wire:loading wire:target="codOrder">
                                                Placing Order
                                            </span>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <div id="paypal-button-container"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="card card-body shadow text-center p-md-5">
                <h4>No Items In cart to checkout</h4>
                <a href="{{ url('collections') }}" class="btn btn-warning">SHOP NOW</a>
            </div>
        @endif

    </div>
</section>

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


@push('scripts')
    <script
        src="https://www.paypal.com/sdk/js?client-id=Abb5FWxAO5sbmsFyRSGzwKCFl6lmdBky-MPitxt1Dazf0a_Zryp8AuHALSVyMxeScW3eZziuhh_Rq2HG&currency=USD">
    </script>

    <script>
        paypal.Buttons({

            onClick: function() {
                // Show a validation error if the checkbox is not checked
                if (!document.getElementById('fullname').value ||
                    !document.getElementById('phone').value ||
                    !document.getElementById('email').value ||
                    !document.getElementById('pincode').value ||
                    !document.getElementById('address').value

                ) {
                    Livewire.emit('validationForAll');
                    return false;
                } else {
                    @this.set('fullname', document.getElementById('fullname').value);
                    @this.set('phone', document.getElementById('phone').value);
                    @this.set('email', document.getElementById('email').value);
                    @this.set('pincode', document.getElementById('pincode').value);
                    @this.set('address', document.getElementById('address').value);
                }
            },
            // Sets up the transaction when a payment button is clicked
            createOrder: (data, actions) => {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: {{ $this->totalProductAmount }}
                        }
                    }]
                });
            },
            // Finalize the transaction after payer approval
            onApprove: (data, actions) => {
                return actions.order.capture().then(function(orderData) {
                    // Successful capture! For dev/demo purposes:
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                    const transaction = orderData.purchase_units[0].payments.captures[0];
                    if (transaction.status == "COMPLETED") {
                        Livewire.emit('transactionEmit', transaction.id)
                    }
                    // alert(
                    //     `Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`
                    //     );
                    // When ready to go live, remove the alert and show a success message within this page. For example:
                    // const element = document.getElementById('paypal-button-container');
                    // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                    // Or go to another URL:  actions.redirect('thank_you.html');
                });
            }
        }).render('#paypal-button-container');
    </script>
@endpush
