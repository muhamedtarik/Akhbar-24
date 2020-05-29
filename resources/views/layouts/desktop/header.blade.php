<header class="header">
  <div class="container p-0">
    <div class="header__top-nav d-flex justify-content-between align-items-center">
      <div class="header__top-nav__logos">
        <ul>
          <li>
            <a href="#">
              <img class="header__top-nav__logos--argaam" src="/img/desktop/argaam-white.png" alt="">
            </a>
          </li>
          <li>
            <a href="/">
              <img class="header__top-nav__logos--a24" src="/img/desktop/logo-white.png" alt="">
            </a>
          </li>
          <li>
            <a href="{{ route('sport.index') }}">
              <img class="header__top-nav__logos--s24" src="/img/desktop/sport24_logo.png" alt="">
            </a>
          </li>
        </ul>
      </div>
      <div class="header__top-nav__user-area d-flex align-items-center">
        <div class="header__top-nav__user-area--weather position-relative">
          <button type="button" class="weatherBtn"><img src="/img/desktop/weather.png" alt=""></button>
          <div class="weather1 shadow ">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-saudi-tab" data-toggle="pill" href="#pills-saudi" role="tab" aria-controls="pills-saudi" aria-selected="true">السعودية</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-emirates-tab" data-toggle="pill" href="#pills-emirates" role="tab" aria-controls="pills-emirates" aria-selected="false">الامارات</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-kuwait-tab" data-toggle="pill" href="#pills-kuwait" role="tab" aria-controls="pills-kuwait" aria-selected="false">الكويت</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-qatar-tab" data-toggle="pill" href="#pills-qatar" role="tab" aria-controls="pills-qatar" aria-selected="true">قطر</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-bahren-tab" data-toggle="pill" href="#pills-bahren" role="tab" aria-controls="pills-bahren" aria-selected="false">البحرين</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-oman-tab" data-toggle="pill" href="#pills-oman" role="tab" aria-controls="pills-oman" aria-selected="false">عمان</a>
              </li>
            </ul>
        
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-saudi" role="tabpanel" aria-labelledby="pills-saudi-tab">
                <div class="form-group position-relative mb-0">
                  <div class="countries-arrow">
                    <i class="las la-angle-down"></i>
                  </div>
                  <select class="form-control countries-list" id="exampleFormControlSelect1">
                    <option>الرياض</option>
                    <option>الدمام</option>
                    <option>مكة</option>
                    <option>المدينة</option>
                  </select>
                </div>
                <div class="weather-img">
                  <img src="/img/desktop/weatherimg.png" alt="weather">
                </div>
              </div>
              <div class="tab-pane fade" id="pills-emirates" role="tabpanel" aria-labelledby="pills-emirates-tab">
                <div class="form-group  position-relative mb-0">
                  <div class="countries-arrow">
                    <i class="las la-angle-down"></i>
                  </div>
                  <select class="form-control countries-list" id="exampleFormControlSelect2">
                    <option>الرياض</option>
                    <option>الدمام</option>
                    <option>مكة</option>
                    <option>المدينة</option>
                  </select>
                </div>
              <div class="weather-img">
                <img src="/img/desktop/weatherimg.png" alt="weather">
              </div>
            </div>
              <div class="tab-pane fade" id="pills-kuwait" role="tabpanel" aria-labelledby="pills-kuwait-tab">
                <div class="form-group position-relative mb-0">
                  <div class="countries-arrow">
                    <i class="las la-angle-down"></i>
                  </div>
                  <select class="form-control countries-list" id="exampleFormControlSelect13">
                    <option>الرياض</option>
                    <option>الدمام</option>
                    <option>مكة</option>
                    <option>المدينة</option>
                  </select>
                </div>
                <div class="weather-img">
                  <img src="/img/desktop/weatherimg.png" alt="weather">
                </div>
              </div>
              <div class="tab-pane fade " id="pills-qatar" role="tabpanel" aria-labelledby="pills-qatar-tab">
                <div class="form-group position-relative mb-0">
                  <div class="countries-arrow">
                    <i class="las la-angle-down"></i>
                  </div>
                  <select class="form-control countries-list" id="exampleFormControlSelect14">
                    <option>الرياض</option>
                    <option>الدمام</option>
                    <option>مكة</option>
                    <option>المدينة</option>
                  </select>
                </div>
                <div class="weather-img">
                  <img src="/img/desktop/weatherimg.png" alt="weather">
                </div>
              </div>
              <div class="tab-pane fade" id="pills-bahren" role="tabpanel" aria-labelledby="pills-bahren-tab">
                <div class="form-group position-relative mb-0">
                  <div class="countries-arrow">
                    <i class="las la-angle-down"></i>
                  </div>
                  <select class="form-control countries-list" id="exampleFormControlSelect15">
                    <option>الرياض</option>
                    <option>الدمام</option>
                    <option>مكة</option>
                    <option>المدينة</option>
                  </select>
                </div>
              <div class="weather-img">
                <img src="/img/desktop/weatherimg.png" alt="weather">
              </div>
            </div>
              <div class="tab-pane fade" id="pills-oman" role="tabpanel" aria-labelledby="pills-oman-tab">
                <div class="form-group position-relative mb-0">
                  <div class="countries-arrow">
                    <i class="las la-angle-down"></i>
                  </div>
                  <select class="form-control countries-list" id="exampleFormControlSelect16">
                    <option>الرياض</option>
                    <option>الدمام</option>
                    <option>مكة</option>
                    <option>المدينة</option>
                  </select>
                </div>
              <div class="weather-img">
                <img src="/img/desktop/weatherimg.png" alt="weather">
              </div>
            </div>
              
            </div>
          </div>
        </div>
        <div class="header__top-nav__user-area--search">
          <div class="search ">
            <form class="header__top-nav__user-area--search--search-form " method="GET" action="{{ route('search.show', ['slug' => 'title']) }}">
              <i class="search-icon fa fa-search"></i>
              <input class="hide search-input" name="keyword" placeholder="عن ماذا تبحث">
              <input class="hide" type="submit">
              <i class="hide search-cancel-icon fa fa-times"></i>
            </form>
          </div>
        </div>
        <div class="header__top-nav__user-area--login">
          @auth
            <span class="font-weight-bold text-white">{{ auth()->user()->name }}</span>
          @else
            <button type="button" data-toggle="modal" data-target="#sso">دخول</button>
          @endauth
        </div>
      </div>
    </div>
    <div class="header__center bg-white p-2">
      <div class="px-3">
        <div class="row align-items-center">
          <div class="col-3">
            <div class="header__center--logo">
              <a href="/"> <img width="150" src="/img/desktop/logo.png" alt=""></a>
            </div>
          </div>
          <div class="col-9 text-left">
            <div class="header__center--ad">
              <img src="/img/desktop/adcenter.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="header__bottom-nav d-flex justify-content-between align-items-center">
  <div class="header__bottom-nav__links">
    <ul>
      <li class="header__bottom-nav__links--logo">
        <a href="{{ route('akhbaar.index') }}"><img width="85" src="/img/desktop/logo.png" alt=""></a>
      </li>
      <li><a href="{{ route('akhbaar.index') }}">الرئيسية </a></li>
      <li>
        <a href="{{ route('categories.show', ['site' => 'akhbaar24', 'slug' => 'miscellaneous']) }}">
          منوعات
        </a>
      </li>
      <li>
        <a href="{{ route('categories.show', ['site' => 'akhbaar24', 'slug' => 'international']) }}">
          عربية وعالمية
        </a>
      </li>
      <li><a href="{{ route('categories.show', ['site' => 'akhbaar24', 'slug' => 'accidents']) }}">حوادث</a></li>
      <li>
        <a href="{{ route('categories.show', ['site' => 'akhbaar24', 'slug' => 'videos24']) }}">
          <img src="/img/desktop/video_icon.png" width="10" alt=""> فيديو 24
        </a>
      </li>
      <li>
        <a href="{{ route('categories.show', ['site' => 'akhbaar24', 'slug' => 'galleries24']) }}">
          <img src="/img/desktop/photo_icon.png" width="14" alt=""> صور 24
        </a>
      </li>
    </ul>
  </div>
  <div class="header__bottom-nav__user-area">
    <div class="header__bottom-nav__user-area--weather position-relative">
      <button type="button" class="weatherBtn-bottom"><img src="/img/desktop/weather-blue.png" alt=""></button>
      <div class="weather2 shadow ">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="pills-saudi2-tab" data-toggle="pill" href="#pills-saudi2" role="tab" aria-controls="pills-saudi2" aria-selected="true">السعودية</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-emirates2-tab" data-toggle="pill" href="#pills-emirates2" role="tab" aria-controls="pills-emirates2" aria-selected="false">الامارات</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-kuwait2-tab" data-toggle="pill" href="#pills-kuwait2" role="tab" aria-controls="pills-kuwait2" aria-selected="false">الكويت</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-qatar2-tab" data-toggle="pill" href="#pills-qatar2" role="tab" aria-controls="pills-qatar2" aria-selected="true">قطر</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-bahren2-tab" data-toggle="pill" href="#pills-bahren2" role="tab" aria-controls="pills-bahren2" aria-selected="false">البحرين</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-oman2-tab" data-toggle="pill" href="#pills-oman2" role="tab" aria-controls="pills-oman2" aria-selected="false">عمان</a>
          </li>
        </ul>
    
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-saudi2" role="tabpanel" aria-labelledby="pills-saudi2-tab">
            <div class="form-group position-relative mb-0">
              <div class="countries-arrow">
                <i class="las la-angle-down"></i>
              </div>
              <select class="form-control countries-list" id="exampleFormControlSelect7">
                <option>الرياض</option>
                <option>الدمام</option>
                <option>مكة</option>
                <option>المدينة</option>
              </select>
            </div>
            <div class="weather-img">
              <img src="/img/desktop/weatherimg.png" alt="weather">
            </div>
          </div>
          <div class="tab-pane fade" id="pills-emirates2" role="tabpanel" aria-labelledby="pills-emirates2-tab">
            <div class="form-group position-relative mb-0">
              <div class="countries-arrow">
                <i class="las la-angle-down"></i>
              </div>
              <select class="form-control countries-list" id="exampleFormControlSelect8">
                <option>الرياض</option>
                <option>الدمام</option>
                <option>مكة</option>
                <option>المدينة</option>
              </select>
            </div>
          <div class="weather-img">
            <img src="/img/desktop/weatherimg.png" alt="weather">
          </div>
        </div>
          <div class="tab-pane fade" id="pills-kuwait2" role="tabpanel" aria-labelledby="pills-kuwait2-tab">
            <div class="form-group position-relative mb-0">
              <div class="countries-arrow">
                <i class="las la-angle-down"></i>
              </div>
              <select class="form-control countries-list" id="exampleFormControlSelect9">
                <option>الرياض</option>
                <option>الدمام</option>
                <option>مكة</option>
                <option>المدينة</option>
              </select>
            </div>
            <div class="weather-img">
              <img src="/img/desktop/weatherimg.png" alt="weather">
            </div>
          </div>
          <div class="tab-pane fade " id="pills-qatar2" role="tabpanel" aria-labelledby="pills-qatar2-tab">
            <div class="form-group position-relative mb-0">
              <div class="countries-arrow">
                <i class="las la-angle-down"></i>
              </div>
              <select class="form-control countries-list" id="exampleFormControlSelect10">
                <option>الرياض</option>
                <option>الدمام</option>
                <option>مكة</option>
                <option>المدينة</option>
              </select>
            </div>
            <div class="weather-img">
              <img src="/img/desktop/weatherimg.png" alt="weather">
            </div>
          </div>
          <div class="tab-pane fade" id="pills-bahren2" role="tabpanel" aria-labelledby="pills-bahren2-tab">
            <div class="form-group position-relative mb-0">
              <div class="countries-arrow">
                <i class="las la-angle-down"></i>
              </div>
              <select class="form-control countries-list" id="exampleFormControlSelect11">
                <option>الرياض</option>
                <option>الدمام</option>
                <option>مكة</option>
                <option>المدينة</option>
              </select>
            </div>
          <div class="weather-img">
            <img src="/img/desktop/weatherimg.png" alt="weather">
          </div>
        </div>
          <div class="tab-pane fade" id="pills-oman2" role="tabpanel" aria-labelledby="pills-oman2-tab">
            <div class="form-group position-relative mb-0">
              <div class="countries-arrow">
                <i class="las la-angle-down"></i>
              </div>
              <select class="form-control countries-list" id="exampleFormControlSelect12">
                <option>الرياض</option>
                <option>الدمام</option>
                <option>مكة</option>
                <option>المدينة</option>
              </select>
            </div>
          <div class="weather-img">
            <img src="/img/desktop/weatherimg.png" alt="weather">
          </div>
        </div>
          
        </div>
      </div>
    </div>
    <div class="header__bottom-nav__user-area--search">
      <div class="bottom-search">
        <form class="header__bottom-nav__user-area--search--search-form bottom-search-form"  method="GET" action="{{ route('search.show', ['slug' => 'title']) }}">
          <i class="bottom-search-icon fa fa-search"></i>
          <input class="bottom-hide bottom-search-input" name="keyword" placeholder="عن ماذا تبحث">
          <input class="bottom-hide" type="submit" value="">
          <i class="bottom-hide bottom-search-cancel-icon fa fa-times"></i>
        </form>
      </div>
    </div>

      <div class="header__bottom-nav__user-area--login">
        @auth
          <span class="font-weight-bold text-white">{{ auth()->user()->name }}</span>
        @else
          <button type="button" data-toggle="modal" data-target="#sso">دخول</button>
        @endauth
      </div>
  </div>
</div>

@include('auth.sso')

@push('js')
  <script>
    var distance = $('.header__bottom-nav').offset().top,
      $window = $(window);
    $window.scroll(function () {
      if ($window.scrollTop() >= distance) {
        $('.header__bottom-nav__links--logo').css('display', 'inline-block');
        $('.header__bottom-nav__user-area').css('display', 'flex');
      } else {
        $('.header__bottom-nav__links--logo').css('display', 'none');
        $('.header__bottom-nav__user-area').css('display', 'none');
      }
    });

    @if(request()->has('login'))
      $('#sso').modal('show');
    @endif
  </script>
  <script>
    $(".weatherBtn").click(function(){
        $(".weather1").toggle();
        $(".weather2").hide();
    })

    $(".weatherBtn-bottom").click(function(){
      $(".weather2").toggle();
      $(".weather1").hide();
    })
  </script>
@endpush
