<div>
    <style>
        /** rating **/
        div.stars {
            display: inline-block;
        }

        input.star {
            display: none;
        }

        label.star {
            float: right;
            padding: 10px;
            font-size: 20px;
            color:
                #444;
            transition: all .2s;
        }

        input.star:checked~label.star:before {
            content: '\f005';
            color:
                #e74c3c;
            transition: all .25s;
        }

        input.star-5:checked~label.star:before {
            color:
                #e74c3c;
        }

        input.star-1:checked~label.star:before {
            color:
                #e74c3c;
        }

        label.star:before {
            content: '\f006';
            font-family: FontAwesome;
        }

        /** end rating **/
    </style>
    {{-- Start Product Detail --}}
    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-3 p-3 shadow" wire:ignore>
                    <div class="container px-0 position-relative">
                        @if ($product->productImages)
                            @foreach ($product->productImages as $itemImg)
                                <div class="mySlides">
                                    <img src="{{ asset($itemImg->image) }}" style="width:100%;height:300px">
                                </div>
                            @endforeach
                        @else
                            No Image Added
                        @endif
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                    </div>
                    <div class="underline mb-3"></div>
                    <div class="container d-flex px-0">
                        @if ($product->productImages)
                            @foreach ($product->productImages as $itemImg)
                                <div class="col-md-3 px-0">
                                    <img class="demo cursor" src="{{ asset($itemImg->image) }}" style="width:100%"
                                        onclick="currentSlide({{ $loop->index + 1 }})" alt="The Woods">
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="product-view">
                        <h4 style="font-weight: 600">
                            {{ $product->name }}
                        </h4>
                        <div class="col-sm-6 d-flex align-items-center me-0" style="flex-direction: row-reverse">
                            <p class="mx-3 text-success">{{ round($totalStar, 2) }}</p>
                            <input class="star star-5"type="radio" {{ ceil($totalStar) == 5 ? 'checked' : '' }} />
                            <label class="star star-5"></label>
                            <input class="star star-4" type="radio" {{ ceil($totalStar) == 4 ? 'checked' : '' }} />
                            <label class="star star-4"></label>
                            <input class="star star-3" type="radio" {{ ceil($totalStar) == 3 ? 'checked' : '' }} />
                            <label class="star star-3"></label>
                            <input class="star star-2" type="radio" {{ ceil($totalStar) == 2 ? 'checked' : '' }} />
                            <label class="star star-2"></label>
                            <input class="star star-1" type="radio" {{ ceil($totalStar) == 1 ? 'checked' : '' }} />
                            <label class="star star-1"></label>
                        </div>
                        <div class="d-flex my-3">
                            <h5 style="font-weight: 600">${{ $product->selling_price }}</h5>
                            <span class="original-price mx-2"
                                style="text-decoration-line: line-through">${{ $product->original_price }}</span>
                        </div>
                        <p>{!! $product->description !!}</p>
                        <div class="my-3">
                            @if ($product->productColors->count() > 0)
                                <div class="d-flex">
                                    <h5 style="font-weight: 500">Colors: </h5>
                                    @if ($product->productColors)
                                        @foreach ($product->productColors as $colorItem)
                                            <div class="colorSelectionLabel mx-2 d-flex justify-content-center align-items-center"
                                                name="colorSelection" wire:click="colorSelected({{ $colorItem->id }})"
                                                onclick="this.style.border = '3px solid #28A745' "
                                                style="width:30px;height:30px;cursor:pointer;border-radius:50%;background-color:{{ $colorItem->color->code }}">
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div>
                                    @if ($this->prodColorSelectedQuantity == '0')
                                        <span class="btn-sm text-secondary py-1 mt-2"
                                            style="text-transform: capitalize;background-color:{{ $this->productColor->color->code }}">{{ $this->productColor->color->name }}</span>
                                        <label class="btn-sm py-1 mt-2 text-white bg-danger"> <i
                                                class="fa-regular fa-face-surprise" style="margin-right:5px"></i></i>Out
                                            of Stock</label>
                                    @elseif($this->prodColorSelectedQuantity > 0)
                                        <span class="btn-sm text-secondary py-1 mt-2"
                                            style="text-transform: capitalize;background-color:{{ $this->productColor->color->code }}">{{ $this->productColor->color->name }}</span>
                                        <label class="btn-sm py-1 mt-2 text-white bg-success">
                                            <i class="fa-regular fa-circle-check" style="margin-right:5px"></i>In
                                            Stock</label>
                                    @endif
                                </div>
                            @else
                                @if ($product->quantity)
                                    <label class="btn-sm py-1 mt-2 text-white bg-success"><i
                                            class="fa-regular fa-circle-check" style="margin-right:5px"></i>In
                                        Stock</label>
                                @else
                                    <label class="btn-sm py-1 mt-2 text-white bg-danger"> <i
                                            class="fa-regular fa-face-surprise" style="margin-right:5px"></i></i>Out
                                        of Stock</label>
                                @endif

                            @endif
                        </div>
                        <div class="mt-2 d-flex">
                            <div class="border shadow col-md-3 d-flex align-items-center justify-content-between">
                                <span wire:click="decrementQuantity"><i class="fa fa-minus"></i></span>
                                <input type="text" wire:model="quantityCount" value="{{ $this->quantityCount }}"
                                    readonly class="input-quantity" style="border: none;" />
                                <span wire:click="incrementQuantity"><i class="fa fa-plus"></i></span>
                            </div>
                            <button type="button" wire:click="addToCart({{ $product->id }})" class="btn btn1 mx-2">
                                Add To
                                Cart</button>
                            <button type="button" wire:click="addToWishList({{ $product->id }})" class="btn btn1"><i
                                    class="fa-regular fa-heart"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Product Detail --}}

    {{-- Start Comment --}}
    <div class="container mb-5">
        <h5 class="my-3" style="font-weight: 600;border-left:3px solid #F7941D; padding-left:3px">Rating Product :
            {{ $countComment }}</h5>
        @forelse ($comments as $comment)
            <div class="row p-4">
                <div style="width:5%">
                    <div class="rounded-circle border shadow p-2 d-flex align-items-center justify-content-center"
                        style="width:35px;height:35px"><i class="fa-regular fa-user"></i></div>
                </div>
                <div style="width:95%">
                    <div class="d-flex align-items-center">
                        <div style="font-weight: 500;" class="font-bold text-lg">{{ $comment->user->name }}</div>
                        <div class="text-xs text-gray-500 mx-2 font-semibold" style="font-size: 12px">
                            {{ $comment->created_at->diffForHumans() }}</div>
                    </div>
                    <div class="col-sm-3">
                        <input class="star star-5"type="radio" {{ $comment->star == 5 ? 'checked' : '' }} />
                        <label class="star star-5"></label>
                        <input class="star star-4" type="radio" {{ $comment->star == 4 ? 'checked' : '' }} />
                        <label class="star star-4"></label>
                        <input class="star star-3" type="radio" {{ $comment->star == 3 ? 'checked' : '' }} />
                        <label class="star star-3"></label>
                        <input class="star star-2" type="radio" {{ $comment->star == 2 ? 'checked' : '' }} />
                        <label class="star star-2"></label>
                        <input class="star star-1" type="radio" {{ $comment->star == 1 ? 'checked' : '' }} />
                        <label class="star star-1"></label>
                    </div>
                    <p class="text-gray-800">{{ $comment->comment }}</p>
                    @if ($comment->image)
                        <img src="{{ asset($comment->image) }}" width="100px" />
                    @endif
                </div>
            </div>
        @empty
            <p>There are no reviews yet !!</p>
        @endforelse
        {{ $comments->links() }}
        @error('newComment')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
        {{-- <div>
            @if (session()->has('message'))
                <div class="p-3 bg-green-300 text-green-800 rounded shadow-sm">
                    {{ session('message') }}
                </div>
            @endif
        </div> --}}

        <h5 class="my-3" style="font-weight: 600;border-left:3px solid #F7941D; padding-left:3px">Rating Product
        </h5>
        <form wire:submit.prevent="addComment({{ $product->id }})"
            class="d-flex flex-column my-3 rounded border p-4">
            <div class="col-sm-3">
                <input class="star star-5" wire:model.defer="star" value="5" id="star-5"
                    type="radio" />
                <label class="star star-5" for="star-5"></label>
                <input class="star star-4" wire:model.defer="star" value="4" id="star-4"
                    type="radio" />
                <label class="star star-4" for="star-4"></label>
                <input class="star star-3" wire:model.defer="star" value="3" id="star-3"
                    type="radio" />
                <label class="star star-3" for="star-3"></label>
                <input class="star star-2" wire:model.defer="star" value="2" id="star-2"
                    type="radio" />
                <label class="star star-2" for="star-2"></label>
                <input class="star star-1" wire:model.defer="star" value="1" id="star-1"
                    type="radio" />
                <label class="star star-1" for="star-1"></label>
            </div>
            <div class="form-group">
                @if ($photo)
                    <img src="{{ $photo->temporaryUrl() }}" width="50px">
                @endif
                <input type="file" wire:model="photo">
                @error('photo')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <textarea rows="4" wire:model.debounce.500ms="comment" class="rounded border shadow" style="outline: none"></textarea>
            </div>
            <div class="py-2">
                <button type="submit" class="btn btn-primary">Post Comment</button>
            </div>
        </form>
    </div>
    {{-- End Comment --}}

    <!-- Start Relative Product -->
    <section class="shop-home-list section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="shop-section-title">
                                <h1>Related
                                    @if ($category)
                                        {{ $category->name }}
                                    @endif
                                    Products
                                </h1>
                            </div>
                        </div>
                    </div>
                    @forelse ($category->relatedProducts->take(5) as $relatedProductItem)
                        <div class="single-list">
                            <div class="row">
                                <div class="col-lg-7 col-md-6 col-12">
                                    <div class="list-image overlay">
                                        @if ($relatedProductItem->productImages->count() > 0)
                                            <img src="{{ asset($relatedProductItem->productImages[0]->image) }}"
                                                style="with:154px; height:187px; object-fit:cover;"
                                                alt="{{ $relatedProductItem->name }}">
                                        @endif
                                        <a wire:click="addToWishList({{ $relatedProductItem->id }})"
                                            style="cursor: pointer" class="buy"><i
                                                class="fa-regular fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-12 no-padding">
                                    <div class="content">
                                        <h4 class="title"><a
                                                href="{{ url('/collections/' . $relatedProductItem->category->slug . '/' . $relatedProductItem->slug) }}">{{ $relatedProductItem->name }}</a>
                                        </h4>
                                        <p class="price with-discount">${{ $relatedProductItem->selling_price }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="p-2 col-md-12">
                            <h4>No Related Products Available </h4>
                        </div>
                    @endforelse

                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="shop-section-title">
                                <h1>
                                    Related
                                    @if ($product)
                                        {{ $product->brandProduct->name }}
                                    @endif
                                    Products
                                </h1>
                            </div>
                        </div>
                    </div>
                    @forelse ($category->relatedProducts->take(5) as $relatedProductItem)
                        @if ($relatedProductItem->brand == "$product->brand")
                            <div class="single-list">
                                <div class="row">
                                    <div class="col-lg-7 col-md-6 col-12">
                                        <div class="list-image overlay">
                                            @if ($relatedProductItem->productImages->count() > 0)
                                                <img src="{{ asset($relatedProductItem->productImages[0]->image) }}"
                                                    style="with:154px; height:187px; object-fit:cover;"
                                                    alt="{{ $relatedProductItem->name }}">
                                            @endif
                                            <a wire:click="addToWishList({{ $relatedProductItem->id }})"
                                                style="cursor: pointer" class="buy"><i
                                                    class="fa-regular fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-12 no-padding">
                                        <div class="content">
                                            <h4 class="title"><a
                                                    href="{{ url('/collections/' . $relatedProductItem->category->slug . '/' . $relatedProductItem->slug) }}">{{ $relatedProductItem->name }}</a>
                                            </h4>
                                            <p class="price with-discount">${{ $relatedProductItem->selling_price }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @empty
                        <div class="p-2 single-list col-md-12">
                            <h4>No Related Products Available </h4>
                        </div>
                    @endforelse

                </div>
            </div>
        </div>
    </section>
    <!-- End Relative Product -->
</div>

@push('scripts')
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");
            let captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>
@endpush
