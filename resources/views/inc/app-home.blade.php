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
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="bg-gray-50 text-gray-800 font-sans antialiased flex flex-col min-h-screen">
    
    <!-- Navbar -->
    <nav class="bg-indigo-600 shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="flex items-center gap-3">
                        <img class="w-10 h-10 object-contain bg-white rounded-full p-1 shadow" src="{{ asset('img/logo.png') }}" alt="Logo">
                        <span class="text-white font-bold text-xl tracking-wider">ACADEMVIT</span>
                    </a>
                </div>

                <!-- Desktop Login Form -->
                <div class="hidden md:flex items-center space-x-4">
                    <form method="POST" action="{{ route('login') }}" class="flex items-center gap-2">
                        @csrf
                        <input type="email" name="email" placeholder="Correo electrónico" required class="w-48 px-3 py-1.5 text-sm rounded-md border-0 focus:ring-2 focus:ring-indigo-300 text-gray-900 placeholder-gray-500 shadow-inner">
                        <input type="password" name="password" placeholder="Contraseña" required class="w-48 px-3 py-1.5 text-sm rounded-md border-0 focus:ring-2 focus:ring-indigo-300 text-gray-900 placeholder-gray-500 shadow-inner">
                        <button type="submit" class="bg-indigo-800 hover:bg-indigo-700 text-white px-4 py-1.5 rounded-md transition duration-150 ease-in-out shadow font-medium">
                            <i class="fa fa-sign-in-alt mr-1"></i> Entrar
                        </button>
                    </form>
                </div>

                <!-- Mobile Login Toggle -->
                <div class="md:hidden flex items-center">
                    <a href="{{ route('login') }}" class="text-white hover:text-indigo-200">
                        <i class="fa fa-sign-in-alt text-2xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow pt-16">
        @yield('contenido')
    </main>

    @include('custom.message')
    @include('auth.register')

  </body>
</html>
