@extends('admin.master')



@section('content')

<div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Create Advertisement</h4>
                  </div>
                  <div class="card-body">
                    <form action="{{ route('admin.ads.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                        
                        <div class="form-group">
                          <label>Ad #1 Title </label>
                          <input type="text" name="title1" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Ad #1 Picture</label>
                          <input type="file" name="image1" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Ad #1 Url</label>
                          <input type="text" name="url1" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Ad #2 Title </label>
                          <input type="text" name="title2" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Ad #2 Picture</label>
                          <input type="file" name="image2" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Ad #2 Url</label>
                          <input type="text" name="url2" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Ad #3 Title </label>
                          <input type="text" name="title3" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Ad #3 Picture</label>
                          <input type="file" name="image3" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Ad #3 Url</label>
                          <input type="text" name="url3" class="form-control">
                        </div>

                        <div class="form-group">
                          <input type="submit" value="Add Ads" class="btn btn-primary">
                        </div>
                    </form>
                  </div>
              </div>


@endsection