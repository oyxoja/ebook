<div id="sidebar">
        <div class="widget_nostyle">
          <ul class="sponsors">
          <li>
            <a href="{{ $ad->url1 }}">
              <img src="{{ asset('asset/img/' . $ad->image1) }}" alt="" width="260px"; height="120px";/>
            </a>
          </li>
          <li>
            <a href="{{ $ad->url2 }}">
              <img src="{{ asset('asset/img/' . $ad->image2) }}" alt="" width="125px"; height="125px"; />
            </a>
          </li>
          <li>
            <a href="{{ $ad->url3 }}">
              <img src="{{ asset('asset/img/' . $ad->image3) }}" alt="" width="125px"; height="125px"; />
            </a>
          </li>

          </ul>
          <div class="clear"></div>
        </div>
        <div class="widget">
          <div id="tabs">
            <ul id="tab-items">
              <li><a href="#tab-one">@lang('words.recent')</a></li>
              <li><a href="#tab-four">@lang('words.tag')</a></li>
            </ul>
            <div class="tabs-inner">
              <div id="tab-one"  class="tab">
                <ul>
                @foreach ($recent_posts as $posts)
                    <li>
                        <div class="tab-thumb">
                            <a class="thumb" href="#">
                                <img width="45" height="45" alt="" src="{{ asset('asset/img/' . $posts->image) }}" />
                            </a>
                        </div>
                        <h3 class="entry-title">
                            <a class="title" href="{{ route('postDetail', $posts->slug) }}">{{ \Illuminate\Support\Str::words($posts['title_' . \App::getLocale()], 10, '...') }}</a>
                        </h3>
                        <div class="entry-meta entry-header">
                            <span class="published">{{ $posts->created_at->format('F j, Y') }}</span>
                            <span class="seperator">,</span>
                            <span class="comment_number"><a href="#">{{ $posts->view }} Views</a></span>
                        </div>
                    </li>
                @endforeach

                
                </ul>
              </div>
              
              <div class="tab tab-tags clearfix" id="tab-four">
                @foreach ($recent_tags as $tag)
                <a  href="#">{{ $tag->tag }}</a> 
                @endforeach
                 
              </div>
            </div>
          </div>
        </div>
      </div>