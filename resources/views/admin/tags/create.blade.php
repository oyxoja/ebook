@extends('admin.master')



@section('content')

<div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Create Tag</h4>
                  </div>
                  <div class="card-body">
                    <form action="{{ route('admin.tags.store') }}" method="POST">
                      @csrf
                        <div class="form-group">
                          <label>Tag Name</label>
                          <input type="text" name="tag" class="form-control">
                        </div>
                        <div class="form-group">
                          <input type="submit" value="Add Tag" class="btn btn-primary">
                        </div>
                    </form>
                  </div>
              </div>


@endsection