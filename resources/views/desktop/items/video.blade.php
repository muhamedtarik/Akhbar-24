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
          <div class="video-details pr-3">
            <h4 class="video-details__heading text-right mt-4 mb-2">
              {{ $item['title'] }}
            </h4>
            <div class="video-details__icons d-flex justify-content-between align-items-center my-2">
              <div class="video-details__icons__right">
                <span class="text-muted">
                  {{ arabicDate($item['published_at']) }}
                </span>
              </div>
              <div class="video-details__icons__left">
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
            <iframe width="100%" height="473" src="{{ str_replace('watch?v=','embed/',$item['video_media']['path']) }}"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
            </iframe>
            <div class="video-details__icons2 d-flex justify-content-between align-items-center mt-2 pb-2">
              <div class="item__icons2__right">
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
              </div>
              <div class="video-details__icons2__left d-flex align-items-center justify-content-end">
               
                  <div class="views-cases videoItem ml-2">
                    @if($item['views_count'] < 5000)
                      <span class=" views-cases--grey">
                        <img src="/img/desktop/views-grey.svg" class="" alt="عدد المشاهدات">
                        {{ $item['views_count'] }}
                      </span> 
                    @elseif($item['views_count'] >= 10000)
                    <span class=" views-cases--red">
                        <img src="/img/desktop/fire.svg" class="" alt="عدد المشاهدات">
                        {{ $item['views_count'] }}
                      </span>
                    @else
                    <span class=" views-cases--yellow">
                        <img src="/img/desktop/views-yellow.svg" class="" alt="عدد المشاهدات">
                        {{ $item['views_count'] }}
                      </span>
                    @endif
                    </div>
           
                <span class="text-muted mr-2">
                  <img src="/img/desktop/comment-gray.svg" class="mb-1" alt="عدد التعليقات">
                  {{ $item['comments_count'] }}
                </span>
              </div>
            </div>

            <div class="item__details pb-2 pt-3 px-2">
              @if(is_array($item['body']))
                @foreach($item['body'] as $html)
                  {!! \App\Argaam\Parser::renderData($html) !!}
                @endforeach
              @endif
            </div>

            <div class="video-details__tags my-4 py-3">
              @foreach ($item['tags'] as $tag)
                <a href="{{ route('tags.show', $tag['name']) }}"> {{ $tag['name'] }} </a>
              @endforeach
            </div>

            <div class="video-details__actions d-flex justify-content-between align-items-baseline">
              <div class="item__actions__right">
                <button href="#">
                  <img src="/img/desktop/like.svg" class="ml-2 mb-2">43
                </button>
              </div>
              <ul class="video-details__actions__left">
                <li class="video-details__actions__left__first mx-1">تابعونا</li>
                <li class="video-details__actions__left__second mx-2">
                  <a href="#">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="video-details__actions__left__third mx-2">
                  <a href="#">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="video-details__actions__left__fourth mx-1">
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
          @include('desktop.partials._sidebar-featured-videos')

          <div class="ad-side my-4">
            <a href="#">
              <img src="/img/desktop/adside.png" alt="">
            </a>
          </div>

          @include('desktop.partials._sidebar-read-also')
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
    <script>$('.item__details').find("a").attr('target', '_blank');</script>
    <script>
      $(".desktop-item-action").css('visibility', 'hidden');
      var topOfOthDiv = $(".video-details").offset().top;
      $(window).scroll(function() {
          if($(window).scrollTop() > topOfOthDiv + 5) {
              $(".desktop-item-action").css('visibility', 'visible'); 
              $(".progress").show();
          }
          else{
            $(".desktop-item-action").css('visibility', 'hidden')
            $(".progress").hide();
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
  @endpush
@endsection
