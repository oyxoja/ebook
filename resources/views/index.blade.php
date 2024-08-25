@extends('master.site')


@section('content')
  <div id="outer-wrapper">
    <!-- @include('sections.slider') -->
    <div class="clear"></div>
    <div id="featured">
    <h4 id="featured-title"><span>@lang('words.featured')</span></h4>
    <div id="featured_slider" style="position:relative; overflow:hidden;">

        @foreach($feature_posts->chunk(5) as $chunk)
            <div class="item" style="display: none;">
                @foreach($chunk as $post)
                    <div class="column">
                        <div class="inner">
                            <div class="image">
                                <a href="{{ route('postDetail',$post->slug) }}"><img alt="{{ $post['title_'.\App::getLocale()] }}" src="{{ asset('asset/img/'.$post->image) }}" /></a>
                            </div>
                            <h3><a href="{{ route('postDetail',$post->slug) }}">{{ $post['title_'.\App::getLocale()] }}</a></h3>
                        </div>
                    </div>
                @endforeach
                <div class="clear"></div>
            </div>
        @endforeach
    </div>
    <div class="nav_controls">
        <div id="featured_slider_prev"><a href="#">‹‹ Previous</a></div>
        <div id="featured_slider_next"><a href="#">Next ››</a></div>
    </div>
    <div class="clear"></div>
</div>
    <div id="content-wrapper">
      @include('sections.mainPosts')
      @include('sections.sidebar')
      <div class="clear"></div>
    </div>
  </div>
@endsection