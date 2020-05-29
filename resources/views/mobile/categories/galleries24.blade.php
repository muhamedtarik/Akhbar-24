@extends('layouts.mobile.app')
@section('content')
  @include('layouts.mobile.menu')
  <div id="container">
    @include('layouts.mobile.nav')
    <div class="row mx-1 mt-3">
      @foreach($category['data'] as $item)
        <div class="col-12 col-md-6 px-2">
          <a href="{{ route('items.show', $item['id']) }}" class="gallery-link">
            <div class="card shadow-sm rounded-lg border-0 mb-3">
              <div class="card__header">
                <div class="">
                  <img class="img-fluid" src="{{ $item['gallery_media'][0]['path'] }}"
                       onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                  <img class="img-fluid" src="{{ $item['gallery_media'][1]['path'] }}"
                       onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                  <span class="card__header__gallery-icon text-white rounded">
                    <i class="fa fa-picture-o mx-1" aria-hidden="true"></i>
                    {{ count($item['gallery_media']) }}
                  </span>

                </div>
                <div class="">
                  <img class="img-fluid" src="{{ $item['gallery_media'][2]['path'] }}"
                       onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                </div>
              </div>
              <div class="card__body">
                <p class="card__text">
                  {{ $item['title'] }}
                </p>
                <div class="card__meta d-flex justify-content-between">
                  <div class="card__date text-muted">
                    {{ arabicDate($item['published_at']) }}
                  </div>
                  <div class="card__social d-flex align-items-center">
                    <div class="d-flex align-items-center mx-1 views-cases">
                      @if($item['views_count'] < 5000)
                      <span class="views-cases--grey">
                        <img src="/img/mobile/views-grey.svg" class="mx-1" style="width:10px; height:14px" alt="">
                        {{ $item['views_count'] }}
                      </span>
                        @elseif($item['views_count'] >= 10000)
                        <span class="views-cases--red">
                          <img src="/img/mobile/fire.svg" class="mx-1" style="width:10px; height:14px" alt="">
                          {{ $item['views_count'] }}
                        </span>
                        @else
                        <span class="views-cases--yellow">
                          <img src="/img/mobile/views-yellow.svg" class="mx-1" style="width:10px; height:14px" alt="">
                          {{ $item['views_count'] }}
                        </span>
                    </div>
                    <div class="d-flex align-items-center mx-1 text-muted">
                      <img src="/img/mobile/comment-gray.svg" class="ml-1" alt="">
                      {{ $item['comments_count'] }}
                    </div>
                    <!--
                    <div class="d-flex align-items-center mx-1 text-muted">
                      <i class="fa fa-bookmark-o" aria-hidden="true"></i>
                    </div>
                     -->
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        @if($loop->iteration % 5 == 0)
          <div class="ad1 text-center px-3">
            <div class="container">
              <img src="/img/mobile/add1.png" class="img-fluid">
            </div>
          </div>
        @endif
      @endforeach

      <div class="col-12 justify-content-center">
        {{ $paginator->links() }}
      </div>

    </div>
  </div>
@endsection
