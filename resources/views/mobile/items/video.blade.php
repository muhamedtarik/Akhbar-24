@extends('layouts.mobile.app')
@section('content')
  @include('layouts.mobile.menu')
  <div id="container">

    @if($site === 'akhbaar24')
      @include('layouts.mobile.nav')
    @else
      @include('layouts.mobile.sport.nav')
    @endif

    <div class="video-details">
      <div class="video-details__video">
        <iframe width="100%" height="100%" src="{{ str_replace('watch?v=','embed/',$item['video_media']['path']) }}"
                frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
        </iframe>
      </div>

      <h5 class="video-details__heading px-3 pt-3"> {{ $item['title'] }} </h5>
      <div class="video-details__data d-flex justify-content-between align-items-center px-3">
        <span class="text-muted">
          {{ arabicDate($item['published_at']) }}
        </span>
        <span class="views-cases  ">
          @if($item['views_count'] < 5000)
          <span class="views-cases--grey">
            <img src="/img/mobile/views-grey.svg" class="mb-1 " style="width:10px; height:14px" alt="">
             {{ $item['views_count'] ?? 0 }}
          </span>
            @elseif($item['views_count'] >= 10000)
            <span class="views-cases--red">
              <img src="/img/mobile/fire.svg" class="mb-1 " style="width:10px; height:14px" alt="">
               {{ $item['views_count'] ?? 0 }}
            </span>
            @else
            <span class="views-cases--yellow">
              <img src="/img/mobile/views-yellow.svg" class="mb-1 "style="width:10px; height:14px" alt="">
               {{ $item['views_count'] ?? 0 }}
            </span>
            @endif
        </span>
      </div>

      <div class="item__details pb-2 pt-3 px-2">
        @if(is_array($item['body']))
          @foreach($item['body'] as $html)
            {!! \App\Argaam\Parser::renderData($html) !!}
          @endforeach
        @endif
      </div>

      <div class="video-details__subjects px-3 mb-5">
        @foreach ($item['tags'] as $tag)
          <a href="{{ route('tags.show', $tag['name']) }}"> {{ $tag['name'] }} </a>
        @endforeach
      </div>

      {{--<button><img src="/img/mobile/telegram_follow.svg" class="ml-1">تابعنا عبر تليجرام</button>--}}

      @include('mobile.partials._comments')
      @include('mobile.partials._read-also')

      <div class="video-details__ad text-center mb-5">
        <a href="#">
          <img src="/img/mobile/gdetailsad.png" style="width: 300px; height: 250px;">
        </a>
      </div>

      @include('mobile.partials._item-sticky-footer')
    </div>
  </div>
@endsection

@push('js')
  <script src="/js/mobile/slick.min.js"></script>
  <script>

    $(".news-slider").slick({
      centerMode: true,
      centerPadding: "60px",
      slidesToShow: 3,
      infinite: false,
      swipe: true,
      // rtl: true,
      initialSlide: 2,
      variableWidth: true,
      responsive: [{
        breakpoint: 769,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 1
        }
      },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: "120px",
            slidesToShow: 1,
          }
        }
      ]
    });

  </script>
  <script>$('.item__details').find("a").attr('target', '_blank');</script>

@endpush
