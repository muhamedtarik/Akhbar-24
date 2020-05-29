@extends('layouts.mobile.app')
@section('content')
  <div class="mobile-forget-password">
    <div class="mobile-forget-password__nav text-center">
      <div class="container">
        <h3>نسيت كلمة المرور</h3>
        <div class="mobile-forget-password__nav--back">
          <a href="{{ url()->previous() }}"><i class="la la-arrow-right"></i></a>
        </div>
      </div>
    </div>
    <div class="mobile-forget-password__content text-center">
      <div class="mobile-forget-password__content--img">
        <div class="container">
          <img src="/img/mobile/forget-bg.png" alt="">
        </div>
      </div>
      <div class="mobile-forget-password__content--text">
        <div class="container">
          <p>يرجى ادخال بريدك الالكترونى لكى يتم ارسال كود تغيير كلمة المرور</p>
        </div>
      </div>
      <div class="mobile-forget-password__content--input">
        <div class="container">
          <input type="text" class="form-control" placeholder="البريد الإلكتروني">
        </div>
      </div>
      <div class="mobile-forget-password__content--btn">
        <div class="container">
          <button onclick="window.location.href = '/mobile/forget-password2'"
                  class="btn mobile-forget-password__content--btn--submit-btn">إرسال
          </button>
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection
