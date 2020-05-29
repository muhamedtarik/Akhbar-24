@extends('layouts.mobile.app')
@section('content')
  @include('layouts.mobile.menu')
  <div id="container">

    @if($site === 'akhbaar24')
      @include('layouts.mobile.nav')
    @else
      @include('layouts.mobile.sport.nav')
    @endif

    <div class="mobile-video24 my-2">
      <div class="row mx-1">
        @foreach($category['data'] as $item)
          <div class="col-12 col-md-6 px-2">
            <div class="mobile-video24__item mt-2">
              <a href="{{ route('items.show', $item['id']) }}">
                <img class="mobile-video24__item--img"
                     src="{{ $item['image'] }}"
                     alt="{{ $item['title'] }}"
                     onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                <ul class="mobile-video24__item--stats">
                  <li class="mobile-video24__item--stats--stat">
                    <img class="mobile-video24__item--stats--stat--views-icon"
                         src="/img/mobile/views-white.png" alt="">
                    {{ $item['views_count'] }}
                  </li>
                  <li class="mobile-video24__item--stats--stat">
                    <img class="mobile-video24__item--stats--stat--comments-icon"
                         src="/img/mobile/comments.png" alt="">
                    {{ $item['comments_count'] }}
                  </li>
                </ul>
                <div class="mobile-video24__item--icon">
                  <i class="fa fa-play"></i>
                </div>
                <div class="mobile-video24__item--text">
                  <h3> {{ $item['title'] }} </h3>
                </div>
              </a>
            </div>
          </div>

          @if($loop->iteration % 5 == 0)
            <div class="ad1 text-center px-3 my-2">
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
    </div>
  </div>
@endsection
