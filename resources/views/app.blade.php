<!DOCTYPE html>
<html>
  <head>
      @yield('head')
      @include('template.head')
  </head>
  <body class="skin-ldi">
    @include('template.header')
    @include('template.sidebar')
    <div class="content-wrapper">
        @include('flash::message')
        <!-- CHAMAR AQUI O CONTEÚDO DE CADA PÁGINA -->
        @yield('content')
    </div>
    @include('template.footer')
    @include('template.scripts_js')
    @yield('script')
    <script>
      $('div.alert').not('alert-important').delay(5000).slideUp(300);
    </script>
  </body>
</html>
