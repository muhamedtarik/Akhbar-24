@extends('layouts.desktop.app')
@section('content')
<div class="position-relative">
  @include('layouts.desktop.header')
  <div class="container pb-5 bg-white">
    <div class="row">
      <section class="layout__body mb-5 pl-4">
        <div class="news-cards mr-2 my-4">
          <div class="row">
            @foreach ($featured as $item)
            <div class="col-4 px-2">
              <div class="news-cards__item text-right">
                <a class="news-cards__item__link" href="{{ route('items.show', $item['id']) }}">
                  <div class="news-cards__item__img">
                    <img src="{{ $item['image'] }}" alt=""
                      onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                    @if($item['type'] !== 'article')
                    <span class="a24-side-news__item__img__icon">
                      <img src="/img/desktop/{{ $item['type'] }}_type.png" alt="">
                    </span>
                    @endif
                  </div>
                  <div class="news-cards__item__text">
                    <p class="card-text">{{ $item['title'] }}</p>
                  </div>
                  <div class="news-cards__item__icons d-flex justify-content-between align-items-center">
                    <button class="news-cards__item__icons__twitter ">
                      <i class="fa fa-twitter pl-1" aria-hidden="true"></i>
                      غرد
                    </button>
                    <div class="news-cards__item__icons__comments d-flex align-items-center justify-content-end">
                      <div class="news-listing__item__icons__icon__likes featured views-cases">
                        @if($item['views_count'] < 5000) <span class="ml-2 views-cases--grey">
                          <img src="/img/desktop/views-grey.svg" class="mb-1" alt="عدد المشاهدات">
                          {{ $item['views_count'] }}
                          </span>
                          @elseif($item['views_count'] >= 10000)
                          <span class="ml-2 views-cases--red">
                            <img src="/img/desktop/fire.svg" class="mb-1" alt="عدد المشاهدات">
                            {{ $item['views_count'] }}
                          </span>
                          @else
                          <span class="ml-2 views-cases--yellow">
                            <img src="/img/desktop/views-yellow.svg" class="mb-1" alt="عدد المشاهدات">
                            {{ $item['views_count'] }}
                          </span>
                          @endif
                      </div>
                      <span class="news-cards__item__icons__comments__commenting">
                        <img src="/img/desktop/comment-gray.svg" style="width: 13px;" class="mb-1">
                        {{ $item['comments_count'] }}
                      </span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            @endforeach
          </div>
        </div>

        <div class="news-listing">
          @foreach ($homelisted['data'] as $item)
          <div class="news-listing__item text-right">
            <a href="{{ route('items.show', $item['id']) }}" class="news-listing__item__link">
              <div class="row">
                <div class="col-4 pl-0">
                  <div class="news-listing__item__img">
                    <img src="{{ $item['image'] }}" alt=""
                      onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                    @if($item['type'] !== 'article')
                    <span class="a24-side-news__item__img__icon">
                      <img src="/img/desktop/{{ $item['type'] }}_type.png" alt="">
                    </span>
                    @endif
                  </div>
                </div>
                <div class="col-8 d-flex flex-column justify-content-between">
                  <div class="news-listing__item__text">
                    <h3>{{ $item['title'] }}</h3>
                    <p>هذا النص هو مثال لنص يمكن ان يستبدل في نفس المساحة, لقد تم توليد هذا
                      النص من
                      مولد النص العربي,
                      حيث
                      يمكنك ان تولد مثل هذا النص او العديد من النصوص الاخري اضافة الي عدد
                      الحروف
                      التي يولدها </p>
                  </div>
                  <div class="news-listing__item__icons d-flex justify-content-between align-items-center">
                    <div class="news-listing__item__icons__date">
                      <p class="text-muted">
                        {{ arabicDate($item['published_at']) }}
                      </p>
                    </div>
                    <div class="news-listing__item__icons__icon d-flex align-items-center justify-content-end">
                      <button class="news-listing__item__icons__icon__twitter">
                        <i class="fa fa-twitter " aria-hidden="true"></i>
                        غرد
                      </button>
                      <div class="news-listing__item__icons__icon__likes homelisted views-cases">
                        @if($item['views_count'] < 5000) <span class="ml-2 views-cases--grey mx-4">
                          <img src="/img/desktop/views-grey.svg" alt="عدد المشاهدات">
                          {{ $item['views_count'] }}
                          </span>
                          @elseif($item['views_count'] >= 10000)
                          <span class="ml-2 views-cases--red mx-4">
                            <img src="/img/desktop/fire.svg" alt="عدد المشاهدات">
                            {{ $item['views_count'] }}
                          </span>
                          @else
                          <span class="ml-2 views-cases--yellow mx-4">
                            <img src="/img/desktop/views-yellow.svg" alt="عدد المشاهدات">
                            {{ $item['views_count'] }}
                          </span>
                          @endif
                      </div>
                      <span class="news-listing__item__icons__icon__commenting">
                        <img src="/img/desktop/comment-gray.svg" style="width: 13px;">
                        {{ $item['comments_count'] }}
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          @endforeach
        </div>

        @include('desktop.partials._home-category-latest', ['title' => 'سبورت 24'])
        @include('desktop.partials._home-category-latest', ['title' => 'عربية وعالمية'])
        @include('desktop.partials._home-category-latest', ['title' => 'منوعات'])
      </section>

      <section class="layout__sidebar pr-0">
        @include('desktop.partials._sidebar-featured-videos')

        <div class="ad-side my-4">
          <a href="#">
            <img src="/img/desktop/adside.png" alt="">
          </a>
        </div>

        <div class="matches my-4">
          <div class="matches__tabs">
            <ul class="matches__tabs__list nav nav-pills mb-2" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="yasterday-matches-tab" data-toggle="pill" href="#yasterday-matches"
                  role="tab" aria-controls="yasterday-matches" aria-selected="true">أمس</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="today-matches-tab" data-toggle="pill" href="#today-matches" role="tab"
                  aria-controls="today-matches" aria-selected="false">اليوم</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tomorrow-matches-tab" data-toggle="pill" href="#tomorrow-matches" role="tab"
                  aria-controls="tomorrow-matches" aria-selected="false">غدا</a>
              </li>
            </ul>
          </div>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="yasterday-matches" role="tabpanel"
              aria-labelledby="yasterday-matches-tab">
              <div class="matches__tabs__yasterday">
                <div class="matches__tabs__yasterday__important">
                  <div class="card ">
                    <h5 class="card-header">
                      <img src="/img/desktop/eumatches.png" alt="">
                      <span>دوري ابطال أوروبا دور ال - 16</span>
                    </h5>
                    <div class="card-body">

                      <div
                        class="matches__tabs__today__regular__match playing d-flex align-items-center justify-content-center">
                        <div class="matches__tabs__today__regular__match__team1">
                          <span class="matches__tabs__today__regular__match__team1--name">الأهلي</span>
                          <img class="matches__tabs__today__regular__match__team1--img" src="/img/mobile/ahly_team.png"
                            alt="">
                          <span class="matches__tabs__today__regular__match__team1--score">1</span>
                        </div>
                        <div class="matches__tabs__today__regular__match__info text-center">
                          <span>'120</span>
                          <div class="matches__tabs__today__regular__match__info--icon">
                            <a href="/mobile/video24">
                              <i class="fa fa-video-camera"></i>
                            </a>
                          </div>
                        </div>
                        <div class="matches__tabs__today__regular__match__team2">
                          <span class="matches__tabs__today__regular__match__team2--score">0</span>
                          <img class="matches__tabs__today__regular__match__team2--img"
                            src="/img/mobile/etehad_team.png" alt="">
                          <span class="matches__tabs__today__regular__match__team2--name">الإتحاد</span>
                        </div>
                      </div>
                      <div
                        class="matches__tabs__yasterday__regular__match d-flex align-items-center justify-content-center">
                        <div class="matches__tabs__yasterday__regular__match__team1">
                          <span class="matches__tabs__yasterday__regular__match__team1--name">الأهلي</span>
                          <img class="matches__tabs__yasterday__regular__match__team1--img"
                            src="/img/mobile/ahly_team.png" alt="">
                          <span class="matches__tabs__yasterday__regular__match__team1--score">-</span>
                        </div>
                        <div class="matches__tabs__yasterday__regular__match__info text-center">
                          <span>لم تبدأ</span>

                        </div>
                        <div class="matches__tabs__yasterday__regular__match__team2">
                          <span class="matches__tabs__yasterday__regular__match__team2--score">-</span>
                          <img class="matches__tabs__yasterday__regular__match__team2--img"
                            src="/img/mobile/etehad_team.png" alt="">
                          <span class="matches__tabs__yasterday__regular__match__team2--name">الإتحاد</span>
                        </div>
                      </div>
                      <div
                        class="matches__tabs__today__regular__match d-flex align-items-center justify-content-center">
                        <div class="matches__tabs__today__regular__match__team1">
                          <span class="matches__tabs__today__regular__match__team1--name">الأهلي</span>
                          <img class="matches__tabs__today__regular__match__team1--img" src="/img/mobile/ahly_team.png"
                            alt="">
                          <span class="matches__tabs__today__regular__match__team1--score">1</span>
                        </div>
                        <div class="matches__tabs__today__regular__match__info text-center">
                          <span>انتهت</span>
                          <div class="matches__tabs__today__regular__match__info--icon">
                            <a href="/mobile/video24">
                              <i class="fa fa-video-camera"></i>
                            </a>
                          </div>
                        </div>
                        <div class="matches__tabs__today__regular__match__team2">
                          <span class="matches__tabs__today__regular__match__team2--score">0</span>
                          <img class="matches__tabs__today__regular__match__team2--img"
                            src="/img/mobile/etehad_team.png" alt="">
                          <span class="matches__tabs__today__regular__match__team2--name">الإتحاد</span>
                        </div>
                      </div>
                      <div
                        class="matches__tabs__yasterday__regular__match d-flex align-items-center justify-content-center">
                        <div class="matches__tabs__yasterday__regular__match__team1">
                          <span class="matches__tabs__yasterday__regular__match__team1--name">الأهلي</span>
                          <img class="matches__tabs__yasterday__regular__match__team1--img"
                            src="/img/mobile/ahly_team.png" alt="">
                          <span class="matches__tabs__yasterday__regular__match__team1--score">2</span>
                        </div>
                        <div class="matches__tabs__yasterday__regular__match__info text-center">
                          <span>انتهت</span>

                        </div>
                        <div class="matches__tabs__yasterday__regular__match__team2">
                          <span class="matches__tabs__yasterday__regular__match__team2--score">1</span>
                          <img class="matches__tabs__yasterday__regular__match__team2--img"
                            src="/img/mobile/etehad_team.png" alt="">
                          <span class="matches__tabs__yasterday__regular__match__team2--name">الإتحاد</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="matches__tabs__yasterday__regular">
                  <div class="card ">
                    <h5 class="card-header">
                      <img src="/img/mobile/arab_league.png" alt="">
                      <span> الدورى السعودى للمحترفين</span>
                    </h5>
                    <div class="card-body">

                      <div
                        class="matches__tabs__yasterday__regular__match d-flex align-items-center justify-content-center">
                        <div class="matches__tabs__yasterday__regular__match__team1">
                          <span class="matches__tabs__yasterday__regular__match__team1--name">الأهلي</span>
                          <img class="matches__tabs__yasterday__regular__match__team1--img"
                            src="/img/mobile/ahly_team.png" alt="">
                          <span class="matches__tabs__yasterday__regular__match__team1--score">-</span>
                        </div>
                        <div class="matches__tabs__yasterday__regular__match__info text-center">
                          <span>لم تبدأ</span>

                        </div>
                        <div class="matches__tabs__yasterday__regular__match__team2">
                          <span class="matches__tabs__yasterday__regular__match__team2--score">-</span>
                          <img class="matches__tabs__yasterday__regular__match__team2--img"
                            src="/img/mobile/etehad_team.png" alt="">
                          <span class="matches__tabs__yasterday__regular__match__team2--name">الإتحاد</span>
                        </div>
                      </div>
                      <div
                        class="matches__tabs__yasterday__regular__match d-flex align-items-center justify-content-center">
                        <div class="matches__tabs__yasterday__regular__match__team1">
                          <span class="matches__tabs__yasterday__regular__match__team1--name">الأهلي</span>
                          <img class="matches__tabs__yasterday__regular__match__team1--img"
                            src="/img/mobile/ahly_team.png" alt="">
                          <span class="matches__tabs__yasterday__regular__match__team1--score">-</span>
                        </div>
                        <div class="matches__tabs__yasterday__regular__match__info text-center">
                          <span>لم تبدأ</span>

                        </div>
                        <div class="matches__tabs__yasterday__regular__match__team2">
                          <span class="matches__tabs__yasterday__regular__match__team2--score">-</span>
                          <img class="matches__tabs__yasterday__regular__match__team2--img"
                            src="/img/mobile/etehad_team.png" alt="">
                          <span class="matches__tabs__yasterday__regular__match__team2--name">الإتحاد</span>
                        </div>
                      </div>
                      <div
                        class="matches__tabs__yasterday__regular__match d-flex align-items-center justify-content-center">
                        <div class="matches__tabs__yasterday__regular__match__team1">
                          <span class="matches__tabs__yasterday__regular__match__team1--name">الأهلي</span>
                          <img class="matches__tabs__yasterday__regular__match__team1--img"
                            src="/img/mobile/ahly_team.png" alt="">
                          <span class="matches__tabs__yasterday__regular__match__team1--score">-</span>
                        </div>
                        <div class="matches__tabs__yasterday__regular__match__info text-center">
                          <span>لم تبدأ</span>

                        </div>
                        <div class="matches__tabs__yasterday__regular__match__team2">
                          <span class="matches__tabs__yasterday__regular__match__team2--score">-</span>
                          <img class="matches__tabs__yasterday__regular__match__team2--img"
                            src="/img/mobile/etehad_team.png" alt="">
                          <span class="matches__tabs__yasterday__regular__match__team2--name">الإتحاد</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="today-matches" role="tabpanel" aria-labelledby="today-matches-tab">
              <div class="matches__tabs__yasterday">
                <div class="matches__tabs__yasterday__important">
                  <div class="card ">
                    <h5 class="card-header">
                      <img src="/img/desktop/eumatches.png" alt="">
                      <span>دوري ابطال أوروبا دور ال - 16</span>
                    </h5>
                    <div class="card-body">

                      <div
                        class="matches__tabs__today__regular__match playing d-flex align-items-center justify-content-center">
                        <div class="matches__tabs__today__regular__match__team1">
                          <span class="matches__tabs__today__regular__match__team1--name">الأهلي</span>
                          <img class="matches__tabs__today__regular__match__team1--img" src="/img/mobile/ahly_team.png"
                            alt="">
                          <span class="matches__tabs__today__regular__match__team1--score">1</span>
                        </div>
                        <div class="matches__tabs__today__regular__match__info text-center">
                          <span>'120</span>
                          <div class="matches__tabs__today__regular__match__info--icon">
                            <a href="/mobile/video24">
                              <i class="fa fa-video-camera"></i>
                            </a>
                          </div>
                        </div>
                        <div class="matches__tabs__today__regular__match__team2">
                          <span class="matches__tabs__today__regular__match__team2--score">0</span>
                          <img class="matches__tabs__today__regular__match__team2--img"
                            src="/img/mobile/etehad_team.png" alt="">
                          <span class="matches__tabs__today__regular__match__team2--name">الإتحاد</span>
                        </div>
                      </div>
                      <div
                        class="matches__tabs__yasterday__regular__match d-flex align-items-center justify-content-center">
                        <div class="matches__tabs__yasterday__regular__match__team1">
                          <span class="matches__tabs__yasterday__regular__match__team1--name">الأهلي</span>
                          <img class="matches__tabs__yasterday__regular__match__team1--img"
                            src="/img/mobile/ahly_team.png" alt="">
                          <span class="matches__tabs__yasterday__regular__match__team1--score">-</span>
                        </div>
                        <div class="matches__tabs__yasterday__regular__match__info text-center">
                          <span>لم تبدأ</span>

                        </div>
                        <div class="matches__tabs__yasterday__regular__match__team2">
                          <span class="matches__tabs__yasterday__regular__match__team2--score">-</span>
                          <img class="matches__tabs__yasterday__regular__match__team2--img"
                            src="/img/mobile/etehad_team.png" alt="">
                          <span class="matches__tabs__yasterday__regular__match__team2--name">الإتحاد</span>
                        </div>
                      </div>
                      <div
                        class="matches__tabs__today__regular__match d-flex align-items-center justify-content-center">
                        <div class="matches__tabs__today__regular__match__team1">
                          <span class="matches__tabs__today__regular__match__team1--name">الأهلي</span>
                          <img class="matches__tabs__today__regular__match__team1--img" src="/img/mobile/ahly_team.png"
                            alt="">
                          <span class="matches__tabs__today__regular__match__team1--score">1</span>
                        </div>
                        <div class="matches__tabs__today__regular__match__info text-center">
                          <span>انتهت</span>
                          <div class="matches__tabs__today__regular__match__info--icon">
                            <a href="/mobile/video24">
                              <i class="fa fa-video-camera"></i>
                            </a>
                          </div>
                        </div>
                        <div class="matches__tabs__today__regular__match__team2">
                          <span class="matches__tabs__today__regular__match__team2--score">0</span>
                          <img class="matches__tabs__today__regular__match__team2--img"
                            src="/img/mobile/etehad_team.png" alt="">
                          <span class="matches__tabs__today__regular__match__team2--name">الإتحاد</span>
                        </div>
                      </div>
                      <div
                        class="matches__tabs__yasterday__regular__match d-flex align-items-center justify-content-center">
                        <div class="matches__tabs__yasterday__regular__match__team1">
                          <span class="matches__tabs__yasterday__regular__match__team1--name">الأهلي</span>
                          <img class="matches__tabs__yasterday__regular__match__team1--img"
                            src="/img/mobile/ahly_team.png" alt="">
                          <span class="matches__tabs__yasterday__regular__match__team1--score">2</span>
                        </div>
                        <div class="matches__tabs__yasterday__regular__match__info text-center">
                          <span>انتهت</span>

                        </div>
                        <div class="matches__tabs__yasterday__regular__match__team2">
                          <span class="matches__tabs__yasterday__regular__match__team2--score">1</span>
                          <img class="matches__tabs__yasterday__regular__match__team2--img"
                            src="/img/mobile/etehad_team.png" alt="">
                          <span class="matches__tabs__yasterday__regular__match__team2--name">الإتحاد</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="matches__tabs__yasterday__regular">
                  <div class="card ">
                    <h5 class="card-header">
                      <img src="/img/mobile/arab_league.png" alt="">
                      <span> الدورى السعودى للمحترفين</span>
                    </h5>
                    <div class="card-body">

                      <div
                        class="matches__tabs__yasterday__regular__match d-flex align-items-center justify-content-center">
                        <div class="matches__tabs__yasterday__regular__match__team1">
                          <span class="matches__tabs__yasterday__regular__match__team1--name">الأهلي</span>
                          <img class="matches__tabs__yasterday__regular__match__team1--img"
                            src="/img/mobile/ahly_team.png" alt="">
                          <span class="matches__tabs__yasterday__regular__match__team1--score">-</span>
                        </div>
                        <div class="matches__tabs__yasterday__regular__match__info text-center">
                          <span>لم تبدأ</span>

                        </div>
                        <div class="matches__tabs__yasterday__regular__match__team2">
                          <span class="matches__tabs__yasterday__regular__match__team2--score">-</span>
                          <img class="matches__tabs__yasterday__regular__match__team2--img"
                            src="/img/mobile/etehad_team.png" alt="">
                          <span class="matches__tabs__yasterday__regular__match__team2--name">الإتحاد</span>
                        </div>
                      </div>
                      <div
                        class="matches__tabs__yasterday__regular__match d-flex align-items-center justify-content-center">
                        <div class="matches__tabs__yasterday__regular__match__team1">
                          <span class="matches__tabs__yasterday__regular__match__team1--name">الأهلي</span>
                          <img class="matches__tabs__yasterday__regular__match__team1--img"
                            src="/img/mobile/ahly_team.png" alt="">
                          <span class="matches__tabs__yasterday__regular__match__team1--score">-</span>
                        </div>
                        <div class="matches__tabs__yasterday__regular__match__info text-center">
                          <span>لم تبدأ</span>

                        </div>
                        <div class="matches__tabs__yasterday__regular__match__team2">
                          <span class="matches__tabs__yasterday__regular__match__team2--score">-</span>
                          <img class="matches__tabs__yasterday__regular__match__team2--img"
                            src="/img/mobile/etehad_team.png" alt="">
                          <span class="matches__tabs__yasterday__regular__match__team2--name">الإتحاد</span>
                        </div>
                      </div>
                      <div
                        class="matches__tabs__yasterday__regular__match d-flex align-items-center justify-content-center">
                        <div class="matches__tabs__yasterday__regular__match__team1">
                          <span class="matches__tabs__yasterday__regular__match__team1--name">الأهلي</span>
                          <img class="matches__tabs__yasterday__regular__match__team1--img"
                            src="/img/mobile/ahly_team.png" alt="">
                          <span class="matches__tabs__yasterday__regular__match__team1--score">-</span>
                        </div>
                        <div class="matches__tabs__yasterday__regular__match__info text-center">
                          <span>لم تبدأ</span>

                        </div>
                        <div class="matches__tabs__yasterday__regular__match__team2">
                          <span class="matches__tabs__yasterday__regular__match__team2--score">-</span>
                          <img class="matches__tabs__yasterday__regular__match__team2--img"
                            src="/img/mobile/etehad_team.png" alt="">
                          <span class="matches__tabs__yasterday__regular__match__team2--name">الإتحاد</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="tab-pane fade" id="tomorrow-matches" role="tabpanel" aria-labelledby="tomorrow-matches-tab">
              <div class="matches__tabs__yasterday">
                <div class="empty-matches h-100 text-center">
                  <img width="160" src="/img/desktop/empty-matches.png" alt="">
                  <p class="text-muted">لا توجد مباريات غدا </p>
                </div>
              </div>
            </div>
          </div>
        </div>


      @include('desktop.partials._sidebar-latest-goals')

      @include('desktop.partials._sidebar-most-read-and-commented')

    </div>
  </div>
</div>
</div>
@include('layouts.desktop.footer')
@endsection
