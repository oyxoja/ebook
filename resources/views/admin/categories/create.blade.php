@extends('admin.master')



@section('content')

<div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Create Category</h4>
                  </div>
                  <div class="card-body">
                    <form action="{{ route('admin.categories.store') }}" method="POST">
                      @csrf
                        <div class="form-group">
                          <label>Category Name UZB</label>
                          <input type="text" name="category_uz" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Category Name RUS</label>
                          <input type="text" name="category_ru" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Category Name ENG</label>
                          <input type="text" name="category_en" class="form-control">
                        </div>
                        <div class="form-group">
                          <input type="submit" value="Add Category" class="btn btn-primary">
                        </div>
                    </form>
                  </div>
              </div>


@endsection