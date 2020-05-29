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
          <p>تم ارسال كود تغيير كلمة المرور الى البريد الالكترونى الخاص بك</p>
        </div>
      </div>
      <div class="mobile-forget-password__content--input">
        <div class="container">
          <p class="text-muted mb-1">كود التفعيل</p>
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="container text-right">
        <p class="my-2">لم تصلك الرسالة ؟ <a href="#">اعادة الارسال</a></p>
      </div>
      <div class="mobile-forget-password__content--btn">
        <div class="container">
          <button onclick="window.location.href = '/mobile/forget-password3'"
                  class="btn mobile-forget-password__content--btn--submit-btn">التالي
          </button>
        </div>
      </div>
    </div>
  </div>

@endsection
