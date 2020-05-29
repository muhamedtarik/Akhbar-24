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
        <section class="layout__body mb-1 mt-3 pl-4">
          <div class="news-heading mt-1 mb-3">
            <h5>{{ $categoryName }}</h5>
          </div>

          <div class="news-listing">
            @foreach($category['data'] as $item)
              <div class="news-listing__item text-right">
                <a href="#" class="news-listing__item__link">
                  <div class="row">
                    <div class="col-4 pl-0">
                      <div class="news-listing__item__img">
                        <a href="{{ route('items.show', $item['id']) }}">
                          <img src="{{ $item['image'] }}"
                               class="img-fluid" alt="{{ $item['title'] }}" onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                          @if($item['type'] !== 'article')
                            <span class="a24-side-news__item__img__icon">
                              <img src="/img/desktop/{{ $item['type'] }}_type.png" alt="">
                            </span>
                          @endif
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
                      <div
                        class="news-listing__item__icons d-flex justify-content-between align-items-center">
                        <div class="news-listing__item__icons__date">
                          <p class="text-muted">
                            {{ arabicDate($item['published_at']) }}
                          </p>
                        </div>
                        <div class="news-listing__item__icons__icon d-flex align-items-center justify-content-end">
                          <a href="#"
                             class="btn btn-sm news-listing__item__icons__icon__twitter"
                             onClick="MyWindow=window.open('http://twitter.com/share?text={{ $item['title'] }}&url={{ route('items.show', $item['id']) }}','MyWindow','width=600,height=300'); return false;" style="color:#fff">
                            <i class="fa fa-twitter " aria-hidden="true"></i>
                            غرد
                          </a>
                          <div class="news-listing__item__icons__icon__likes homelisted views-cases">
                            @if($item['views_count'] < 5000) 
                            <span class="ml-2 views-cases--grey mx-4">
                              <img src="/img/desktop/views-grey.svg" alt="عدد المشاهدات">
                              {{ $item['views_count'] }}
                            </span>
                          @elseif($item['views_count'] >= 10000)
                          <span class="ml-2 views-cases--red mx-4">
                            <img src="/img/desktop/fire.svg" alt="عدد المشاهدات">
                            {{ $item['views_count'] }}
                          </span>
                          @else
                          <span class="ml-2 views-cases--yellow mx-4">
                            <img src="/img/desktop/views-yellow.svg" alt="عدد المشاهدات">
                            {{ $item['views_count'] }}
                          </span>
                          @endif
                        </div>
                          <span class="news-listing__item__icons__icon__commenting">
                            <img src="/img/desktop/comment-gray.svg"
                                 style="width: 13px;">
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

        <section class="layout__sidebar mt-3">
          @include('desktop.partials._sidebar-latest-videos')

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
