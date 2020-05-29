<nav class="mobile-menu a24menu a24menu-right">
  <!--[To make spicefic link active when open the menu] -> data-focus="#first-link" -->
  <div class="shadoww"></div>
  <div class="a24menu-content">
    <div class="mobile-menu__user-area d-flex justify-content-start align-items-center">
      <div class="mobile-menu__user-area--img">
        <img src="/img/mobile/avatar.png" alt="">
      </div>
      <div class="mobile-menu__user-area--logout">
        <a href="/mobile/login"> <img src="/img/mobile/logout.png"/> تسجيل خروج</a>
      </div>
    </div>
    <div class="mobile-menu__username mt-3">
      <div class="mobile-menu__username--name">
        <h2>عبد الرحمن عبد الفتاح</h2>
      </div>
      <div class="mobile-menu__username--edit">
        <a href="/mobile/edit-profile"> تعديل الملف الشخصي</a>
      </div>
    </div>

    <ul class="mobile-menu__list">
      <li class="mobile-menu__list__list-item a24menu-link">
        <a class="mobile-menu__list__list-item--link" href="{{ route('akhbaar.index') }}">
          <img src="/img/mobile/home.png" alt="">
          الرئيسية
        </a>
      </li>
      <li id="submenu" class="mobile-menu__list__list-item a24menu-submenu a24menu-submenu-closed">
        <a class="mobile-menu__list__list-item--link" href="#" >
          <img src="/img/mobile/sport24.png" alt="">
          سبورت
        </a>
        <ul>
          <li class="mobile-menu__list__list-item--submenu a24menu-link">
            <a href="{{ route('sport.index') }}">اخبار سبورت</a>
          </li>

          <li class="mobile-menu__list__list-item--submenu a24menu-link">
            <a href="{{ route('mobile.sport.matches') }}">جدول المباريات</a>
          </li>

          <li class="mobile-menu__list__list-item--submenu a24menu-link">
            <a href="/mobile/teams">ترتيب الفرق</a>
          </li>

          <li class="mobile-menu__list__list-item--submenu a24menu-link">
            <a href="{{ route('categories.show', ['site' => 'sport24', 'slug' => 'goals']) }}">اهداف</a>
          </li>

          <li class="mobile-menu__list__list-item--submenu a24menu-link">
            <a href="{{ route('categories.show', ['site' => 'sport24', 'slug' => 'clips']) }}">احدث المقاطع</a>
          </li>

          <li class="mobile-menu__list__list-item--submenu a24menu-link">
            <a href="/mobile/clubs">صفحات الأندية</a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu__list__list-item a24menu-link">
        <a class="mobile-menu__list__list-item--link"
           href="{{ route('categories.show', ['site' => 'akhbaar24', 'slug' => 'miscellaneous']) }}">
          <img src="/img/mobile/category.png" alt="">
          منوعات
        </a>
      </li>
      <li class="mobile-menu__list__list-item a24menu-link">
        <a class="mobile-menu__list__list-item--link"
           href="{{ route('categories.show', ['site' => 'akhbaar24', 'slug' => 'videos24']) }}">
          <img src="/img/mobile/video24.png" alt="">
          فيديو 24
        </a>
      </li>
      <li class="mobile-menu__list__list-item a24menu-link">
        <a class="mobile-menu__list__list-item--link"
           href="{{ route('categories.show', ['site' => 'akhbaar24', 'slug' => 'galleries24']) }}">
          <img src="/img/mobile/photos24.png" alt="">
          صور 24
        </a>
      </li>
      <li class="mobile-menu__list__list-item a24menu-link">
        <a class="mobile-menu__list__list-item--link"
           href="{{ route('categories.show', ['site' => 'akhbaar24', 'slug' => 'international']) }}">
          <img src="/img/mobile/global.png" alt="">
          عربية وعالمية
        </a>
      </li>
      <li class="mobile-menu__list__list-item a24menu-link">
        <a class="mobile-menu__list__list-item--link"
           href="{{ route('categories.show', ['site' => 'akhbaar24', 'slug' => 'accidents']) }}">
          <img src="/img/mobile/danger.png" alt="">
          حوادث
        </a>
      </li>
    </ul>
  </div>
</nav>
<!-- Site Overlay -->
<div class="site-overlay"></div>
