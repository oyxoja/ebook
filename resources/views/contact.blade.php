@extends('master.site')


@section('content')


<div id="content-wrapper">
  <div id="inner-content">
    <div id="entry">
      <div id="respond" class="contact">

        <h1>@lang('words.contactUs')</h1>
        @if (session()->has('success'))
            <p style="color: #0f5132; background-color: #d1e7dd; border-color: #badbcc; padding: 1rem; border-radius: .25rem;">
                {{ session('success') }}
            </p>
        @endif


        <form action="{{ route('sendMail') }}" id="contactForm" method="post" name="contactForm">
          @csrf
          <p>
            <label for="contactName">@lang('words.name')<span class="star">*</span></label>
            <input type="text" name="name" id="contactName" value="" class="required requiredField" />
          </p>
          <p>
            <label for="email">@lang('words.email')<span class="star">*</span></label>
            <input type="text" name="email" id="email" value="" class="required requiredField email" />
          </p>
          <p>
            <label for="commentsText">@lang('words.msg')<span class="star">*</span></label>
            <textarea name="msg" id="commentsText" rows="20" cols="30" class="required requiredField"></textarea>
          </p>
          <p>
            <input type="hidden" name="submitted" id="submitted" value="true" />
          </p>
          <p class="submit">
            <button class="btn" type="submit">@lang('words.submit')</button>
          </p>
        </form>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  @include('sections.sidebar')
  <div class="clear"></div>
</div>








@endsection