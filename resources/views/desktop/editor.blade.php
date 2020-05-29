@extends('layouts.desktop.app')
@section('content')
<div class="position-relative">
  @include('layouts.desktop.header')

  <div class="container pb-5 bg-white">
    <div class="row">
      <section class="layout__body pl-4">
        <div class="author my-4 text-center">
          <div class="author__img">
            <img src="{{ $editor['avatar'] ?? '' }}" class="mt-3 mb-2" alt="{{ $editor['name'] }}"
              onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/editprofile.png';">
          </div>
          <h5> {{ $editor['name'] }} </h5>
          <p class="text-muted">عدد المقالات : {{ $editor['items_count'] }}</p>
          <div class="author__icon">
            <a href="{{ $editor['social_profile'] }}">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="mailto:{{ $editor['email'] }}">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </a>
          </div>
        </div>

        <div class="news-listing">
          @foreach ($items['data'] as $item)
          <div class="news-listing__item text-right">
            <a href="#" class="news-listing__item__link">
              <div class="row">
                <div class="col-4 pl-0">
                  <div class="news-listing__item__img">
                    <a href="{{ route('items.show', $item['id']) }}">
                      <img src="{{ $item['image'] }}" class="img-fluid" alt="{{ $item['title'] }}"
                        onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                      @if($item['type'] !== 'article')
                      <span class="a24-side-news__item__img__icon">
                        <img src="/img/desktop/{{ $item['type'] }}_type.png" alt="">
                      </span>
                      @endif
                    </a>
                  </div>
                </div>
                <div class="col-8">
                  <div class="news-listing__item__text">
                    <a href="{{ route('items.show', $item['id']) }}" class="news-listing__item__link">
                      <h3>
                        {{ $item['title'] }}
                      </h3>
                    </a>
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
                      <a href="#" class="btn btn-sm news-listing__item__icons__icon__twitter"
                        onClick="MyWindow=window.open('http://twitter.com/share?text={{ $item['title'] }}&url={{ route('items.show', $item['id']) }}','MyWindow','width=600,height=300'); return false;"
                        style="color:#fff">
                        <i class="fa fa-twitter " aria-hidden="true"></i>
                        غرد
                      </a>
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

          {{ $paginator->links() }}

        </div>
      </section>

      <section class="layout__sidebar pr-0">
        @include('desktop.partials._sidebar-latest-videos')

        <div class="ad-side my-4">
          <a href="#">
            <img src="/img/desktop/adside.png" alt="">
          </a>
        </div>
      </section>
    </div>
  </div>

</div>
@include('layouts.desktop.footer')
@endsection