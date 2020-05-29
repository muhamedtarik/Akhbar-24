<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name') }}</title>

  <link rel="shortcut icon" href="/img/mobile/favicon.ico" />

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  {{-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> --}}
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <!-- Styles -->
  <link href="{{ mix('css/desktop/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="/css/desktop/fancybox3/jquery.fancybox.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <style>
    .loading-overlay {
      background: #222;
      color: #FFF;
      position: fixed;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      z-index: 99999;
      display: none;
    }

    .spinner {
      width: 60px;
      height: 60px;
      position: relative;
      margin: 300px auto;
    }

    .double-bounce1,
    .double-bounce2 {
      width: 100%;
      height: 100%;
      border-radius: 50%;
      background-color: #FFF;
      opacity: 0.6;
      position: absolute;
      top: 0;
      left: 0;
      -webkit-animation: bounce 2.0s infinite ease-in-out;
      animation: bounce 2.0s infinite ease-in-out;
    }

    .double-bounce2 {
      -webkit-animation-delay: -1.0s;
      animation-delay: -1.0s;
    }

    @-webkit-keyframes bounce {

      0%,
      100% {
        -webkit-transform: scale(0.0)
      }

      50% {
        -webkit-transform: scale(1.0)
      }
    }

    @keyframes bounce {

      0%,
      100% {
        transform: scale(0.0);
        -webkit-transform: scale(0.0);
      }

      50% {
        transform: scale(1.0);
        -webkit-transform: scale(1.0);
      }
    }

  </style>
  <!-- Google Tag Manager -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WDN3BQK');

  </script>
  <!-- End Google Tag Manager -->
</head>

<body>
  <div id="app">
    <div class="loading-overlay">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>
    <main>
      @yield('content')
    </main>
  </div>
  <script src="{{ mix('js/desktop/app.js') }}"></script>
  <script src="/js/desktop/main.js"></script>
  @stack('js')

  <script>
    $(document).ready(function () {
      $(window).on('resize', function () {
        if ($(window).width() < 767) {
          $('.loading-overlay').css('display', 'block');
          location.reload();
        } else {
         return false;
        }
      });
    });

  </script>
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WDN3BQK" height="0" width="0"
      style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->

  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  @if(session('message'))
    <script>
      toastr.{{ session('type') }}("{{ session('message') }}");
    </script>
  @endif

  @if($errors->any())
    <script>
      @foreach($errors->all() as $error)
        toastr.error("{{ $error }}");
      @endforeach
    </script>
  @endif
</body>

</html>
