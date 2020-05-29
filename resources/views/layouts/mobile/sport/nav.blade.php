<nav class="mobile-nav sticky-top">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <div class="mobile-nav__menu">
        <button class="mobile-nav__menu__btn menu-btn"><img src="/img/mobile/menu.png" alt=""></button>
      </div>

      <div class="mobile-nav__logo">
        <a href="/" class="mobile-nav__logo__img"><img src="/img/mobile/sport_logo.png" alt=""></a>
      </div>
      <div class="mobile-nav__search">
        <button class="mobile-nav__search__btn" data-toggle="modal"
                data-target="#search-modal"><i class="la la-search"></i></button>
      </div>
    </div>
  </div>
</nav>
<div class="search-modal modal animated fadeIn" id="search-modal" tabindex="-1"
     role="dialog" aria-labelledby="search-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-header--times">
          <a data-dismiss="modal"><i class="la la-times"></i></a>
        </div>
        <input class="form-control" placeholder="البحث" type="text" name="search">
      </div>
      <div class="modal-body">
        <div class="modal-body__results">
          <p class="text-muted">الوسوم الاكثر نشاط اخر 24 ساعة</p>
          <ul>
            <li><a href="#"> التحالف العربي</a></li>
            <li><a href="#"> القوات الخاصة </a></li>
            <li><a href="#">العقيد تركي المالكي</a></li>
            <li><a href="#">السعوديه</a></li>
            <li><a href="#">كاس العالم</a></li>
            <li><a href="#">المؤتمر الاقتصادى</a></li>
            <li><a href="#">وزارة التجارة</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@push('js')
  <script>
    //     $(document).ready(function(){
    //     $(".mobile-nav__search__btn").click(function(){
    //         $(".search-box").slideToggle();
    //         $('.mobile-nav__search__btn i').toggleClass("la-search la-times");

    //     });
    // });
  </script>
@endpush
