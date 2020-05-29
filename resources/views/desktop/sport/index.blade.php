@extends('layouts.desktop.app')
@section('content')
  <div class="position-relative">
    @include('layouts.desktop.sport.header')

    <div class="container pb-5 bg-white">
      <div class="row">
        <section class="layout__body pb-5 mb-5 pl-4">
          <div class="news-cards mr-2 my-4">
            <div class="row">
              @foreach ($featured as $item)
                <div class="col-4 px-2">
                  <div class="news-cards__item text-right">
                    <a class="news-cards__item__link" href="{{ route('items.show', $item['id']) }}">
                      <div class="news-cards__item__img">
                        <img src="{{ $item['image'] }}" alt=""
                             onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                        @if($item['type'] !== 'article')
                          <span class="a24-side-news__item__img__icon">
                            <img src="/img/desktop/{{ $item['type'] }}_type.png" alt="">
                          </span>
                        @endif
                      </div>
                      <div class="news-cards__item__text">
                        <p class="card-text">{{ $item['title'] }}</p>
                      </div>
                      <div class="news-cards__item__icons d-flex justify-content-between align-items-center">
                        <button class="news-cards__item__icons__twitter d-flex align-items-center">
                          <i class="fa fa-twitter pl-1" aria-hidden="true"></i>
                          غرد
                        </button>
                        <div class="news-cards__item__icons__comments">
                          <span class="news-cards__item__icons__comments__likes ml-2">
                            <img src="/img/desktop/fire.svg" style="width: 10px; height: 14px;" class="mb-1">
                            {{ $item['views_count'] }}
                          </span>
                          <span class="news-cards__item__icons__comments__commenting">
                            <img src="/img/desktop/comment-gray.svg" style="width: 10px; height: 14px;" class="mb-1">
                            {{ $item['comments_count'] }}
                          </span>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              @endforeach
            </div>
          </div>

          <div class="news-listing">
            @foreach ($homelisted['data'] as $item)
              <div class="news-listing__item text-right">
                <a href="{{ route('items.show', $item['id']) }}" class="news-listing__item__link">
                  <div class="row">
                    <div class="col-4 pl-0">
                      <div class="news-listing__item__img">
                        <img src="{{ $item['image'] }}" alt=""
                             onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                        @if($item['type'] !== 'article')
                          <span class="a24-side-news__item__img__icon">
                            <img src="/img/desktop/{{ $item['type'] }}_type.png" alt="">
                          </span>
                        @endif
                      </div>
                    </div>
                    <div class="col-8 d-flex flex-column justify-content-between">
                      <div class="news-listing__item__text">
                        <h3>{{ $item['title'] }}</h3>
                        <p>هذا النص هو مثال لنص يمكن ان يستبدل في نفس المساحة, لقد تم توليد هذا
                          النص من
                          مولد النص العربي,
                          حيث
                          يمكنك ان تولد مثل هذا النص او العديد من النصوص الاخري اضافة الي عدد
                          الحروف
                          التي يولدها </p>
                      </div>
                      <div class="news-listing__item__icons d-flex justify-content-between align-items-center">
                        <div class="news-listing__item__icons__date">
                          <p class="text-muted">
                            {{ arabicDate($item['published_at']) }}
                          </p>
                        </div>
                        <div class="news-listing__item__icons__icon">
                          <button class="news-listing__item__icons__icon__twitter">
                            <i class="fa fa-twitter " aria-hidden="true"></i>
                            غرد
                          </button>
                          <span class="news-listing__item__icons__icon__likes">
                            <img src="/img/desktop/fire.svg" style="width: 11px;height: 14px;" class="mb-1">
                            {{ $item['views_count'] }}
                          </span>
                          <span class="news-listing__item__icons__icon__commenting">
                            <img src="/img/desktop/comment-gray.svg" style="width: 11px;height: 12px;">
                            {{ $item['comments_count'] }}
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            @endforeach
          </div>

          @include('desktop.sport.partials.seasons', ['seasons' => $seasons])

        </section>

        <section class="layout__sidebar pr-0">

          @include('desktop.sport.partials.matches', ['matches' => $matches])

          <div class="ad-side my-4">
            <a href="#">
              <img src="/img/desktop/s24-home-ad.png" alt="">
            </a>
          </div>

        @include('desktop.partials._sidebar-latest-goals')
        @include('desktop.partials._sidebar-latest-clips')

        @include('desktop.sport.partials._sidebar-most-read-and-commented')

      </div>
    </div>
  </div>
  </div>
  @include('layouts.desktop.sport.footer')
@endsection
