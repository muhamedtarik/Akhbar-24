@extends('layouts.mobile.app')
@section('content')
  @include('layouts.mobile.menu')
  <div id="container">
    @include('layouts.mobile.sport.nav')

    <div class="col-12 pl-0 pr-3 mb-3">
      <h5 class="s24latestvideos__heading ">
        احدث المقاطع
      </h5>
    </div>

    <div class="s24latestvideos my-3">
      <div class="container">
        @for($i = 0 ; $i < 6 ; $i++)
          <div class="s24latestvideos__item mt-2">
            <a href="/mobile/video-details">
              <img class="s24latestvideos__item--img" src="/img/mobile/mohamed-salah.jpg" alt="">
              <ul class="s24latestvideos__item--stats">
                <li class="s24latestvideos__item--stats--stat">
                  <img class="s24latestvideos__item--stats--stat--views-icon"
                       src="/img/mobile/views-white.png" alt="">
                  76,000
                </li>
                <li class="s24latestvideos__item--stats--stat">
                  <img class="s24latestvideos__item--stats--stat--comments-icon"
                       src="/img/mobile/comments.png" alt="">
                  12
                </li>
              </ul>
              <div class="s24latestvideos__item--icon">
                <i class="fa fa-play"></i>
              </div>
              <div class="s24latestvideos__item--text">
                <h3>مانشستر يونايتد يحقق رقما تاريخيا في مباراة نوريتش سيتي</h3>
              </div>
            </a>
          </div>
        @endfor

      </div>
    </div>
  </div>
@endsection
