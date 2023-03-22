@extends('layouts.simple.master')
@section('title', 'Base Inputs')
@section('css')
@endsection
@section('style')
@endsection
@section('breadcrumb-title')
<h3>Create New Shop</h3>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Enter Shop Info</h5>
                </div>
                <form class="form theme-form" method="POST" action="{{ route('shop.store') }}" enctype="multipart/form-data">
                	@csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Shop Full Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Shop Address</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="address" placeholder="Address" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Shop Phone Number</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="phone_number" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Shop Website Link</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="website_link" placeholder="Website Link" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Shop Notice</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="notice" placeholder="Notice" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select Rating Star</label>
									<div class="col-sm-9">
										<select name="rating" class="custom-select form-select" required>
											<option disabled selected value="">Open this select menu</option>
											<option value="1">1 Star</option>
											<option value="2">2 Star</option>
											<option value="3">3 Star</option>
											<option value="4">4 Star</option>
											<option value="5">5 Star</option>
										</select>
									</div>
								</div>
                                <div class="mb-3 row">
                                  	<label class="col-sm-3 col-form-label">Upload Photo</label>
                                  	<div class="col-sm-9">
                                    	<input class="form-control" name="image" type="file" accept="image/*">
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
