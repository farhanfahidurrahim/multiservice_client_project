@extends('layouts.simple.master')
@section('title', 'Base Inputs')
@section('css')
@endsection
@section('style')
@endsection
@section('breadcrumb-title')
<h3>Add Product Details</h3>
@endsection
@section('breadcrumb-items')
<a href="{{ route('restaurant.productdetails') }}" class="btn btn-primary">All Product Details</a>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Enter Product Info</h5>
                </div>
                <form class="form theme-form" method="POST" action="{{ route('restaurant.productdetails.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Select</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select form-select" id="division" name="restaurant_id" required>
                                            <option disabled selected value="">Please select an item...</option>
                                            @foreach ($joinData as $row)
                                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Product Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="product_name" placeholder="Full Name" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Product Details</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="product_details" placeholder="Address" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Upload Product Photo</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="image" type="file" accept="image/*" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="mb-5 btn btn-primary text-center" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
@endsection
