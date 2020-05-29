@extends('layouts.mobile.app')
@section('content')
  @include('layouts.mobile.menu')
  <div id="container">

    @if($site === 'akhbaar24')
      @include('layouts.mobile.nav')
    @else
      @include('layouts.mobile.sport.nav')
    @endif

    <div class="item">
      <div class="item__img">
        <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="img-fluid w-100"
             onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
      </div>
      <p class="item__info p-3 m-0"> {{ $item['title'] }} </p>
      <div class="item__data d-flex justify-content-between align-items-center px-3 py-2">
        <div class="item__data__right">
          <span class="text-muted">
            {{ arabicDate($item['published_at']) }}
          </span>
        </div>
        <div class="item__data__left views-cases">
          @if($item['views_count'] < 5000)
          <span class="views-cases--grey">
            <img src="/img/mobile/views-grey.svg" style="width: 15px;height: 16px;position: relative;top: -2px;" alt="">
             {{ $item['views_count'] ?? 0 }}
          </span>
            @elseif($item['views_count'] >= 10000)
            <span class="views-cases--red">
              <img src="/img/mobile/fire.svg" style="width: 15px;height: 16px;position: relative;top: -2px;" alt="">
               {{ $item['views_count'] ?? 0 }}
            </span>
            @else
            <span class="views-cases--yellow">
              <img src="/img/mobile/views-yellow.svg" style="width: 15px;height: 16px;position: relative;top: -2px;" alt="">
               {{ $item['views_count'] ?? 0 }}
            </span>
            @endif
        
          <span class="text-muted mr-1">
            <img src="/img/mobile/comments-news.png" class="mb-1" style="width: 13px">
            {{ $item['comments_count'] ?? 0 }}
          </span>
        </div>
      </div>

      <div class="item__category p-2 px-3">
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

      <div class="item__details pb-2 pt-3 px-3">
        @if(is_array($item['body']))
          @foreach($item['body'] as $html)
            {!! \App\Argaam\Parser::renderData($html) !!}
          @endforeach
        @endif
        <p class="item__details__tweetQoute">
          يمكن أن يلقي بيزوس باللوم على أرباح شركته في الربع الثالث من هذا العام،
          <span data-tweetable class="tweetable-span">إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص <img src="/img/mobile/tweetqoute.png" alt=""></span>
        </p>
      </div>
      <div class="item__telegram text-center mx-auto mb-3">
        <a href="#" class="item__telegram__btn">
          <img src="/img/mobile/telegram_follow.png" alt="" class="ml-1">
          تابعنا عبر تليجرام
        </a>
      </div>

      <div class="item__subjects px-3 mb-3">
        <ul>
          @foreach ($item['tags'] as $tag)
            <li><a href="{{ route('tags.show', $tag['name']) }}"> {{ $tag['name'] }} </a></li>
          @endforeach
        </ul>
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
  <script src="/js/mobile/slick.min.js"></script>
  <script src="/js/mobile/tweetify.min.js"></script>
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
          arrows: false,
          centerMode: true,
          centerPadding: "120px",
          slidesToShow: 1,
          infinite: true,
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
  <script>
    $('.item__details__tweetQoute').tweetify({
	hashtag: 'awesome',
	via: 'Akhbar 24'
  });
  </script>
  <script>
    $('.item-add-comment-modal').on('shown.bs.modal', function () {
      $('#add-comment').trigger('focus')
    })

  </script>
  <script>
    $('.item-add-reply-modal').on('shown.bs.modal', function () {
      $('#add-reply').trigger('focus')
    })

  </script>
  <script>$('.item__details').find("a").attr('target', '_blank');</script>
  <script src="/js/desktop/jquery.tweetable.js"></script>
  <script>
    $(function () {

    $('[data-tweetable]').tweetable({
    via: 'jqueryscript', // your twitter's user name
    });

    });


  $(function () {
  $('[data-tweetable]').tweetable({
    dataAttr: 'data-tweetable',
    linkClass: 'tweetable',
    via: 'Akbar 24',
    related: null,
    url: window.location.pathname
  });

  });
  </script>

@endpush
