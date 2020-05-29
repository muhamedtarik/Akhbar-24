@extends('layouts.desktop.app')
@section('content')
<div class="position-relative">
  @include('layouts.desktop.header')

  <div class="container pb-5 bg-white">

    <div class="row">

      <section class="layout__body mb-5 pl-4">

        <div class="tags-header mt-4 d-flex justify-content-between align-items-center mb-2 pb-1">
          <h5 class="tags-header__title"> {{ $tag }} </h5>
          <div class="tags-header__icons d-flex">
            <a class="tags-header__icons__twitter ml-3" href="#"><img src="/img/desktop/tags-twitter.png" class="ml-1"
                alt="">غرد</a>
            <a class="tags-header__icons__fb" href="#">share 0<img src="/img/desktop/tags-facebook.png" class="mr-1"
                alt=""></a>
          </div>

        </div>

        <div class="news-cards mr-2 my-4">
          <div class="row">
            @forelse(collect($items['data'])->take(3) as $item)
            <div class="col-4 px-2">
              <div class="news-cards__item text-right">
                <a class="news-cards__item__link" href="#">
                  <div class="news-cards__item__img">
                    <a href="{{ route('items.show', $item['id']) }}">
                      <img src="{{ $item['image'] }}" class="img-fluid" alt="{{ $item['title'] }}"
                        onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                    </a>
                  </div>
                  <div class="news-cards__item__text">
                    <p class="card-text">
                      <a href="{{ route('items.show', $item['id']) }}" class="news-listing__item__link">
                        {{ $item['title'] }}
                      </a>
                    </p>
                  </div>
                  <div class="news-cards__item__icons d-flex justify-content-between align-items-center">
                    <a href="#" class="btn btn-sm news-listing__item__icons__icon__twitter"
                      onClick="MyWindow=window.open('http://twitter.com/share?text={{ $item['title'] }}&url={{ route('items.show', $item['id']) }}','MyWindow','width=600,height=300'); return false;"
                      style="color:#fff">
                      <i class="fa fa-twitter " aria-hidden="true"></i>
                      غرد
                    </a>
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
            @empty
            <div class="search__empty text-center pt-5 mx-auto">
              <h5 class="mb-4">
                عفوا لا توجد كلمات مفتاحية عن
                <span> "{{ $tag }}" </span>
              </h5>
              <a href="{{ route('akhbaar.index') }}"> عودة الى الرئيسية </a>
            </div>
            @endforelse
          </div>

        </div>

        <div class="news-listing">
          @foreach(collect($items['data'])->skip(3) as $item)
          <div class="news-listing__item text-right">
            <a href="#" class="news-listing__item__link">
              <div class="row">
                <div class="col-4 pl-0">
                  <div class="news-listing__item__img">
                    <a href="{{ route('items.show', $item['id']) }}">
                      <img src="{{ $item['image'] }}" class="img-fluid" alt="{{ $item['title'] }}"
                        onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                    </a>
                  </div>
                </div>
                <div class="col-8 d-flex flex-column justify-content-between">
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
        </div>

        {{ $paginator->links() }}

      </section>

      <section class="layout__sidebar pr-0">

        <div class="ad-side my-4 pt-3">
          <a href="#">
            <img src="/img/desktop/adside.png" alt="">
          </a>
        </div>

        <div class="news-heading mt-1 mb-3">
          <h5>احدث المقاطع</h5>
        </div>
        <div class="a24-side-news">
          @for ($i = 0; $i < 8; $i++) <div class="a24-side-news__item">
            <a class="a24-side-news__item__link" href="#">
              <div class="row">
                <div class="col-5 pl-0">
                  <div class="a24-side-news__item__img">
                    <img src="https://i.picsum.photos/id/681/700/500.jpg"
                      onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                    <span class="a24-side-news__item__img__icon">
                      <img src="/img/desktop/video_type.png" alt="">
                    </span>
                  </div>
                </div>
                <div class="col-7 pr-2">
                  <p class="a24-side-news__item--text text-right">هذا النص هو مثال لنص يمكن ان
                    يستبدل في نفس
                    المساحة, لقد تم
                    توليد
                    هذا النص من مولد النص </p>
                </div>
              </div>
              <hr>
            </a>
        </div>

        @endfor
    </div>


    </section>

  </div>
</div>

</div>
@include('layouts.desktop.footer')
@endsection