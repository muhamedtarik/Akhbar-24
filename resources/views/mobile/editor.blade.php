@extends('layouts.mobile.app')
@section('content')
@include('layouts.mobile.menu')
<div id="container">
  @include('layouts.mobile.nav')
  <div class="mobile-auther">
    <div class="mobile-auther__header">
      <img src="{{ $editor['avatar'] ?? '' }}" class="mt-3 mb-2" alt="{{ $editor['name'] }}"
        onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/editprofile.png';">
      <h3> {{ $editor['name'] }} </h5>
        <p>عدد المقالات : {{ $editor['items_count'] }}</p>
        <ul class="mobile-auther__header--social">
          <li><a href="{{ $editor['social_profile'] }}">
              <i class="fa fa-twitter"></i>
            </a></li>
          <li><a href="mailto:{{ $editor['email'] }}">
              <i class="fa fa-envelope"></i>
            </a></li>
        </ul>
    </div>
    <div class="mobile-auther__news">
      <div class="container">

        @foreach ($items['data'] as $item)
        <a class="mobile-auther__news__item">
          <div class="row align-items-center">
            <div class="col-4">
              <div class="mobile-auther__news__item--img">
                <a href="{{ route('items.show', $item['id']) }}">
                  <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}"
                    onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                  @if($item['type'] !== 'article')
                  <span class="a24-side-news__item__img__icon">
                    <img src="/img/desktop/{{ $item['type'] }}_type.png" alt="">
                  </span>
                  @endif
                </a>
              </div>
            </div>
            <div class=" col-8 pr-0  news-content">
              <div class="mobile-auther__news__item--title">
                <a href="{{ route('items.show', $item['id']) }}" class="news-listing__item__link">
                  <h3>
                    {{ $item['title'] }}
                  </h3>
                </a>
              </div>
              <div class="mobile-auther__news__item__info d-flex justify-content-between">
                <div class="mobile-auther__news__item__info__date">
                  <span>
                    {{ arabicDate($item['published_at']) }}
                  </span>
                </div>
                <ul class="mobile-auther__news__item__info__stats">
                  <li class="mobile-auther__news__item__info__stats--stat views">
                    <img src="/img/mobile/views-red.png" alt="">
                    {{ $item['views_count'] }}
                  </li>
                  <li class="mobile-auther__news__item__info__stats--stat comments">
                    <img src="/img/mobile/comments-news.png" alt="">
                    {{ $item['comments_count'] }}
                  </li>
                  <!--
                      <li class="mobile-auther__news__item__info__stats--stat fav">
                        <img src="/img/mobile/fav-checked.png" alt="">
                      </li>
                       -->
                </ul>

              </div>
            </div>
          </div>
        </a>
        @endforeach


        <div class="mobile-auther__ad2 mt-4">
          <div class="container">
            <img src="/img/mobile/ad2.png" style="width:100%" alt="">
          </div>
        </div>

        @for($i = 0 ; $i < 3 ; $i++) <a class="mobile-auther__news__item">
          <div class="row   align-items-center">

            <div class="col-4">
              <div class="mobile-auther__news__item--img">
                <img src="/img/mobile/news.png" alt="">
              </div>
            </div>
            <div class=" col-8 pr-0  news-content">
              <div class="mobile-auther__news__item--title">
                <h3>لما لم يكن هناك “اهتزاز” بالمنطقة بعد ضم الجولان؟ نتنياهو يوضح</h3>
              </div>
              <div class="mobile-auther__news__item__info d-flex justify-content-between">
                <div class="mobile-auther__news__item__info__date">
                  <span> 25 آغسطس</span>
                </div>
                <ul class="mobile-auther__news__item__info__stats">
                  <li class="mobile-auther__news__item__info__stats--stat views">
                    <img src="/img/mobile/views-red.png" alt="">
                    500,000
                  </li>
                  <li class="mobile-auther__news__item__info__stats--stat comments">
                    <img src="/img/mobile/comments-news.png" alt="">
                    12
                  </li>
                  <li class="mobile-auther__news__item__info__stats--stat fav">
                    <img src="/img/mobile/fav-checked.png" alt="">
                  </li>
                </ul>

              </div>
            </div>
          </div>
          </a>
          @endfor

          <div class="mobile-auther__ad1 mt-4">
            <div class="container">
              <img src="/img/mobile/ad1.png" style="width:100%" alt="">
            </div>
          </div>

          @for($i = 0 ; $i < 3 ; $i++) <a class="mobile-auther__news__item">
            <div class="row   align-items-center">

              <div class="col-4">
                <div class="mobile-auther__news__item--img">
                  <img src="/img/mobile/news.png" alt="">
                </div>
              </div>
              <div class=" col-8 pr-0  news-content">
                <div class="mobile-auther__news__item--title">
                  <h3>لما لم يكن هناك “اهتزاز” بالمنطقة بعد ضم الجولان؟ نتنياهو يوضح</h3>
                </div>
                <div class="mobile-auther__news__item__info d-flex justify-content-between">
                  <div class="mobile-auther__news__item__info__date">
                    <span> 25 آغسطس</span>
                  </div>
                  <ul class="mobile-auther__news__item__info__stats">
                    <li class="mobile-auther__news__item__info__stats--stat views">
                      <img src="/img/mobile/views-red.png" alt="">
                      500,000
                    </li>
                    <li class="mobile-auther__news__item__info__stats--stat comments">
                      <img src="/img/mobile/comments-news.png" alt="">
                      12
                    </li>
                    <li class="mobile-auther__news__item__info__stats--stat fav">
                      <img src="/img/mobile/fav-checked.png" alt="">
                    </li>
                  </ul>

                </div>
              </div>
            </div>
            </a>
            @endfor
      </div>
    </div>
  </div>
</div>
@endsection