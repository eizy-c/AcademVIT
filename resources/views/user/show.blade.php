@extends('inc.app')
@section('title' ,'| Ver Usuario')

@section('contenido')
<div class="mb-6 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
    <h1 class="text-2xl font-bold text-gray-800">Ver Usuario: {{ $user->name }}</h1>
    <a href="{{route('user.index')}}" class="inline-flex items-center justify-center px-4 py-2 bg-gray-200 text-gray-700 text-sm font-medium rounded-md hover:bg-gray-300 shadow-sm transition">
        <i class="fas fa-arrow-left mr-2"></i> Volver a Usuarios
    </a>
</div>

<div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden max-w-3xl">
    <div class="px-4 py-5 sm:p-6 space-y-6">
        
        <div class="flex items-center space-x-6 border-b border-gray-100 pb-6">
            <div class="flex-shrink-0 h-24 w-24">
                <img class="h-24 w-24 rounded-full border-4 border-indigo-50 shadow-sm" src="{{ asset('img/user.png') }}" alt="Foto de Perfil">
            </div>
            <div>
                <h2 class="text-xl font-bold text-gray-900">{{ $user->name }}</h2>
                <p class="text-sm text-gray-500 mt-1">{{ $user->email }}</p>
                @isset($user->roles[0]->name)
                    <span class="mt-2 px-2.5 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800">
                        {{ $user->roles[0]->name }}
                    </span>
                @endisset
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Name (Readonly) -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" value="{{ $user->name }}" disabled class="mt-1 block w-full bg-gray-50 border border-gray-300 text-gray-500 rounded-md shadow-sm py-2 px-3 sm:text-sm cursor-not-allowed">
            </div>
            
            <!-- Email (Readonly) -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                <input type="email" value="{{ $user->email }}" disabled class="mt-1 block w-full bg-gray-50 border border-gray-300 text-gray-500 rounded-md shadow-sm py-2 px-3 sm:text-sm cursor-not-allowed">
            </div>
        </div>
    </div>
    
    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse border-t border-gray-200">
        @can('update', [$user, ['user.edit','userown.edit']])
        <a href="{{route('user.edit', $user->id)}}" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
            <i class="fas fa-edit mr-2 mt-1"></i> Editar
        </a>
        @endcan
        <a href="{{route('user.index')}}" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
            Regresar
        </a>
    </div>
</div>
@endsection
