<div class="s24matches my-4">
  <div class="s24matches__tabs">
    <ul class="s24matches__tabs__list nav nav-pills mb-2" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="yasterday-s24matches-tab" data-toggle="pill" href="#yasterday-s24matches"
           role="tab" aria-controls="yasterday-s24matches" aria-selected="true">أمس</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="today-s24matches-tab" data-toggle="pill" href="#today-s24matches" role="tab"
           aria-controls="today-s24matches" aria-selected="false">اليوم</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="tomorrow-s24matches-tab" data-toggle="pill" href="#tomorrow-s24matches"
           role="tab" aria-controls="tomorrow-s24matches" aria-selected="false">غداً</a>
      </li>
    </ul>
  </div>
  <div class="tab-content" id="pills-tabContent">

    <div class="tab-pane fade show active" id="yasterday-s24matches" role="tabpanel"
         aria-labelledby="yasterday-s24matches-tab">
      @isset ($matches['data']['yesterday'])
        @foreach ($matches['data']['yesterday']['competitions'] as $competitions)
          <div class="s24matches__tabs__yasterday">
            <div class="s24matches__tabs__yasterday__important">
              <div class="card ">
                <h5 class="card-header">
                  <img src="{{ $competitions['logo'] }}" alt="{{ $competitions['original_name'] }}">
                  <span> {{ $competitions['original_name'] }} </span>
                </h5>
                <div class="card-body">
                  @foreach ($competitions['matches'] as $match)
                    <div
                      class="s24matches__tabs__yasterday__regular__match d-flex align-items-center justify-content-center">
                      <div class="s24matches__tabs__yasterday__regular__match__team1">
                        <span class="s24matches__tabs__yasterday__regular__match__team1--name">
                          {{ $match['teams'][0]['short_name'] }} </span>
                        <img class="s24matches__tabs__yasterday__regular__match__team1--img"
                             src="{{ $match['teams'][0]['logo'] }}"
                             alt="{{ $match['teams'][0]['full_name'] }}">
                        <span class="s24matches__tabs__yasterday__regular__match__team1--score">
                          {{ $match['teams'][0]['scores']['score'] }} </span>
                      </div>
                      <div class="s24matches__tabs__yasterday__regular__match__info text-center">
                        <span>
                          {{ ($match['status'] == 'Fixture') ? $match['game_minute'] : __($match['status']) }}
                        </span>
                        <span>
                          {{ ($match['status'] == 'Fixture') ? \Carbon\Carbon::parse($match['date_time_utc'])->format('H:i') : '' }}
                        </span>

                      </div>
                      <div class="s24matches__tabs__yasterday__regular__match__team1">
                        <span class="s24matches__tabs__yasterday__regular__match__team1--score">
                          {{ $match['teams'][1]['scores']['score'] }} </span>
                        <img class="s24matches__tabs__yasterday__regular__match__team1--img"
                             src="{{ $match['teams'][1]['logo'] }}"
                             alt="{{ $match['teams'][1]['full_name'] }}">
                        <span class="s24matches__tabs__yasterday__regular__match__team1--name">
                          {{ $match['teams'][1]['short_name'] }} </span>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        @endforeach
      @else
        <div id="yesterday-matches" role="tabpanel" aria-labelledby="yesterday-matches-tab"
             class="tab-pane fade active show">
          <div class="matches__tabs__yasterday">
            <div class="empty-matches h-100 text-center">
              <img width="160" src="/img/desktop/empty-matches.png" alt="">
              <p class="text-muted">لا توجد مباريات أمس </p>
            </div>
          </div>
        </div>
      @endisset
    </div>

    <div class="tab-pane fade" id="today-s24matches" role="tabpanel" aria-labelledby="today-s24matches-tab">
      @isset ($matches['data']['today'])
        @foreach ($matches['data']['today']['competitions'] as $competitions)
          <div class="s24matches__tabs__today">
            <div class="s24matches__tabs__today__important">
              <div class="card ">
                <h5 class="card-header">
                  <img src="{{ $competitions['logo'] }}" alt="{{ $competitions['original_name'] }}">
                  <span> {{ $competitions['original_name'] }} </span>
                </h5>
                <div class="card-body">
                  <div class="card-body">
                    @foreach ($competitions['matches'] as $match)
                      <div
                        class="s24matches__tabs__today__regular__match d-flex align-items-center justify-content-center">
                        <div class="s24matches__tabs__today__regular__match__team1">
                          <span class="s24matches__tabs__today__regular__match__team1--name">
                            {{ $match['teams'][0]['short_name'] }} </span>
                          <img class="s24matches__tabs__today__regular__match__team1--img"
                               src="{{ $match['teams'][0]['logo'] }}"
                               alt="{{ $match['teams'][0]['full_name'] }}">
                          <span class="s24matches__tabs__today__regular__match__team1--score">
                            {{ $match['teams'][0]['scores']['score'] }} </span>
                        </div>
                        <div class="s24matches__tabs__today__regular__match__info text-center">
                          <span>
                            {{ ($match['status'] == 'Fixture') ? $match['game_minute'] : __($match['status']) }}
                          </span>
                          <span>
                            {{ ($match['status'] == 'Fixture') ? \Carbon\Carbon::parse($match['date_time_utc'])->format('H:i') : '' }}
                          </span>

                        </div>
                        <div class="s24matches__tabs__today__regular__match__team1">
                          <span class="s24matches__tabs__today__regular__match__team1--score">
                            {{ $match['teams'][1]['scores']['score'] }} </span>
                          <img class="s24matches__tabs__today__regular__match__team1--img"
                               src="{{ $match['teams'][1]['logo'] }}"
                               alt="{{ $match['teams'][1]['full_name'] }}">
                          <span class="s24matches__tabs__today__regular__match__team1--name">
                            {{ $match['teams'][1]['short_name'] }} </span>
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
          <div class="matches__tabs__yasterday">
            <div class="empty-matches h-100 text-center">
              <img width="160" src="/img/desktop/empty-matches.png" alt="">
              <p class="text-muted">لا توجد مباريات اليوم </p>
            </div>
          </div>
        </div>
      @endisset
    </div>

    <div class="tab-pane fade" id="tomorrow-s24matches" role="tabpanel" aria-labelledby="tomorrow-s24matches-tab">
      @isset ($matches['data']['tomorrow'])
        @foreach ($matches['data']['tomorrow']['competitions'] as $competitions)
          <div class="s24matches__tabs__tomorrow">
            <div class="s24matches__tabs__tomorrow__important">
              <div class="card ">
                <h5 class="card-header">
                  <img src="{{ $competitions['logo'] }}" alt="{{ $competitions['original_name'] }}">
                  <span> {{ $competitions['original_name'] }} </span>
                </h5>
                <div class="card-body">
                  <div class="card-body">
                    @foreach ($competitions['matches'] as $match)
                      <div
                        class="s24matches__tabs__tomorrow__regular__match d-flex align-items-center justify-content-center">
                        <div class="s24matches__tabs__tomorrow__regular__match__team1">
                          <span class="s24matches__tabs__tomorrow__regular__match__team1--name">
                            {{ $match['teams'][0]['short_name'] }} </span>
                          <img class="s24matches__tabs__tomorrow__regular__match__team1--img"
                               src="{{ $match['teams'][0]['logo'] }}"
                               alt="{{ $match['teams'][0]['full_name'] }}">
                          <span class="s24matches__tabs__tomorrow__regular__match__team1--score">
                            {{ $match['teams'][0]['scores']['score'] }} </span>
                        </div>
                        <div class="s24matches__tabs__tomorrow__regular__match__info text-center">
                          <span>
                            {{ ($match['status'] == 'Fixture') ? $match['game_minute'] : __($match['status']) }}
                          </span>
                          <span>
                            {{ ($match['status'] == 'Fixture') ? \Carbon\Carbon::parse($match['date_time_utc'])->format('H:i') : '' }}
                          </span>

                        </div>
                        <div class="s24matches__tabs__tomorrow__regular__match__team1">
                          <span class="s24matches__tabs__tomorrow__regular__match__team1--score">
                            {{ $match['teams'][1]['scores']['score'] }} </span>
                          <img class="s24matches__tabs__tomorrow__regular__match__team1--img"
                               src="{{ $match['teams'][1]['logo'] }}"
                               alt="{{ $match['teams'][1]['full_name'] }}">
                          <span class="s24matches__tabs__tomorrow__regular__match__team1--name">
                            {{ $match['teams'][1]['short_name'] }} </span>
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
          <div class="matches__tabs__yasterday">
            <div class="empty-matches h-100 text-center">
              <img width="160" src="/img/desktop/empty-matches.png" alt="">
              <p class="text-muted">لا توجد مباريات غدا </p>
            </div>
          </div>
        </div>
      @endisset
    </div>

  </div>
</div>
