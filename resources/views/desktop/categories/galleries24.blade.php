@extends('layouts.desktop.app')
@section('content')
  <div class="position-relative">
    @include('layouts.desktop.header')

    <div class="container pb-5 bg-white">
      <div class="row">
        <section class="layout__body mt-3 pl-4">
          <div class="news-heading mt-1 mb-3">
            <h5>أحدث الصور</h5>
          </div>

          <div class="gallery px-1">
            <div class="row">
              @foreach($category['data'] as $item)
                <div class="col-6 px-2 pb-1">
                  <div class="gallery__item mb-3">
                    <a href="{{ route('items.show', $item['id']) }}" class="gallery__item__link">
                      <div class="card shadow-sm rounded-lg border-0">
                        <div class="card__header">
                          <div class="">
                            <img class="img-fluid"
                                 src="{{ $item['gallery_media'][0]['path'] }}" onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                            <img class="img-fluid"
                                 src="{{ $item['gallery_media'][1]['path'] }}" onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                            <span class="card__header__gallery-icon text-white rounded">
                              <i class="fa fa-picture-o mx-1" aria-hidden="true"></i>
                              {{ count($item['gallery_media']) }}
                            </span>
                          </div>
                          <div class="">
                            <img class="img-fluid"
                                 src="{{ $item['gallery_media'][2]['path'] }}" onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                          </div>
                        </div>
                        <div class="card__body">
                          <a href="{{ route('items.show', $item['id']) }}" class="gallery__item__link">
                            <p class="card__text">
                              {{ $item['title'] }}
                            </p>
                          </a>
                          <div class="card__meta d-flex justify-content-between">
                            <div class="card__date text-muted">
                              {{ arabicDate($item['published_at']) }}
                            </div>
                            <div class="card__social d-flex align-items-center">
                              <div class="d-flex align-items-center mx-2">
                                <div class="views-cases gallerylist">
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
                              
                              </div>
                              <div class="d-flex align-items-center mx-2 text-muted">
                                <img src="/img/desktop/comment-gray.svg" class="ml-1">
                                {{ $item['comments_count'] }}
                              </div>
                            </div>
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
          @include('desktop.partials._sidebar-most-viewed-galleries')

          <div class="ad-side my-4">
            <a href="#">
              <img src="/img/desktop/adside.png" alt="">
            </a>
          </div>

          @include('desktop.partials._sidebar-featured-videos')
        </section>

      </div>
    </div>
  </div>
  @include('layouts.desktop.footer')
@endsection
