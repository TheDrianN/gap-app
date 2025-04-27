@extends('layouts.home')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow mt-8">

    <h2 class="text-lg font-bold mb-6">Crear Publicación</h2>

    <form>

        <!-- Título y Presupuesto -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-sm font-semibold mb-2">Título de Proyecto</label>
                <input type="text" class="w-full border rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm" placeholder="Proyecto de Automatización">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2">Presupuesto</label>
                <input type="text" class="w-full border rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm" placeholder="$12,000.00">
            </div>
        </div>

        <!-- Descripción -->
        <div class="mb-6">
            <label class="block text-sm font-semibold mb-2">¿En qué proyectos estás pensando?</label>
            <textarea placeholder="Agregar detalles del proyecto o necesidades" class="w-full border rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm" rows="4"></textarea>
        </div>

        <!-- Áreas de Solución -->
        <div class="mb-6">
            <label class="block text-sm font-semibold mb-2">Seleccione las áreas que la empresa requiera soluciones</label>
            <div id="selected-areas" class="flex flex-wrap gap-2 items-center">
                <span class="bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full">Automatización</span>
                <span class="bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full">Inteligencia Artificial</span>
                <span class="bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full">ERPs</span>
                <span class="bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full">Integración de Sistemas</span>
                <span class="bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full">Business Intelligence</span>
                
                <!-- Botón + -->
                <button type="button" id="openModal" class="flex items-center justify-center w-8 h-8 bg-blue-100 text-blue-600 rounded-full hover:bg-blue-200">
                    +
                </button>
            </div>
        </div>

        <!-- Adjuntar Documentos -->
        <div class="mb-6">
            <label class="block text-sm font-semibold mb-2">Adjuntar Documentos</label>
            <p class="text-gray-500 text-xs mb-3">Puedes enviar documentos como arquitectura actual, requerimientos, esquema de red, etc.</p>
            <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 flex justify-center items-center flex-col">
                <i class="fas fa-file-upload text-purple-500 text-3xl mb-2"></i>
                <span class="text-purple-600 font-semibold text-sm">Arrastrar</span>
            </div>
        </div>

        <!-- Botón Publicar -->
        <div class="text-right">
            <button type="submit" class="inline-flex bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-2 rounded-lg items-center justify-center gap-2">
                <i class="fas fa-paper-plane"></i> Publicar
            </button>
        </div>
    </form>

</div>

<!-- Modal -->
<div id="areaModal" class="hidden fixed inset-0 bg-black bg-opacity-30 backdrop-blur-sm flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg w-full max-w-md">

        <h3 class="text-lg font-bold mb-4">Agregar Área de Interés</h3>

        <input type="text" id="searchInput" placeholder="Buscar área..." class="w-full border px-4 py-2 rounded-md mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">

        <!-- Lista de áreas -->
        <div id="areaList" class="space-y-2 max-h-60 overflow-y-auto">
            <!-- Dinámico -->
        </div>

        <div class="text-right mt-4">
            <button type="button" id="closeModal" class="mr-2 text-gray-600 hover:underline">Cancelar</button>
            <button type="button" id="confirmSelection" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-md">Agregar</button>
        </div>

    </div>
</div>

<!-- Scripts -->
<script>
    const openModal = document.getElementById('openModal');
    const areaModal = document.getElementById('areaModal');
    const closeModal = document.getElementById('closeModal');
    const confirmSelection = document.getElementById('confirmSelection');
    const selectedAreas = document.getElementById('selected-areas');
    const areaList = document.getElementById('areaList');
    const searchInput = document.getElementById('searchInput');

    const allAreas = [
        'Automatización', 'Inteligencia Artificial', 'ERPs', 'Integración de Sistemas', 'Business Intelligence',
        'Machine Learning', 'Ciberseguridad', 'Data Science', 'Blockchain', 'IoT', 'Redes', 'Big Data', 'Análisis de Datos'
    ];

    let filteredAreas = [...allAreas];

    openModal.addEventListener('click', () => {
        areaModal.classList.remove('hidden');
        renderAreaList();
    });

    closeModal.addEventListener('click', () => {
        areaModal.classList.add('hidden');
    });

    searchInput.addEventListener('input', (e) => {
        const value = e.target.value.toLowerCase();
        filteredAreas = allAreas.filter(area => area.toLowerCase().includes(value));
        renderAreaList();
    });

    function renderAreaList() {
        areaList.innerHTML = '';
        filteredAreas.forEach(area => {
            const div = document.createElement('div');
            div.className = "flex items-center gap-2";
            div.innerHTML = `
                <input type="checkbox" value="${area}" class="area-checkbox">
                <label class="text-sm text-gray-700">${area}</label>
            `;
            areaList.appendChild(div);
        });
    }

    confirmSelection.addEventListener('click', () => {
        const checkboxes = document.querySelectorAll('.area-checkbox:checked');
        checkboxes.forEach(checkbox => {
            const span = document.createElement('span');
            span.className = "bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full";
            span.innerText = checkbox.value;
            selectedAreas.insertBefore(span, openModal);
        });
        areaModal.classList.add('hidden');
    });
</script>
@endsection
