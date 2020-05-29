@extends('layouts.desktop.app')
@section('content')
  <div class="position-relative">
    @include('layouts.desktop.header')

    <div class="container pb-5 bg-white">
      <div class="row">
        <section class="layout__body pl-4">
          <div class="search">
            <h5 class="search__heading">نتائج البحث عن <span> "{{ request('keyword') }}"  </span></h5>
            <ul class="search__tabs nav mt-3">
              <li class="nav-item">
                <a class="nav-link {{ (! request('type') and request()->segment(2) == 'title') ? 'active' : '' }}"
                   href="{{ url('/search/title?keyword=' . request('keyword')) }}">
                  الكل
                </a>
              <li class="nav-item">
                <a
                  class="nav-link {{ (request('type') == 'article' and request()->segment(2) == 'title') ? 'active' : '' }}"
                  href="{{ url('/search/title?type=article&keyword=' . request('keyword')) }}">
                  الأخبار
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link {{ (request('type') == 'video' and request()->segment(2) == 'title') ? 'active' : '' }}"
                  href="{{ url('/search/title?type=video&keyword=' . request('keyword')) }}">
                  الفيديو
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ (! request('type') and request()->segment(2) == 'tag') ? 'active' : '' }}"
                   href="{{ url('/search/tag?keyword=' . request('keyword')) }}">
                  الأوسمة
                </a>
              </li>
            </ul>
            @forelse($items['data'] as $item)
              <div class="search__item text-right">
                <a class="search__item__link" href="#">
                  <div class="row">
                    <div class="col-3">
                      <div class="search__item__img">
                        <a href="{{ route('items.show', $item['id']) }}">
                          <img src="{{ $item['image'] }}"
                               class="img-fluid" alt="{{ $item['title'] }}"
                               onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                        </a>
                        @if($item['type'] !== 'article')
                          <span class="a24-side-news__item__img__icon">
                            <img src="/img/desktop/{{ $item['type'] }}_type.png" alt="">
                          </span>
                        @endif
                      </div>
                    </div>
                    <div class="col-9 p-0">
                      <div class="search__item__text">
                        <h3>
                          <a href="{{ route('items.show', $item['id']) }}" class="news-listing__item__link">
                            {{ $item['title'] }}
                          </a>
                        </h3>
                      </div>
                      <div
                        class="search__item__icons d-flex justify-content-between align-items-center">
                        <div class="search__item__icons__date">
                          <p class="text-muted">
                            {{ arabicDate($item['published_at']) }}
                          </p>
                        </div>
                        <div class="search__item__icons__icon">
                          <a href="#"
                             class="btn btn-sm news-listing__item__icons__icon__twitter"
                             onClick="MyWindow=window.open('http://twitter.com/share?text={{ $item['title'] }}&url={{ route('items.show', $item['id']) }}','MyWindow','width=600,height=300'); return false;"
                             style="color:#fff">
                            <i class="fa fa-twitter " aria-hidden="true"></i>
                            غرد
                          </a>
                          <span class="search__item__icons__icon__likes mx-2">
                            <img src="/img/desktop/fire.svg" alt="">
                            {{ $item['views_count'] }}
                          </span>
                          <span class="search__item__icons__icon__commenting">
                            <img src="/img/desktop/comment-gray.svg" alt="">
                            {{ $item['comments_count'] }}
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            @empty
            <div class="search__empty text-center pt-5 mx-auto">
              <h5 class="mb-4">
                عفوا لا توجد نتائج بحث عن
                <span> "{{ request('keyword') }}" </span>
              </h5>
              <a href="{{ route('akhbaar.index') }}"> عودة الى الرئيسية </a>
            </div>
            @endforelse
            {{ $paginator->links() }}
          </div>
        </section>
        <section class="layout__sidebar pr-0">
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
  @include('layouts.desktop.footer')
@endsection

@push('js')
  <script>
    $(document).ready(function () {
      $('.pagination__lists__list__link').click(function () {
        $('.pagination__lists__list__link').removeClass("active");
        $(this).addClass("active");
      });

      $('.nav-link').click(function () {
        $('.nav-link').removeClass("active");
        $(this).addClass("active");
      });

    });
  </script>
@endpush
