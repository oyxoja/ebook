@extends('admin.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit Post</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Post Title UZ</label>
                <input type="text" name="title_uz" class="form-control" value="{{ $post->title_uz }}">
            </div>

            <div class="form-group">
                <label>Post Title RU</label>
                <input type="text" name="title_ru" class="form-control" value="{{ $post->title_ru }}">
            </div>


            <div class="form-group">
                <label>Post Title EN</label>
                <input type="text" name="title_en" class="form-control" value="{{ $post->title_en }}">
            </div>


            <div class="form-group">
                <label>Post Description UZ</label>
                <textarea name="content_uz" class="form-control">{{ $post->content_uz }}</textarea>
            </div>

            <div class="form-group">
                <label>Post Description RU</label>
                <textarea name="content_ru" class="form-control">{{ $post->content_ru }}</textarea>
            </div>

            <div class="form-group">
                <label>Post Description EN</label>
                <textarea name="content_en" class="form-control">{{ $post->content_en }}</textarea>
            </div>

            <div class="form-group">
                <label>Post Picture</label>
                <input type="file" name="image" class="form-control">
                <img src="{{ asset('asset/img/' . $post->image) }}" alt="" style="width: 100px; height: 100px;">
            </div>

            <div class="form-group">
                <label>Book</label>
                <input type="file" name="book" class="form-control">
                <a href="{{ asset('asset/files/' . $post->book) }}" target="_blank">Current Book</a>
            </div>

            <div class="form-group">
                <label>Category</label>
                <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->category_en }} 
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Tag</label>
                <select name="tags[]" class="form-control select2" multiple="" aria-label="Default select example">
                    @foreach ($tags as $tag)
                        <option 
                            @if(in_array($tag->id, $post->tags->pluck('id')->toArray())) 
                                selected 
                            @endif 
                            value="{{ $tag->id }}">
                            {{ $tag->tag }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                            <div class="control-label">Advertisement</div>
                            <label class="custom-switch mt-2">
                              <input type="checkbox" {{ $post->ads == 1 ? "checked" : ""}} value="1" name="ads" class="custom-switch-input">
                              <span class="custom-switch-indicator"></span>
                              <span class="custom-switch-description">Yes this an advertisement</span>
                            </label>
                        </div>


            <div class="form-group">
                <input type="submit" value="Update Post" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection
