@extends('layouts.desktop.app')
@section('content')
  <div class="position-relative">
    {{-- @include('layouts.desktop.header') --}}

    <div class="container">
      <div class="row">
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
          <div class="row bg-white px-5">
            <div class="col-6 pr-5 my-5">
              <div class="activeAccount mb-5">
                <h4>تفعيل الحساب</h4>
                <p class="text-muted">تم ارسال كود تغيير كلمة المرور الى البريد الالكترونى الخاص بك</p>
                <br>
                <div class="form-group">
                  <label for="exampleFormControlInput1" class="text-muted">كود التفعيل</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1"
                         style="width:65% ;">
                </div>

                <h5>لم تصلك رسالة التفعيل ؟ <span>اعادة الارسال</span></h5>
                <br>
                <button>ارسل</button>
              </div>
            </div>
            <div class="col-6 text-center pl-5 mt-5 pt-4">
              <img src="/img/desktop/changePassword.png" class="img-fluid" style="width: 50%;">
            </div>
          </div>
        </div>
      </div>
    </div>
    </main>


  </div>
  @include('layouts.desktop.footer')
@endsection
