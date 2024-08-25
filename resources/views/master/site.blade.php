<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>E-Book</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" media="screen" href="{{ asset('asset/css/superfish.css')}}" type="text/css" />
  <link rel="stylesheet" media="screen" href="{{ asset('asset/css/stylesheet.css')}}" type="text/css" />
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif:regular,italic,bold,bolditalic"
    type="text/css" />
  <script type="text/javascript" src="{{ asset('asset/js/jquery-1.6.1.min.js')}}"></script>
  <script src="{{ asset('asset/js/hoverIntent.js')}}" type="text/javascript"></script>
  <script src="{{ asset('asset/js/superfish.js')}}" type="text/javascript"></script>
  <script type="text/javascript" src="{{ asset('asset/js/jquery-ui.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('asset/js/custom.js')}}"></script>
  <script type="text/javascript" src="{{ asset('asset/js/jquery.animate-shadow.js')}}"></script>
  <script type='text/javascript' src="{{ asset('asset/js/jquery.cycle.all.min.js')}}"></script>
  <script type='text/javascript' src="{{ asset('asset/nivo-slider/jquery.nivo.slider.pack.js')}}"></script>
  <link rel="stylesheet" media="screen" href="{{ asset('asset/nivo-slider/nivo-slider.css')}}" type="text/css" />
  <link rel='shortcut icon' type='image/x-icon' href="{{ asset('temp/logo/orig_480x480.png')}}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <script type="text/javascript">
    //<![CDATA[
    $(window).load(function () {
      $('#slider').nivoSlider({
        effect: 'slideInLeft', // Specify sets like: 'fold,fade,sliceDown'
        slices: 10,
        boxCols: 10, // For box animations
        boxRows: 5, // For box animations
        animSpeed: 1000, // Slide transition speed
        pauseTime: 4500, // How long each slide will show
        startSlide: 0, // Set starting Slide (0 index)
        directionNav: true, // Next & Prev navigation
        directionNavHide: true, // Only show on hover
        controlNav: true, // 1,2,3... navigation
        controlNavThumbs: true, // Use thumbnails for Control Nav
        controlNavThumbsFromRel: true, // Use image rel for thumbs
        pauseOnHover: true, // Stop animation while hovering
      });
    });
    //]]>
  </script>
  <script type="text/javascript">
    //featured slider
    jQuery('#featured_slider').cycle({
      fx: 'scrollHorz',
      speed: 800,
      timeout: 0,
      easing: 'easeInOutQuint',
      next: '#featured_slider_next',
      prev: '#featured_slider_prev'
    });
  </script>
</head>

<body>

  <div id="panel" style="display: none;">
    <p>@lang('words.donate')</p>
  </div>

  <a id="notification" class="btn-slide" href="#">&darr;</a>

  <div id="container_wrapper">

    <div id="header">
      <div id="header-top">
        <h2 id="logo">
          <a href="{{ route('home') }}" >
            <img src="{{asset('asset/logo/logo1.png')}}" alt="" height="60px"; width="270px">
          </a>
        </h2>

        <form method="get" id="searchform" action="{{ route('search') }}" name="searchform">
          <input type="text" class='rounded text_input' value="" name="key" id="s" />
          <input type="submit" class="button ie6fix" id="searchsubmit" value="&rarr;" />
        </form>
      </div>

      <div id="header-bottom"
        style="height: 50px; padding: 5px 0 10px; border-bottom: 1px solid #EEEEEE; border-top: 1px solid #EEEEEE;">

        <div class="category-container">

        <ul class="sf-menu">
    <!-- Home Link -->
    <li>
        <a href="{{ route('index') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
            @lang('words.home')
        </a>
    </li>

    <!-- Category Links -->
    @foreach ($categories as $category)
        <li>
            <a href="{{ route('categoryPosts', ['slug' => $category->slug]) }}"
               class="{{ request()->routeIs('categoryPosts') && request()->route('slug') === $category->slug ? 'active' : '' }}">
                {{ $category['category_'.\App::getLocale()] }}
            </a>
        </li>
    @endforeach

    <!-- Contact Link -->
    <li>
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">
            @lang('words.contact')
        </a>
    </li>
</ul>




        </div>

        <div class="subscriber_widget" style="display: flex; align-items: center;">
          <span style="display: flex; align-items: center; margin-right: 10px;">
            <img src="{{ asset('asset/flags/uzbekistan.png') }}" alt="UZ Flag" style="margin-right: 5px;">
            <a href="/lang/uz">UZ</a>
          </span>
          <span style="display: flex; align-items: center; margin-right: 10px;">
            <img src="{{ asset('asset/flags/russia.png') }}" alt="RU Flag" style="margin-right: 5px;">
            <a href="/lang/ru">RU</a>
          </span>
          <span style="display: flex; align-items: center; margin-right: 10px;">
            <img src="{{ asset('asset/flags/united-kingdom.png') }}" alt="EN Flag" style="margin-right: 5px;">
            <a href="/lang/en">EN</a>
          </span>
        </div>

      </div>

    </div>


    @yield('content')

    <div id="footer"> <span id="Scroll"><a href="#">&uarr;</a></span>
      <div id="footer_inner">
        <div class="columns">
          <div class="widget">
            <h6>@lang('words.about')</h6>
            <p>@lang('words.aboutUs')</p>
          </div>
          <div class="clear"></div>
        </div>
        <div class="columns">
          <div class="widget">
            <h6>@lang('words.social') </h6>
            <div class="flickr">
              <div> <a href="https://instagram.com"><img alt="" src="{{ asset('asset/logo/1.webp')}}" /></a></div>
              <div> <a href="https://facebook.com"><img alt="" src="{{ asset('asset/logo/2.png')}}" /></a></div>
              <div> <a href="https://x.com"><img alt="" src="{{ asset('asset/logo/3.jpg')}}" /></a></div>
              <div> <a href="https://t.me"><img alt="" src="{{ asset('asset/logo/4.webp')}}" /></a></div>

            </div>
            <div class="clear"></div>
          </div>
        </div>
        <div class="columns">
          <div class="widget">
            <h6>@lang('words.recent')</h6>
            <ul class="recent_posts">
              @foreach ($recent_posts as $post)
              <li class="clearfix">
                <h3 class="title"><a href="{{ route('postDetail',$post->slug) }}">{{ $post['title_'.\App::getLocale()] }}</a></h3>
              </li>
              @endforeach
              
              
            </ul>
          </div>
          <div class="clear"></div>
        </div>
        <div class="columns" style="width:15% !important;">
          <div class="widget">
            <h6>@lang('words.quick')</h6>
            <ul class="quick_links">
              @foreach ($categories as $category)
                <li><a href="#">{{ $category['category_'.\App::getLocale()] }}</a></li>
              @endforeach
              

            </ul>
          </div>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="footer_bottom">
          <ul class="footer_menu">
            <li><a href="#">@lang('words.home')</a> /</li>
            <li><a href="#">@lang('words.about')</a> /</li>
            <li><a href="#">@lang('words.contact')</a> /</li>
          </ul>
          <p>&copy; Copyright 2011. All rights reserved. Template by <a target="_blank"
              href="http://www.bloggerzbible.com">Jdsans</a></p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>