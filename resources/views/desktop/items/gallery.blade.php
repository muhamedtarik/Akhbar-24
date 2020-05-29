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
          <div class="galleryDetails pr-3">
            <h5 class="galleryDetails__heading mt-3 mb-4">
              {{ $item['title'] }}
            </h5>
            <div class="galleryDetails__icons d-flex justify-content-between align-items-center">
              <ul class="galleryDetails__icons__right">
                <li class="galleryDetails__icons__right__first">
                  @if ($item['source'])
                    <img src="/img/desktop/editprofile.png" alt="{{ $item['source']['title'] }}">
                    {{ $item['source']['title'] }}
                  @elseif(count($item['editors']) > 0)
                    <a href="{{ route('editors.show', $item['editors'][0]['id']) }}">
                      <img src="{{ $item['editors'][0]['avatar'] ?? '' }}" alt="{{ $item['editors'][0]['name'] }}"
                           onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/editprofile.png';">
                      {{ $item['editors'][0]['name'] }}
                    </a>
                  @endif
                </li>
                <li class="galleryDetails__icons__right__second mx-3">
                  {{ arabicDate($item['published_at']) }}
                </li>
                <li class="galleryDetails__icons__right__third mx-3">
                  <div class="views-cases galleryItem ">
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
                </li>
                <li class="galleryDetails__icons__right__fourth mx-3">
                  <img src="/img/desktop/comment-gray.svg" style="width: 14px;" class="mb-1 ml-1" alt="عدد التعليقات">
                  {{ $item['comments_count'] }}
                </li>
              </ul>
              <ul class="galleryDetails__icons__left">
                {{-- <li>
                    <a href="#">
                      <img src="/img/desktop/item-snapchat.png" alt="">
                    </a>
                  </li> --}}
                <li class="mx-3">
                  <a href="#">
                    <img src="/img/desktop/item-twitter.png" alt="">
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="/img/desktop/item-facebook.png" alt="">
                  </a>
                </li>
              </ul>
            </div>
            <p class="galleryDetails__info">
              @if(is_array($item['body']))
                @foreach($item['body'] as $html)
                  {!! \App\Argaam\Parser::renderData($html) !!}
                @endforeach
              @endif
            </p>
          </div>

          @foreach($item['gallery_media'] as $gallery)
            <div class="galleryDetails__img my-3 pb-2 pr-3">
              <a id="galleryItem" href="{{ $gallery['path'] }}" data-fancybox="album"
                 data-caption="{{ $gallery['caption'] }}">
                <img src="{{ $gallery['path'] }}" alt="{{ $gallery['name'] }}">
              </a>
              <p class="galleryDetails__captionBody p-1 m-2">
                {!! $gallery['caption'] !!}
              </p>
            </div>
          @endforeach

          <div class="item__tags my-4 py-3 pr-3">
            <ul>

              @foreach ($item['tags'] as $tag)
                <li><a href="{{ route('tags.show', $tag['name']) }}"> {{ $tag['name'] }} </a></li>
              @endforeach
            </ul>
          </div>

          <div class="item__actions d-flex justify-content-between align-items-baseline pr-3">
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
                    <a href="#" class="desktop-item-action__share__social__snapchat">
                      <img src="/img/desktop/item-bar/itemsnapchat.png" alt="">
                    </a>
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
          @include('desktop.partials._sidebar-most-viewed-galleries')

          <div class="ad-side my-4">
            <a href="#">
              <img src="/img/desktop/adside.png" alt="">
            </a>
          </div>

          @include('desktop.partials._sidebar-featured-videos')
        </section>
      </div>
    </div>

  </div>

  @if($site === 'akhbaar24')
    @include('layouts.desktop.footer')
  @else
    @include('layouts.desktop.sport.footer')
  @endif

@endsection
@push('js')
  <script src="/css/mobile/fancybox3/jquery.fancybox.min.js"></script>
  <script>
    $('.galleryDetails__img #galleryItem').fancybox({
      backFocus: false,
      trapFocus: false,
      arrows: false,
    });
  </script>
  <script>$('.galleryDetails__img').find("a").attr('target', '_blank');</script>
  <script>
  $(document).on("scroll", function(){
  var pixels = $(document).scrollTop();
  var pageHeight = $(document).height() - $(window).height();
  var progress = 100 * pixels / pageHeight;
  $("div.progress").css("width", progress + "%");
  })
  </script>

@endpush
