@extends('admin.master')

@section('content')
<div class="col-12 col-md-6 col-lg-6">
    <div class="card">
        <div class="card-header">
            <h4>Category Details</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>ID</label>
                <p>{{ $category->id }}</p>
            </div>
            <div class="form-group">
                <label>Category Name</label>
                <p>{{ $category->category }}</p>
            </div>
            <div class="form-group">
                <label>Slug</label>
                <p>{{ $category->slug }}</p>
            </div>
            <div class="form-group">
                <label>Created At</label>
                <p>{{ $category->created_at }}</p>
            </div>
            <div class="form-group">
                <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
</div>
@endsection
