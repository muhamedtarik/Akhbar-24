@extends('layouts.mobile.app')
@section('content')
  @include('layouts.mobile.menu')
  @push('css')
    <style>
      body {
        background-color: #F5F5F5;
      }
    </style>
  @endpush
  <div id="container">
    @include('layouts.mobile.sport.nav')
    <div class="matches">
      <div class="matches__tabs">
        <ul class="matches__tabs__list nav nav-pills mb-3 shadow" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="yasterday-matches-tab" data-toggle="pill" href="#yasterday-matches"
               role="tab"
               aria-controls="yasterday-matches" aria-selected="true">أمس</a>
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
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="yasterday-matches" role="tabpanel"
               aria-labelledby="yasterday-matches-tab">
            @isset ($matches['data']['yesterday'])
              @foreach ($matches['data']['yesterday']['competitions'] as $competitions)
                <div class="matches__tabs__yasterday">
                  <div class="container">
                    <div class="matches__tabs__yasterday__regular mt-4">
                      <div class="card ">
                        <h5 class="card-header">
                          <img src="{{ $competitions['logo'] }}" > {{-- alt="{{ $competitions['original_name'] }}"--}}
                          <span> {{ $competitions['original_name'] }} </span>
                        </h5>
                        <div class="card-body">
                          @foreach ($competitions['matches'] as $match)
                            <div
                              class="matches__tabs__yasterday__regular__match d-flex align-items-center justify-content-center">
                              <div class="matches__tabs__yasterday__regular__match__team1">
                                <span
                                  class="matches__tabs__yasterday__regular__match__team1--name"> {{ $match['teams'][0]['short_name'] }} </span>
                                <img class="matches__tabs__yasterday__regular__match__team1--img"
                                     src="{{ $match['teams'][0]['logo'] }}" alt="{{ $match['teams'][0]['full_name'] }}">
                                <span
                                  class="matches__tabs__yasterday__regular__match__team1--score"> {{ $match['teams'][0]['scores']['score'] }} </span>
                              </div>
                              <div class="matches__tabs__yasterday__regular__match__info text-center">
                                <span>
                                  {{ ($match['status'] == 'Fixture') ? $match['game_minute'] : __($match['status']) }}
                                </span>
                                <span>
                                  {{ ($match['status'] == 'Fixture') ? \Carbon\Carbon::parse($match['date_time_utc'])->format('H:i') : '' }}
                                </span>
                              </div>
                              <div class="matches__tabs__yasterday__regular__match__team2">
                                <span
                                  class="matches__tabs__yasterday__regular__match__team2--score"> {{ $match['teams'][1]['scores']['score'] }} </span>
                                <img class="matches__tabs__yasterday__regular__match__team2--img"
                                     src="{{ $match['teams'][1]['logo'] }}" alt="{{ $match['teams'][1]['full_name'] }}">
                                <span
                                  class="matches__tabs__yasterday__regular__match__team2--name"> {{ $match['teams'][1]['short_name'] }} </span>
                              </div>
                            </div>
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            @else
            <div id="yesterday-matches" role="tabpanel" aria-labelledby="yesterday-matches-tab" class="tab-pane fade active show">
              <div class="matches__tabs__yasterday">
                <div class="empty-matches h-100 text-center">
                  <img width="160" src="/img/desktop/empty-matches.png" alt="" class="mt-0">
                  <p class="text-muted">لا توجد مباريات أمس </p>
                </div>
              </div>
            </div>
            @endisset
          </div>
          <div class="tab-pane fade " id="today-matches" role="tabpanel"
               aria-labelledby="today-matches-tab">
            @isset ($matches['data']['today'])
              @foreach ($matches['data']['today']['competitions'] as $competitions)
                <div class="matches__tabs__today">
                  <div class="container">
                    <div class="matches__tabs__today__regular mt-4">
                      <div class="card ">
                        <h5 class="card-header">
                          <img src="{{ $competitions['logo'] }}" > {{-- alt="{{ $competitions['original_name'] }}"--}}
                          <span> {{ $competitions['original_name'] }} </span>
                        </h5>
                        <div class="card-body">
                          @foreach ($competitions['matches'] as $match)
                            <div
                              class="matches__tabs__today__regular__match d-flex align-items-center justify-content-center">
                              <div class="matches__tabs__today__regular__match__team1">
                                <span
                                  class="matches__tabs__today__regular__match__team1--name"> {{ $match['teams'][0]['short_name'] }} </span>
                                <img class="matches__tabs__today__regular__match__team1--img"
                                     src="{{ $match['teams'][0]['logo'] }}" alt="{{ $match['teams'][0]['full_name'] }}">
                                <span
                                  class="matches__tabs__today__regular__match__team1--score"> {{ $match['teams'][0]['scores']['score'] }} </span>
                              </div>
                              <div class="matches__tabs__today__regular__match__info text-center">
                                <span>
                                  {{ ($match['status'] == 'Fixture') ? $match['game_minute'] : __($match['status']) }}
                                </span>
                                <span>
                                  {{ ($match['status'] == 'Fixture') ? \Carbon\Carbon::parse($match['date_time_utc'])->format('H:i') : '' }}
                                </span>
                              </div>
                              <div class="matches__tabs__today__regular__match__team2">
                                <span
                                  class="matches__tabs__today__regular__match__team2--score"> {{ $match['teams'][1]['scores']['score'] }} </span>
                                <img class="matches__tabs__today__regular__match__team2--img"
                                     src="{{ $match['teams'][1]['logo'] }}" alt="{{ $match['teams'][1]['full_name'] }}">
                                <span
                                  class="matches__tabs__today__regular__match__team2--name"> {{ $match['teams'][1]['short_name'] }} </span>
                              </div>
                            </div>
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            @else
              <div id="today-matches" role="tabpanel" aria-labelledby="today-matches-tab" class="tab-pane fade active show">
                <div class="matches__tabs__today">
                  <div class="empty-matches h-100 text-center">
                    <img width="160" src="/img/desktop/empty-matches.png" alt="" class="mt-0">
                    <p class="text-muted">لا توجد مباريات اليوم </p>
                  </div>
                </div>
              </div>
            @endisset
          </div>
          <div class="tab-pane fade " id="tomorrow-matches" role="tabpanel"
               aria-labelledby="tomorrow-matches-tab">
            @isset ($matches['data']['tomorrow'])
              @foreach ($matches['data']['tomorrow']['competitions'] as $competitions)
                <div class="matches__tabs__tomorrow">
                  <div class="container">
                    <div class="matches__tabs__tomorrow__regular mt-4">
                      <div class="card ">
                        <h5 class="card-header">
                          <img src="{{ $competitions['logo'] }}" > {{-- alt="{{ $competitions['original_name'] }}"--}}
                          <span> {{ $competitions['original_name'] }} </span>
                        </h5>
                        <div class="card-body">
                          @foreach ($competitions['matches'] as $match)
                            <div
                              class="matches__tabs__tomorrow__regular__match d-flex align-items-center justify-content-center">
                              <div class="matches__tabs__tomorrow__regular__match__team1">
                                <span
                                  class="matches__tabs__tomorrow__regular__match__team1--name"> {{ $match['teams'][0]['short_name'] }} </span>
                                <img class="matches__tabs__tomorrow__regular__match__team1--img"
                                     src="{{ $match['teams'][0]['logo'] }}" alt="{{ $match['teams'][0]['full_name'] }}">
                                <span
                                  class="matches__tabs__tomorrow__regular__match__team1--score"> {{ $match['teams'][0]['scores']['score'] }} </span>
                              </div>
                              <div class="matches__tabs__tomorrow__regular__match__info text-center">
                                <span>
                                  {{ ($match['status'] == 'Fixture') ? $match['game_minute'] : __($match['status']) }}
                                </span>
                                <span>
                                  {{ ($match['status'] == 'Fixture') ? \Carbon\Carbon::parse($match['date_time_utc'])->format('H:i') : '' }}
                                </span>
                              </div>
                              <div class="matches__tabs__tomorrow__regular__match__team2">
                                <span
                                  class="matches__tabs__tomorrow__regular__match__team2--score"> {{ $match['teams'][1]['scores']['score'] }} </span>
                                <img class="matches__tabs__tomorrow__regular__match__team2--img"
                                     src="{{ $match['teams'][1]['logo'] }}" alt="{{ $match['teams'][1]['full_name'] }}">
                                <span
                                  class="matches__tabs__tomorrow__regular__match__team2--name"> {{ $match['teams'][1]['short_name'] }} </span>
                              </div>
                            </div>
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            @else
            <div id="tomorrow-matches" role="tabpanel" aria-labelledby="tomorrow-matches-tab" class="tab-pane fade active show">
              <div class="matches__tabs__tomorrow">
                <div class="empty-matches h-100 text-center">
                  <img width="160" src="/img/desktop/empty-matches.png" alt="" class="mt-0">
                  <p class="text-muted">لا توجد مباريات غدا </p>
                </div>
              </div>
            </div>
            @endisset
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
