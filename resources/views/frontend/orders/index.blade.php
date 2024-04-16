@extends('layouts.app')
@section('title', 'My orders')
@section('content')
    <div class="py-3 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shadow bg-white">
                        <div class="col-md-12">
                            <h4>My Order </h4>
                            <div class="my-2" style="background: #F7941D; height: 3px;width:100px;"></div>
                        </div>
                        <div class="table-responsive col-md-12">
                            <table class="table table-striped">
                                <thead>
                                    <th>Order ID</th>
                                    <th>Tracking No</th>
                                    <th>UserName</th>
                                    <th>Payment Code</th>
                                    <th>Ordered Date</th>
                                    <th>Status message</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @forelse ($orders as $item)
                                        <tr>
                                            <td style="vertical-align: middle" >{{ $item->id }}</td>
                                            <td style="vertical-align: middle" >{{ $item->tracking_no }}</td>
                                            <td style="vertical-align: middle" >{{ $item->fullname }}</td>
                                            <td style="vertical-align: middle" >{{ $item->payment_mode }}</td>
                                            <td style="vertical-align: middle" >{{ $item->created_at->format('d-m-Y') }}</td>
                                            <td style="vertical-align: middle" >{{ $item->status_message }}</td>
                                            <td style="vertical-align: middle" ><a href="{{ url('orders/' . $item->id) }}"
                                                    class="btn btn-sm text-white">View</a></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7">No Orders Available</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div>
                                {{ $orders->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
