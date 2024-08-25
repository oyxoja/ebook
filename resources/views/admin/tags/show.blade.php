@extends('admin.master')

@section('content')
<div class="col-12 col-md-6 col-lg-6">
    <div class="card">
        <div class="card-header">
            <h4>Tag Details</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>ID</label>
                <p>{{ $tag->id }}</p>
            </div>
            <div class="form-group">
                <label>Tag Name</label>
                <p>{{ $tag->tag }}</p>
            </div>
            <div class="form-group">
                <label>Slug</label>
                <p>{{ $tag->slug }}</p>
            </div>
            <div class="form-group">
                <label>Created At</label>
                <p>{{ $tag->created_at }}</p>
            </div>
            <div class="form-group">
                <a href="{{ route('admin.tags.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
</div>
@endsection
