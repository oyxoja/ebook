@extends('admin.master')



@section('content')

<div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Create Post</h4>
                  </div>
                  <div class="card-body">
                    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div class="form-group">
                          <label>Post Title UZB</label>
                          <input type="text" name="title_uz" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Post Title RUS </label>
                          <input type="text" name="title_ru" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Post Title ENG</label>
                          <input type="text" name="title_en" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Post Description UZB</label>
                          <textarea name="content_uz" id="" class="form-control">
                          </textarea>
                        </div>
                        <div class="form-group">
                          <label>Post Description RUS</label>
                          <textarea name="content_ru" id="" class="form-control">
                          </textarea>
                        </div>
                        <div class="form-group">
                          <label>Post Description ENG</label>
                          <textarea name="content_en" id="" class="form-control">
                          </textarea>
                        </div>
                        <div class="form-group">
                          <label>Post Picture</label>
                          <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Book</label>
                          <input type="file" name="book" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                                <select name="category_id" class="form-control" aria-label="Default select example">
                                    <option selected>Choose Category</option>
                                    @foreach ( $categories as $category )
                                        <option value="{{ $category->id }}">{{ $category->category_en }}</option>
                                    @endforeach
                                    
                                    
                                </select>
                        </div>

                        <div class="form-group">
                            <label>Tag</label>
                                <select name="tag[]" class="form-control select2" multiple="" aria-label="Default select example">
                                  
                                    @foreach ( $tags as $tag )
                                        <option value="{{ $tag->id }}">{{ $tag->tag }}</option>
                                    @endforeach
                                </select>
                        </div>

                        <div class="form-group">
                            <div class="control-label">Advertisement</div>
                            <label class="custom-switch mt-2">
                              <input type="checkbox" value="1" name="ads" class="custom-switch-input">
                              <span class="custom-switch-indicator"></span>
                              <span class="custom-switch-description">Yes this an advertisement</span>
                            </label>
                        </div>
                        
                        <div class="form-group">
                          <input type="submit" value="Add Post" class="btn btn-primary">
                        </div>
                    </form>
                  </div>
              </div>


@endsection