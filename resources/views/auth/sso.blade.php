<div class="sso modal fade" id="sso" tabindex="-1" role="dialog" aria-labelledby="sso" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body py-0">
        <div class="row">
          <div class="col-4 p-0">
            <div class="sso__argaam-area">
              <h3> يمكنك الدخول عن طريق </h3>
              <img class="sso__argaam-area--main-logo" src="/img/desktop/argaam.png" width="100" alt="">
              <div class="sso__argaam-area--btn">
                <a href="#">دخول باستخدام <img src="/img/desktop/argaam-white.png" alt=""></a>
              </div>
            </div>
          </div>
          <div class="col-8 p-0">
            <div class="sso__login-area">
              <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="login-tab-tab" data-toggle="tab"
                     href="#login-tab" role="tab" aria-controls="login-tab"
                     aria-selected="true">دخول</a>
                  <a class="nav-item nav-link" id="signup-tap-tab" data-toggle="tab"
                     href="#signup-tap" role="tab" aria-controls="signup-tap"
                     aria-selected="false">تسجيل</a>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                @include('auth.login')
                @include('auth.register')
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
