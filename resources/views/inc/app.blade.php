
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AcademVIT @yield('title')</title>
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" />

  <link href="{{ asset('lib/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
  @include('inc.modal.logout')

  <!-- JavaScript-->
  <script src="{{ asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('js/input-file.js') }}"></script>
  <script src="{{ asset('js/sb-admin-2.js')}}"></script>
  <script src="{{ asset('js/main.js')}}"></script>

  </body>
</html>
