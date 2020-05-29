@extends('layouts.desktop.app')
@section('content')
  <div class="position-relative">

    @if($site === 'akhbaar24')
      @include('layouts.desktop.header')
    @else
      @include('layouts.desktop.sport.header')
    @endif

    <div class="container pb-5 bg-white">
      <div class="row">

        @if($site === 'akhbaar24')
          <section class="col-12 px-4 mt-4 mb-3">
            <div class="video-main-header d-flex justify-content-between align-items-center mb-2 pb-1">
              <h5>الأكثر مشاهدة</h5>
              <a href="#">فيديو24<i class="fa fa-twitter pr-1" aria-hidden="true"></i></a>
            </div>
            <div class="video-main">
              <div class="row">
                @for( $i = 0 ; $i < 3 ; $i++)
                  <div class="col-4 px-2">
                    <div class="video-main__item mt-2">
                      <a href="/video-details">
                        <img class="video-main__item--img"
                             src="https://i.picsum.photos/id/655/700/400.jpg" alt="">
                        <ul class="video-main__item--stats">
                          <li class="video-main__item--stats--stat">
                            <img class="video-main__item--stats--stat--views-icon"
                                 src="/img/mobile/views-white.png" alt="">
                            500,000
                          </li>
                          <li class="video-main__item--stats--stat">
                            <img class="video-main__item--stats--stat--comments-icon"
                                 src="/img/mobile/comments.png" alt="">
                            12
                          </li>
                        </ul>
                        <div class="video-main__item--icon">
                          <i class="fa fa-play"></i>
                        </div>
                        <div class="video-main__item--text">
                          <h3>تعرّف على أول مركبة مصممة لخدمة تنقّل ذوي الاحتياجات الخاصة</h3>
                        </div>
                      </a>
                    </div>
                  </div>
                @endfor
              </div>
            </div>
          </section>
        @endif

        <section class="layout__body mb-1 mt-3 pl-4">
          <div class="news-heading mt-1 mb-3">
            <h5>{{ $categoryName }}</h5>
          </div>

          <div class="video-cards pr-2">
            <div class="row">
              @foreach($category['data'] as $item)
                <div class="col-4 px-2">
                  <div class="video-cards__item text-right pb-2 mb-3">
                    <a href="{{ route('items.show', $item['id']) }}"
                       class="video-cards__item__link">
                      <div class="video-cards__item__img">
                        <img src="{{ $item['image'] }}"
                             class="rounded-top" alt="{{ $item['title'] }}" onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                        <span class="video-cards__item__img__play">
                          <img src="/img/desktop/video_type.png" alt="">
                        </span>
                      </div>
                      <p class="video-cards__item__text p-2">
                        {{ $item['title'] }}
                      </p>
                      <div
                        class="video-cards__item__meta d-flex justify-content-between align-items-center mx-2">
                        <span
                          class="video-cards__item__meta__date text-muted mt-1">
                          {{ arabicDate($item['published_at']) }}
                        </span>
                        <div class="video-cards__item__meta__icons d-flex align-items-center justify-content-end">
                       
                              <div class="views-cases videoList ml-2">
                                  @if($item['views_count'] < 5000)
                                    <span class=" views-cases--grey">
                                      <img src="/img/desktop/views-grey.svg">
                                      {{ $item['views_count'] }}
                                    </span> 
                                  @elseif($item['views_count'] >= 10000)
                                  <span class=" views-cases--red">
                                    <img src="/img/desktop/fire.svg">
                                    {{ $item['views_count'] }}
                                    </span>
                                  @else
                                  <span class=" views-cases--yellow">
                                      <img src="/img/desktop/views-yellow.svg">
                                      {{ $item['views_count'] }}
                                    </span>
                                  @endif
                                  </div>
                  
                          <div
                            class="video-cards__item__meta__icons__commenting text-muted ">
                            <img src="/img/desktop/comment-gray.svg" alt="">
                            {{ $item['comments_count'] }}
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              @endforeach
            </div>
          </div>

          {{ $paginator->links() }}
        </section>

        <section class="layout__sidebar mt-3 pr-0">
          @include('desktop.partials._sidebar-most-viewed-videos')

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

@endsection
