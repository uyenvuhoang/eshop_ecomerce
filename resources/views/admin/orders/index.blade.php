@extends('layouts.admin')
@section('title', 'My orders')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-header">
                    <h4>My orders
                        <a href="{{ url('admin/orders') }}" class="btn btn-danger btn-sm text-white float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="" method="GET">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Filter By Date</label>
                                <input type="date" name="date" value="{{Request::get('date') ??date('Y-m-d')}}" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label for="">Filter By Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="">Select All Status</option>
                                    <option value="in progress" {{Request::get('status')=='in progress' ? 'selected':''}}>In Progress</option>
                                    <option value="complete" {{Request::get('status')=='complete' ? 'selected':''}}>Complete</option>
                                    <option value="pending" {{Request::get('status')=='pending' ? 'selected':''}}>Pending</option>
                                    <option value="cancelled" {{Request::get('status')=='cancelled' ? 'selected':''}}>Cancelled</option>
                                    <option value="out-for-delivery" {{Request::get('status')=='out-for-delivery' ? 'selected':''}}>Out for delivery</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <br>
                                <button type="submit" class="btn btn-primary btn-sm text-white">Filter</button>
                            </div>
                        </div>
                    </form>

                    <hr>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
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
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->tracking_no }}</td>
                                        <td>{{ $item->fullname }}</td>
                                        <td>{{ $item->payment_mode }}</td>
                                        <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                        <td>{{ $item->status_message }}</td>
                                        <td><a href="{{ url('admin/orders/' . $item->id) }}" class="btn btn-success text-white">View</a></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7">No Orders Available</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="float-end mt-3">
                            {{ $orders->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
