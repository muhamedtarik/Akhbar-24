@extends('layouts.mobile.app')
@section('content')
  @include('layouts.mobile.menu')
  <div id="container">

    @if($site === 'akhbaar24')
      @include('layouts.mobile.nav')
    @else
      @include('layouts.mobile.sport.nav')
    @endif

    <div class="col-12 pl-0 pr-2 mb-3">
      <h5 class="mix-heading">
        {{ $categoryName }}
      </h5>
    </div>

    @foreach($category['data'] as $item)
      <div class="col-12">
        <div class="mix text-right">
          <div class="row">
            <div class="col-4">
              <div class="mix__img">
                <a class="mix-link" href="{{ route('items.show', $item['id']) }}">
                  <img src="{{ $item['image'] }}"
                       onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                </a>
              </div>
            </div>
            <div class="col-8 pr-0 news-content">
              <a class="mix-link" href="{{ route('items.show', $item['id']) }}">
                <span class="mix__text"> {{ $item['title'] }} </span>
              </a>
              <div class="mix__icons d-flex justify-content-between align-items-baseline">
                <p class="mix__icons__date text-muted">
                  {{ arabicDate($item['published_at']) }}
                </p>
                <div class="mix__icons__icon">
                  <span class="mix__icons__icon__likes views-cases">
                      @if($item['views_count'] < 5000)
                    <span class="views-cases--grey">
                      <img src="/img/mobile/views-grey.svg" style="width: 11px; height: 15px;" alt="">
                      {{ $item['views_count'] }}
                    </span>
                      @elseif($item['views_count'] >= 10000)
                      <span class="views-cases--red">
                        <img src="/img/mobile/fire.svg" style="width: 11px; height: 15px;" alt="">
                        {{ $item['views_count'] }}
                      </span>
                      @else
                      <span class="views-cases--yellow">
                        <img src="/img/mobile/views-yellow.svg" style="width: 11px; height: 15px;" alt="">
                        {{ $item['views_count'] }}
                      </span>
                      @endif
               
                  </span>
                  <span class="mix__icons__icon__commenting text-muted mx-2">
                    <img src="/img/mobile/comments-news.png" style="width: 13px; height: 13px;">
                    {{ $item['comments_count'] }}
                  </span>
                  <!--
                  <span class="mix__icons__icon__bookmark text-muted">
                    <i class="fa fa-bookmark-o" aria-hidden="true"
                       style="width: 14px; height: 17px;"></i>
                  </span>
                -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      @if($loop->iteration % 5 == 0)
        <div class="ad1 text-center px-3">
          <div class="container">
            <img src="/img/mobile/ad2.png" class="img-fluid">
          </div>
        </div>
      @endif

    @endforeach

    <div class="col-12 justify-content-center">
      {{ $paginator->links() }}
    </div>

  </div>
@endsection
