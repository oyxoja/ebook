<div id="slider-wrapper">
    <div id="slider" class="nivoSlider"> 
        @foreach ($slider_posts as $post)
            <a href="#">
                <img src="{{ asset('asset/img/'.$post->image) }}" alt="{{ $post->title }}" rel="{{ asset('asset/img/'.$post->image) }}" />
            </a>
        @endforeach
    </div>
    
    <div class="clear"></div>
</div>

