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
      <div class="mobile-forget-password__content--input">
        <div class="container">
          <p class="text-muted text-right">يرجى ادخال كلمة المرور الجديدة</p>
          <input type="text" class="form-control" placeholder="كلمة المرور الجديدة">
          <input type="text" class="form-control mt-2" placeholder=" إعادة كلمة المرور الجديدة">
        </div>
      </div>

      <div class="mobile-forget-password__content--btn">
        <div class="container">
          <button type="submit" class="btn mobile-forget-password__content--btn--submit-btn"
                  data-toggle="modal" data-target="#confirm-new-password">حفظ التغييرات
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="confirm-succes modal fade" id="confirm-new-password" tabindex="-1" role="dialog"
       aria-labelledby="confirm-new-password" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <div class="container">
            <div class="confirm-succes--icon">
              <i class="la la-check"></i>
            </div>
            <div class="confirm-succes--text mt-3">
              <p>تم تغيير كلمة المرور بنجاح</p>
            </div>
            <div class="confirm-succes--btn">
              <button onclick="window.location.href = '/mobile/login'" class="btn">تم</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
