@extends('layouts.simple.master')
@section('title', 'Basic DataTables')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Single Shop View</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Shop</li>
<li class="breadcrumb-item active">Hotel List</li>
<a href="{{ route('shop.index') }}" class="btn btn-primary">All Shop</a>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">

		<!-- Default ordering (sorting) Starts-->
		<div class="col-sm-12">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table class="display dataTable" id="basic-3">
							<thead>
								<tr>
									<th>No.</th>
									<th>Shop Image</th>
									<th>Shop Name</th>
									<th>Location</th>
									<th>Phone Number</th>
									<th>Ratings</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>{{ $shopView->name }}</td>
									<td>{{ $shopView->address }}</td>
									<td>{{ $shopView->phone_number}}</td>
									<td>{{ $shopView->rating}}</td>
									<td>{{ $shopView->rating}}</td>
									<td>
										<a href="" class="btn btn-primary">Edit</a>
										<a href="" class="btn btn-primary">Delete</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- Default ordering (sorting) Ends-->

	</div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection
