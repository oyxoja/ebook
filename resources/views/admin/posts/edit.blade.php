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
                <label>Post Title</label>
                <input type="text" name="title" class="form-control" value="{{ $post->title }}">
            </div>

            <div class="form-group">
                <label>Post Description</label>
                <textarea name="content" class="form-control">{{ $post->content }}</textarea>
            </div>

            <div class="form-group">
                <label>Post Picture</label>
                <input type="file" name="image" class="form-control">
                <img src="{{ asset('asset/img/' . $post->image) }}" alt="{{ $post->title }}" style="width: 100px; height: 100px;">
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
                            {{ $category->category }}
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
