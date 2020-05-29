@php
  $layout = Jenssegers\Agent\Facades\Agent::isDesktop() ? 'desktop' : 'mobile'
@endphp

@extends("layouts.${layout}.app")

@section('content')
  @if($layout == 'desktop')
    <div class="position-relative">
      @include('layouts.desktop.header')
      <div class="container py-5 bg-white">
        <div class="errorPage d-flex align-items-end justify-content-center my-4">
          <a href="{{ url()->previous() }}">عودة الي الصفحة السابقة</a>
        </div>
      </div>
    </div>
    @include('layouts.desktop.footer')

  @else
    @include('layouts.mobile.menu')

    <div id="container">
      @include('layouts.mobile.nav')
      <div class="error text-center pt-5 mx-auto">
        <h5 class="mb-4">
          الصفحة التى تبحث عنها غير موجودة
        </h5>
        <a href="{{ url()->previous() }}">عودة الي الصفحة السابقة</a>
      </div>
    </div>
  @endif
@endsection

