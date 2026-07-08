@extends('inc.app')
@section('title' ,'| Actividades')

@section('contenido')
<div class="mb-6 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
    <h1 class="text-2xl font-bold text-gray-800">Actividades</h1>
</div>

<div class="grid grid-cols-1 gap-6 max-w-4xl">
    
    <!-- Inline Form for Adding Actividad (Alpine.js used for toggle) -->
    <div x-data="{ showForm: false }" class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
        
        <!-- Toggle Button -->
        <button @click="showForm = !showForm" class="w-full flex items-center justify-center p-6 bg-indigo-50 hover:bg-indigo-100 transition cursor-pointer focus:outline-none">
            <div class="text-indigo-600 flex flex-col items-center">
                <i class="fas" :class="showForm ? 'fa-minus-circle' : 'fa-plus-circle'" class="text-3xl mb-2"></i>
                <span class="font-bold text-lg" x-text="showForm ? 'Cancelar nueva actividad' : 'Agregar nueva actividad'"></span>
            </div>
        </button>
        
        <!-- Form Area -->
        <div x-show="showForm" x-transition.duration.300ms class="border-t border-gray-200 p-6 bg-white">
            <form method="POST" action="{{ route('actividad.store') }}" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nombre de la actividad</label>
                    <input type="text" name="name" id="name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Ej: Examen parcial">
                </div>
                
                <div>
                    <label for="curso" class="block text-sm font-medium text-gray-700">Curso</label>
                    <select id="curso" name="curso" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option value="">Seleccione el curso</option>
                        @foreach($cursos as $curso)
                            <option value="{{ $curso->id }}">{{ $curso->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="flex justify-end space-x-3 pt-4 border-t border-gray-100 mt-4">
                    <button type="button" @click="showForm = false" class="inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm transition">
                        Cancelar
                    </button>
                    <button type="submit" class="inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm transition">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Actividad Item List -->
    @include('custom.message')

    @forelse($actividades as $actividad)
    <div x-data="{ expanded: false }" class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
        <div class="px-5 py-4 border-b border-gray-100 flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition cursor-pointer" @click="expanded = !expanded">
            <div>
                <h3 class="text-lg font-bold text-indigo-700 uppercase tracking-wide">{{ $actividad->name }}</h3>
                <p class="text-xs text-gray-400 mt-1">
                    {{ $actividad->created_at->diffForHumans() }}
                    @if($actividad->cursos->count() > 0)
                        &bull; Curso: {{ $actividad->cursos->first()->name }}
                    @endif
                </p>
            </div>
            
            <div class="flex items-center space-x-4">
                <i class="fas text-gray-400 transition-transform" :class="expanded ? 'fa-chevron-up' : 'fa-chevron-down'"></i>
                
                <div class="relative" @click.stop>
                    <button onclick="toggleDropdown('actOptions-{{ $actividad->id }}')" class="text-gray-400 hover:text-gray-600 p-2 rounded-full focus:outline-none transition">
                        <i class="fas fa-ellipsis-v fa-fw"></i>
                    </button>
                    <div id="actOptions-{{ $actividad->id }}" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-20 border border-gray-100">
                        <div class="px-4 py-2 text-xs font-semibold text-gray-500 uppercase tracking-wider bg-gray-50">Opciones</div>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600"><i class="fas fa-edit mr-2 text-gray-400"></i> Modificar</a>
                        <div class="border-t border-gray-100 my-1"></div>
                        <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50"><i class="fas fa-trash-alt mr-2 text-red-400"></i> Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Expanded Content -->
        <div x-show="expanded" x-transition.duration.200ms class="p-5 bg-white">
            <ul class="space-y-3 text-gray-600">
                <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-3"></i> Evaluación</li>
                <li class="flex items-center"><i class="fas fa-file-alt text-indigo-400 mr-3"></i> Recurso</li>
                <li class="flex items-center"><i class="fas fa-percentage text-purple-400 mr-3"></i> Ponderación</li>
            </ul>
        </div>
    </div>
    @empty
    <div class="py-12 text-center bg-white rounded-lg border border-dashed border-gray-300">
        <i class="fas fa-clipboard-list text-gray-300 text-4xl mb-3"></i>
        <p class="text-gray-500">No hay actividades creadas.</p>
    </div>
    @endforelse
    
</div>

@endsection

@section('modals')
    @include('inc.modal.addActividad')
@endsection