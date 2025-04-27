@extends('layouts.home')

@section('content')
<div class="max-w-7xl mx-auto p-6 space-y-8">

    <!-- Encabezado -->
    <div class="text-sm text-gray-500 mb-2">
        <a href="#" class="hover:underline">Propuestas</a> / 
        <span class="text-gray-800 font-semibold">Nueva propuesta</span>
    </div>

    <h1 class="text-2xl font-bold text-gray-800">Nueva propuesta</h1>

    <!-- Contenedor principal -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- Columna izquierda -->
        <div class="md:col-span-2 space-y-6">

            <!-- Proyecto -->
            <div class="bg-white border rounded-lg shadow p-6 space-y-2">
                <h2 class="flex items-center gap-2 font-semibold text-blue-700 text-lg">
                    <i class="fas fa-project-diagram"></i> Proyecto
                </h2>
                <p class="text-gray-800 font-semibold">
                    Proyecto de Integración de Datos y Visualización Automática
                </p>
                <p class="text-sm text-gray-600">
                    LeapStores · Presupuesto: $2,000 - $3,500 · Publicado: 24/04/2025
                </p>
            </div>

            <!-- Tips -->
            <div class="bg-white border rounded-lg shadow p-6 space-y-4 text-sm">
                <h3 class="flex items-center gap-2 font-semibold text-green-600 text-lg">
                    <i class="fas fa-lightbulb"></i> Tips para una propuesta exitosa
                </h3>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Ser personalizadas y específicas para el proyecto</li>
                    <li>Demostrar comprensión clara de los requisitos</li>
                    <li>Incluir ejemplos relevantes de trabajos anteriores</li>
                    <li>Proponer un plan de trabajo detallado</li>
                    <li>Tener un presupuesto desglosado y justificado</li>
                </ul>
            </div>

            <!-- Detalles básicos -->
            <div class="bg-white border rounded-lg shadow p-6 space-y-6">
                <h3 class="flex items-center gap-2 font-semibold text-gray-800 text-lg">
                    <i class="fas fa-info-circle"></i> Detalles básicos
                </h3>

                <div>
                    <label class="block text-gray-700 text-sm mb-1">Presupuesto propuesto</label>
                    <input type="number" class="w-full border rounded-md px-3 py-2 text-sm" placeholder="Ej. 2500" />
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 text-sm mb-1">Plazo de entrega</label>
                        <input type="number" class="w-full border rounded-md px-3 py-2 text-sm" placeholder="Ej. 21" />
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm mb-1">Disponibilidad</label>
                        <select class="w-full border rounded-md px-3 py-2 text-sm">
                            <option>Tiempo parcial</option>
                            <option>Tiempo completo</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="bg-white border rounded-lg shadow p-6 space-y-4">

                <!-- Título de sección con ícono -->
                <h3 class="flex items-center gap-2 font-semibold text-gray-800 text-lg">
                    <i class="fas fa-file-alt text-blue-500"></i> Propuesta detallada
                </h3>
            
                <!-- Label -->
                <label class="block text-gray-700 text-sm mb-2">Descripción detallada</label>
            
                <!-- Barra de herramientas -->
                <div class="flex flex-wrap items-center gap-3 mb-3">
                    <button type="button" class="text-gray-500 hover:text-blue-600 text-sm px-2 py-1 rounded-md hover:bg-blue-50">
                        <b>B</b>
                    </button>
                    <button type="button" class="text-gray-500 hover:text-blue-600 text-sm px-2 py-1 rounded-md hover:bg-blue-50">
                        <i>I</i>
                    </button>
                    <button type="button" class="text-gray-500 hover:text-blue-600 text-sm px-2 py-1 rounded-md hover:bg-blue-50">
                        •
                    </button>
                    <button type="button" class="text-gray-500 hover:text-blue-600 text-sm px-2 py-1 rounded-md hover:bg-blue-50">
                        1.
                    </button>
                    <button type="button" class="text-gray-500 hover:text-blue-600 text-sm px-2 py-1 rounded-md hover:bg-blue-50">
                        H1
                    </button>
                    <button type="button" class="text-gray-500 hover:text-blue-600 text-sm px-2 py-1 rounded-md hover:bg-blue-50">
                        H2
                    </button>
                    <button type="button" class="text-gray-500 hover:text-blue-600 text-sm px-2 py-1 rounded-md hover:bg-blue-50">
                        H3
                    </button>
                    <button type="button" class="text-gray-500 hover:text-blue-600 text-sm px-2 py-1 rounded-md hover:bg-blue-50">
                        Link
                    </button>
                </div>
            
                <!-- Textarea principal -->
                <textarea
                    class="w-full border rounded-lg px-4 py-3 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400"
                    rows="8"
                    placeholder="Escribe tu propuesta detallada..."
                ></textarea>
            
            </div>
            <!-- Archivos adjuntos -->
            <div class="bg-white border rounded-lg shadow p-6 space-y-6">
                <h3 class="flex items-center gap-2 font-semibold text-gray-800 text-lg">
                    <i class="fas fa-paperclip"></i> Archivos adjuntos
                </h3>

                <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center space-y-3">
                    <div class="text-6xl text-yellow-400">
                        <i class="fas fa-folder-open"></i>
                    </div>
                    <p class="text-gray-600 text-sm">Arrastra archivos aquí o haz clic para buscar</p>
                    <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm">
                        Seleccionar archivos
                    </button>
                </div>

                <div class="space-y-2">
                    <div class="flex items-center justify-between bg-gray-50 p-2 rounded">
                        <span class="text-gray-700 text-sm">Portfolio_DataProjects_2025.pdf</span>
                        <button type="button" class="text-red-500 hover:text-red-600">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="flex items-center justify-between bg-gray-50 p-2 rounded">
                        <span class="text-gray-700 text-sm">Dashboard_Sample.png</span>
                        <button type="button" class="text-red-500 hover:text-red-600">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mensaje de presentación -->
            <div class="bg-white border rounded-lg shadow p-6 space-y-4">
                <h3 class="flex items-center gap-2 font-semibold text-gray-800 text-lg">
                    <i class="fas fa-comment-dots"></i> Mensaje de presentación
                </h3>

                <div>
                    <label class="block text-gray-700 text-sm mb-1">Mensaje para el cliente</label>
                    <textarea class="w-full border rounded-md px-3 py-2 text-sm" rows="5" placeholder="Escribe un mensaje de presentación..."></textarea>
                </div>
            </div>

          <!-- Botones finales mejorados -->
