@extends('layouts.home')

@section('content')
<div x-data="{ openModal: false, rating: 0, review: '' }" class="max-w-7xl mx-auto p-6 space-y-8">


    <!-- Encabezado de cliente y acción -->
    <div class="flex items-center justify-between">

        <div class="flex items-center gap-4">
            <div class="flex items-center gap-2">
                <img src="/images/LeapStores.png" alt="Empresa" class="w-12 h-12 rounded-full object-cover">
                <div>
                    <p class="font-bold text-gray-800">LeapStores</p>
                    <p class="text-sm text-gray-500">777 seguidores</p>
                </div>
            </div>

            <div class="text-3xl text-gray-400">
                <i class="fas fa-arrow-right"></i>
            </div>

            <div class="flex items-center gap-2">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Cliente" class="w-12 h-12 rounded-full object-cover">
                <div>
                    <p class="font-bold text-gray-800 truncate w-32">Laura Naranjales Del...</p>
                    <p class="text-sm text-gray-500">Especialista en Diseño Gráfico</p>
                </div>
            </div>
        </div>

       <!-- Botón Finalizar Proyecto -->
       <button @click="openModal = true"
       class="bg-green-600 hover:bg-green-700 text-white font-semibold px-5 py-2 rounded-lg text-sm">
       Finalizar Proyecto
   </button>
    </div>

    <!-- Cuerpo dividido -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">

        <!-- Sección Izquierda: Formulario -->
        <div class="bg-white border rounded-lg shadow p-6 space-y-4">

            <h3 class="font-bold text-gray-800 mb-4">Fase</h3>

            <div class="space-y-3">
                <select class="w-full border rounded-md px-3 py-2 text-sm">
                    <option>25-04-2025 - Ejecución de Proyecto</option>
                    <!-- Más opciones dinámicamente -->
                </select>

                <textarea
                    class="w-full border rounded-md px-3 py-2 text-sm resize-none"
                    rows="4"
                    placeholder="Puedes escribir algo así: Revisión de logs y manejo de errores detectados durante la ejecución."
                ></textarea>

                <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white w-full py-2 rounded-md text-sm">
                    <i class="fas fa-plus-circle mr-1"></i> Agregar
                </button>
            </div>

        </div>

        <!-- Sección Derecha: Timeline -->
        <div class="md:col-span-2 space-y-8">

            <h3 class="font-bold text-gray-800 text-lg">Proyecto de Automatización</h3>

            <div class="relative pl-6">

                <!-- Línea vertical -->
                <div class="absolute top-0 left-2 h-full w-0.5 bg-blue-500"></div>

                <!-- Ítem 1 -->
                <div class="relative mb-10">
                    <div class="absolute -left-2.5 top-1 bg-blue-500 w-5 h-5 rounded-full border-2 border-white"></div>
                    <div class="pl-8">
                        <p class="font-semibold text-gray-800">
                            25-04-2025 - Etapa Inicial del Proyecto
                        </p>
                        <ul class="text-gray-600 text-sm list-disc list-inside mt-1 space-y-1">
                            <li>Con Paso Fino avanzamos.</li>
                            <li>Conocimiento de la arquitectura inicial del software.</li>
                        </ul>
                    </div>
                </div>

                <!-- Ítem 2 -->
                <div class="relative">
                    <div class="absolute -left-2.5 top-1 bg-blue-500 w-5 h-5 rounded-full border-2 border-white"></div>
                    <div class="pl-8">
                        <p class="font-semibold text-gray-800">
                            25-04-2025 - Ejecución de Proyecto
                        </p>
                        <ul class="text-gray-600 text-sm list-disc list-inside mt-1 space-y-1">
                            <li>Programación inicial del proceso ETL en entorno de desarrollo.</li>
                            <li>Configuración de conexiones a fuentes de datos (bases de datos, APIs, archivos planos, etc.).</li>
                            <li>Definición de estructura y mapeo de datos para la etapa de extracción.</li>
                            <li>Creación de scripts para transformación de datos según reglas de negocio.</li>
                            <li>Implementación de validaciones básicas para control de calidad de datos.</li>
                            <li>Carga preliminar de datos en entorno de pruebas.</li>
                            <li>Revisión de logs y manejo de errores detectados durante la ejecución.</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

    </div>
<!-- Modal de valoración -->
<div x-show="openModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50" style="display: none;">
    <div @click.outside="openModal = false" class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 space-y-6">

        <h2 class="text-xl font-bold text-gray-800 text-center">Valora al Freelancer</h2>

        <!-- Estrellas -->
        <div class="flex justify-center gap-1 text-2xl text-yellow-400">
            <template x-for="i in 5" :key="i">
                <button type="button" @click="rating = i" :class="{'text-yellow-500': i <= rating, 'text-gray-300': i > rating}">
                    ★
                </button>
            </template>
        </div>

        <!-- Reseña -->
        <div>
            <label class="block text-sm text-gray-700 mb-1">Tu reseña</label>
            <textarea x-model="review" class="w-full border rounded-md px-3 py-2 text-sm resize-none" rows="4"
                placeholder="Escribe una breve reseña sobre tu experiencia..."></textarea>
        </div>

        <!-- Botones de acción -->
        <div class="flex justify-end gap-3">
            <button @click="openModal = false"
                class="border border-gray-300 text-gray-700 hover:bg-gray-100 px-4 py-2 rounded-md text-sm">
                Cancelar
            </button>
            <button @click="submitReview"
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm">
                Enviar valoración
            </button>
        </div>

    </div>
</div>

</div>

  
<script>
    function submitReview() {
        // Aquí iría tu código para enviar la valoración al backend
        alert('¡Valoración enviada correctamente!');
        document.querySelector('[x-data]').__x.$data.openModal = false;
    }
</script>
@endsection
