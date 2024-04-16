<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-header">
                <h3>Edit Product
                    <button wire:click="viewMode" class="btn btn-danger btn-sm float-end text-white">Back</button>
                </h3>
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
            </div>
            <div class="card-body">
                <form wire:submit.prevent="updateProduct" enctype="multipart/form-data">
                    @csrf
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seotag-tab" data-bs-toggle="tab" data-bs-target="#seotag"
                                type="button" role="tab" aria-controls="seotag" aria-selected="false">SEO
                                Tags</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details"
                                type="button" role="tab" aria-controls="details"
                                aria-selected="false">Details</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="color-tab" data-bs-toggle="tab" data-bs-target="#color"
                                type="button" role="tab" aria-controls="color" aria-selected="false">Product Color
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade border p-3 show active" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="">Category</label>
                                    <select wire:model.defer="category_id" class="form-control">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="">Select Brand</label>
                                    <select wire:model.defer="brand"class="form-control">
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('brand')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="">Product Name</label>
                                <input type="text" wire:model.defer="name" class="form-control">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Upload Product Image</label>
                                <input type="file" multiple class="form-control" wire:model.lazy="images">
                            </div>

                            @if ($images)
                                @foreach ($images as $item)
                                    <img src="{{ $item->temporaryUrl() }}" width="100px">
                                @endforeach
                            @endif
                            @if ($imageEdit)
                                @foreach ($imageEdit as $item)
                                    <span class="warpper-image">
                                        <img src="{{ asset($item->image) }}" width="100px">
                                        <span class="btnDeleteImage" wire:click="deleteImage({{ $item['id'] }})"><i
                                                class="fa-solid fa-xmark"></i></span>

                                    </span>
                                @endforeach
                            @endif

                        </div>
                        <div class="tab-pane fade border p-3" id="seotag" role="tabpanel"
                            aria-labelledby="seotag-tab">
                            <div class="mb-3">
                                <label for="">Meta title</label>
                                <input type="text" wire:model.defer="meta_title" class="form-control">
                                @error('meta_title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Meta Description</label>
                                <textarea wire:model.defer="meta_description" class="form-control" rows="4"></textarea>
                                @error('meta_description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Meta Keyword</label>
                                <textarea wire:model.defer="meta_keyword" class="form-control" rows="4"></textarea>
                                @error('meta_keyword')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="tab-pane fade border p-3" id="details" role="tabpanel"
                            aria-labelledby="details-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="">Original Price</label>
                                        <input type="text" wire:model.defer="original_price" class="form-control">
                                        @error('original_price')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="">Selling Price</label>
                                        <input type="text" wire:model.defer="selling_price" class="form-control">
                                        @error('selling_price')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="">Quantity</label>
                                        <input type="text" wire:model.defer="quantity" class="form-control">
                                        @error('quantity')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="">Trending (Checked:Visible)</label>
                                        <input type="checkbox" wire:model.defer="trending">
                                        @error('trending')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="">Featured (Checked:Visible)</label>
                                        <input type="checkbox" wire:model.defer="featured">
                                        @error('featured')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="">Status (Cheked: Hidden)</label>
                                        <input type="checkbox" wire:model.defer="status">
                                        @error('status')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="">Description</label>
                                    <textarea wire:model.defer="description" class="form-control" rows="4"></textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade border p-3" id="color" role="tabpanel"
                            aria-labelledby="color-tab">
                            <label for="">Select Color</label>
                            <hr>
                            <div class="row">
                                @forelse ($colors as $color)
                                    <div class="col-md-3">
                                        <div class="p2 border mb-3">
                                            Color: <input type="checkbox"
                                                wire:model.defer="colorSelected.{{ $color->id }}"
                                                value="{{ $color->id }}">{{ $color->name }}
                                            <br>
                                            Quantity: <input type="number"
                                                wire:model.defer="colorQuantitySelected.{{ $color->id }}"
                                                style="width: 70px; border:1px solid;" />
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-md-12">
                                        No Color Found
                                    </div>
                                @endforelse
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Color Name</th>
                                            <th>Quantity</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($productEdit->productColors as $prodColor)
                                            <tr class="prod-color-tr">
                                                <td>
                                                    @if ($prodColor->color)
                                                        {{ $prodColor->color->name }}
                                                    @else
                                                        No Color Found
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="input-group mb-3" style="width:200px">
                                                        <div class="btn btn-primary text-white">{{ $prodColor->quantity }}</div>
                                                        <input type="text"
                                                            wire:model.defer="productColorQuantity.{{ $prodColor->id }}"
                                                            class="productColorQuantity form-control form-control-sm border-primary" />
                                                        <button wire:click="updateColorQuantity({{ $prodColor->id }})"
                                                            class="updateProductColorBtn btn btn-primary btn-sm text-white">Update</button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button wire:click="deleteProdColor({{ $prodColor->id }})"
                                                        class="deleteProductColorBtn btn btn-danger btn-sm text-white">Delete</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary btn-sm text-white mt-3 float-end">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
