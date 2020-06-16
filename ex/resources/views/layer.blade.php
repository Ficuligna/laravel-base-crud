<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <header>
      @include("header")
    </header>
    <main>
      @yield("main_content")
    </main>
    <footer>
      @include("footer")
    </footer>
  </body>
</html>
