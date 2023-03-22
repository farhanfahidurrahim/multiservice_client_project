@extends('layouts.simple.master')
@section('title', 'Base Inputs')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Create Customer</h3>
@endsection


@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>Create a New Customer</h5>
				</div>
				<form class="form theme-form" action="{{route('customer.store')}}" method="POST">
					@csrf
					@method('POST')
					<div class="card-body">
						<div class="row">
							<div class="col">

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Cusomer Name</label>
									<div class="col-sm-9">
										<input class="form-control" name="name" type="text" placeholder="Customer Name" value="{{old('name')}}" required>
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Customer Email</label>
									<div class="col-sm-9">
										<input class="form-control" name="email" type="text" placeholder="Customer Email" value="{{old('email')}}">
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Customer Phone</label>
									<div class="col-sm-9">
										<input class="form-control" name="phone" type="text" placeholder="Customer phone" value="{{old('phone')}}" required>
									</div>
								</div>

                <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Status</label>
									<div class="col-sm-9">
										<select name="status" class="custom-select form-select" required>
											<option selected="">Open this select menu</option>
											<option value="1">Active</option>
											<option value="0">Inactive</option>
										</select>
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