<div class="flex justify-end gap-4 mt-6">

    <!-- Guardar borrador -->
    <button type="button"
        class="flex items-center gap-2 border border-gray-300 text-gray-700 px-5 py-2 rounded-md text-sm hover:bg-gray-100 hover:border-gray-400 hover:scale-105 transform transition-all duration-200">
        <i class="fas fa-save"></i> Guardar borrador
    </button>

    <!-- Enviar propuesta -->
    <button type="submit"
        class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-md text-sm hover:scale-105 transform transition-all duration-200">
        <i class="fas fa-paper-plane"></i> Enviar propuesta
    </button>

</div>

        </div>

         <!-- Columna derecha (sidebar) -->
   <div class="space-y-6">

    <!-- Resumen -->
    <div class="bg-gray-50 p-4 border rounded-lg space-y-3 text-sm">
        <h3 class="font-semibold text-gray-800">Resumen</h3>

        <div class="flex justify-between">
            <span>Presupuesto:</span>
            <span class="font-semibold text-gray-800">$2,500</span>
        </div>
        <div class="flex justify-between">
            <span>Plazo:</span>
            <span class="font-semibold text-gray-800">21 días</span>
        </div>
        <div class="flex justify-between">
            <span>Disponibilidad:</span>
            <span class="font-semibold text-gray-800">Tiempo parcial</span>
        </div>
    </div>

    <!-- Comisión -->
    <div class="bg-yellow-50 border border-yellow-200 p-4 rounded-lg text-sm text-yellow-700">
        Comisión de servicio
        <p class="text-xs text-gray-600 mt-1">
            Se aplica una comisión del 10% sobre el presupuesto total al ser contratado.
        </p>
    </div>

    <!-- Perfil visible -->
    <div class="bg-gray-50 p-4 border rounded-lg space-y-3 text-sm">
        <h3 class="font-semibold text-gray-800">Tu perfil visible</h3>
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-blue-500 text-white flex items-center justify-center rounded-full font-semibold">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" class="rounded-full" alt="">
            </div>
            <div>
                <p class="text-gray-800 font-semibold">Laura Naranjales Del Valle</p>
                <p class="text-gray-500 text-xs">Desarrollador ETL & Data Engineer</p>
                <div class="flex items-center text-xs text-yellow-500 mt-1">
                    <i class="fas fa-star"></i> 4.9 (12 reseñas)
                </div>
             
            </div>
        </div>
    </div>

    <!-- Habilidades -->
    <div class="bg-gray-50 p-4 border rounded-lg space-y-3 text-sm">
        <h3 class="font-semibold text-gray-800">Habilidades relevantes</h3>

        <div class="space-y-2">
            <div class="flex items-center gap-2">
                <input type="checkbox" checked >
                <span>Python</span>
            </div>
            <div class="flex items-center gap-2">
                <input type="checkbox" checked >
                <span>ETL</span>
            </div>
            <div class="flex items-center gap-2">
                <input type="checkbox" checked >
                <span>SQL</span>
            </div>
            <div class="flex items-center gap-2">
                <input type="checkbox" checked >
                <span>Integración de datos</span>
            </div>
            <div class="flex items-center gap-2">
                <input type="checkbox" checked >
                <span>Apache Airflow</span>
            </div>
            <div class="flex items-center gap-2">
                <input type="checkbox" checked >
                <span>Power BI</span>
            </div>
        </div>

    </div>

</div>

    </div>
</div>
@endsection

  
