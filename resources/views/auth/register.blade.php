<!-- Modal overlay -->
<div id="registrar" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        
        <!-- Background backdrop -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true" onclick="closeModal('registrar')"></div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <!-- Modal panel -->
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                            Registro de Aula / Usuario
                        </h3>
                        <div class="mt-4">
                            <form method="POST" action="{{ route('register') }}" id="registerForm">
                                @csrf
                                
                                <!-- Step 1: Aula -->
                                <div id="step-1" class="space-y-4 block">
                                    <div>
                                        <label for="nombreaula" class="block text-sm font-medium text-gray-700">Nombre del aula</label>
                                        <input type="text" id="nombreaula" name="nombreaula" value="{{ old('nombreaula')}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-2 px-3 border" required>
                                    </div>
                                    <div class="flex justify-end mt-4">
                                        <button type="button" onclick="nextStep(2)" class="inline-flex justify-center rounded-md border border-transparent px-4 py-2 bg-indigo-600 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                                            Siguiente
                                        </button>
                                    </div>
                                </div>

                                <!-- Step 2: User -->
                                <div id="step-2" class="space-y-4 hidden">
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                                        <input type="text" id="name" name="name" value="{{ old('name')}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-2 px-3 border" required>
                                    </div>
                                    <div>
                                        <label for="email_reg" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                                        <input type="email" id="email_reg" name="email" value="{{ old('email')}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-2 px-3 border" required>
                                    </div>
                                    <div>
                                        <label for="password_reg" class="block text-sm font-medium text-gray-700">Contraseña</label>
                                        <input type="password" id="password_reg" name="password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-2 px-3 border" required>
                                    </div>
                                    <div>
                                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar contraseña</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-2 px-3 border" required>
                                    </div>
                                    <input type="hidden" name="tipo" value="profesor">

                                    <div class="flex justify-between mt-4">
                                        <button type="button" onclick="nextStep(1)" class="inline-flex justify-center rounded-md border border-gray-300 px-4 py-2 bg-white text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                                            Regresar
                                        </button>
                                        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent px-4 py-2 bg-green-600 text-base font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:text-sm">
                                            Crear aula
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" onclick="closeModal('registrar')" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Cancelar
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function openModal(id) {
        document.getElementById(id).classList.remove('hidden');
    }

    function closeModal(id) {
        document.getElementById(id).classList.add('hidden');
    }

    function nextStep(step) {
        if(step === 1) {
            document.getElementById('step-2').classList.add('hidden');
            document.getElementById('step-1').classList.remove('hidden');
            document.getElementById('step-1').classList.add('block');
        } else if(step === 2) {
            document.getElementById('step-1').classList.add('hidden');
            document.getElementById('step-2').classList.remove('hidden');
            document.getElementById('step-2').classList.add('block');
        }
    }

    // Intercept data-toggle="modal" logic for standard anchor links to open the modal
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('[data-toggle="modal"]').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                let target = this.getAttribute('data-target').replace('#', '');
                openModal(target);
            });
        });
    });
</script>