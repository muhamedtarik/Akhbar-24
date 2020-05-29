@extends('layouts.desktop.app')
@section('content')
  <div class="position-relative">
    {{-- @include('layouts.desktop.header') --}}

    <div class="container">
      <div class="row bg-white">
        <div class="col-12 p-0">
          <div class="nav-change">
            <div class="nav-change__logo text-left">
              <img src="/img/desktop/navchange.png" class="img-fluid" style="width:152px ; height: 47px;">
            </div>
            <div class="nav-change__back text-left">
              <i class="las la-arrow-left"></i>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="editProfile my-5">
            <div class="editProfile__img text-center mb-5">
              <img src="/img/desktop/editprofile.png" style="width: 120px; height: 120px;"
                   class="rounded-circle">

              <a data-toggle="modal" data-target="#change-img">
                <i class="fa fa-pencil" aria-hidden="true"></i>
              </a>

            </div>
            <div class="form-group">
              <input type="name" class="form-control mx-auto" id="exampleFormControlInput1"
                     style="width:40% ; font-weight:bold" value="Ahmed Ali">
            </div>
            <div class="form-group">
              <input type="email" class="form-control mx-auto" id="exampleFormControlInput1"
                     style="width:40% ;" placeholder="البريد الالكتروني">
            </div>
            <div class="editProfile__forget mx-auto">
              <i class="fa fa-lock" aria-hidden="true"></i>
              تغيير كلمة المرور
            </div>
            <br>
            <div class="text-center">
              <button>حفظ التغييرات</button>
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
                الجهاز</label>
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
  @include('layouts.desktop.footer')
@endsection
