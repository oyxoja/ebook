@extends('admin.master')



@section('content')

<div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Advertisement</h4>
                  </div>
                  <div class="card-body">
                    <form action="{{ route('admin.ads.update', $ad->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')  
                        <div class="form-group">
                          <label>Ad #1 Title </label>
                          <input type="text" name="title1" value="{{ $ad->title1 }}" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Ad #1 Picture</label>
                          <input type="file" name="image1" class="form-control">
                          <img src="{{ asset('asset/img/'.$ad->image1) }}" alt="" width="60px"; height="60px"; >
                        </div>
                        <div class="form-group">
                          <label>Ad #1 Url</label>
                          <input type="text" name="url1" value="{{ $ad->url1 }}" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Ad #2 Title </label>
                          <input type="text" name="title2" value="{{ $ad->title2 }}" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Ad #2 Picture</label>
                          <input type="file" name="image2" class="form-control">
                          <img src="{{ asset('asset/img/'.$ad->image2) }}" alt="" width="60px"; height="60px"; >
                        </div>
                        <div class="form-group">
                          <label>Ad #2 Url</label>
                          <input type="text" name="url2" value="{{ $ad->url2 }}" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Ad #3 Title </label>
                          <input type="text" name="title3" value="{{ $ad->title3 }}" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Ad #3 Picture</label>
                          <input type="file" name="image3" class="form-control">
                          <img src="{{ asset('asset/img/'.$ad->image3) }}" alt="" width="60px"; height="60px"; >
                        </div>
                        <div class="form-group">
                          <label>Ad #3 Url</label>
                          <input type="text" name="url3" value="{{ $ad->url3 }}" class="form-control">
                        </div>

                        <div class="form-group">
                          <input type="submit" value="Add Edit" class="btn btn-primary">
                        </div>
                    </form>
                  </div>
              </div>


@endsection