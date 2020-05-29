@extends('layouts.mobile.app')
@section('content')
  <div class="mobile-forget-password">
    <div class="mobile-forget-password__nav text-center">
      <div class="container">
        <h3>تفعيل الحساب</h3>
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
          <p>تم ارسال كود التفعيل الى البريد الالكترونى الخاص بك</p>
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
          <button class="btn mobile-forget-password__content--btn--submit-btn" data-toggle="modal"
                  data-target="#activate-success">تفعيل
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="confirm-succes modal fade" id="activate-success" tabindex="-1" role="dialog"
       aria-labelledby="activate-success" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <div class="container">
            <div class="confirm-succes--icon text-center">
              <i class="la la-check"></i>
            </div>
            <div class="confirm-succes--text mt-3">
              <p>تم تفعيل حسابك بنجاح </p>
            </div>
            <div class="confirm-succes--btn">
              <button onclick="window.location.href = '/mobile'" class="btn">تم</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
