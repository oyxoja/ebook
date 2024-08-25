@extends('admin.master')



@section('content')

<div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Tag</h4>
                  </div>
                  <div class="card-body">
                    <form action="{{ route('admin.tags.update', $tag->id) }}" method="POST">
                      @csrf
                      @method('PUT')
                        <div class="form-group">
                          <label>Tag Name</label>
                          <input type="text" name="tag" class="form-control" value="{{ $tag->tag }}">
                        </div>
                        <div class="form-group">
                          <input type="submit" value="Update Tag" class="btn btn-primary">
                        </div>
                    </form>
                  </div>
              </div>


@endsection