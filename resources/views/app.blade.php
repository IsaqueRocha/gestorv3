<!DOCTYPE html>
<html>
  <head>
    @include('template.head')
  </head>
  <body class="skin-blue">
    @include('template.header')
    @include('template.sidebar')
    <div class="content-wrapper">
        @include('flash::message')
        <!-- CHAMAR AQUI O CONTEÚDO DE CADA PÁGINA -->
        @yield('content')
    </div>
    @include('template.footer')
    @include('template.scripts_js')
  </body>
  <script>

    $('div.alert').not('alert-important').delay(5000).slideUp(300);

  </script>
</html>
