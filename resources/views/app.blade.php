<!DOCTYPE html>
<html>
  <head>
    @include('template.head')
  </head>
  <body class="skin-blue">
    @include('template.header')
    @include('template.sidebar')
    <div class="content-wrapper">
      <section class="content">
        <!-- CHAMAR AQUI O CONTEÚDO DE CADA PÁGINA -->
        @yield('content')
      </section>
    </div>
    @include('template.footer')
    @include('template.scripts_js')
  </body>
</html>
