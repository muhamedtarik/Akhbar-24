<div class="tab-pane fade show active" id="login-tab" role="tabpanel"
     aria-labelledby="login-tab-tab">
  <div class="px-3">
    <div class="sso__login-area__login">
      <p class="sso__login-area__login--title">دخول عن طريق السوشيال ميديا</p>
      <div class="sso__login-area__login__social">
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
      <div class="sso__login-area__login__form">
        <div class="sso__login-area__login__form--title">
          <h5><span>أو من خلال</span></h5>
        </div>
        <div class="sso__login-area__login__form__inputs">
          <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="email" class="form-control" name="email"
                   placeholder="البريد الإلكتروني" value="{{ old('email') }}" autofocus autocomplete="email" required>
            <input type="password" class="form-control mt-2" name="password"
                   placeholder="كلمة المرور" required autocomplete="current-password">
            <a class="sso__login-area__login__form__inputs--forget-link mt-3"
               href="/mobile/forget-password">نسيت كلمة المرور ؟</a>
            <button
              class="sso__login-area__login__form__inputs--submit-btn btn mt-3"
              type="submit">دخول
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
