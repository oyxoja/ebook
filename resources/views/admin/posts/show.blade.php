@extends('admin.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>{{ $post->title_uz }}</h4>
    </div>
    <div class="card-header">
        <h4>{{ $post->title_ru }}</h4>
    </div>
    <div class="card-header">
        <h4>{{ $post->title_en }}</h4>
    </div>
    <div class="card-body">
        <label>Description UZ</label>
        <p>{{ $post->content_uz }}</p>
        <label>Description RU</label>
        <p>{{ $post->content_ru }}</p>
        <label>Description EN</label>
        <p>{{ $post->content_en }}</p>
        <img src="{{ asset('asset/img/' . $post->image) }}" alt="{{ $post->title }}" style="width: 300px; height: 300px;">
       
        <p>
            <a href="{{ asset('asset/files/' . $post->book) }}" target="_blank" class="btn btn-info mt-2">View Book</a>
        </p>
    </div>
</div>
@endsection
