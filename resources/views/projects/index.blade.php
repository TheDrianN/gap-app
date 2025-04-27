@extends('layouts.home')

@section('content')
<!-- Filtros -->
<div class="w-full bg-white">

    <div class="max-w-7xl mx-auto flex flex-wrap items-center gap-4 p-3">

        <!-- Filtro Proyectos -->
        <div class="relative">
            <button class="flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded-full text-sm focus:outline-none">
                Proyectos
                <i class="fas fa-chevron-down text-xs"></i>
            </button>
            <!-- Aquí podrías agregar un dropdown si quieres -->
        </div>
    
        <!-- Filtro Fecha de publicación -->
        <div class="relative">
            <button class="flex items-center gap-2 border border-gray-300 hover:bg-gray-100 text-gray-700 font-semibold px-4 py-2 rounded-full text-sm focus:outline-none">
                Fecha de publicación
                <i class="fas fa-chevron-down text-xs"></i>
            </button>
        </div>
    
        <!-- Filtro Empresa -->
        <div class="relative">
            <button class="flex items-center gap-2 border border-gray-300 hover:bg-gray-100 text-gray-700 font-semibold px-4 py-2 rounded-full text-sm focus:outline-none">
                Empresa
                <i class="fas fa-chevron-down text-xs"></i>
            </button>
        </div>
    
        <!-- Filtro Área -->
        <div class="relative">
            <button class="flex items-center gap-2 border border-gray-300 hover:bg-gray-100 text-gray-700 font-semibold px-4 py-2 rounded-full text-sm focus:outline-none">
                Área
                <i class="fas fa-chevron-down text-xs"></i>
            </button>
        </div>
    
        <!-- Botón Restablecer -->
        <button class="text-gray-500 hover:underline text-sm font-semibold">
            Restablecer
        </button>
    </div>

</div>

