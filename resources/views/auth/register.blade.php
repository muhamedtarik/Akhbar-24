<div class="tab-pane fade" id="signup-tap" role="tabpanel"
     aria-labelledby="signup-tap-tab">
  <div class="px-3">
    <div class="sso__login-area__signup">
      <p class="sso__login-area__signup--title">يمكن التسجيل عن طريق السوشيال
        ميديا</p>
      <div class="sso__login-area__signup__social">
        <ul class="sso__login-area__login__social__list">
          <li class="sso__login-area__login__social__list--item">
            <a href="#">
              <div
                class="sso__login-area__login__social__list--item--icon facebook">
                <i class="fa fa-facebook"></i>
              </div>
            </a>
          </li>
          <li class="sso__login-area__login__social__list--item">
            <a href="#">
              <div
                class="sso__login-area__login__social__list--item--icon twitter">
                <i class="fa fa-twitter"></i>
              </div>
            </a>
          </li>
          <li class="sso__login-area__login__social__list--item">
            <a href="#">
              <div
                class="sso__login-area__login__social__list--item--icon google">
                <img src="/img/desktop/google.png" alt="">
              </div>
            </a>
          </li>
        </ul>

      </div>
      <div class="sso__login-area__signup__form">
        <div class="sso__login-area__signup__form--title">
          <h5><span>أو من خلال</span></h5>
        </div>
        <div class="sso__login-area__signup__form__inputs">
          <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="row">
              <div class="col-6">
                <input type="text" class="form-control "
                       placeholder="الإسم" name="name" value="{{ old('name') }}"
                       required autocomplete="name" autofocus>
              </div>
              <div class="col-6">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                       placeholder="البريد الإلكتروني"
                       required autocomplete="email">
              </div>
              <div class="col-6">
                <input type="password"
                       class="form-control mt-2"
                       name="password"
                       placeholder="كلمة المرور"
                       required autocomplete="new-password">
              </div>
              <div class="col-6">
                <input type="password"
                       class="form-control mt-2"
                       name="password_confirmation"
                       placeholder="تأكيد كلمة المرور"
                       required autocomplete="new-password">
              </div>
            </div>

            <div class="sso__login-area__signup__form__inputs--form-check">
              <label>
                <input type="checkbox" name="check"> <span
                  class="label-text">موافق على <a href="#">الشروط</a>
                  و <a href="#">الأحكام</a></span>
              </label>
            </div>
            <button
              class="sso__login-area__signup__form__inputs--submit-btn btn mt-3"
              type="submit">تسجيل
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
