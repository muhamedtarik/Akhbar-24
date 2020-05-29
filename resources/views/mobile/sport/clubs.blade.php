@extends('layouts.mobile.app')
@section('content')
  @include('layouts.mobile.menu')
  <div id="container">
    @include('layouts.mobile.nav')

    <div class="clubs">
      <ul>
        <li><a href="{{ route('mobile.sport.clubs.news', ['club' => 'نادى الهلال']) }}"><img src="/img/mobile/team1.png">الهلال</a></li>
        <li><a href="{{ route('mobile.sport.clubs.news', ['club' => 'نادى النصر']) }}"><img src="/img/mobile/team2.png">النصر</a></li>
        <li><a href="{{ route('mobile.sport.clubs.news', ['club' => 'أهلى جدة']) }}"><img src="/img/mobile/team3.png">أهلي جدة</a></li>
        <li><a href="{{ route('mobile.sport.clubs.news', ['club' => 'نادى الفيصلى']) }}"><img src="/img/mobile/team4.png">الفيصلي</a></li>
        <li><a href="{{ route('mobile.sport.clubs.news', ['club' => 'نادى التعاون']) }}"><img src="/img/mobile/team5.png">التعاون</a></li>
      </ul>

    </div>

  </div>
@endsection
