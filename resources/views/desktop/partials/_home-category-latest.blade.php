<div class="news-heading">
  <h5>{{ $title }}</h5>
</div>
<div class="news-cards mr-2 my-3">
  <div class="row">
    @for ($i = 0; $i < 3; $i++)
      <div class="col-4 px-2">
        <div class="news-cards__item text-right">
          <a class="news-cards__item__link" href="#">
            <div class="news-cards__item__img">
              <img src="https://i.picsum.photos/id/670/700/500.jpg" alt="">
            </div>
            <div class="news-cards__item__text">
              <p class="card-text">هذا النص هو مثال لنص يمكن ان يستبدل في نفس المساحة,
                لقد تم توليد
                هذا النص من مولد
                النص العربي
              </p>
            </div>
            <div
              class="news-cards__item__icons d-flex justify-content-between align-items-center">
              <button
                class="news-cards__item__icons__twitter d-flex align-items-center">
                <i class="fa fa-twitter pl-1" aria-hidden="true"></i>
                غرد
              </button>
              <div class="news-cards__item__icons__comments">
                <span class="news-cards__item__icons__comments__likes ml-2">
                  <img src="/img/desktop/fire.svg"
                       style="width: 10px; height: 14px;" class="mb-1">
                  500,000
                </span>
                <span class="news-cards__item__icons__comments__commenting">
                  <img src="/img/desktop/comment-gray.svg"
                       style="width: 10px; height: 14px;"
                       class="mb-1">
                  12
                </span>
              </div>
            </div>
          </a>
        </div>
      </div>
    @endfor
  </div>

</div>
