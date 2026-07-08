<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AcademVIT @yield('title')</title>
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('lib/fontawesome/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 font-sans antialiased text-gray-800">

<div class="flex h-screen overflow-hidden">
    <!-- Sidebar -->
    @include('inc.sidebar')

    <!-- Main Content -->
    <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
        
        <!-- Header -->
        @include('inc.navbar')

        <!-- Main section -->
        <main class="w-full grow p-6 sm:p-10">
            @yield('contenido')
        </main>
    </div>
</div>

@include('custom.message')

<!-- Modals will be placed here -->
@yield('modals')

<!-- Logout Modal (Tailwind) -->
<div id="logoutModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true" onclick="toggleModal('logoutModal')"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-md sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                        <i class="fas fa-sign-out-alt text-red-600"></i>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">¿Listo para salir?</h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">Selecciona "Cerrar sesión" abajo si estás listo para terminar tu sesión actual.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 sm:ml-3 sm:w-auto sm:text-sm">
                        Cerrar sesión
                    </button>
                </form>
                <button type="button" onclick="toggleModal('logoutModal')" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Cancelar
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleModal(modalID){
        document.getElementById(modalID).classList.toggle("hidden");
    }
    function toggleDropdown(dropdownID){
        document.getElementById(dropdownID).classList.toggle("hidden");
    }
    function toggleSidebar(){
        document.getElementById('sidebar').classList.toggle('-translate-x-full');
    }
</script>
</body>
</html>
