<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @yield('titles')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css"> 
        #container {    height: 100%; }
        .main-header .main-sub-header .top-link-header {    height: 30px;  }
        .main-header {    color: #f0f0f0;     min-width: 978px;    position: relative; }
        .main-header .main-sub-header {    position: fixed;    will-change: transform;    width: 100%;    z-index: 10;   
              background-color: #2874f0; }
        .main-header .main-sub-header .header-top-link {    max-width: 1248px;     min-width: 978px;    margin: 0 auto;    position: relative;
               padding: 0 16px;  }
        .main-header .main-sub-header .top-link-ul {    font-size: 12px;    position: absolute;    right: 16px; }
        .main-header .main-sub-header .top-link {    display: inline-block;    position: relative; }
        .main-header ._1H5F__ .top-link-a {    padding-top: 5px; }
        .main-header .top-link-a {    display: block;    padding: 0 11px;    line-height: 23px; }
        a, img {    text-decoration: none;    color: inherit;    border: none;    outline: none; }
    </style>
    @yield('styles')
</head>
<body>
    <div id="container">
         <header class="main-header">
            <div class="main-sub-header">
              @include('layouts.header.top_header_link')
              @include('layouts.header.top_header_link')
            </div>
         </header>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
