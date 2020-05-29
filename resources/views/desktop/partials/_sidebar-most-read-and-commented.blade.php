<div class="a24-side-news-tabs mt-4">
  <ul class="a24-side-news-tabs__tabs__list nav nav-pills" id="pills-tab" role="tablist">
    <li class="nav-item py-1">
      <a class="nav-link active" id="mostread-tab" data-toggle="pill" href="#mostread" role="tab"
         aria-controls="mostread" aria-selected="true">
        الاكثر قراءة
      </a>

    <li class="nav-item py-1">
      <a class="nav-link" id="mostcomment-tab" data-toggle="pill" href="#mostcomment" role="tab"
         aria-controls="mostcomment" aria-selected="false">
        الاكثر تعليقاً
      </a>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active px-2" id="mostread" role="tabpanel" aria-labelledby="mostread-tab">
      @foreach ($mostRead as $item)
        <div class="a24-side-news-tabs__item py-2">
          <a class="a24-side-news-tabs__item--link" href="{{ route('items.show', $item['id']) }}">
            <div class="row">
              <div class="col-5 pl-0">
                <div class="a24-side-news-tabs__item__img">
                  <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}"
                       onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                </div>
              </div>
              <div class="col-7 pr-2">
                <p class="a24-side-news-tabs__item--text text-right">
                  {{ $item['title'] }}
                </p>
              </div>
            </div>
          </a>
        </div>
      @endforeach

    </div>
    <div class="tab-pane fade px-2" id="mostcomment" role="tabpanel" aria-labelledby="mostcomment-tab">
      @foreach ($mostCommented as $item)
        <div class="a24-side-news-tabs__item py-2">
          <a class="a24-side-news-tabs__item--link" href="{{ route('items.show', $item['id']) }}">
            <div class="row">
              <div class="col-5 pl-0">
                <div class="a24-side-news-tabs__item__img">
                  <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}"
                       onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                </div>
              </div>
              <div class="col-7 pr-2">
                <p class="a24-side-news-tabs__item--text text-right">
                  {{ $item['title'] }}
                </p>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
</div>
