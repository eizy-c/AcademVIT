@extends('inc.app')
@section('title' ,'| '.$curso->name)

@section('contenido')
<div class="mb-6 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
    <a href="{{ url()->previous() }}" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-indigo-600 transition">
        <i class="fas fa-arrow-left mr-2"></i> Volver al Aula
    </a>
</div>

<div class="space-y-6">
    <!-- Banner -->
    <div class="relative bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden h-48 sm:h-64">
        <!-- Background Image -->
        <img src="{{ asset('img/banner.png') }}" class="absolute inset-0 w-full h-full object-cover" alt="Banner">
        
        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-900/80 to-transparent"></div>
        
        <!-- Dropdown Button -->
        <div class="absolute top-4 right-4 z-10 relative" x-data="{ open: false }">
            <button onclick="toggleDropdown('bannerOptions')" class="bg-white/90 hover:bg-white text-indigo-700 p-2 rounded-full shadow-sm focus:outline-none transition">
                <i class="fas fa-ellipsis-v fa-fw"></i>
            </button>
            <div id="bannerOptions" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-20 border border-gray-100">
                <div class="px-4 py-2 text-xs font-semibold text-gray-500 uppercase tracking-wider bg-gray-50">Opciones</div>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600"><i class="fas fa-plus mr-2 text-gray-400"></i> Crear actividad</a>
                <div class="border-t border-gray-100 my-1"></div>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600"><i class="fas fa-paperclip mr-2 text-gray-400"></i> Adjuntar recurso</a>
            </div>
        </div>

        <!-- Content -->
        <div class="absolute bottom-6 left-6 sm:left-10 text-white">
            <h1 class="text-3xl sm:text-4xl font-extrabold uppercase tracking-tight drop-shadow-md">{{ $curso->name }}</h1>
            <div class="mt-2 flex items-center text-sm font-medium bg-black/30 backdrop-blur-sm rounded-md px-3 py-1.5 inline-flex w-auto border border-white/20">
                <span class="opacity-80 mr-2">Código:</span>
                <span id="copiar-text" class="tracking-widest">{{ $curso->token_key }}</span>
                <button class="ml-3 hover:text-indigo-200 focus:outline-none transition" id="copiar" title="Copiar código">
                    <i class="far fa-copy"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <!-- Sidebar (Actividades) -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                <div class="px-5 py-4 border-b border-gray-100 bg-gray-50">
                    <h3 class="text-lg font-bold text-gray-800">Actividades pendientes</h3>
                </div>
                <div class="p-5">
                    <div class="flex flex-col items-center justify-center py-6 text-center text-gray-500">
                        <i class="fas fa-check-circle text-3xl text-green-400 mb-3"></i>
                        <p class="text-sm">No tienes actividades pendientes para esta semana.</p>
                    </div>
                </div>
                <div class="px-5 py-3 bg-gray-50 border-t border-gray-100 text-right">
                    <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-800 transition">Ver más <i class="fas fa-arrow-right ml-1 text-xs"></i></a>
                </div>
            </div>
        </div>

        <!-- Main Area (Tablón) -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                <div class="px-5 py-4 border-b border-gray-100 flex justify-between items-center bg-gray-50">
                    <div class="flex items-center space-x-3">
                        <img src="{{ asset('img/user.png') }}" class="h-10 w-10 rounded-full border border-gray-200" alt="Profesor">
                        <button class="text-left text-sm text-gray-500 bg-white border border-gray-200 rounded-full px-4 py-2.5 w-full hover:bg-gray-50 hover:shadow-sm transition focus:outline-none min-w-[200px]">
                            Anuncia algo a tu clase...
                        </button>
                    </div>
                    
                    <div class="relative ml-4">
                        <button onclick="toggleDropdown('feedOptions')" class="text-gray-400 hover:text-gray-600 p-2 rounded-full focus:outline-none transition">
                            <i class="fas fa-ellipsis-v fa-fw"></i>
                        </button>
                        <div id="feedOptions" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-20 border border-gray-100">
                            <div class="px-4 py-2 text-xs font-semibold text-gray-500 uppercase tracking-wider bg-gray-50">Opciones</div>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600"><i class="fas fa-plus mr-2 text-gray-400"></i> Crear actividad</a>
                            <div class="border-t border-gray-100 my-1"></div>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600"><i class="fas fa-paperclip mr-2 text-gray-400"></i> Adjuntar recurso</a>
                        </div>
                    </div>
                </div>
                
                <div class="p-5">
                    <div class="flex flex-col items-center justify-center py-10 text-center border-2 border-dashed border-gray-200 rounded-lg bg-gray-50">
                        <i class="fas fa-comments text-gray-300 text-4xl mb-3"></i>
                        <p class="text-gray-500 font-medium text-sm">Este es el tablón de anuncios.</p>
                        <p class="text-gray-400 text-xs mt-1">Comunícate con tu clase aquí.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection