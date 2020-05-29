<header class="headers24">
  <div class="container p-0">
    <div class="headers24__top-nav d-flex justify-content-between align-items-center">
      <div class="headers24__top-nav__logos">
        <ul>
          <li>
            <a href="#">
              <img class="headers24__top-nav__logos--argaam" src="/img/desktop/argaam-white.png" alt="">
            </a>
          </li>
          <li>
            <a href="/">
              <img class="headers24__top-nav__logos--a24" src="/img/desktop/logo-white.png" alt="">
            </a>
          </li>
          <li>
            <a href="{{ route('sport.index') }}">
              <img class="headers24__top-nav__logos--s24" src="/img/desktop/sport24_logo.png" alt="">
            </a>
          </li>
        </ul>
      </div>
      <div class="headers24__top-nav__user-area d-flex align-items-center">
        <div class="headers24__top-nav__user-area--weather">
          <button type="button"><img src="/img/desktop/weather.png" alt=""></button>
        </div>
        <div class="headers24__top-nav__user-area--search">
          <div class="S24-search">
            <form class="headers24__top-nav__user-area--search--search-form">
              <i class="S24-search-icon fa fa-search"></i>
              <input class="S24-hide S24-search-input" placeholder="عن ماذا تبحث">
              <input class="S24-hide" type="submit" value="">
              <i class="S24-hide S24-search-cancel-icon fa fa-times"></i>
            </form>
          </div>
        </div>
        <div class="headers24__top-nav__user-area--login">
          @auth
            <span class="font-weight-bold text-white">{{ auth()->user()->name }}</span>
          @else
            <button type="button" data-toggle="modal" data-target="#sso">دخول</button>
          @endauth
        </div>
      </div>
    </div>
    <div class="headers24__center px-1 pt-1">
      <div class="px-3">
        <div class="row align-items-center p-2">
          <div class="col-3">
            <div class="headers24__center--logo">
              <a href="/s24"> <img width="150" src="/img/desktop/sport24_logo.png" alt=""></a>
            </div>
          </div>
          <div class="col-9 text-left">
            <div class="headers24__center--ad">
              <img src="/img/desktop/adcenter.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="headers24__bottom-nav">
  <div class="headers24__bottom-nav__layer d-flex justify-content-between">
    <div class="headers24__bottom-nav__layer__links">
      <ul>
        <li class="headers24__bottom-nav__layer__links--logo">
          <a href="{{ route('sport.index') }}">
            <img width="85" src="/img/desktop/sport_logo2.png" alt="">
          </a>
        </li>
        <li><a href="{{ route('sport.index') }}">الرئيسية </a></li>
        <li><a href="#teams">ترتيب الفرق</a></li>
        <li class="hasDropDown"><a href="#">الاندية <i class="fa fa-angle-down" aria-hidden="true"></i></a>
          <div class="headers24__bottom-nav__layer__links__dropdown">
            <ul>
              <li><a href="#">نادي النصر</a></li>
              <li><a href="#">نادي الهلال</a></li>
              <li><a href="#">نادي الإتحاد</a></li>
              <li><a href="#">نادي الأهلي</a></li>
              <li><a href="#">نادي الشباب</a></li>
            </ul>
          </div>
        </li>
        <li>
          <a href="{{ route('categories.show', ['site' => 'sport24', 'slug' => 'goals']) }}">أهداف</a>
        </li>
        <li>
          <a href="{{ route('categories.show', ['site' => 'sport24', 'slug' => 'clips']) }}">أحدث المقاطع</a>
        </li>
      </ul>

    </div>
    <div class="headers24__bottom-nav__layer__user-area">
      <div class="headers24__bottom-nav__layer__user-area--weather">
        <button type="button"><img src="/img/desktop/weather.png" alt=""></button>
      </div>
      <div class="headers24__bottom-nav__layer__user-area--search">
        <div class="S24Bottom-search ">
          <form class="headers24__bottom-nav__layer__user-area--search--search-form">
            <i class="S24Bottom-search-icon fa fa-search"></i>
            <input class="S24Bottom-hide S24Bottom-search-input" placeholder="عن ماذا تبحث">
            <input class="S24Bottom-hide" type="submit" value="">
            <i class="S24Bottom-hide S24Bottom-search-cancel-icon fa fa-times"></i>
          </form>
        </div>
      </div>
      <div class="headers24__bottom-nav__layer__user-area--login">
        @auth
          <span class="font-weight-bold text-white">{{ auth()->user()->name }}</span>
        @else
          <button type="button" data-toggle="modal" data-target="#sso">دخول</button>
        @endauth
      </div>
    </div>
  </div>
</div>

@include('auth.sso')

@push('js')
  <script>
    $(document).ready(function () {
      var distanceS24 = $('.headers24__bottom-nav');
      var bottomNav = distanceS24.offset().top,
        $window = $(window);
      $window.scroll(function () {
        if ($window.scrollTop() >= bottomNav) {
          $('.headers24__bottom-nav__layer').css('background-color', '#000000');
          $('.headers24__bottom-nav__layer__links--logo').css('display', 'inline-block');
          $('.headers24__bottom-nav__layer__user-area').css('display', 'flex');
        } else {
          $('.headers24__bottom-nav__layer').css('background-color', 'rgba(0, 0, 0, 0.6)');
          $('.headers24__bottom-nav__layer__links--logo').css('display', 'none');
          $('.headers24__bottom-nav__layer__user-area').css('display', 'none');
        }
      });


// ! S24 Top Nav Expandable Search Box
      var S24searchField = $('.S24-search');
      var S24searchInput = $('.S24-search-input');
      var S24searchIcon = $('.S24-search-icon');
      var S24cancelIcon = $('.S24-search-cancel-icon');
      var S24searchOutput = $('.S24-search-output');
      var S24searchForm = $('.S24-search-form');

      function S24openSearch() {
        S24searchField.addClass('S24-search-open');
        S24searchInput.removeClass("S24-hide").focus();
        S24cancelIcon.removeClass("S24-hide");
      }

      function S24closeSearch() {
        S24searchField.removeClass('S24-search-open');
        S24searchInput.addClass("S24-hide");
        S24cancelIcon.addClass("S24-hide");
      }

      function S24doSearch() {
        S24searchOutput.text(S24searchInput.val());
        S24searchOutput.removeClass("S24-hide");
      }

      S24searchIcon.on('click', function () {
        if (!S24searchField.hasClass('S24-search-open')) {
          S24openSearch();
        } else {
          S24doSearch();
        }
      });
      S24searchInput.on('focusout', function () {
        if (S24searchInput.val().length === 0) {
          S24closeSearch();
        }
      });
      S24cancelIcon.on('click', function () {
        if (S24searchInput.val().length !== 0) {
          S24searchInput.val("").focus();
          S24searchOutput.text('');
        } else {
          S24closeSearch();
        }
      });
      S24searchForm.on('submit', function (e) {
        e.preventDefault();
        S24doSearch();
      });

// ! S24 Top Nav Expandable Search Box
      var S24BottomsearchField = $('.S24Bottom-search');
      var S24BottomsearchInput = $('.S24Bottom-search-input');
      var S24BottomsearchIcon = $('.S24Bottom-search-icon');
      var S24BottomcancelIcon = $('.S24Bottom-search-cancel-icon');
      var S24BottomsearchOutput = $('.S24Bottom-search-output');
      var S24BottomsearchForm = $('.S24Bottom-search-form');

      function S24BottomopenSearch() {
        S24BottomsearchField.addClass('S24Bottom-search-open');
        S24BottomsearchInput.removeClass("S24Bottom-hide").focus();
        S24BottomcancelIcon.removeClass("S24Bottom-hide");
      }

      function S24BottomcloseSearch() {
        S24BottomsearchField.removeClass('S24Bottom-search-open');
        S24BottomsearchInput.addClass("S24Bottom-hide");
        S24BottomcancelIcon.addClass("S24Bottom-hide");
      }

      function S24BottomdoSearch() {
        S24BottomsearchOutput.text(S24BottomsearchInput.val());
        S24BottomsearchOutput.removeClass("S24Bottom-hide");
      }

      S24BottomsearchIcon.on('click', function () {
        if (!S24BottomsearchField.hasClass('S24Bottom-search-open')) {
          S24BottomopenSearch();
        } else {
          S24BottomdoSearch();
        }
      });
      S24BottomsearchInput.on('focusout', function () {
        if (S24BottomsearchInput.val().length === 0) {
          S24BottomcloseSearch();
        }
      });
      S24BottomcancelIcon.on('click', function () {
        if (S24BottomsearchInput.val().length !== 0) {
          S24BottomsearchInput.val("").focus();
          S24BottomsearchOutput.text('');
        } else {
          S24BottomcloseSearch();
        }
      });
      S24BottomsearchForm.on('submit', function (e) {
        e.preventDefault();
        S24BottomdoSearch();
      });
    });

  </script>

  <script>
    $(document).ready(function () {
      $(".hasDropDown").hover(function () {
          $('.headers24__bottom-nav__layer__links__dropdown').stop(true, true).slideDown('medium');
        },
        function () {
          $('.headers24__bottom-nav__layer__links__dropdown').stop(true, true).slideUp('medium');
        }
      );
    });
  </script>
@endpush
