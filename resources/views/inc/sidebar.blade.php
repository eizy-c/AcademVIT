<aside id="sidebar" class="flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 lg:w-72 shrink-0 bg-gray-900 p-4 transition-transform duration-200 ease-in-out -translate-x-full lg:translate-x-0">
    <!-- Sidebar Header -->
    <div class="flex justify-between items-center pr-3 sm:px-2 mb-10 mt-4">
        <a class="flex items-center gap-3" href="{{route('aula.index')}}">
            <img class="w-10 h-10 rounded-lg" src="{{ asset('img/logo.png') }}" alt="Logo">
            <span class="text-xl font-bold text-white">AcademVIT</span>
        </a>
        <button class="lg:hidden text-gray-400 hover:text-white" onclick="toggleSidebar()">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <!-- Links -->
    <div class="space-y-8">
        <div>
            <ul class="mt-3 space-y-2">
                @can('haveaccess','aula.index')
                <li>
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg transition {{ request()->is('aula*') ? 'bg-indigo-600 text-white shadow-md' : 'text-gray-300 hover:text-white hover:bg-gray-800' }}" href="{{route('aula.index')}}">
                        <i class="fas fa-university w-5 text-center"></i>
                        <span class="text-sm font-medium">Aulas</span>
                    </a>
                </li>
                @endcan

                @can('haveaccess','actividad.index')
                <li>
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg transition {{ request()->is('actividad*') ? 'bg-indigo-600 text-white shadow-md' : 'text-gray-300 hover:text-white hover:bg-gray-800' }}" href="{{route('actividad.index')}}">
                        <i class="fas fa-pen-square w-5 text-center"></i>
                        <span class="text-sm font-medium">Actividades</span>
                    </a>
                </li>
                @endcan

                @can('haveaccess','role.index')
                <li>
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg transition {{ request()->is('role*') ? 'bg-indigo-600 text-white shadow-md' : 'text-gray-300 hover:text-white hover:bg-gray-800' }}" href="{{route('role.index')}}">
                        <i class="fas fa-id-card w-5 text-center"></i>
                        <span class="text-sm font-medium">Roles</span>
                    </a>
                </li>
                @endcan
                
                @can('haveaccess','user.index')
                <li>
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg transition {{ request()->is('user*') ? 'bg-indigo-600 text-white shadow-md' : 'text-gray-300 hover:text-white hover:bg-gray-800' }}" href="{{route('user.index')}}">
                        <i class="fas fa-users w-5 text-center"></i>
                        <span class="text-sm font-medium">Usuarios</span>
                    </a>
                </li>
                @endcan
            </ul>
        </div>
    </div>
</aside>