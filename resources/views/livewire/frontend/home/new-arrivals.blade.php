  <div class="product-area section pt-5">
      <div class="container">
          <div class="section-title p-0 m-0">
              <h2>New Arrivals</h2>
          </div>
          <div class="row">
              <div class="col-12">
                  <div class="product-info">
                      <div class="tab-pane fade show active" id="man" role="tabpanel">
                          <div class="tab-single">
                              <div class="row">
                                  @if ($newArrivalsProducts)
                                      @foreach ($newArrivalsProducts as $product)
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
                          <div class="float-right">
                              {{ $newArrivalsProducts->links() }}
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
