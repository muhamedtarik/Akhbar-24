@extends('layouts.mobile.app')
@section('content')
  @include('layouts.mobile.menu')
  <div id="container">
    @include('layouts.mobile.sport.nav')
    <div class="mobiles24-home">
      <div class="mobiles24-home__featured-slider mt-3">
        <div class="container ">
          <div class="slider center">
            @foreach(array_reverse($featured) as $item)
              <div class="mobiles24-home__featured-slider__item">
                <a href="{{ route('items.show', $item['id']) }}">
                  <img class="mobiles24-home__featured-slider__item--img"
                       src="{{ $item['image'] }}" alt="" onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                  <ul class="mobiles24-home__featured-slider__item--stats">
                    <li class="mobiles24-home__featured-slider__item--stats--stat">
                      <img class="mobiles24-home__featured-slider__item--stats--stat--views-icon"
                           src="/img/mobile/views-white.png" alt="">
                      {{ $item['views_count'] }}
                    </li>
                    <li class="mobiles24-home__featured-slider__item--stats--stat">
                      <img
                        class="mobiles24-home__featured-slider__item--stats--stat--comments-icon"
                        src="/img/mobile/comments.png" alt="">
                      {{ $item['comments_count'] }}
                    </li>
                  </ul>
                  <div class="mobiles24-home__featured-slider__item--text">
                    <h3>{{ $item['title'] }}</h3>
                  </div>
                </a>
              </div>
            @endforeach
          </div>
        </div>
      </div>

      <div class="mobiles24-home__ad1 mt-4">
        <div class="container">
          <img src="/img/mobile/ad1.png" style="width:100%" alt="">
        </div>
      </div>

      <div class="mobiles24-home__news">
        <div class="container">
          @foreach($homelisted['data'] as $item)
            <a class="mobiles24-home__news__item" href="{{ route('items.show', $item['id']) }}">
              <div class="row h-100 align-items-center">
                <div class="col-4">
                  <div class="mobiles24-home__news__item--img">
                    <img src="{{ $item['image'] }}" alt="" onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                  </div>
                </div>
                <div class="col-8 pr-0 news-content">
                  <div class="mobiles24-home__news__item--title">
                    <h3>{{ $item['title'] }}</h3>
                  </div>
                  <div
                    class="mobiles24-home__news__item__info d-flex justify-content-between align-items-center">
                    <div class="mobiles24-home__news__item__info__date">
                      <span>
                        {{ arabicDate($item['published_at']) }}
                      </span>
                    </div>
                    <ul class="mobiles24-home__news__item__info__stats">
                      <li class="mobiles24-home__news__item__info__stats--stat views">
                        <img src="/img/mobile/views-red.png" alt="">
                        {{ $item['views_count'] }}
                      </li>
                      <li class="mobiles24-home__news__item__info__stats--stat comments">
                        <img src="/img/mobile/comments-news.png" alt="">
                        {{ $item['comments_count'] }}
                      </li>
                      <!--
                      <li class="mobiles24-home__news__item__info__stats--stat fav">
                        <img src="/img/mobile/fav-checked.png" alt="">
                      </li>
                       -->
                    </ul>

                  </div>
                </div>
              </div>
            </a>

            @if($loop->iteration % 5 == 0)
              <div class="mobiles24-home__ad2 mt-4">
                <div class="container">
                  <img src="/img/mobile/ad2.png" style="width:100%" alt="">
                </div>
              </div>
            @endif
          @endforeach

        </div>
      </div>
    </div>
  </div>
@endsection
@push('js')
  <script src="/js/mobile/slick.min.js"></script>
  <script>
    $(".center").slick({
      centerMode: true,
      centerPadding: "60px",
      slidesToShow: 3,
      infinite: false,
      swipe: true,
      // rtl: true,
      initialSlide: 2,
      responsive: [{
        breakpoint: 769,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: "90px",
          slidesToShow: 1
        }
      },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: "80px",
            slidesToShow: 1,
          }
        }
      ]
    });

  </script>
@endpush
