@extends('layouts.mobile.app')
@section('content')
@include('layouts.mobile.menu')
<div id="container">
  @include('layouts.mobile.nav')

  <div class="col-12 pl-0 pr-2 mb-3">
    <h5 class="search-heading ">
      "{{ request('keyword') }}"
    </h5>
  </div>

  @forelse($items['data'] as $item)
  <div class="col-12">
    <a class="search-link" href="#">
      <div class="search  text-right">
        <div class="row">
          <div class="col-4 ">
            <div class="search__img">
              <a href="{{ route('items.show', $item['id']) }}">
                <img src="{{ $item['image'] }}" class="img-fluid" alt="{{ $item['title'] }}"
                  onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
              </a>
              <span class="search__img__icon">
                <i class="fa fa-play" aria-hidden="true"></i>
              </span>
            </div>
          </div>
          <div class="col-8 pr-0 news-content">
            <a href="{{ route('items.show', $item['id']) }}" class="news-listing__item__link">
              <span class="search__text">
                {{ $item['title'] }}
              </span>
            </a>
            <div class="search__icons d-flex justify-content-between align-items-baseline">
              <p class="search__icons__date text-muted m-0">
                {{ arabicDate($item['published_at']) }}
              </p>
              <div class="search__icons__icon">
                <span class="views-cases  ">
                  @if($item['views_count'] < 5000)
                  <span class="views-cases--grey">
                    <img src="/img/mobile/views-grey.svg" class="mb-1 " style="width:11px; height:15px" alt="">
                     {{ $item['views_count'] ?? 0 }}
                  </span>
                    @elseif($item['views_count'] >= 10000)
                    <span class="views-cases--red">
                      <img src="/img/mobile/fire.svg" class="mb-1 " style="width:11px; height:15px" alt="">
                       {{ $item['views_count'] ?? 0 }}
                    </span>
                    @else
                    <span class="views-cases--yellow">
                      <img src="/img/mobile/views-yellow.svg" class="mb-1 "style="width:11px; height:15px" alt="">
                       {{ $item['views_count'] ?? 0 }}
                    </span>
                    @endif
                </span>
                <span class="search__icons__icon__commenting text-muted mx-2">
                  <img src="/img/mobile/comments-news.png" style="width: 13px; height: 13px;">
                  {{ $item['comments_count'] }}
                </span>
             
              </div>
            </div>
          </div>
        </div>
      </div>
    </a>
  </div>
  @empty
  <div class="searchempty text-center pt-5 mx-auto">
    <h5 class="mb-4">
      عفوا لا توجد نتائج بحث عن
      <span> "{{ request('keyword') }}" </span>
    </h5>
    <a href="{{ route('akhbaar.index') }}"> عودة الى الرئيسية </a>
  </div>
  @endforelse


</div>
@endsection