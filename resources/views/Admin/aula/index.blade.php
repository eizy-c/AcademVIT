@extends('inc.app')
@section('title' ,'| Aulas')

@section('contenido')
<div class="mb-6 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
    <h1 class="text-2xl font-bold text-gray-800">Aulas</h1>
    <button onclick="toggleModal('addAulaModal')" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700 shadow-sm transition">
        <i class="fas fa-plus mr-2"></i> Nueva aula
    </button>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
    @foreach($aulas as $aula)
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition group">
        <a href="{{route('aula.show',$aula->id)}}" class="block">
            <!-- Header Image Placeholder -->
            <div class="h-32 bg-indigo-50 relative overflow-hidden hidden sm:block">
                <img src="{{ asset('img/aula.png') }}" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition duration-300" alt="Aula">
            </div>
            
            <div class="p-5">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-indigo-700 uppercase tracking-wide group-hover:text-indigo-900 transition">{{ $aula->name }}</h3>
                    </div>
                    <div class="flex-shrink-0 bg-indigo-100 rounded-full p-3">
                        <i class="fas fa-chalkboard text-indigo-500 text-xl"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
@endsection

@section('modals')
    @include('inc.modal.addAula')
@endsection
