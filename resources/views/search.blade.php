@extends('master.site')


@section('content')

      
<div id="inner-content">
        
        <div id="double_container" style="margin-top:20px;">
          <div class="clear"></div>  
          @foreach ($posts as $post )
          <div class="post_double">
                    <h4 class="post_title">
                        <table width="100%">
                            <tr>
                                <td>
                                    <a href="{{ route('postDetail',$post->slug) }}">{{ \Illuminate\Support\Str::words($post['title_'.\App::getLocale()], 6, '...') }}</a>
                                </td>
                                <td align="right">
                                    <span>
                                        <i class="fa-regular fa-eye"></i>
                                        <a href="#">{{ $post->view }}</a>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </h4>
                    <div class="post_content clearfix">
                        <div class="thumbnail">
                            <a href="{{ route('postDetail',$post->slug) }}"><img src="{{ asset('asset/img/'.$post->image) }}" alt="" /></a>
                        </div>
                        <div class="summary_article">
                            <p>{!! \Illuminate\Support\Str::words($post['content_'.\App::getLocale()], 20, '...') !!}</p>
                        </div>
                    </div>
                    <span class="read_more"><a href="{{ route('postDetail', $post->slug) }}">More...</a></span>
                </div>
          
          @endforeach
          
          <div class="clear"></div>
        </div>
      
      </div>
       @include('sections.sidebar')
       <div class="clear"></div>
      
      


@endsection