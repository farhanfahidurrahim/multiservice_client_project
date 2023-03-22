@extends('layouts.simple.master')
@section('title', 'Base Inputs')
@section('css')
@endsection
@section('style')
@endsection
@section('breadcrumb-title')
<h3>Create New Info Masjid/Islamic</h3>
@endsection
@section('breadcrumb-items')
<a href="{{ route('islamic.index') }}" class="btn btn-danger">All List</a>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Enter Masjid/Islamic Info</h5>
                </div>
                <form class="form theme-form" method="POST" action="{{ route('islamic.store') }}" enctype="multipart/form-data">
                	@csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Full Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="address" placeholder="Address" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Phone Number</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="phone_number" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Facebook Link</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="url" name="fb_link" placeholder="Facebook Link" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Website Link</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="url" name="web_link" placeholder="Website Link" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Notice</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="notice" placeholder="Notice" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                  	<label class="col-sm-3 col-form-label">Upload Photo</label>
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
