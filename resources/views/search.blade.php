@extends('master.site')


@section('content')

      
<div id="inner-content">
        
        <div id="double_container" style="margin-top:20px;">
          <div class="clear"></div>  
          @foreach ($posts as $post )
            <div class="post_double">
              <h4 class="post_title"><a href="#">{{ $post['title_'.\App::getLocale()] }}</a><span class="comment_bubble"><a href="#">21</a></span></h4>
              <div class="post_content clearfix">
                <div class="thumbnail"> <a href="#"><img src="{{ asset ('asset/img/'.$post->image)}}" alt="" /></a></div>
                <div class="summary_article">
                  <p>{{ \Illuminate\Support\Str::words($post['content_'.\App::getLocale()], 20, '...') }}</p>
                </div>
              </div>
              <span class="read_more"><a href="{{ route('postDetail',$post->slug) }}">More...</a></span> </div>
          
          @endforeach
          
          <div class="clear"></div>
        </div>
      
      </div>
       @include('sections.sidebar')
       <div class="clear"></div>
      
      


@endsection