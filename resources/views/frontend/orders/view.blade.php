@extends('layouts.app')
@section('title', 'My orders Details')
@section('content')
    <div class="py-3 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shadow bg-white p-3">
                        <div class="container">
                            <h4>My Orders Details
                                <a href="{{ url('orders') }}" class="btn btn-warning float-right text-white">Back</a>
                            </h4>
                            <div class="my-2" style="background: #F7941D; height: 3px;width:200px;"></div>
                        </div>

                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <h5 style="font-weight: 500">Order Details</h5>
                                <hr>
                                <p><strong style="margin-right: 5px">Order Id:</strong> {{ $order->id }}</p>
                                <p><strong style="margin-right: 5px">Tracking Id/no:</strong> {{ $order->tracking_no }} </p>
                                <p><strong style="margin-right: 5px">Order Created Date:</strong>
                                    {{ $order->created_at->format('d-m-Y h:i A') }}</p>
                                <p><strong style="margin-right: 5px">Payment Mode: </strong>{{ $order->payment_mode }}</p>
                                <p class="border p-2 text-success mt-2">
                                    <strong style="margin-right: 5px">Order Status Message : </strong><span
                                        class="text-uppercase">{{ $order->status_message }}</span>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h5 style="font-weight: 500">User Details</h5>
                                <hr>
                                <p><strong style="margin-right: 5px">Full Name: </strong>{{ $order->fullname }}</p>
                                <p><strong style="margin-right: 5px">Email Id: </strong>{{ $order->email }}</p>
                                <p><strong style="margin-right: 5px">Phone: </strong>{{ $order->phone }}</p>
                                <p><strong style="margin-right: 5px">Address: </strong>{{ $order->address }}</p>
                                <p><strong style="margin-right: 5px">Pin code: </strong>{{ $order->pincode }}</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h5 class="mt-4" style="font-weight: 500">Order Items</h5>
                            <div class="my-2" style="background: #F7941D; height: 3px;width:100px;"></div>
                        </div>
                        <div class="table-responsive col-md-12">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Item ID</th>
                                    <th>Image</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </thead>
                                <tbody>
                                    @php
                                        $totalPrice = 0;
                                    @endphp
                                    @foreach ($order->orderItems as $orderItem)
                                        <tr>
                                            <td width="10%">{{ $orderItem->id }}</td>
                                            <td width="10%">
                                                @if ($orderItem->product->productImages)
                                                    <img src="{{ asset($orderItem->product->productImages[0]->image) }}"
                                                        style="width: 50px; height: 50px" alt="">
                                                @else
                                                    <img src="" style="width: 50px; height: 50px" alt="">
                                                @endif
                                            </td>
                                            <td>
                                                {{ $orderItem->product->name }}
                                                @if ($orderItem->productColor)
                                                    @if ($orderItem->productColor->color)
                                                        <span>-Color:
                                                            {{ $orderItem->productColor->color->name }}</span>
                                                    @endif
                                                @endif
                                            </td>
                                            <td width="10%">$ {{ $orderItem->price }}</td>
                                            <td width="10%">{{ $orderItem->quantity }}</td>
                                            <td width="10%" class="fw-bold">
                                                $ {{ $orderItem->quantity * $orderItem->price }}
                                            </td>
                                            @php
                                                $totalPrice += $orderItem->quantity * $orderItem->price;
                                            @endphp
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="5"><strong>Total Amount: </strong></td>
                                        <td colspan="1"><strong>$ {{ $totalPrice }}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
