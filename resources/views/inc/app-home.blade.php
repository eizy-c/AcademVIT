
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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css">
  </head>
  <body>
     <!-- navbar -->
    <nav class="navbar navbar-expand topbar navbar-login fixed-top">

      <!-- Sidebar Toggle (Topbar) -->
      <ul class="navbar-nav mr-auto d-md-none" id="logo"> 
          <li class="nav-item">
            <a class="d-flex align-items-center justify-content-center" href="/">
                <img class="img-profile" style="width: 50px;" src="{{ asset('img/logo.png') }}">
                <h4 class="text-white font-weight-bold ml-2 my-auto">ACADEMVIT</h4>
            </a>
          </li>
      </ul>

      <ul class="navbar-nav ml-auto"> 
      <li class="nav-item">
        <form method="POST" action="{{ route('login') }}" class="d-none d-md-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
          @csrf
          <div class="input-group">
            <input type="email" class="form-control input-login " placeholder="Correo electrónico" name="email" required>
            <input type="password" class="form-control input-login " placeholder="Contraseña" name="password" required>
            <div class="input-group-append">
              <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in-alt"></i></button>
            </div>
          </div>
        </form>
      </li>
      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-md-none ">
          <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-sign-in-alt text-white"></i> 
          </a>
          <div class="dropdown-menu dropdown-menu-right px-3 shadow animated--grow-in" aria-labelledby="loginDropdown">
            <h6 class="font-weight-bold text-center">Iniciar sesión</h6>
            <form method="POST" action="{{ route('login') }}" class="form-inline mr-auto w-100 navbar-search">
              @csrf
              <div class="input-group">
                <input type="email" class="form-control input-login mb-2 mr-sm-2" placeholder="Correo electrónico" name="email" required>
                <input type="password" class="form-control  input-login mb-2 mr-sm-2" placeholder="Contraseña" name="password" required>
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-sign-in-alt"></i></button>
                </div>
              </div>
            </form>
          </div>
        </li>
    </ul>
  </nav>

  <section id="banner">

    @yield('contenido')
  </section>
    @include('custom.message')
    @include('auth.register')

  <script src="{{ asset('js/app.js')}}"></script>
  </body>
</html>
