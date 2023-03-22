@extends('layouts.simple.master')
@section('title', 'Base Inputs')
@section('css')
@endsection
@section('style')
@endsection
@section('breadcrumb-title')
<h3>Create A News Blog</h3>
@endsection
@section('breadcrumb-items')
<a href="{{ route('newsblog.index') }}" class="btn btn-danger">All List</a>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Enter News Blog Info</h5>
                </div>
                <form class="form theme-form" method="POST" action="{{ route('newsblog.store') }}" enctype="multipart/form-data">
                	@csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="title" placeholder="Full Name" required>
                                    </div>
                                </div>
                                <div class="mb-3 row mb-0">
                                    <label class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="description" rows="5" cols="5" placeholder="Default textarea" required></textarea>
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
