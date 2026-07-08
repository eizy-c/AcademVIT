<!-- Modal crear rol -->
<div id="addRoleModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!-- Background overlay -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true" onclick="toggleModal('addRoleModal')"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 border-b border-gray-200">
                <div class="flex justify-between items-center">
                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Nuevo Rol</h3>
                    <button type="button" class="text-gray-400 hover:text-gray-500" onclick="toggleModal('addRoleModal')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            
            <form method="POST" action="{{route('role.store' )}}" class="bg-white">
                @csrf
                <div class="px-4 py-5 sm:p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <!-- Left Column -->
                    <div class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nombre del Rol</label>
                            <input type="text" name="name" id="name" value="{{ old('name')}}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Ej: Editor">
                        </div>
                        <div>
                            <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                            <input type="text" name="slug" id="slug" value="{{ old('slug')}}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Ej: role.editor">
                        </div>
                        
                        <hr class="border-gray-200 my-4">
                        
                        <div>
                            <span class="block text-sm font-medium text-gray-700 mb-2">¿Acceso Total (Full Access)?</span>
                            <div class="flex items-center space-x-4">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="full-access" value="yes" class="form-radio h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500" @if (old('full-access')=="yes") checked @endif>
                                    <span class="ml-2 text-sm text-gray-700">Sí</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="full-access" value="no" class="form-radio h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500" @if (old('full-access')=="no" || old('full-access')===null) checked @endif>
                                    <span class="ml-2 text-sm text-gray-700">No</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Column (Permissions) -->
                    <div>
                        <span class="block text-sm font-medium text-gray-700 mb-2 border-b pb-2">Permisos Disponibles</span>
                        <div class="max-h-64 overflow-y-auto pr-2 space-y-2 no-scrollbar">
                            @foreach($permissions as $permission)
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="permission_{{$permission->id}}" name="permission[]" value="{{$permission->id}}" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
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
                        Guardar Rol
                    </button>
                    <button type="button" onclick="toggleModal('addRoleModal')" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancelar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>