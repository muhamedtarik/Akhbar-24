@extends('layouts.desktop.app')
@section('content')
  <div class="position-relative">
    @include('layouts.desktop.header')

    <div class="container">
      <div class="row bg-white position-relative">


        <div class="col-12">
          <div class="contact mb-5 pb-5">
            <div class="row">
              <div class="col-8">
                <div class="contactUs">
                  <h5 class="contactUs__heading mt-5 mb-4">اتصل بنا</h5>
                  <div class="contactUs__form p-3 rounded">
                    <form>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">معلومات الاتصال</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                               style="width:50% ;">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">الموضوع</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                               style="width: 50%;">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">الموضوع</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                  rows="3"></textarea>
                        <button class="contactUs__form__btn">تعليق</button>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="contactUs-info">
                  <h5 class="contactUs-info__heading mt-5 mb-4">تواصل معنا</h5>
                  <div class="contactUs-info__address">
                    <h5>ارسل لنا عبر البريد الالكتروني:</h5>
                    <p>akhbaar24@argaam.com</p>
                    <br>
                    <h5>فاكس:</h5>
                    <p>97143661000</p>
                    <br>
                    <h5>صندوق البريد:</h5>
                    <p>502113 دبي الامارات العربية المتحدة</p>
                    <br>
                    <p class="mb-1">للتواصل مع الشركة بخصوص الاعلانات</p>
                    <a href="#">اضغط هنا</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>


  </div>
  @include('layouts.desktop.footer')
@endsection
