<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Company</title>
    @include('includes.header')
  </head>
  <body>
    @include('includes.menu')

    <main class="site-content" role="main">
      @yield('content')
    </main>

  </body>
  <footer>
    @include('includes.footer')
  </footer>
</html>
