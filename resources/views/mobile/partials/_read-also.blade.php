<h6 class="slider-news__heading pr-3 my-4">
  اقرا ايضا
</h6>
<div class="news-slider center" style="direction:ltr">
  @for($i = 0 ; $i < 3 ; $i++)
    <div class="slider-news text-right pb-2 mb-4 rounded mx-2">
      <div class="slider-news__img">
        <img src="/img/mobile/slider_ph1.png" class="img-fluid">
      </div>
      <div class="slider-news__text">
        <p class="card-text p-2">
          يكاد مؤسس أمازون، وأغنى رجل في العالم حالياً،
          جيف بيزوس،
          أن يفقد مركزه الأول على قائمة أثرياء العالم، ليحل مكانه مؤسس مايكروسوفت، بيل غيتس.
        </p>
      </div>
      <div class="slider-news__icons d-flex px-2 justify-content-between">
        <div class="slider-news__icons__comments">
          <span class="slider__news__icons__comments__like text-muted ml-0 mr-1">
            12
            <img src="/img/mobile/comment-gray.svg" style="width: 11px;height: 15px;">
          </span>
          <span class="slider__news__icons__comments__commenting text-muted mr-0 ml-2">
            50k
            <img src="/img/mobile/views-gray.svg" style="width: 11px; height: 15px;">

          </span>
        </div>
        <div class="slider-news__icons__date text-muted">
          <span> الأحد 12 أبريل 2020</span>
        </div>
      </div>
    </div>
  @endfor
</div>
