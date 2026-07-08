<header class="sticky top-0 bg-white border-b border-gray-200 z-30 shadow-sm">
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 -mb-px">
            
            <!-- Mobile hamburger button -->
            <div class="flex items-center lg:hidden">
                <button class="text-gray-500 hover:text-gray-600 focus:outline-none" onclick="toggleSidebar()">
                    <span class="sr-only">Open sidebar</span>
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>

            <!-- Right side -->
            <div class="flex items-center space-x-4 ml-auto">
                <!-- Notifications -->
                <div class="relative inline-flex">
                    <button class="text-gray-400 hover:text-gray-600 relative" onclick="toggleDropdown('notif-menu')">
                        <i class="fas fa-bell text-lg"></i>
                        <span class="absolute top-0 right-0 -mt-1 -mr-1 flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                        </span>
                    </button>
                    <!-- Dropdown -->
                    <div id="notif-menu" class="hidden absolute top-full right-0 mt-2 w-64 bg-white border border-gray-200 py-2 rounded-lg shadow-xl overflow-hidden z-50">
                        <h6 class="px-4 py-2 text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50 border-b">Notificaciones</h6>
                        <p class="px-4 py-3 text-sm text-gray-500 text-center">No tiene notificaciones recientes</p>
                    </div>
                </div>

                <!-- Messages -->
                <div class="relative inline-flex">
                    <button class="text-gray-400 hover:text-gray-600" onclick="toggleDropdown('msg-menu')">
                        <i class="far fa-envelope text-lg"></i>
                    </button>
                    <!-- Dropdown -->
                    <div id="msg-menu" class="hidden absolute top-full right-0 mt-2 w-64 bg-white border border-gray-200 py-2 rounded-lg shadow-xl overflow-hidden z-50">
                        <h6 class="px-4 py-2 text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50 border-b">Mensajes</h6>
                        <p class="px-4 py-3 text-sm text-gray-500 text-center">No tiene mensajes recientes</p>
                    </div>
                </div>

                <hr class="w-px h-6 bg-gray-200 mx-2">

                <!-- User Dropdown -->
                <div class="relative inline-flex">
                    <button class="inline-flex justify-center items-center group focus:outline-none" onclick="toggleDropdown('user-menu')">
                        <img class="w-8 h-8 rounded-full border border-gray-200 shadow-sm" src="{{ asset('img/user.png') }}" alt="User">
                        <div class="flex items-center truncate">
                            <span class="truncate ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-900">{{ Auth::user()->name }}</span>
                            <i class="fas fa-chevron-down ml-2 text-xs text-gray-400"></i>
                        </div>
                    </button>
                    <!-- Dropdown -->
                    <div id="user-menu" class="hidden absolute top-full right-0 mt-2 w-48 bg-white border border-gray-200 py-1.5 rounded-lg shadow-xl overflow-hidden z-50">
                        <div class="px-4 py-2 border-b border-gray-100">
                            <p class="text-sm font-medium text-gray-900 truncate">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-gray-500 truncate">{{ Auth::user()->email ?? '' }}</p>
                        </div>
                        <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Perfil
                        </a>
                        <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Configuraciones
                        </a>
                        <div class="border-t border-gray-100 my-1"></div>
                        <a class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition cursor-pointer" onclick="toggleModal('logoutModal')">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i> Cerrar sesión
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>