@extends('layouts.desktop.app')
@section('content')
  <div class="position-relative">

    @if($site === 'akhbaar24')
      @include('layouts.desktop.header')
    @else
      @include('layouts.desktop.sport.header')
    @endif

    <div class="container bg-white">
      <div class="row">
        <section class="layout__body pl-4 pr-0">
          <div class="item pr-3">
            <h4 class="item__heading text-right mt-4 mb-2"> {{ $item['title'] }} </h4>
            <div class="item__icons d-flex justify-content-between align-items-center my-2">
              <div class="item__icons__right">
                <span class="text-muted">
                  {{ arabicDate($item['published_at']) }}
                </span>
              </div>
              <div class="item__icons__left">
                {{-- <a href="#">
                    <img src="/img/desktop/item-snapchat.png" alt="">
                  </a> --}}
                <a href="#" class="mx-3">
                  <img src="/img/desktop/item-twitter.png" alt="">
                </a>
                <a href="#">
                  <img src="/img/desktop/item-facebook.png" alt="">
                </a>
              </div>
            </div>
            <div class="item__img">
              <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
            </div>
            <div class="item__icons2 d-flex justify-content-between align-items-center mt-2 pb-2">
              <div class="item__icons2__right">
                @if ($item['source'])
                  <img src="/img/desktop/editprofile.png" alt="{{ $item['source']['title'] }}">
                  {{ $item['source']['title'] }}
                @elseif(count($item['editors']) > 0)
                  <a href="{{ route('editors.show', $item['editors'][0]['id']) }}">
                    <img src="{{ $item['editors'][0]['avatar'] ?? '' }}"
                         alt="{{ $item['editors'][0]['name'] ?? 'محرر' }}"
                         onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/editprofile.png';">
                    {{ $item['editors'][0]['name'] ?? 'محرر' }}
                  </a>
                @endif
              </div>
              <div class="item__icons2__left d-flex align-items-center">
                <div class="views-cases itemDetails">
                @if($item['views_count'] < 5000)
                  <span class="ml-2 views-cases--grey">
                    <img src="/img/desktop/views-grey.svg" class="mb-1" alt="عدد المشاهدات">
                    {{ $item['views_count'] }}
                  </span>
                @elseif($item['views_count'] >= 10000)
                <span class="ml-2 views-cases--red">
                    <img src="/img/desktop/fire.svg" class="mb-1" alt="عدد المشاهدات">
                    {{ $item['views_count'] }}
                  </span>
                @else
                <span class="ml-2 views-cases--yellow">
                    <img src="/img/desktop/views-yellow.svg" class="mb-1" alt="عدد المشاهدات">
                    {{ $item['views_count'] }}
                  </span>
                @endif
                </div>
                <div class="text-muted mr-3">
                  <img src="/img/desktop/comment-gray.svg" style="width:14px" class="mb-1" alt="عدد التعليقات">
                  {{ $item['comments_count'] }}
                </div>
              </div>
            </div>
            <div class="item__paragraph text-right py-2">
              @if(is_array($item['body']))
                @foreach($item['body'] as $html)
                  {!! \App\Argaam\Parser::renderData($html) !!}
                @endforeach
              @endif
            <p class="item__paragraph__blockQoute">
                <span class="item__paragraph__blockQoute__text">
                  إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما 
                  ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                </span>
                <blockquote class="item__paragraph__blockQoute__qoute">
                  <img src="/img/desktop/quote1.png" alt="qoute" class="item__paragraph__blockQoute__qoute__firstQoute">
                   إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما 
                   
                   <img src="/img/desktop/quote2.png" alt="qoute" class="item__paragraph__blockQoute__qoute__secondQoute">
                </blockquote>
              </p>
              <p class="item__paragraph__tweetQoute">
                يمكن أن يلقي بيزوس باللوم على أرباح شركته في الربع الثالث من هذا العام،
                <span data-tweetable class="tweetable-span">إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص <img src="/img/desktop/tweetqoute.png" alt=""></span>
              </p>
            </div>

            <div class="item__tags my-4 py-3">
              <ul>
                @foreach ($item['tags'] as $tag)
                  <li><a href="{{ route('tags.show', $tag['name']) }}"> {{ $tag['name'] }} </a></li>
                @endforeach
              </ul>
            </div>

            <div class="item__actions d-flex justify-content-between align-items-baseline">
              <div class="item__actions__right">
                <button href="#">
                  <img src="/img/desktop/like.svg" class="ml-2 mb-2">43
                </button>
              </div>
              <ul class="item__actions__left">
                <li class="item__actions__left__first mx-1">تابعونا</li>
                <li class="item__actions__left__second mx-2">
                  <a href="#">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="item__actions__left__third mx-2">
                  <a href="#">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="item__actions__left__fourth mx-1">
                  <a href="#">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          @include('desktop.partials._related-news')
          @include('desktop.partials._latest-news')
          @include('desktop.partials._comments')

          <div class="desktop-item-action d-flex py-2">
            <div class="progress"></div>
              <div class="desktop-item-action__icons position-relative h-100 w-100 d-flex justify-content-between align-items-center">
                <a href="#" class="desktop-item-action__likes text-center">
                  <img src="/img/desktop/item-bar/itemlike.svg" class="ml-1 mb-1" alt="">
                  <span class="desktop-item-action__likes--number">43</span>
                  <span class="desktop-item-action__likes--word">اعجاب</span>
                </a>
                <a href="#" class="desktop-item-action__comments text-center">
                  <img src="/img/desktop/item-bar/itemcomment.svg" class="ml-1 mb-1" alt="">
                  <span class="desktop-item-action__comments--number">43</span>
                  <span class="desktop-item-action__comments--word">تعليق</span>
                </a>
                <span href="#" class="desktop-item-action__share text-center">
                  <img src="/img/desktop/item-bar/itemshare.svg" class="ml-1 mb-1" alt="">
                  <span class="desktop-item-action__share--number">43</span>
                  <span class="desktop-item-action__share--word ml-1">مشاركة</span>
                    <a href="#" class="desktop-item-action__share__social__twitter">
                      <img src="/img/desktop/item-bar/itemtwitter.png" alt="">
                    </a>
                    <a href="#" class="desktop-item-action__share__social__facebook">
                      <img src="/img/desktop/item-bar/itemfacebook.png" alt="">
                    </a>
                </span>
                 
              </div>
          </div>

        </section>

        <section class="layout__sidebar pr-0">
          @include('desktop.partials._sidebar-read-also')

          <div class="ad-side my-4">
            <a href="#">
              <img src="/img/desktop/adside.png" alt="">
            </a>
          </div>

          @include('desktop.partials._sidebar-latest-videos')
        </section>
      </div>
    </div>
  </div>

  @if($site === 'akhbaar24')
    @include('layouts.desktop.footer')
  @else
    @include('layouts.desktop.sport.footer')
  @endif
  @push('js')
  <script>$('.item__paragraph').find("a").attr('target', '_blank');</script>
  <script>
    $(".desktop-item-action").css('visibility', 'hidden');
    var topOfOthDiv = $(".item__paragraph").offset().top;
    $(window).scroll(function() {
        if($(window).scrollTop() > topOfOthDiv + 160) {
            $(".desktop-item-action").css('visibility', 'visible');
            $(".progress").show();
        }
        else{
          $(".desktop-item-action").css('visibility', 'hidden');
          $(".progress").hide()
        }
    });
  </script>
  <script>
  $(document).on("scroll", function(){
  var pixels = $(document).scrollTop();
  var pageHeight = $(document).height() - $(window).height();
  var progress = 100 * pixels / pageHeight;
  $("div.progress").css("width", progress + "%");
  })
  </script>
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
@endsection
