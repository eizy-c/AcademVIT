@extends('inc.app-home')
@section('contenido')

<div class="relative bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32 mt-10">
            <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left">
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                        <span class="block xl:inline">Bienvenidos a</span>
                        <span class="block text-indigo-600 xl:inline">ACADEMVIT</span>
                    </h1>
                    <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                        Un entorno digital que posibilita el desarrollo en el proceso de aprendizaje. Conéctate a tus cursos, interactúa y comparte experiencias.
                    </p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            <a href="#" data-toggle="modal" data-target="#registrar" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                ¡Regístrate ahora!
                            </a>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="{{ route('login') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                                Iniciar sesión
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 flex justify-center items-center p-10 bg-indigo-50">
        <img class="h-56 w-full object-contain sm:h-72 md:h-96 lg:w-full lg:h-full drop-shadow-xl" src="{{ asset('img/logo.png') }}" alt="Logo AcademVIT">
    </div>
</div>

<div class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">¿Qué rol cumples?</h2>
            <p class="mt-4 text-lg text-gray-500">Tenemos herramientas diseñadas específicamente para ti.</p>
        </div>

        <div class="mt-10 grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
            
            <!-- Aula -->
            <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                <div class="w-16 h-16 mx-auto bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fa fa-school text-2xl text-indigo-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Aula</h3>
                <p class="text-gray-600 mb-4">¡Crea tu aula virtual en un minuto y logra una mayor experiencia con tus estudiantes!</p>
                <a href="#" data-toggle="modal" data-target="#registrar" class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white font-medium py-2 px-4 rounded transition">Registrar Aula</a>
            </div>

            <!-- Profesor -->
            <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                <div class="w-16 h-16 mx-auto bg-blue-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fa fa-chalkboard-teacher text-2xl text-blue-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Profesor</h3>
                <p class="text-gray-600 mb-4">Publica tus avisos, tareas, pruebas y debates, y comparte archivos con tus estudiantes.</p>
                <a href="#" data-toggle="modal" data-target="#loginProfesor" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded transition">Registrate</a>
            </div>

            <!-- Estudiante -->
            <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                <div class="w-16 h-16 mx-auto bg-green-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fa fa-user-graduate text-2xl text-green-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Estudiante</h3>
                <p class="text-gray-600 mb-4">Conéctate a tus cursos, interactúa y comparte experiencias con otros estudiantes.</p>
                <a href="#" data-toggle="modal" data-target="#loginEstudiante" class="inline-block bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded transition">Registrate</a>
            </div>

        </div>
    </div>
</div>

@include('about')

@endsection
