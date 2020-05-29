@extends('layouts.mobile.app')
@section('content')
  <div class="mobile-edit-profile">
    <div class="mobile-edit-profile__nav text-center">
      <div class="container">
        <h3>تعديل الملف الشخصي</h3>
        <div class="mobile-edit-profile__nav--back">
          <a href="{{ url()->previous() }}"><i class="la la-arrow-right"></i></a>
        </div>
      </div>
    </div>
    <form action="">
      <div class="mobile-edit-profile__body text-center">
        <div class="container">
          <div class="col-12">
            <div class="mobile-edit-profile__body__edit-img">
              <img src="/img/mobile/avatar.png" alt="">
              <button type="button" class="btn" data-toggle="modal" data-target="#change-img"><i
                  class="la la-pen"></i></button>
            </div>
            <div class="mobile-edit-profile__body__inputs">
              <input type="text" class="form-control" value="عبد الرحمن عبد الفتاح">
              <input type="text" class="form-control mt-2" placeholder="البريد الإلكتروني">
              <a href="/mobile/forget-password" class="d-block text-right mt-2"><i class="la la-lock"></i>
                نسيت كلمة المرور</a>
            </div>
          </div>
        </div>
      </div>
      <div class="mobile-edit-profile--btn">
        <div class="container">
          <button type="button" class="btn mobile-edit-profile--btn--submit-btn" data-toggle="modal"
                  data-target="#chnages-saved">حفظ التغييرات
          </button>
        </div>
      </div>
    </form>
  </div>
  <div class="confirm-succes modal fade" id="chnages-saved" tabindex="-1" role="dialog"
       aria-labelledby="chnages-saved"
       aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="container">
            <div class="confirm-succes--icon">
              <i class="la la-check"></i>
            </div>
            <div class="confirm-succes--text mt-3">
              <p>تم حفظ التغييرات</p>
            </div>
            <div class="confirm-succes--btn">
              <button onclick="window.location.href = '/mobile'" class="btn">تم</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="change-img modal fade" id="change-img" tabindex="-1" role="dialog" aria-labelledby="change-img"
       aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3>تغيير الصورة الشخصية</h3>
        </div>
        <div class="modal-body">
          <div class="change-img__input">
            <div class="change-img__input__wrap">
              <label class="change-img__input__wrap--new-button" for="upload"> <i class="la la-plus"></i>
                من
                الجوال</label>
              <input class="change-img__input__wrap---upload" id="upload" type="file">
            </div>
          </div>
          <div class="change-img__avatars mt-2">
            <div class="d-flex justify-content-between">
              <a href="#">
                <img width="65" src="/img/mobile/avatar1.png" alt="">
              </a>
              <a href="#">
                <img width="65" src="/img/mobile/avatar2.png" alt="">
              </a>
              <a href="#">
                <img width="65" src="/img/mobile/avatar3.png" alt="">
              </a>
              <a href="#">
                <img width="65" src="/img/mobile/avatar4.png" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal">موافق</button>
        </div>
      </div>
    </div>
  </div>
@endsection
