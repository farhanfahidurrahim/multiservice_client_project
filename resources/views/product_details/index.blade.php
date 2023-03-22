@extends('layouts.simple.master')
@section('title', 'Basic DataTables')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Product Details Index</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Product</li>
<li class="breadcrumb-item active">Hotel List</li>
<a href="{{ route('productdetails.add') }}" class="btn btn-primary">Add Product Details</a>
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
									<th>Product Name</th>
									<th>Shop Name</th>
									<th>Product Details</th>
									<th>Product Image</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $row)
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{ $row->product_name }}</td>
									<td>{{ $row->shopname->name }}</td>
									<td>{{ $row->product_details }}</td>
									<td>
										<img src="{{ asset($row->image) }}" width="75px" height="75px">
									</td>
									<td>
										<a href="" class="btn btn-primary">Edit</a>
										<a href="" class="btn btn-primary">Delete</a>
									</td>
								</tr>
								@endforeach
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
