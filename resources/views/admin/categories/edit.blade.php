@extends('admin.master')

@section('content')

<div class="col-12 col-md-6 col-lg-6">
    <div class="card">
        <div class="card-header">
            <h4>Edit Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Category Name UZB</label>
                    <input type="text" name="category_uz" class="form-control" value="{{ $category->category_uz }}">
                </div>
                <div class="form-group">
                    <label>Category Name RUS</label>
                    <input type="text" name="category_ru" class="form-control" value="{{ $category->category_ru }}">
                </div>
                <div class="form-group">
                    <label>Category Name ENG</label>
                    <input type="text" name="category_en" class="form-control" value="{{ $category->category_en }}">
                </div>
                <div class="form-group">
                    <input type="submit" value="Update Category" class="btn btn-primary">
                </div> 
            </form>
        </div>
    </div>
</div>

@endsection
