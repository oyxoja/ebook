
<div id="inner-content">
        
        <div id="double_container" style="margin-top:20px;">
          <div class="clear"></div>  
          
          
          <div class="clear"></div>
        </div>
        <div id="single_post_container">
          @foreach ($ads_posts as $ads_post)
              <div class="post_single">
                  <h4 class="post_title clearfix">
                      <table width="100%">
                          <tr>
                              <td>
                                  <a href="#">{{ $ads_post['title_'.\App::getLocale()] }}</a>
                              </td>
                              <td align="right">
                                  <span>
                                      <i class="fa-regular fa-eye"></i>
                                      <a href="#">
                                          {{ $ads_post->view }}
                                      </a>
                                  </span>
                              </td>
                          </tr>
                      </table>
                  </h4>
                  <div class="post_content clearfix">
                      <div class="thumbnail">
                          <a href="{{ route('postDetail', $ads_post->slug) }}">
                              <img src="{{ asset('asset/img/'.$ads_post->image) }}" alt="" width="150px" height="150px" />
                          </a>
                      </div>
                      <div class="summary_article">
                          <p>{!! \Illuminate\Support\Str::words($ads_post['content_'.\App::getLocale()], 60, '...') !!}</p>
                      </div>
                  </div>
                  <span class="read_more">
                      <a href="{{ route('postDetail', $ads_post->slug) }}">More...</a>
                  </span>
              </div>
          @endforeach
    <div class="clear"></div>
</div>

      </div>