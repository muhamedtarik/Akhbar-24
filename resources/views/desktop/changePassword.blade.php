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
                <h4>تغير كلمة المرور</h4>
                <br>
                <div class="form-group">
                  <input type="email" class="form-control" id="exampleFormControlInput1"
                         style="width:85% ; font-weight:bold" placeholder="كلمة المرور القديمة">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="exampleFormControlInput1"
                         style="width:85% ;" placeholder="كلمة المرور الجديدة">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="exampleFormControlInput1"
                         style="width:85% ;" placeholder="تاكيد كلمة المرور الجدبدة">
                </div>
                <br>
                <button>ارسل</button>
              </div>
            </div>
            <div class="col-6 text-center pl-5 mt-5 pt-4">
              <img src="/img/desktop/changePassword2.png" class="img-fluid" style="width: 50%;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('layouts.desktop.footer')
@endsection


