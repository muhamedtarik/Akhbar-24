@extends('layouts.mobile.app')
@section('content')
  @include('layouts.mobile.menu')
  <div id="container">

    @include('layouts.mobile.nav')

    <div id="gdetails" class="gdetails">
      <h5 class="gdetails__heading px-3 pt-3"> {{ $item['title'] }} </h5>
      <div class="gdetails__data d-flex justify-content-between align-items-center px-3 py-2">
        <span class="text-muted">
          {{ arabicDate($item['published_at']) }}
        </span>
        <div class="item__data__left views-cases">
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
          <span class="text-muted mr-2"><img src="/img/mobile/comments-news.png" class="mb-1"
                                        style="width: 12px;">
            {{ $item['comments_count'] ?? 0 }}
          </span>
        </div>
      </div>

      <div class="gdetails__category p-2 px-3">
        <span>
          @if ($item['source'])
            <img src="/img/desktop/editprofile.png" class="ml-1" width="36" height="36"
                 alt="{{ $item['source']['title'] }}">
            {{ $item['source']['title'] }}
          @elseif(count($item['editors']) > 0)
            <a href="{{ route('editors.show', $item['editors'][0]['id']) }}">
              <img src="{{ $item['editors'][0]['avatar'] ?? '' }}" class="ml-1" width="36" height="36"
                   alt="{{ $item['editors'][0]['name'] }}"
                   onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/editprofile.png';">
              {{ $item['editors'][0]['name'] }}
            </a>
          @endif
        </span>
      </div>

      <div class="gdetails__details pb-2 pt-3 px-2">
        @foreach($item['body'] as $html)
          {!! \App\Argaam\Parser::renderData($html) !!}
        @endforeach
      </div>

      @foreach($item['gallery_media'] as $gallery)
        <div id="gdetails__card" class="gdetails__card m-3">
          <a id="galleryItem" href="{{ $gallery['path'] }}" data-fancybox="album"
             data-caption="{{ $gallery['caption'] }}">
            <img src="{{ $gallery['path'] }}" alt="{{ $gallery['name'] }}" class="w-100"
                 onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
          </a>
          <p class="gdetails__details p-2">
            {!! $gallery['caption'] !!}
          </p>
        </div>
      @endforeach

      <div class="gdetails__subjects px-3 mb-5">
        @foreach ($item['tags'] as $tag)
          <a href="#"> {{ $tag['name'] }} </a>
        @endforeach
      </div>

      {{--<button><img src="/img/mobile/telegram_follow.svg" class="ml-1">تابعنا عبر تليجرام</button>--}}

      @include('mobile.partials._comments')
      @include('mobile.partials._read-also')

      <div class="gdetails__ad text-center mb-5">
        <img src="/img/mobile/gdetailsad.png" style="width: 300px; height: 250px;">
      </div>

      @include('mobile.partials._item-sticky-footer')
    </div>
  </div>
@endsection
@push('js')
  <script src="/css/mobile/fancybox3/jquery.fancybox.min.js"></script>
  <script src="/js/mobile/slick.min.js"></script>
  <script>
    $('.gdetails__card #galleryItem').fancybox(
      {
        backFocus: false,
        trapFocus: false,
        arrows: false,
        buttons: [
          "zoom",
          //"share",
          // "slideShow",
          //"fullScreen",
          //"download",
          // "thumbs",
          "close"
        ],
      }
    );
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
  <script>$('.gdetails__card').find("a").attr('target', '_blank');</script>

@endpush
