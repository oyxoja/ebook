@extends('master.site')


@section('content')

<div id="outer-wrapper">
  <div id="content-wrapper">
    <div id="inner-content">
      <div id="entry">
        <div id="post-top">
          <h3 id="post-title">{{ $post['title_' . \App::getLocale()] }}</h3>
          <div class="post-meta"> <span class="posting-date">{{ $post->created_at->format('F j, Y') }}</span> <span> <i class="fa-regular fa-eye"></i> {{ $post->view }}</span></div>
        </div>
        <div class="entry-content">
          <img src="{{ asset('asset/img/' . $post->image)  }}" alt="" width="650px" height="600px" />
          <p>{!! $post['content_' . \App::getLocale()] !!}</p>


          <button
            style="background-color: blue; color: white; padding: 15px 5px; border: none; cursor: pointer; border-radius: 5px; font-weight: 400; font-size: 16px; margin-right:10px;">
            <a href="{{ asset('asset/files/' . $post->book) }}" download="{{ $post->book_title }}"
              style="color: white; text-decoration: none; font-weight: 400; font-size: 16px;">Download Book</a>
          </button>

          <div class="tab tab-tags clearfix">
            @foreach ($post->tags as $tag)
        <a href="#"> #{{ $tag->tag }}</a>
      @endforeach

          </div>






        </div>
      </div>

    </div>
    @include('sections.sidebar')
    <div class="clear"></div>
  </div>
</div>


@endsection