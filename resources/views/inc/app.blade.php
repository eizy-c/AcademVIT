
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AcademVIT @yield('title')</title>
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" />
  <link href="{{ asset('lib/fontawesome/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
  
  </head>
  <body id="page-top">
  <div id="wrapper" >
    @include('inc.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content" class="bg-contenido">
        @include('inc.navbar')
        <!-- CONTENIDO -->
        @yield('contenido')
      </div>
    </div>
  </div>
  
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  @include('custom.message')
  @include('inc.modal.logout')

  <!-- JavaScript-->
  <script src="{{ asset('js/app.js')}}"></script>
  </body>
</html>
