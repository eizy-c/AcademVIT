@extends('inc.app')
@section('title' ,' | '.$aula->name)

@section('contenido')
<div class="mb-6 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
    <div>
        <h1 class="text-2xl font-bold text-gray-800">{{ $aula->name}}</h1>
        <p class="text-sm text-gray-500">Cursos disponibles en esta aula</p>
    </div>
    <div class="flex space-x-2">
        <a href="#" class="inline-flex items-center justify-center px-4 py-2 bg-gray-100 text-gray-700 text-sm font-medium rounded-md hover:bg-gray-200 shadow-sm transition">
            <i class="fas fa-cog mr-2 text-gray-500"></i> Administración
        </a>
        <button onclick="toggleModal('addCursoModal')" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700 shadow-sm transition">
            <i class="fas fa-plus mr-2"></i> Nuevo curso
        </button>
    </div>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
    @foreach($cursos as $curso)
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition group">
        <a href="{{route('curso.show', $curso->id)}}" class="block">
            <!-- Header Image Placeholder -->
            <div class="h-32 bg-indigo-50 relative overflow-hidden hidden sm:block">
                <img src="{{ asset('img/curso.png') }}" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition duration-300" alt="Curso">
            </div>
            
            <div class="p-5">
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-indigo-700 uppercase tracking-wide group-hover:text-indigo-900 transition">{{ $curso->name }}</h3>
                        <div class="mt-2 flex items-center space-x-4 text-xs text-gray-500">
                            <span class="flex items-center"><i class="fas fa-user-graduate mr-1"></i> 0</span>
                            <span class="flex items-center"><i class="fas fa-user-tie mr-1"></i> 0</span>
                        </div>
                    </div>
                    <div class="flex-shrink-0 bg-indigo-100 rounded-full p-3">
                        <i class="fas fa-chalkboard text-indigo-500 text-xl"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach

    @if($cursos->isEmpty())
    <div class="col-span-full py-12 text-center bg-white rounded-lg border border-dashed border-gray-300">
        <i class="fas fa-book-open text-gray-300 text-4xl mb-3"></i>
        <p class="text-gray-500">No hay cursos creados en esta aula.</p>
    </div>
    @endif
</div>
@endsection

@section('modals')
    @include('inc.modal.addCurso')
@endsection