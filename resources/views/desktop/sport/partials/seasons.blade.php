<div id="teams" class="s24news-heading mt-1 mb-3">
  <h5>الترتيب</h5>
</div>
<div class="s24-table mb-5">
  <ul class="s24-table__teams-table1__tabs__list  nav nav-pills" id="pills-tab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="sa-tab" data-toggle="pill" href="#sa" role="tab" aria-controls="sa"
        aria-selected="true">
        الدورى السعودى
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="en-tab" data-toggle="pill" href="#en" role="tab" aria-controls="en" aria-selected="false">
        الدورى الأنجليزى
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="sp-tab" data-toggle="pill" href="#sp" role="tab" aria-controls="sp" aria-selected="false">
        الدورى الأسبانى
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="it-tab" data-toggle="pill" href="#it" role="tab" aria-controls="it" aria-selected="false">
        الدورى الإيطالى
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="gr-tab" data-toggle="pill" href="#gr" role="tab" aria-controls="gr" aria-selected="false">
        الدورى الألمانى
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="eu-tab" data-toggle="pill" href="#eu" role="tab" aria-controls="eu" aria-selected="false">
        دورى أبطال أوروبا
      </a>
    </li>
  </ul>

  <div class="tab-content" id="pills-tabContent">

    <div class="tab-pane fade show active" id="sa" role="tabpanel" aria-labelledby="sa-tab">
      <ul class="s24-table__teams-table__tabs__list nav nav-pills my-3" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="champions-tab-sa" data-toggle="pill" href="#champions-sa" role="tab"
            aria-controls="champions-sa" aria-selected="true">
            ترتيب الفرق
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="players-tab-sa" data-toggle="pill" href="#players-sa" role="tab"
            aria-controls="players-sa" aria-selected="false">
            ترتيب الهدافين
          </a>
        </li>
      </ul>
      <div>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="champions-sa" role="tabpanel" aria-labelledby="champions-tab-sa">
            <div class="s24-table-teams">
              <table class="w-100">
                <thead>
                  <tr class="text-muted">
                    <td>الترتيب</td>
                    <td>النادي</td>
                    <td>لعب</td>
                    <td>فاز</td>
                    <td>تعادل</td>
                    <td>خسر</td>
                    <td>له</td>
                    <td>عليه</td>
                    <td>GD</td>
                    <td>نقاط</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($seasons[4]['data']['teams_standings'] as $team)
                  <tr>
                    <td> {{ $team['position'] }} </td>
                    <td> {{ $team['full_name'] }} </td>
                    <td> {{ $team['matches_total'] }} </td>
                    <td> {{ $team['matches_won'] }} </td>
                    <td> {{ $team['matches_draw'] }} </td>
                    <td> {{ $team['matches_lost'] }} </td>
                    <td> {{ $team['score_for'] }} </td>
                    <td> {{ $team['score_against'] }} </td>
                    <td> {{ $team['score_difference'] }} </td>
                    <td> {{ $team['points'] }} </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="players-sa" role="tabpanel" aria-labelledby="players-tab-sa">
            <div class="s24-table-players">
              <table class="w-100">
                <thead>
                  <tr class="text-muted">
                    <td class="">الترتيب</td>
                    <td class="">اللاعب</td>
                    <td class="">عدد الاهداف</td>
                    <td class="">النادي</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($seasons[4]['data']['players_standings'] as $player)
                  <tr>
                    <td> {{ $player['position'] }} </td>
                    <td> 
                      <img src="{{ $player['player_picture'] }}"
                           class="ml-1" alt="{{ $player['nickname'] }}"
                           onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                      {{ $player['nickname'] }}
                    </td>
                    <td> {{ $player['count'] }} </td>
                    <td> {{ $player['team']['full_name'] }} </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="en-tab">

      <ul class="s24-table__teams-table__tabs__list nav nav-pills my-3" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="champions-tab-en" data-toggle="pill" href="#champions-en" role="tab"
            aria-controls="champions-en" aria-selected="true">
            ترتيب الفرق
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="players-tab-en" data-toggle="pill" href="#players-en" role="tab"
            aria-controls="players-en" aria-selected="false">
            ترتيب الهدافين
          </a>
        </li>
      </ul>

      <div>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="champions-en" role="tabpanel" aria-labelledby="champions-tab-en">
            <div class="s24-table-teams">
              <table class="w-100">
                <thead>
                  <tr class="text-muted">
                    <td>الترتيب</td>
                    <td>النادي</td>
                    <td>لعب</td>
                    <td>فاز</td>
                    <td>تعادل</td>
                    <td>خسر</td>
                    <td>له</td>
                    <td>عليه</td>
                    <td>GD</td>
                    <td>نقاط</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($seasons[0]['data']['teams_standings'] as $team)
                  <tr>
                    <td> {{ $team['position'] }} </td>
                    <td> {{ $team['full_name'] }} </td>
                    <td> {{ $team['matches_total'] }} </td>
                    <td> {{ $team['matches_won'] }} </td>
                    <td> {{ $team['matches_draw'] }} </td>
                    <td> {{ $team['matches_lost'] }} </td>
                    <td> {{ $team['score_for'] }} </td>
                    <td> {{ $team['score_against'] }} </td>
                    <td> {{ $team['score_difference'] }} </td>
                    <td> {{ $team['points'] }} </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="players-en" role="tabpanel" aria-labelledby="players-tab-en">
            <div class="s24-table-players">
              <table class="w-100">
                <thead>
                  <tr class="text-muted">
                    <td class="">الترتيب</td>
                    <td class="">اللاعب</td>
                    <td class="">عدد الاهداف</td>
                    <td class="">النادي</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($seasons[0]['data']['players_standings'] as $player)
                  <tr>
                    <td> {{ $player['position'] }} </td>
                    <td> 
                      <img src="{{ $player['player_picture'] }}"
                           class="ml-1" alt="{{ $player['nickname'] }}"
                           onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                      {{ $player['nickname'] }}
                    </td>
                    <td> {{ $player['count'] }} </td>
                    <td> {{ $player['team']['full_name'] }} </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="sp" role="tabpanel" aria-labelledby="sp-tab">
      <ul class="s24-table__teams-table__tabs__list nav nav-pills my-3" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="champions-tab-sp" data-toggle="pill" href="#champions-sp" role="tab"
            aria-controls="champions-sp" aria-selected="true">
            ترتيب الفرق
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="players-tab-sp" data-toggle="pill" href="#players-sp" role="tab"
            aria-controls="players-sp" aria-selected="false">
            ترتيب الهدافين
          </a>
        </li>
      </ul>

      <div>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="champions-sp" role="tabpanel" aria-labelledby="champions-tab-sp">
            <div class="s24-table-teams">
              <table class="w-100">
                <thead>
                  <tr class="text-muted">
                    <td>الترتيب</td>
                    <td>النادي</td>
                    <td>لعب</td>
                    <td>فاز</td>
                    <td>تعادل</td>
                    <td>خسر</td>
                    <td>له</td>
                    <td>عليه</td>
                    <td>GD</td>
                    <td>نقاط</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($seasons[2]['data']['teams_standings'] as $team)
                  <tr>
                    <td> {{ $team['position'] }} </td>
                    <td> {{ $team['full_name'] }} </td>
                    <td> {{ $team['matches_total'] }} </td>
                    <td> {{ $team['matches_won'] }} </td>
                    <td> {{ $team['matches_draw'] }} </td>
                    <td> {{ $team['matches_lost'] }} </td>
                    <td> {{ $team['score_for'] }} </td>
                    <td> {{ $team['score_against'] }} </td>
                    <td> {{ $team['score_difference'] }} </td>
                    <td> {{ $team['points'] }} </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="players-sp" role="tabpanel" aria-labelledby="players-tab-sp">
            <div class="s24-table-players">
              <table class="w-100">
                <thead>
                  <tr class="text-muted">
                    <td> الترتيب </td>
                    <td> اللاعب </td>
                    <td> عدد الاهداف </td>
                    <td> النادي </td>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($seasons[2]['data']['players_standings'] as $player)
                  <tr>
                    <td> {{ $player['position'] }} </td>
                    <td> 
                      <img src="{{ $player['player_picture'] }}"
                           class="ml-1" alt="{{ $player['nickname'] }}"
                           onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                      {{ $player['nickname'] }}
                    </td>
                    <td> {{ $player['count'] }} </td>
                    <td> {{ $player['team']['full_name'] }} </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="it" role="tabpanel" aria-labelledby="it-tab">

      <ul class="s24-table__teams-table__tabs__list nav nav-pills my-3" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="champions-tab-it" data-toggle="pill" href="#champions-it" role="tab"
            aria-controls="champions-it" aria-selected="true">
            ترتيب الفرق
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="players-tab-it" data-toggle="pill" href="#players-it" role="tab"
            aria-controls="players-it" aria-selected="false">
            ترتيب الهدافين
          </a>
        </li>
      </ul>

      <div>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="champions-it" role="tabpanel" aria-labelledby="champions-tab-it">
            <div class="s24-table-teams">
              <table class="w-100">
                <thead>
                  <tr class="text-muted">
                    <td>الترتيب</td>
                    <td>النادي</td>
                    <td>لعب</td>
                    <td>فاز</td>
                    <td>تعادل</td>
                    <td>خسر</td>
                    <td>له</td>
                    <td>عليه</td>
                    <td>GD</td>
                    <td>نقاط</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($seasons[3]['data']['teams_standings'] as $team)
                  <tr>
                    <td> {{ $team['position'] }} </td>
                    <td> {{ $team['full_name'] }} </td>
                    <td> {{ $team['matches_total'] }} </td>
                    <td> {{ $team['matches_won'] }} </td>
                    <td> {{ $team['matches_draw'] }} </td>
                    <td> {{ $team['matches_lost'] }} </td>
                    <td> {{ $team['score_for'] }} </td>
                    <td> {{ $team['score_against'] }} </td>
                    <td> {{ $team['score_difference'] }} </td>
                    <td> {{ $team['points'] }} </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="players-it" role="tabpanel" aria-labelledby="players-tab-it">
            <div class="s24-table-players">
              <table class="w-100">
                <thead>
                  <tr class="text-muted">
                    <td> الترتيب </td>
                    <td> اللاعب </td>
                    <td> عدد الاهداف </td>
                    <td> النادي </td>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($seasons[3]['data']['players_standings'] as $player)
                  <tr>
                    <td> {{ $player['position'] }} </td>
                    <td> 
                      <img src="{{ $player['player_picture'] }}"
                           class="ml-1" alt="{{ $player['nickname'] }}"
                           onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                      {{ $player['nickname'] }}
                    </td>
                    <td> {{ $player['count'] }} </td>
                    <td> {{ $player['team']['full_name'] }} </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="gr" role="tabpanel" aria-labelledby="gr-tab">

      <ul class="s24-table__teams-table__tabs__list nav nav-pills my-3" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="champions-tab-gr" data-toggle="pill" href="#champions-gr" role="tab"
            aria-controls="champions-gr" aria-selected="true">
            ترتيب الفرق
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="players-tab-gr" data-toggle="pill" href="#players-gr" role="tab"
            aria-controls="players-gr" aria-selected="false">
            ترتيب الهدافين
          </a>
        </li>
      </ul>

      <div>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="champions-gr" role="tabpanel" aria-labelledby="champions-tab-gr">
            <div class="s24-table-teams">
              <table class="w-100">
                <thead>
                  <tr class="text-muted">
                    <td>الترتيب</td>
                    <td>النادي</td>
                    <td>لعب</td>
                    <td>فاز</td>
                    <td>تعادل</td>
                    <td>خسر</td>
                    <td>له</td>
                    <td>عليه</td>
                    <td>GD</td>
                    <td>نقاط</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($seasons[1]['data']['teams_standings'] as $team)
                  <tr>
                    <td> {{ $team['position'] }} </td>
                    <td> {{ $team['full_name'] }} </td>
                    <td> {{ $team['matches_total'] }} </td>
                    <td> {{ $team['matches_won'] }} </td>
                    <td> {{ $team['matches_draw'] }} </td>
                    <td> {{ $team['matches_lost'] }} </td>
                    <td> {{ $team['score_for'] }} </td>
                    <td> {{ $team['score_against'] }} </td>
                    <td> {{ $team['score_difference'] }} </td>
                    <td> {{ $team['points'] }} </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="players-gr" role="tabpanel" aria-labelledby="players-tab-gr">
            <div class="s24-table-players">
              <table class="w-100">
                <thead>
                  <tr class="text-muted">
                    <td> الترتيب </td>
                    <td> اللاعب </td>
                    <td> عدد الاهداف </td>
                    <td> النادي </td>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($seasons[1]['data']['players_standings'] as $player)
                  <tr>
                    <td> {{ $player['position'] }} </td>
                    <td> 
                      <img src="{{ $player['player_picture'] }}"
                           class="ml-1" alt="{{ $player['nickname'] }}"
                           onerror="if (this.src != 'error.jpg') this.src = '/img/desktop/defaultimg.png';">
                      {{ $player['nickname'] }}
                    </td>
                    <td> {{ $player['count'] }} </td>
                    <td> {{ $player['team']['full_name'] }} </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane fade show active" id="eu" role="tabpanel" aria-labelledby="eu-tab">
    </div>

  </div>
</div>