<div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-6 mt-1">

    <aside class="col-span-1 bg-white rounded-lg shadow p-4 overflow-y-auto max-h-[85vh]">
        <h2 class="text-xl font-bold mb-4">Proyectos</h2>
    
        @foreach ([
            ['empresa' => 'Temu', 'proyecto' => 'IA para mejorar recomendaciones en ecommerce', 'activo' => true],
            ['empresa' => 'Outlier', 'proyecto' => 'QA Tester Automatizado', 'activo' => false],
            ['empresa' => 'GrowthLab', 'proyecto' => 'Sistema de Leads Automático', 'activo' => false],
            ['empresa' => 'SoftSolutions', 'proyecto' => 'Migración de Base de Datos', 'activo' => false],
        ] as $item)
            <div class="relative group mb-4">
                <!-- Barra negra en el activo -->
                @if ($item['activo'])
                    <div class="absolute left-0 top-0 h-full w-1 bg-black rounded-l-md"></div>
                @endif
    
                <div class="flex gap-4 items-start p-4 {{ $item['activo'] ? 'bg-gray-100' : 'hover:bg-gray-100' }} pl-5 rounded-lg cursor-pointer transition">
                    <img src="https://robohash.org/{{ strtolower($item['empresa']) }}?size=60x60" alt="Logo Empresa" class="w-12 h-12 rounded-full object-cover">
    
                    <div class="flex flex-col flex-1">
                        <div class="flex items-center gap-1">
                            <h3 class="text-blue-600 font-semibold text-sm">{{ $item['proyecto'] }}</h3>
                            <i class="fas fa-check-circle text-green-500 text-xs"></i> <!-- Verificado -->
                        </div>
                        <p class="text-gray-500 text-xs">{{ $item['empresa'] }}</p>
                        <p class="text-gray-400 text-xs">Chiclayo, Lambayeque, Perú (En Remoto)</p>
                        <div class="flex items-center text-yellow-400 text-xs mt-1">
                            ★ 4.9
                        </div>
                    </div>
    
                    <!-- Botón para cerrar -->
                    <button class="text-gray-400 hover:text-red-500 text-lg">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        @endforeach
    </aside>
    <!-- Detalle del Proyecto Seleccionado (Derecha) -->
    <section class="col-span-2 bg-white rounded-lg shadow p-6 overflow-y-auto max-h-[85vh]">

        <!-- Encabezado -->
        <div class="flex justify-between items-start mb-4 relative">
            <div class="flex gap-3 items-center">
                <img src="https://robohash.org/temu?size=50x50" alt="Empresa Logo" class="w-10 h-10 rounded-full object-cover">
                <div>
                    <h2 class="font-bold text-lg">Temu</h2>
                    <p class="text-gray-500 text-sm">Chiclayo, Lambayeque, Perú • Publicado hace 1 hora</p>
                </div>
            </div>

            <!-- Botón opciones -->
            <div class="relative">
                <button id="optionsButton" class="text-gray-600 hover:text-blue-600 text-2xl focus:outline-none">
                    <i class="fas fa-ellipsis-h"></i>
                </button>

                <!-- Dropdown oculto -->
                <div id="optionsDropdown" class="hidden absolute right-0 mt-2 w-40 bg-white border rounded-md shadow-lg py-2 z-50">
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 text-sm flex items-center gap-2">
                        <i class="fas fa-share"></i> Compartir
                    </a>
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 text-sm flex items-center gap-2">
                        <i class="fas fa-paper-plane"></i> Enviar mensaje
                    </a>
                </div>
            </div>
        </div>

        <!-- Botones de acción -->
        <div class="flex gap-4 mb-6">
            <a href="/ruta-del-documento.pdf" target="_blank" class="flex items-center gap-2 bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 text-sm">
                <i class="fas fa-file-download"></i> Descargar documentos
            </a>
            <a href="{{route('proposal.create')}}" class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm">
                <i class="fas fa-paper-plane"></i> Enviar propuesta
            </a>
        </div>

        <div class="text-gray-700 text-sm space-y-6">

            <!-- Información general -->
            <div>
                <h3 class="font-semibold text-gray-800 mb-2 text-lg">IA para mejorar recomendaciones en ecommerce</h3>
                <p class="text-gray-600">Presupuesto estimado: <span class="font-semibold text-gray-800">$12,000.00</span></p>
                <p class="text-gray-600 mt-1">Áreas de solución:</p>
                <div class="flex flex-wrap gap-2 mt-1">
                    <span class="bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">Automatización</span>
                    <span class="bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">Inteligencia Artificial</span>
                    <span class="bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">ERPs</span>
                    <span class="bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">Integración de Sistemas</span>
                    <span class="bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">Business Intelligence</span>
                </div>
            </div>
        
            <!-- Detalles del problema -->
            <div>
                <h4 class="font-semibold text-gray-800 mb-2">📌 El problema que enfrentamos</h4>
                <p>
                    En Temu, nuestra tienda online ha crecido rápidamente. Sin embargo, nuestro sistema actual de recomendaciones no refleja de manera precisa los intereses reales de nuestros clientes. Queremos mejorar esta experiencia adaptándola mejor a cada usuario.
                </p>
            </div>
        
            <!-- Qué necesitamos -->
            <div>
                <h4 class="font-semibold text-gray-800 mb-2">✅ ¿Qué necesitamos de ti?</h4>
                <ul class="list-disc ml-5 space-y-1">
                    <li>Evaluar el sistema actual desarrollado en Python y Django.</li>
                    <li>Diseñar y mejorar nuestro motor de recomendaciones.</li>
                    <li>Implementar mejoras basadas en navegación y compras anteriores.</li>
                    <li>Documentar todo el proceso técnico de manera sencilla y flexible.</li>
                </ul>
            </div>
        
            <!-- Conocimientos deseados -->
            <div>
                <h4 class="font-semibold text-gray-800 mb-2">💡 Conocimientos deseados</h4>
                <ul class="list-disc ml-5 space-y-1">
                    <li>Python, Django, Pandas.</li>
                    <li>Implementación de motores de recomendación.</li>
                    <li>Consumo de APIs RESTful.</li>
                    <li>Experiencia previa en ecommerce o marketplaces.</li>
                </ul>
            </div>
      
        
            <!-- Cómo postular -->
            <div>
                <h4 class="font-semibold text-gray-800 mb-2">📩 ¿Cómo postular?</h4>
                <p>
                    Si tienes experiencia en el área, envíanos:
                </p>
                <ul class="list-disc ml-5 space-y-1">
                    <li>Tu propuesta de solución técnica.</li>
                    <li>Presupuesto y tiempos estimados de entrega.</li>
                    <li>Portafolio de proyectos similares realizados.</li>
                </ul>
            </div>
        
        </div>

    </section>
</div>

<!-- Script para abrir/cerrar dropdown -->
<script>
    const optionsButton = document.getElementById('optionsButton');
    const optionsDropdown = document.getElementById('optionsDropdown');

    optionsButton.addEventListener('click', () => {
        optionsDropdown.classList.toggle('hidden');
    });

    window.addEventListener('click', function(e) {
        if (!optionsButton.contains(e.target) && !optionsDropdown.contains(e.target)) {
            optionsDropdown.classList.add('hidden');
        }
    });
</script>

@endsection
