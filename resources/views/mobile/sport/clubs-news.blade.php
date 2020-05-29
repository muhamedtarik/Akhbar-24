@extends('layouts.mobile.app')
@section('content')
  @include('layouts.mobile.menu')
  <div id="container">
    @include('layouts.mobile.nav')


    <div class="col-12  pl-0 pr-2 mb-3">
      <h5 class="clubs-news__heading">
        {{ $club }}
      </h5>
    </div>

    @forelse($items['data'] as $item)
      <div class="col-12">
        <a class="clubs-news-link" href="#">
          <div class="clubs-news text-right">
            <div class="row">
              <div class="col-4 p-0">
                <div class="clubs-news__img">
                  <a href="{{ route('items.show', $item['id']) }}">
                    <img src="{{ $item['image'] }}" class="img-fluid" width="102" height="96"
                          onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                  </a>
                  <span class="clubs-news__img__icon">
                    <i class="fa fa-play" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
              <div class="col-8 px-1 pb-0 mt-3">
                <a class="mix-link" href="{{ route('items.show', $item['id']) }}">
                  <span class="clubs-news__text"> {{ $item['title'] }} </span>
                </a>
                <div class="clubs-news__icons d-flex justify-content-between align-items-baseline">
                  <p class="clubs-news__icons__date text-muted">
                    {{ arabicDate($item['published_at']) }}
                  </p>
                  <div class="clubs-news__icons__icon">
                    <span class="clubs-news__icons__icon__likes">
                      <img src="/img/mobile/views-red.png" style="width: 11px; height: 15px;">
                      {{ $item['views_count'] }}
                    </span>
                    <span class="clubs-news__icons__icon__commenting text-muted mx-2">
                      <img src="/img/mobile/comments-news.png" style="width: 13px; height: 13px;">
                      {{ $item['comments_count'] }}
                    </span>
                    <span class="clubs-news__icons__icon__bookmark  text-muted">
                      <i class="fa fa-bookmark-o" aria-hidden="true"
                        style="width: 14px; height: 17px;"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>

      @if($loop->iteration % 5 == 0)
        <div class="ad1 text-center px-3">
          <div class="container">
            <img src="/img/mobile/ad2.png" class="img-fluid">
          </div>
        </div>
      @endif

    @empty

    <div class="searchempty text-center pt-5 mx-auto">
      <h5 class="mb-4">
        عفوا لا توجد نتائج عن
        <span> "{{ $club }}" </span>
      </h5>
      <a class="mb-4" href="{{ route('sport.index') }}"> عودة الى الرئيسية </a>
    </div>

    @endforelse

    <div class="col-12 justify-content-center">
      {{ $paginator->links() }}
    </div>


  </div>
@endsection
