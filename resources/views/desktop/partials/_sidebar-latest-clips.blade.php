<div class="s24news-heading mt-1 mb-3">
  <h5>أحدث المقاطع</h5>
</div>
<div class="a24-side-news">
  @for ($i = 0; $i < 8; $i++)
    <div class="a24-side-news__item">
      <a class="a24-side-news__item__link" href="#">
        <div class="row">
          <div class="col-5 pl-0">
            <div class="a24-side-news__item__img">
              <img src="/img/desktop/s242.jpg">
              <span class="a24-side-news__item__img__icon">
                <img src="/img/desktop/video_type.png" alt="">
              </span>
            </div>
          </div>
          <div class="col-7 pr-2">
            <p class="a24-side-news__item--text text-right">
              قطاع السياحة يستعد لخسائر قد تصل إلى 75 مليار دولار بسبب فيروس كورونا
            </p>
          </div>
        </div>
        <hr>
      </a>
    </div>
  @endfor
</div>
