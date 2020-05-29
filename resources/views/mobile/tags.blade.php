@extends('layouts.mobile.app')
@section('content')
@include('layouts.mobile.menu')
<div id="container">
  @include('layouts.mobile.nav')

  <div class="col-12 pl-0 pr-2 mb-3">
    <h5 class="mix-heading">
      {{ $tag }}
    </h5>
  </div>

  @forelse($items['data'] as $item)
  <div class="col-12">
    <div class="mix  text-right">
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
              <span class="mix__icons__icon__likes">
                <img src="/img/mobile/views-red.png" style="width: 11px; height: 15px;">
                {{ $item['views_count'] }}
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
  @empty
  <div class="searchempty text-center pt-5 mx-auto mb-5">
    <h5 class="mb-4">
      عفوا لا توجد كلمات مفتاحية عن
      <span> "{{ $tag }}" </span>
    </h5>
    <a href="{{ route('akhbaar.index') }}"> عودة الى الرئيسية </a>
  </div>
  @endforelse

  <div class="ad1 text-center px-3">
    <div class="container">
      <img src="/img/mobile/ad2.png" class="img-fluid">
    </div>
  </div>
  @for($i = 0 ; $i < 3 ; $i++) <div class="col-12">
    <a class="mix-link" href="#">
      <div class="mix  text-right">
        <div class="row">
          <div class="col-4">
            <div class="mix__img">
              <img src="/img/mobile/news.png">
            </div>
          </div>
          <div class="col-8 pr-0 news-content">
            <span class="mix__text">
              أوراوا يحدد قائمة محظورات نادي الهلال السعودي في نهائي دوري أبطال آسيا
            </span>
            <div class="mix__icons d-flex justify-content-between align-items-baseline">
              <p class="mix__icons__date text-muted">25 اغسطس</p>
              <div class="mix__icons__icon">
                <span class="mix__icons__icon__likes">
                  <img src="/img/mobile/views-red.png" style="width: 11px; height: 15px;">
                  500,000
                </span>
                <span class="mix__icons__icon__commenting text-muted mx-2">
                  <img src="/img/mobile/comments-news.png" style="width: 13px; height: 13px;">
                  12
                </span>
                <span class="mix__icons__icon__bookmark text-muted">
                  <i class="fa fa-bookmark-o" aria-hidden="true" style="width: 14px; height: 17px;"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </a>
</div>
@endfor

<div class="ad2 text-center px-3">
  <div class="container">
    <img src="/img/mobile/ad1.png" class="img-fluid">
  </div>

</div>

@for($i = 0 ; $i < 3 ; $i++) <div class="col-12">
  <a class="mix-link" href="#">
    <div class="mix  text-right">
      <div class="row">
        <div class="col-4">
          <div class="mix__img">
            <img src="/img/mobile/news.png">
          </div>
        </div>
        <div class="col-8 pr-0 news-content">
          <span class="mix__text">
            أوراوا يحدد قائمة محظورات نادي الهلال السعودي في نهائي دوري أبطال آسيا
          </span>
          <div class="mix__icons d-flex justify-content-between align-items-baseline">
            <p class="mix__icons__date text-muted">25 اغسطس</p>
            <div class="mix__icons__icon">
              <span class="mix__icons__icon__likes">
                <img src="/img/mobile/views-red.png" style="width: 11px; height: 15px;">
                500,000
              </span>
              <span class="mix__icons__icon__commenting text-muted mx-2">
                <img src="/img/mobile/comments-news.png" style="width: 13px; height: 13px;">
                12
              </span>
              <span class="mix__icons__icon__bookmark text-muted">
                <i class="fa fa-bookmark-o" aria-hidden="true" style="width: 14px; height: 17px;"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </a>
  </div>
  @endfor
  </div>
  @endsection