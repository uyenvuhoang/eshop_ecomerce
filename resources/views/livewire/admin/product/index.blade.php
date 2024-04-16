<div class="row">
    @if ($updateMode)
        @include('livewire.admin.product.edit')
    @elseif($createMode)
        @include('livewire.admin.product.create')
    @else
        @include('livewire.admin.product.delete-form')
        <div class="col-md-12 grid-margin">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3>Products
                        <button wire:click="createMode" class="btn btn-primary btn-sm text-white float-end">Add
                            Product</button>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Category</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        @if ($product->category)
                                            {{ $product->category->name }}
                                        @else
                                            No Category
                                        @endif
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->selling_price }} $</td>
                                    <td class="text-center">{{ $product->quantity }}</td>
                                    <td>{{ $product->status == '1' ? 'Hidden' : 'Visible' }}</td>
                                    <td>
                                        <button wire:click="editProduct({{ $product->id }})"
                                            class="btn btn-sm text-white btn-success me-2 mt-2">Edit</button>
                                        <button class="btn btn-sm text-white btn-danger mt-2"
                                            wire:click="deleteProduct({{ $product->id }})" data-bs-toggle="modal"
                                            data-bs-target="#deleteProduct">Delete</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7">No Product Available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="float-end mt-3">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

@push('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#deleteProduct').modal('hide');
        });
    </script>
@endpush
