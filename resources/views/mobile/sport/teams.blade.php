@extends('layouts.mobile.app')
@section('content')
  @include('layouts.mobile.menu')
  <div id="container">
    @include('layouts.mobile.sport.nav')

    <div class="container-fluid p-0 bg-light pb-4 position-relative">

      <div class="teams__heading d-flex justify-content-between align-items-center">
        <span class="teams__heading__country">
          <img src="/img/mobile/saudi.png" class="ml-1">
          <span class="leauge__name">
            الدوري السعودي
          </span>
        </span>
        <span class="teams__heading__icon pl-1">
          <i class="fa fa-angle-down" aria-hidden="true"></i>
        </span>
      </div>

      <ul class="teams__dropdown nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item teams__dropdown__list">
          <a class="nav-link teams__dropdown__list__link active" id="english-tab" data-toggle="tab" href="#english" role="tab" aria-controls="english" aria-selected="true">
            <img src="/img/mobile/saudi.png">
            الدوري الانجليزي
          </a>
        </li>
        <li class="nav-item teams__dropdown__list">
          <a class="nav-link teams__dropdown__list__link" id="spain-tab" data-toggle="tab" href="#spain" role="tab" aria-controls="spain" aria-selected="false">
            <img src="/img/mobile/saudi.png">
            الدوري الاسباني
          </a>
        </li>
        <li class="nav-item teams__dropdown__list">
          <a class="nav-link teams__dropdown__list__link" id="germany-tab" data-toggle="tab" href="#germany" role="tab" aria-controls="germany" aria-selected="false">
            <img src="/img/mobile/saudi.png">
            الدوري الألماني
          </a>
        </li>
        <li class="nav-item teams__dropdown__list">
          <a class="nav-link teams__dropdown__list__link" id="italy-tab" data-toggle="tab" href="#italy" role="tab" aria-controls="italy" aria-selected="false">
            <img src="/img/mobile/saudi.png">
            الدوري الايطالي
          </a>
        </li>
        <li class="nav-item teams__dropdown__list">
          <a class="nav-link teams__dropdown__list__link" id="france-tab" data-toggle="tab" href="#france" role="tab" aria-controls="france" aria-selected="false">
            <img src="/img/mobile/saudi.png">
            الدوري الفرنسي
          </a>
        </li>
      </ul>

      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="english" role="tabpanel" aria-labelledby="english-tab">      
          <ul class="teams-table__tabs__list nav nav-pills" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="champions-tab-english" data-toggle="pill" href="#champions-english" role="tab"
                  aria-controls="champions-english" aria-selected="true">
                  <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                    <path class="a"
                          d="M236.487,324.15h-9.455a1.775,1.775,0,0,0-1.773,1.773v9.455a1.773,1.773,0,0,0,1.773,1.773h9.455a1.775,1.775,0,0,0,1.773-1.773v-9.455A1.776,1.776,0,0,0,236.487,324.15Zm.591,7.88H234.32v-2.758h2.758Zm0,3.347a.593.593,0,0,1-.591.591H234.32v-2.756h2.758Zm-10.637,0v-2.165h6.7v2.756h-6.105A.591.591,0,0,1,226.442,335.377Zm0-6.105h6.7v2.758h-6.7Zm0-3.349a.591.591,0,0,1,.591-.591h6.105v2.758h-6.7Zm7.878,2.167v-2.758h2.167a.593.593,0,0,1,.591.591v2.167Z"
                          transform="translate(-225.26 -324.15)"/>
                  </svg>
                  جدول الدورى
                </a>
      
              <li class="nav-item">
                <a class="nav-link" id="players-tab-english" data-toggle="pill" href="#players-english" role="tab"
                  aria-controls="players-english" aria-selected="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                    <g transform="translate(0.139)">
                      <path class="a"
                            d="M6.5,13A6.492,6.492,0,0,1,1.909,1.909a6.493,6.493,0,1,1,9.182,9.182A6.454,6.454,0,0,1,6.5,13ZM2.218,9.158h0l2.013.423,1.083,1.794-.745.356a5.414,5.414,0,0,0,3.86,0l-.745-.356L8.768,9.581l2.015-.423.118.762A5.536,5.536,0,0,0,12.086,6.5a.776.776,0,0,0-.009-.1.86.86,0,0,1-.008-.086l-.525.559L10.122,5.315l.22-2.065.779.135A5.571,5.571,0,0,0,8.006,1.134l.39.711-1.9.813L4.6,1.845l.39-.711A5.574,5.574,0,0,0,1.879,3.385l.779-.135.22,2.065L1.455,6.873.931,6.314A.861.861,0,0,1,.922,6.4a.775.775,0,0,0-.009.1A5.539,5.539,0,0,0,2.1,9.919l.119-.761Zm5.687-.491H5.095L4.232,6.009,6.5,4.333,8.768,6.009,7.905,8.666Z"
                            transform="translate(-0.139)"/>
                    </g>
                  </svg>
                  ترتيب الهدافين</a>
              </li>
           </ul>
          <div class="tab-content" id="pills-tabContent">
           <div class="tab-pane fade show active" id="champions-english" role="tabpanel" aria-labelledby="champions-tab-english">
            <div class="teams pb-5">
              <table class="w-100">
                <thead>
                  <tr class="text-muted">
                    <td>#</td>
                    <td>الفريق</td>
                    <td>ل</td>
                    <td>ف</td>
                    <td>ت</td>
                    <td>خ</td>
                    <td>+/-</td>
                    <td>ن</td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="">
                    <td>1</td>
                    <td><img src="/img/mobile/team1.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td><img src="/img/mobile/team2.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td><img src="/img/mobile/team3.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td><img src="/img/mobile/team4.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td><img src="/img/mobile/team5.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td><img src="/img/mobile/team6.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td><img src="/img/mobile/team7.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td><img src="/img/mobile/team8.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td><img src="/img/mobile/team9.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td><img src="/img/mobile/team10.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td><img src="/img/mobile/team11.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td><img src="/img/mobile/team12.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td><img src="/img/mobile/team13.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td><img src="/img/mobile/team14.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td><img src="/img/mobile/team15.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td><img src="/img/mobile/team16.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="players-english" role="tabpanel" aria-labelledby="players-tab-english">
            <div class="players">
              <table class="w-100">
                <thead>
                  <tr class="text-muted">
                    <td class="pr-3">ترتيب</td>
                    <td class="pr-3">اللاعب</td>
                    <td class="pl-2">الفريق</td>
                    <td class="pr-2">الأهداف</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="pr-4 pl-0">1</td>
                    <td class="pr-0"><img src="/img/mobile/player8.png" class="mt-2 ml-1">كارلوس إدواردو
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">1</td>
                    <td class="pr-0"><img src="/img/mobile/player2.png" class="mt-2 ml-1">كارلوس إدواردو
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">2</td>
                    <td class="pr-0"><img src="/img/mobile/player3.png" class="mt-2 ml-1">عبد الرزاق
                      حمدالله
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">4</td>
                    <td class="pr-0"><img src="/img/mobile/player4.png" class="mt-2 ml-1">رومارينيو</td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">4</td>
                    <td class="pr-0"><img src="/img/mobile/player5.png" class="mt-2 ml-1">بافيتيمبي
                      جوميز
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">4</td>
                    <td class="pr-0"><img src="/img/mobile/player6.png" class="mt-2 ml-1">عمر السومة
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">7</td>
                    <td class="pr-0"><img src="/img/mobile/player7.png" class="mt-2 ml-1">دجانيني</td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">7</td>
                    <td class="pr-0"><img src="/img/mobile/player8.png" class="mt-2 ml-1">ميتشل تي فيردي
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">9</td>
                    <td class="pr-0"><img src="/img/mobile/player9.png" class="mt-2 ml-1">كارلوس
                      ستراندبيرج
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">9</td>
                    <td class="pr-0"><img src="/img/mobile/player10.png" class="mt-2 ml-1">ي.نياكاتى
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
  
                </tbody>
              </table>
            </div>
          </div>
          </div>
        </div>
        <div class="tab-pane fade show" id="spain" role="tabpanel" aria-labelledby="spain-tab">      
          <ul class="teams-table__tabs__list nav nav-pills" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="champions-tab-spain" data-toggle="pill" href="#champions-spain" role="tab"
                  aria-controls="champions-spain" aria-selected="true">
                  <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                    <path class="a"
                          d="M236.487,324.15h-9.455a1.775,1.775,0,0,0-1.773,1.773v9.455a1.773,1.773,0,0,0,1.773,1.773h9.455a1.775,1.775,0,0,0,1.773-1.773v-9.455A1.776,1.776,0,0,0,236.487,324.15Zm.591,7.88H234.32v-2.758h2.758Zm0,3.347a.593.593,0,0,1-.591.591H234.32v-2.756h2.758Zm-10.637,0v-2.165h6.7v2.756h-6.105A.591.591,0,0,1,226.442,335.377Zm0-6.105h6.7v2.758h-6.7Zm0-3.349a.591.591,0,0,1,.591-.591h6.105v2.758h-6.7Zm7.878,2.167v-2.758h2.167a.593.593,0,0,1,.591.591v2.167Z"
                          transform="translate(-225.26 -324.15)"/>
                  </svg>
                  جدول الدورى
                </a>
      
              <li class="nav-item">
                <a class="nav-link" id="players-tab-spain" data-toggle="pill" href="#players-spain" role="tab"
                  aria-controls="players-spain" aria-selected="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                    <g transform="translate(0.139)">
                      <path class="a"
                            d="M6.5,13A6.492,6.492,0,0,1,1.909,1.909a6.493,6.493,0,1,1,9.182,9.182A6.454,6.454,0,0,1,6.5,13ZM2.218,9.158h0l2.013.423,1.083,1.794-.745.356a5.414,5.414,0,0,0,3.86,0l-.745-.356L8.768,9.581l2.015-.423.118.762A5.536,5.536,0,0,0,12.086,6.5a.776.776,0,0,0-.009-.1.86.86,0,0,1-.008-.086l-.525.559L10.122,5.315l.22-2.065.779.135A5.571,5.571,0,0,0,8.006,1.134l.39.711-1.9.813L4.6,1.845l.39-.711A5.574,5.574,0,0,0,1.879,3.385l.779-.135.22,2.065L1.455,6.873.931,6.314A.861.861,0,0,1,.922,6.4a.775.775,0,0,0-.009.1A5.539,5.539,0,0,0,2.1,9.919l.119-.761Zm5.687-.491H5.095L4.232,6.009,6.5,4.333,8.768,6.009,7.905,8.666Z"
                            transform="translate(-0.139)"/>
                    </g>
                  </svg>
                  ترتيب الهدافين</a>
              </li>
           </ul>
          <div class="tab-content" id="pills-tabContent">
           <div class="tab-pane fade show active" id="champions-spain" role="tabpanel" aria-labelledby="champions-tab-spain">
            <div class="teams pb-5">
              <table class="w-100">
                <thead>
                  <tr class="text-muted">
                    <td>#</td>
                    <td>الفريق</td>
                    <td>ل</td>
                    <td>ف</td>
                    <td>ت</td>
                    <td>خ</td>
                    <td>+/-</td>
                    <td>ن</td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="">
                    <td>1</td>
                    <td><img src="/img/mobile/team1.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td><img src="/img/mobile/team2.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td><img src="/img/mobile/team3.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td><img src="/img/mobile/team4.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td><img src="/img/mobile/team5.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td><img src="/img/mobile/team6.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td><img src="/img/mobile/team7.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td><img src="/img/mobile/team8.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td><img src="/img/mobile/team9.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td><img src="/img/mobile/team10.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td><img src="/img/mobile/team11.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td><img src="/img/mobile/team12.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td><img src="/img/mobile/team13.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td><img src="/img/mobile/team14.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td><img src="/img/mobile/team15.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td><img src="/img/mobile/team16.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="players-spain" role="tabpanel" aria-labelledby="players-tab-spain">
            <div class="players">
              <table class="w-100">
                <thead>
                  <tr class="text-muted">
                    <td class="pr-3">ترتيب</td>
                    <td class="pr-3">اللاعب</td>
                    <td class="pl-2">الفريق</td>
                    <td class="pr-2">الأهداف</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="pr-4 pl-0">1</td>
                    <td class="pr-0"><img src="/img/mobile/player8.png" class="mt-2 ml-1">كارلوس إدواردو
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">1</td>
                    <td class="pr-0"><img src="/img/mobile/player2.png" class="mt-2 ml-1">كارلوس إدواردو
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">2</td>
                    <td class="pr-0"><img src="/img/mobile/player3.png" class="mt-2 ml-1">عبد الرزاق
                      حمدالله
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">4</td>
                    <td class="pr-0"><img src="/img/mobile/player4.png" class="mt-2 ml-1">رومارينيو</td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">4</td>
                    <td class="pr-0"><img src="/img/mobile/player5.png" class="mt-2 ml-1">بافيتيمبي
                      جوميز
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">4</td>
                    <td class="pr-0"><img src="/img/mobile/player6.png" class="mt-2 ml-1">عمر السومة
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">7</td>
                    <td class="pr-0"><img src="/img/mobile/player7.png" class="mt-2 ml-1">دجانيني</td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">7</td>
                    <td class="pr-0"><img src="/img/mobile/player8.png" class="mt-2 ml-1">ميتشل تي فيردي
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">9</td>
                    <td class="pr-0"><img src="/img/mobile/player9.png" class="mt-2 ml-1">كارلوس
                      ستراندبيرج
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">9</td>
                    <td class="pr-0"><img src="/img/mobile/player10.png" class="mt-2 ml-1">ي.نياكاتى
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
  
                </tbody>
              </table>
            </div>
          </div>
          </div>
        </div>
        <div class="tab-pane fade show" id="germany" role="tabpanel" aria-labelledby="germany-tab">      
          <ul class="teams-table__tabs__list nav nav-pills" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="champions-tab-germany" data-toggle="pill" href="#champions-germany" role="tab"
                  aria-controls="champions-germany" aria-selected="true">
                  <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                    <path class="a"
                          d="M236.487,324.15h-9.455a1.775,1.775,0,0,0-1.773,1.773v9.455a1.773,1.773,0,0,0,1.773,1.773h9.455a1.775,1.775,0,0,0,1.773-1.773v-9.455A1.776,1.776,0,0,0,236.487,324.15Zm.591,7.88H234.32v-2.758h2.758Zm0,3.347a.593.593,0,0,1-.591.591H234.32v-2.756h2.758Zm-10.637,0v-2.165h6.7v2.756h-6.105A.591.591,0,0,1,226.442,335.377Zm0-6.105h6.7v2.758h-6.7Zm0-3.349a.591.591,0,0,1,.591-.591h6.105v2.758h-6.7Zm7.878,2.167v-2.758h2.167a.593.593,0,0,1,.591.591v2.167Z"
                          transform="translate(-225.26 -324.15)"/>
                  </svg>
                  جدول الدورى
                </a>
      
              <li class="nav-item">
                <a class="nav-link" id="players-tab-germany" data-toggle="pill" href="#players-germany" role="tab"
                  aria-controls="players-germany" aria-selected="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                    <g transform="translate(0.139)">
                      <path class="a"
                            d="M6.5,13A6.492,6.492,0,0,1,1.909,1.909a6.493,6.493,0,1,1,9.182,9.182A6.454,6.454,0,0,1,6.5,13ZM2.218,9.158h0l2.013.423,1.083,1.794-.745.356a5.414,5.414,0,0,0,3.86,0l-.745-.356L8.768,9.581l2.015-.423.118.762A5.536,5.536,0,0,0,12.086,6.5a.776.776,0,0,0-.009-.1.86.86,0,0,1-.008-.086l-.525.559L10.122,5.315l.22-2.065.779.135A5.571,5.571,0,0,0,8.006,1.134l.39.711-1.9.813L4.6,1.845l.39-.711A5.574,5.574,0,0,0,1.879,3.385l.779-.135.22,2.065L1.455,6.873.931,6.314A.861.861,0,0,1,.922,6.4a.775.775,0,0,0-.009.1A5.539,5.539,0,0,0,2.1,9.919l.119-.761Zm5.687-.491H5.095L4.232,6.009,6.5,4.333,8.768,6.009,7.905,8.666Z"
                            transform="translate(-0.139)"/>
                    </g>
                  </svg>
                  ترتيب الهدافين</a>
              </li>
           </ul>
          <div class="tab-content" id="pills-tabContent">
           <div class="tab-pane fade show active" id="champions-germany" role="tabpanel" aria-labelledby="champions-tab-germany">
            <div class="teams pb-5">
              <table class="w-100">
                <thead>
                  <tr class="text-muted">
                    <td>#</td>
                    <td>الفريق</td>
                    <td>ل</td>
                    <td>ف</td>
                    <td>ت</td>
                    <td>خ</td>
                    <td>+/-</td>
                    <td>ن</td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="">
                    <td>1</td>
                    <td><img src="/img/mobile/team1.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td><img src="/img/mobile/team2.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td><img src="/img/mobile/team3.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td><img src="/img/mobile/team4.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td><img src="/img/mobile/team5.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td><img src="/img/mobile/team6.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td><img src="/img/mobile/team7.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td><img src="/img/mobile/team8.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td><img src="/img/mobile/team9.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td><img src="/img/mobile/team10.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td><img src="/img/mobile/team11.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td><img src="/img/mobile/team12.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td><img src="/img/mobile/team13.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td><img src="/img/mobile/team14.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td><img src="/img/mobile/team15.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td><img src="/img/mobile/team16.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="players-germany" role="tabpanel" aria-labelledby="players-tab-germany">
            <div class="players">
              <table class="w-100">
                <thead>
                  <tr class="text-muted">
                    <td class="pr-3">ترتيب</td>
                    <td class="pr-3">اللاعب</td>
                    <td class="pl-2">الفريق</td>
                    <td class="pr-2">الأهداف</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="pr-4 pl-0">1</td>
                    <td class="pr-0"><img src="/img/mobile/player8.png" class="mt-2 ml-1">كارلوس إدواردو
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">1</td>
                    <td class="pr-0"><img src="/img/mobile/player2.png" class="mt-2 ml-1">كارلوس إدواردو
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">2</td>
                    <td class="pr-0"><img src="/img/mobile/player3.png" class="mt-2 ml-1">عبد الرزاق
                      حمدالله
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">4</td>
                    <td class="pr-0"><img src="/img/mobile/player4.png" class="mt-2 ml-1">رومارينيو</td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">4</td>
                    <td class="pr-0"><img src="/img/mobile/player5.png" class="mt-2 ml-1">بافيتيمبي
                      جوميز
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">4</td>
                    <td class="pr-0"><img src="/img/mobile/player6.png" class="mt-2 ml-1">عمر السومة
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">7</td>
                    <td class="pr-0"><img src="/img/mobile/player7.png" class="mt-2 ml-1">دجانيني</td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">7</td>
                    <td class="pr-0"><img src="/img/mobile/player8.png" class="mt-2 ml-1">ميتشل تي فيردي
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">9</td>
                    <td class="pr-0"><img src="/img/mobile/player9.png" class="mt-2 ml-1">كارلوس
                      ستراندبيرج
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">9</td>
                    <td class="pr-0"><img src="/img/mobile/player10.png" class="mt-2 ml-1">ي.نياكاتى
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
  
                </tbody>
              </table>
            </div>
          </div>
          </div>
        </div>
        <div class="tab-pane fade show" id="italy" role="tabpanel" aria-labelledby="italy-tab">      
          <ul class="teams-table__tabs__list nav nav-pills" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="champions-tab-italy" data-toggle="pill" href="#champions-italy" role="tab"
                  aria-controls="champions-italy" aria-selected="true">
                  <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                    <path class="a"
                          d="M236.487,324.15h-9.455a1.775,1.775,0,0,0-1.773,1.773v9.455a1.773,1.773,0,0,0,1.773,1.773h9.455a1.775,1.775,0,0,0,1.773-1.773v-9.455A1.776,1.776,0,0,0,236.487,324.15Zm.591,7.88H234.32v-2.758h2.758Zm0,3.347a.593.593,0,0,1-.591.591H234.32v-2.756h2.758Zm-10.637,0v-2.165h6.7v2.756h-6.105A.591.591,0,0,1,226.442,335.377Zm0-6.105h6.7v2.758h-6.7Zm0-3.349a.591.591,0,0,1,.591-.591h6.105v2.758h-6.7Zm7.878,2.167v-2.758h2.167a.593.593,0,0,1,.591.591v2.167Z"
                          transform="translate(-225.26 -324.15)"/>
                  </svg>
                  جدول الدورى
                </a>
      
              <li class="nav-item">
                <a class="nav-link" id="players-tab" data-toggle="pill" href="#players-italy" role="tab"
                  aria-controls="players-italy" aria-selected="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                    <g transform="translate(0.139)">
                      <path class="a"
                            d="M6.5,13A6.492,6.492,0,0,1,1.909,1.909a6.493,6.493,0,1,1,9.182,9.182A6.454,6.454,0,0,1,6.5,13ZM2.218,9.158h0l2.013.423,1.083,1.794-.745.356a5.414,5.414,0,0,0,3.86,0l-.745-.356L8.768,9.581l2.015-.423.118.762A5.536,5.536,0,0,0,12.086,6.5a.776.776,0,0,0-.009-.1.86.86,0,0,1-.008-.086l-.525.559L10.122,5.315l.22-2.065.779.135A5.571,5.571,0,0,0,8.006,1.134l.39.711-1.9.813L4.6,1.845l.39-.711A5.574,5.574,0,0,0,1.879,3.385l.779-.135.22,2.065L1.455,6.873.931,6.314A.861.861,0,0,1,.922,6.4a.775.775,0,0,0-.009.1A5.539,5.539,0,0,0,2.1,9.919l.119-.761Zm5.687-.491H5.095L4.232,6.009,6.5,4.333,8.768,6.009,7.905,8.666Z"
                            transform="translate(-0.139)"/>
                    </g>
                  </svg>
                  ترتيب الهدافين</a>
              </li>
           </ul>
          <div class="tab-content" id="pills-tabContent">
           <div class="tab-pane fade show active" id="champions-italy" role="tabpanel" aria-labelledby="champions-tab-italy">
            <div class="teams pb-5">
              <table class="w-100">
                <thead>
                  <tr class="text-muted">
                    <td>#</td>
                    <td>الفريق</td>
                    <td>ل</td>
                    <td>ف</td>
                    <td>ت</td>
                    <td>خ</td>
                    <td>+/-</td>
                    <td>ن</td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="">
                    <td>1</td>
                    <td><img src="/img/mobile/team1.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td><img src="/img/mobile/team2.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td><img src="/img/mobile/team3.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td><img src="/img/mobile/team4.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td><img src="/img/mobile/team5.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td><img src="/img/mobile/team6.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td><img src="/img/mobile/team7.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td><img src="/img/mobile/team8.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td><img src="/img/mobile/team9.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td><img src="/img/mobile/team10.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td><img src="/img/mobile/team11.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td><img src="/img/mobile/team12.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td><img src="/img/mobile/team13.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td><img src="/img/mobile/team14.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td><img src="/img/mobile/team15.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td><img src="/img/mobile/team16.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="players-italy" role="tabpanel" aria-labelledby="players-tab-italy">
            <div class="players">
              <table class="w-100">
                <thead>
                  <tr class="text-muted">
                    <td class="pr-3">ترتيب</td>
                    <td class="pr-3">اللاعب</td>
                    <td class="pl-2">الفريق</td>
                    <td class="pr-2">الأهداف</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="pr-4 pl-0">1</td>
                    <td class="pr-0"><img src="/img/mobile/player8.png" class="mt-2 ml-1">كارلوس إدواردو
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">1</td>
                    <td class="pr-0"><img src="/img/mobile/player2.png" class="mt-2 ml-1">كارلوس إدواردو
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">2</td>
                    <td class="pr-0"><img src="/img/mobile/player3.png" class="mt-2 ml-1">عبد الرزاق
                      حمدالله
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">4</td>
                    <td class="pr-0"><img src="/img/mobile/player4.png" class="mt-2 ml-1">رومارينيو</td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">4</td>
                    <td class="pr-0"><img src="/img/mobile/player5.png" class="mt-2 ml-1">بافيتيمبي
                      جوميز
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">4</td>
                    <td class="pr-0"><img src="/img/mobile/player6.png" class="mt-2 ml-1">عمر السومة
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">7</td>
                    <td class="pr-0"><img src="/img/mobile/player7.png" class="mt-2 ml-1">دجانيني</td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">7</td>
                    <td class="pr-0"><img src="/img/mobile/player8.png" class="mt-2 ml-1">ميتشل تي فيردي
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">9</td>
                    <td class="pr-0"><img src="/img/mobile/player9.png" class="mt-2 ml-1">كارلوس
                      ستراندبيرج
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">9</td>
                    <td class="pr-0"><img src="/img/mobile/player10.png" class="mt-2 ml-1">ي.نياكاتى
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
  
                </tbody>
              </table>
            </div>
          </div>
          </div>
        </div>
        <div class="tab-pane fade show" id="france" role="tabpanel" aria-labelledby="france-tab">      
          <ul class="teams-table__tabs__list nav nav-pills" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="champions-tab-france" data-toggle="pill" href="#champions-france" role="tab"
                  aria-controls="champions-france" aria-selected="true">
                  <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                    <path class="a"
                          d="M236.487,324.15h-9.455a1.775,1.775,0,0,0-1.773,1.773v9.455a1.773,1.773,0,0,0,1.773,1.773h9.455a1.775,1.775,0,0,0,1.773-1.773v-9.455A1.776,1.776,0,0,0,236.487,324.15Zm.591,7.88H234.32v-2.758h2.758Zm0,3.347a.593.593,0,0,1-.591.591H234.32v-2.756h2.758Zm-10.637,0v-2.165h6.7v2.756h-6.105A.591.591,0,0,1,226.442,335.377Zm0-6.105h6.7v2.758h-6.7Zm0-3.349a.591.591,0,0,1,.591-.591h6.105v2.758h-6.7Zm7.878,2.167v-2.758h2.167a.593.593,0,0,1,.591.591v2.167Z"
                          transform="translate(-225.26 -324.15)"/>
                  </svg>
                  جدول الدورى
                </a>
      
              <li class="nav-item">
                <a class="nav-link" id="players-tab-france" data-toggle="pill" href="#players-france" role="tab"
                  aria-controls="players-france" aria-selected="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                    <g transform="translate(0.139)">
                      <path class="a"
                            d="M6.5,13A6.492,6.492,0,0,1,1.909,1.909a6.493,6.493,0,1,1,9.182,9.182A6.454,6.454,0,0,1,6.5,13ZM2.218,9.158h0l2.013.423,1.083,1.794-.745.356a5.414,5.414,0,0,0,3.86,0l-.745-.356L8.768,9.581l2.015-.423.118.762A5.536,5.536,0,0,0,12.086,6.5a.776.776,0,0,0-.009-.1.86.86,0,0,1-.008-.086l-.525.559L10.122,5.315l.22-2.065.779.135A5.571,5.571,0,0,0,8.006,1.134l.39.711-1.9.813L4.6,1.845l.39-.711A5.574,5.574,0,0,0,1.879,3.385l.779-.135.22,2.065L1.455,6.873.931,6.314A.861.861,0,0,1,.922,6.4a.775.775,0,0,0-.009.1A5.539,5.539,0,0,0,2.1,9.919l.119-.761Zm5.687-.491H5.095L4.232,6.009,6.5,4.333,8.768,6.009,7.905,8.666Z"
                            transform="translate(-0.139)"/>
                    </g>
                  </svg>
                  ترتيب الهدافين</a>
              </li>
           </ul>
          <div class="tab-content" id="pills-tabContent">
           <div class="tab-pane fade show active" id="champions-france" role="tabpanel" aria-labelledby="champions-tab-france">
            <div class="teams pb-5">
              <table class="w-100">
                <thead>
                  <tr class="text-muted">
                    <td>#</td>
                    <td>الفريق</td>
                    <td>ل</td>
                    <td>ف</td>
                    <td>ت</td>
                    <td>خ</td>
                    <td>+/-</td>
                    <td>ن</td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="">
                    <td>1</td>
                    <td><img src="/img/mobile/team1.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td><img src="/img/mobile/team2.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td><img src="/img/mobile/team3.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td><img src="/img/mobile/team4.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td><img src="/img/mobile/team5.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td><img src="/img/mobile/team6.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td><img src="/img/mobile/team7.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td><img src="/img/mobile/team8.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td><img src="/img/mobile/team9.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td><img src="/img/mobile/team10.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td><img src="/img/mobile/team11.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td><img src="/img/mobile/team12.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td><img src="/img/mobile/team13.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td><img src="/img/mobile/team14.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td><img src="/img/mobile/team15.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td><img src="/img/mobile/team16.png"> الهلال</td>
                    <td>9</td>
                    <td>6</td>
                    <td>2</td>
                    <td>1</td>
                    <td>15</td>
                    <td>20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="players-france" role="tabpanel" aria-labelledby="players-tab-france">
            <div class="players">
              <table class="w-100">
                <thead>
                  <tr class="text-muted">
                    <td class="pr-3">ترتيب</td>
                    <td class="pr-3">اللاعب</td>
                    <td class="pl-2">الفريق</td>
                    <td class="pr-2">الأهداف</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="pr-4 pl-0">1</td>
                    <td class="pr-0"><img src="/img/mobile/player8.png" class="mt-2 ml-1">كارلوس إدواردو
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">1</td>
                    <td class="pr-0"><img src="/img/mobile/player2.png" class="mt-2 ml-1">كارلوس إدواردو
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">2</td>
                    <td class="pr-0"><img src="/img/mobile/player3.png" class="mt-2 ml-1">عبد الرزاق
                      حمدالله
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">4</td>
                    <td class="pr-0"><img src="/img/mobile/player4.png" class="mt-2 ml-1">رومارينيو</td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">4</td>
                    <td class="pr-0"><img src="/img/mobile/player5.png" class="mt-2 ml-1">بافيتيمبي
                      جوميز
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">4</td>
                    <td class="pr-0"><img src="/img/mobile/player6.png" class="mt-2 ml-1">عمر السومة
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">7</td>
                    <td class="pr-0"><img src="/img/mobile/player7.png" class="mt-2 ml-1">دجانيني</td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">7</td>
                    <td class="pr-0"><img src="/img/mobile/player8.png" class="mt-2 ml-1">ميتشل تي فيردي
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">9</td>
                    <td class="pr-0"><img src="/img/mobile/player9.png" class="mt-2 ml-1">كارلوس
                      ستراندبيرج
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
                  <tr>
                    <td class="pr-4 pl-0">9</td>
                    <td class="pr-0"><img src="/img/mobile/player10.png" class="mt-2 ml-1">ي.نياكاتى
                    </td>
                    <td class="pl-2">الهلال</td>
                    <td class="pr-4">8</td>
                  </tr>
  
                </tbody>
              </table>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


@push('js')
  <script>
    $(document).ready(function () {
      $('.teams__heading').click(function () {
        $('.teams__dropdown').toggle();
        $('.teams__heading__icon').toggleClass("rotation");

      });

      $('.teams__dropdown a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        let championsText = $(e.target).text(); 
          $(".teams__heading__country .leauge__name").text(championsText);
          let championsIMg = $(e.target).find("img").attr("src"); 
          $(".teams__heading__country img").attr("src",championsIMg);
     })
    });


  </script>
@endpush
