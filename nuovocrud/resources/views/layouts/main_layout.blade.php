<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @include('components.header')
    <main>
      @yield('main_content')
    </main>
    @include('components.footer')
  </body>
</html>
