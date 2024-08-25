@extends('admin.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>{{ $post->title }}</h4>
    </div>
    <div class="card-body">
        <p>{{ $post->content }}</p>
        <img src="{{ asset('asset/img/' . $post->image) }}" alt="{{ $post->title }}" style="width: 300px; height: 300px;">
       
        <p>
            <a href="{{ asset('asset/files/' . $post->book) }}" target="_blank" class="btn btn-info mt-2">View Book</a>
        </p>
    </div>
</div>
@endsection
