<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link rel="shortcut icon" href="/img/mobile/favicon.ico"/>
    <!-- Fonts -->
    <link rel="stylesheet"
          href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/mobile/slick.css" rel="stylesheet">
    <link href="/css/mobile/slick-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/mobile/fancybox3/jquery.fancybox.css">
    {{-- <link rel="stylesheet" href="/css/mobile/blueimp-gallery.css"> --}}
    <link href="{{ mix('css/mobile/app.css') }}" rel="stylesheet">
    @stack('css')
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
    <div class="alert text-center cookiealert" role="alert">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 text-center">

            <p>
              قامت أخبار24 بتحديث سياسة الخصوصية <a href="#">من هنا</a>
            </p>
          </div>

          <div class="col-12  text-center">
            <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
              أوافق
            </button>
          </div>
        </div>
      </div>
    </div>
    <div id="app">
      <main>
        <div>
          @yield('content')
        </div>
      </main>
    </div>
    <script src="{{ mix('js/mobile/app.js') }}"></script>
    <script src="/js/mobile/a24menu.js"></script>
    <script>
      (function () {
        "use strict";

        var cookieAlert = document.querySelector(".cookiealert");
        var acceptCookies = document.querySelector(".acceptcookies");

        if (!cookieAlert) {
          return;
        }

        cookieAlert.offsetHeight; // Force browser to trigger reflow (https://stackoverflow.com/a/39451131)

        // Show the alert if we cant find the "acceptCookies" cookie
        if (!getCookie("acceptCookies")) {
          cookieAlert.classList.add("show");
        }

        // When clicking on the agree button, create a 1 year
        // cookie to remember user's choice and close the banner
        acceptCookies.addEventListener("click", function () {
          setCookie("acceptCookies", true, 365);
          cookieAlert.classList.remove("show");
        });

        // Cookie functions from w3schools
        function setCookie(cname, cvalue, exdays) {
          var d = new Date();
          d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
          var expires = "expires=" + d.toUTCString();
          document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
          var name = cname + "=";
          var decodedCookie = decodeURIComponent(document.cookie);
          var ca = decodedCookie.split(';');
          for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ') {
              c = c.substring(1);
            }
            if (c.indexOf(name) === 0) {
              return c.substring(name.length, c.length);
            }
          }
          return "";
        }
      })();
    </script>
    
    @stack('js')
      <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WDN3BQK" height="0" width="0"
      style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->
  </body>
</html>
