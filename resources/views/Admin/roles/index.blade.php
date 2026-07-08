@extends('inc.app')
@section('title' ,'| Roles')

@section('contenido')
<div class="mb-6 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
    <h1 class="text-2xl font-bold text-gray-800">Roles del Sistema</h1>
    <button onclick="toggleModal('addRoleModal')" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700 shadow-sm transition">
        <i class="fas fa-plus mr-2"></i> Nuevo Rol
    </button>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
    @foreach($roles as $role)
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition">
        <div class="p-5 flex justify-between items-start">
            <div class="block group">
                <h3 class="text-lg font-bold text-gray-900 transition">{{ $role->name }}</h3>
                <p class="text-sm text-gray-500 mt-1">{{ Str::limit($role->description, 50) }}</p>
            </div>
            
            @can('haveaccess','role.edit')
            <div class="relative">
                <button onclick="toggleDropdown('roleDropdown-{{$role->id}}')" class="text-gray-400 hover:text-gray-600 focus:outline-none p-1">
                    <i class="fas fa-ellipsis-v"></i>
                </button>
                <div id="roleDropdown-{{$role->id}}" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 border border-gray-100 z-10">
                    <div class="px-4 py-2 text-xs font-semibold text-gray-500 uppercase tracking-wider bg-gray-50">Opciones</div>
                    @can('haveaccess','role.edit')
                    <a href="{{route('role.edit',$role->id)}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                        <i class="fas fa-edit mr-2 text-gray-400"></i> Editar
                    </a>
                    @endcan
                    @can('haveaccess','role.destroy')
                    <button onclick="toggleModal('removeRoleModal-{{$role->id}}')" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                        <i class="fas fa-trash-alt mr-2 text-red-400"></i> Eliminar
                    </button>
                    @endcan
                </div>
            </div>
            @endcan
        </div>
        <div class="px-5 py-3 bg-gray-50 border-t border-gray-100 text-xs text-gray-500 flex justify-between items-center">
            <span>{{ $role->users()->count() }} usuarios</span>
            @if($role->{'full-access'} == 'yes')
                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-red-100 text-red-800">Full Access</span>
            @endif
        </div>
    </div>
    @endforeach
</div>
@endsection

@section('modals')
    @include('admin.roles.create')
    @foreach($roles as $role)
        @include('inc.modal.removeRole', ['role' => $role])
    @endforeach
@endsection
