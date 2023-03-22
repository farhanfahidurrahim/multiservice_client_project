@extends('layouts.simple.master')
@section('title', 'Basic DataTables')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Havc Index</h3>
@endsection

@section('breadcrumb-items')
<a href="{{ route('havc.create') }}" class="btn btn-primary">+ Add New</a>
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
									<th>Image</th>
									<th>Name</th>
									<th>Location</th>
									<th>Phone Number</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $row)
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td>
										<img src="{{ asset($row->image) }}" width="75px" height="75px">
									</td>
									<td>{{ $row->name }}</td>
									<td>{{ $row->address }}</td>
									<td>{{ $row->phone_number}}</td>
									<td class="d-flex">
										<a href="" class="btn btn-primary">Edit</a>
										<form class="px-3" onclick="return confirm('Are you sure want to Delete?')" method="POST" action="{{ route('destroy',$row->id) }}">
											@csrf @method('DELETE')
											<button class="btn btn-danger active">Delete</button>
										</form>
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
