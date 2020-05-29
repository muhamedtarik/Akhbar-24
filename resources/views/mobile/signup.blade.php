@extends('layouts.mobile.app')
@section('content')
  <div class="mobile-signup">
    <div class="container">
      <div class="mobile-signup__header text-center">
        <img class="mobile-signup__header--logo" src="/img/mobile/logo.png" alt="">
        <div class="mobile-signup__header--back">
          <a href="{{ url()->previous() }}"><i class="la la-arrow-right"></i></a>
        </div>
      </div>
      <div class="mobile-signup__body mt-5">
        <div class="mobile-signup__body--title text-center">
          <h3>تسجيل</h3>
        </div>
        <div class="mobile-signup__body__social">
          <div class="mobile-signup__body__social--title">
            <h5><span>سجل عن طريق السوشيال ميديا</span></h5>
          </div>
          <ul class="mobile-signup__body__social__list">
            <li class="mobile-signup__body__social__list--item">
              <a href="#">
                <div class="mobile-signup__body__social__list--item--icon facebook">
                  <i class="fa fa-facebook"></i>
                </div>
              </a>
            </li>
            <li class="mobile-signup__body__social__list--item mx-4">
              <a href="#">
                <div class="mobile-signup__body__social__list--item--icon twitter">
                  <i class="fa fa-twitter"></i>
                </div>
              </a>
            </li>

              <!--
          <li class="mobile-login__social__list--item">
            <a href="#">
              <div class="mobile-login__social__list--item--icon snapchat">
                <i class="fa fa-snapchat-ghost"></i>
              </div>
            </a>
          </li>

          <li class="mobile-login__social__list--item">
            <a href="#">
              <div class="mobile-login__social__list--item--icon apple">
                <i class="fa fa-apple"></i>
              </div>
            </a>
          </li>
        -->

          <li class="mobile-login__social__list--item">
            <a href="#">
              <div class="mobile-login__social__list--item--icon google">
                <img src="/img/mobile/google.png" alt="">
              </div>
            </a>
          </li>
          </ul>
          <div class="mobile-signup__body__social--or">
            <h5><span>أو</span></h5>
          </div>
          <div class="mobile-signup__body__social__form__inputs">
            <form action="#">
              <input type="text" class="form-control" placeholder="الإسم بالكامل">
              <input type="text" class="form-control mt-2" placeholder="البريد الإلكتروني">
              <input type="password" class="form-control mt-2" placeholder="كلمة المرور">
              <input type="password" class="form-control mt-2" placeholder="تأكيد كلمة المرور">
              <div class="mobile-signup__body__social__form__inputs--form-check">
                <label>
                  <input type="checkbox" name="check"> <span class="label-text">موافق على <a href="#">الشروط</a>
                    و <a href="#">الأحكام</a></span>
                </label>
              </div>
              <button onclick="window.location.href = '/mobile/activate-account'"
                      class="mobile-login__form__inputs--submit-btn btn mt-3">تسجيل
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
