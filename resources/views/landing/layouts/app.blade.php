<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <style>
      html {
        scroll-behavior: smooth;
      }
    </style>
    <title>{{ config('app.name', 'Nomads') }} @yield('title')</title>
    <link
      rel="stylesheet"
      href="{{asset('landing/libraries/bootstrap/css/bootstrap.css')}}"
    />
    <link rel="stylesheet" href="{{asset('landing/styles/main.css')}}" />
    <link
      href="https://fonts.googleapis.com/css?family=Assistant:200,400,700&&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap"
      rel="stylesheet"
    />
    @stack('addon-style')

    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="8ac48ac4-435a-4740-9b31-c3a79a4de621";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
  </head>
  <body>
    <!-- Semantic elements -->
    <!-- https://www.w3schools.com/html/html5_semantic_elements.asp -->

    <!-- Bootstrap navbar example -->
    <!-- https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp -->
    
    @if (!request()->routeIs('landing'))
        @include('landing.layouts.navbar-checkout')
    @else
        @include('landing.layouts.navigation')
        @include('landing.layouts.header')
    @endif

    <main>
        @yield('landing-section')
    </main>
    
    @if (!request()->routeIs('success'))
        @include('landing.layouts.footer')
    @endif

    <script src="{{asset('landing/libraries/retina/retina.js')}}"></script>
    <script src="{{asset('landing/libraries/jquery/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('landing/libraries/bootstrap/js/bootstrap.js')}}"></script>
    @stack('addon-script')
  </body>
</html>
