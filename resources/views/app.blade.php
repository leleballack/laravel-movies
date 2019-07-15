<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield("page_title", "Best Films of All Times")</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
  </head>
  <body>
    @include('html.navbar')
    @yield('content')
  </body>
</html>
