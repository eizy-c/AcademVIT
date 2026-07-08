@extends('inc.app')
@section('title' ,'| Editar role')

@section('contenido')
<div class="mb-6 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
    <h1 class="text-2xl font-bold text-gray-800">Editar Rol: {{ $role->name }}</h1>
    <a href="{{route('role.index')}}" class="inline-flex items-center justify-center px-4 py-2 bg-gray-200 text-gray-700 text-sm font-medium rounded-md hover:bg-gray-300 shadow-sm transition">
        <i class="fas fa-arrow-left mr-2"></i> Volver a Roles
    </a>
</div>

<div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
    <form method="POST" action="{{route('role.update', $role->id)}}">
        @csrf
        @method('PUT')
        <div class="px-4 py-5 sm:p-6 grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Left Column -->
            <div class="space-y-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nombre del Rol</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $role->name)}}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Ej: Editor">
                </div>
                <div>
                    <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                    <input type="text" name="slug" id="slug" value="{{ old('slug', $role->slug)}}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Ej: role.editor">
                </div>
                
                <hr class="border-gray-200">
                
                <div>
                    <span class="block text-sm font-medium text-gray-700 mb-2">¿Acceso Total (Full Access)?</span>
                    <div class="flex items-center space-x-4">
                        <label class="inline-flex items-center">
                            <input type="radio" name="full-access" value="yes" class="form-radio h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500" 
                                @if ($role['full-access']=="yes" || old('full-access')=="yes") checked @endif>
                            <span class="ml-2 text-sm text-gray-700">Sí</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="full-access" value="no" class="form-radio h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500" 
                                @if ($role['full-access']=="no" || old('full-access')=="no") checked @endif>
                            <span class="ml-2 text-sm text-gray-700">No</span>
                        </label>
                    </div>
                </div>
            </div>
            
            <!-- Right Column (Permissions) -->
            <div>
                <span class="block text-sm font-medium text-gray-700 mb-3 border-b pb-2">Permisos Asignados</span>
                <div class="max-h-96 overflow-y-auto pr-2 space-y-3 no-scrollbar">
                    @foreach($permissions as $permission)
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="permission_{{$permission->id}}" name="permission[]" value="{{$permission->id}}" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"
                                @if(is_array(old('permission')) && in_array("$permission->id", old('permission')))
                                    checked
                                @elseif(is_array($permission_role) && in_array("$permission->id", $permission_role))
                                    checked
                                @endif
                            >
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="permission_{{$permission->id}}" class="font-medium text-gray-700 cursor-pointer">{{ $permission->name }}</label>
                            <p class="text-gray-500 text-xs">{{ $permission->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
        </div>
        
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse border-t border-gray-200">
            <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                Guardar Cambios
            </button>
            <a href="{{route('role.index')}}" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection
