@extends('layouts.mobile.app')
@section('content')
  <div class="mobile-login">
    <div class="container">
      <div class="mobile-login__back">
        <a href="{{ url()->previous() }}"><i class="la la-arrow-right"></i></a>
      </div>
      <div class="mobile-login__social">
        <ul class="mobile-login__social__list">
          <li class="mobile-login__social__list--item">
            <a href="#">
              <div class="mobile-login__social__list--item--icon facebook">
                <i class="fa fa-facebook"></i>
              </div>
            </a>
          </li>
          <li class="mobile-login__social__list--item">
            <a href="#">
              <div class="mobile-login__social__list--item--icon twitter mx-4">
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
        <div class="mobile-login__social__argaam">
          <a href="#" class="mobile-login__social__argaam--btn">دخول باستخدام <img
              src="/img/mobile/argaam-logo.png" alt=""></a>
        </div>
      </div>
      <div class="mobile-login__form">
        <div class="mobile-login__form--title">
          <h5><span>أو من خلال</span></h5>
        </div>
        <div class="mobile-login__form__inputs">
          <form action="#">
            <input type="text" class="form-control" placeholder="البريد الإلكتروني">
            <input type="password" class="form-control mt-2" placeholder="كلمة المرور">
            <a class="mobile-login__form__inputs--forget-link mt-3" href="/mobile/forget-password">نسيت كلمة
              المرور ؟</a>
            <button class="mobile-login__form__inputs--submit-btn btn mt-3" type="submit">دخول</button>
          </form>
        </div>
      </div>

    </div>
    <footer class="mobile-login__signup">
      <p>ليس لديك حساب ؟ <a href="/mobile/sign-up">سجل الآن</a></p>
    </footer>
  </div>
@endsection
