@extends('layouts.admin')
@section('content')
    <div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Category
                            <a href="{{ url('admin/category/create') }}"
                                class="btn btn-primary btn-sm float-end text-white">Add
                                Category</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td class="text-center">Image</td>
                                    <td>Status</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <img src="{{ asset($category->image) }}" class="w-100" style="object-fit: contain" />
                                        </td>
                                        <td>{{ $category->status == '1' ? 'Hidden' : 'Visible' }}</td>
                                        <td>
                                            <a href="{{ url('admin/category/' . $category->id . '/edit') }}"
                                                class="btn btn-success text-white btn-sm me-2">Edit</a>
                                            <a href="{{ url('admin/category/' . $category->id . '/delete') }}"
                                                onclick="return confirm('Are you sure, you want to delete this data ?');"
                                                class="btn btn-danger btn-sm text-white">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-3 float-end">
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
