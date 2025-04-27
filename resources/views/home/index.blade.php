@extends('layouts.home')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-4 gap-6 max-w-7xl mx-auto p-4">
    
    <!-- Sidebar Izquierdo -->
    <aside class="hidden lg:block col-span-1">
        <div class="bg-white p-4 rounded-lg shadow">
            <!-- Perfil -->
            <div class="flex flex-col items-center">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" class="w-24 h-24 rounded-full mb-4" alt="Foto de perfil">
                <h2 class="text-lg font-semibold text-center">Laura Naranjales Del Valle</h2>
                <p class="text-gray-500 text-center text-sm">Especialista en Diseño Gráfico & Contenido Visual</p>
                <p class="text-gray-400 text-xs mt-2">Chiclayo, Lambayeque</p>
                <!-- Tecnologías -->
                <div class="flex gap-2 mt-3">
                    <img src="https://cdn-icons-png.flaticon.com/512/732/732190.png" class="w-6" alt="HTML">
                    <img src="https://cdn-icons-png.flaticon.com/512/732/732212.png" class="w-6" alt="CSS">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" class="w-6" alt="CSS">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" class="w-6" alt="JS">
                </div>
            </div>

            <!-- Acceso premium -->
            <div class="bg-gray-100 p-3 rounded-lg mt-6 text-center">
                <p class="text-sm mb-2">Accede a herramientas exclusivas</p>
                <button class="bg-yellow-400 text-white text-sm px-3 py-2 rounded-md">
                    Probar Premium por 1 PEN
                </button>
            </div>
        </div>
    </aside>

    <section class="col-span-1 lg:col-span-2 flex flex-col gap-6">
        <!-- Crear publicación -->
        <div class="bg-white p-4 rounded-lg shadow">
            <a href="{{ route('posts.create') }}" class="block w-full px-4 py-2 border rounded-lg bg-gray-100 text-gray-500 text-left hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-400">
                Crear publicación...
            </a>
        </div>
    
        <!-- Publicación -->
        <div class="bg-white p-6 rounded-lg shadow">
            <div class="flex justify-between items-start mb-3">
                <!-- Foto empresa + datos -->
                <div class="flex gap-3 items-center">
                    <img src="/images/LeapStores.png" alt="Logo Empresa" class="w-10 h-10 rounded-full object-cover">
                    <div>
                        <h3 class="font-semibold text-gray-800 text-sm">LeapStores</h3>
                        <p class="text-xs text-gray-500">777 seguidores</p>
                    </div>
                </div>
    
                <!-- Botón más opciones -->
                <button class="text-gray-400 hover:text-gray-600 text-xl">...</button>
            </div>
    
            <!-- Descripción -->
            <p class="text-gray-700 mb-4 text-sm">
                Buscamos un freelancer especializado en automatización para desarrollar un flujo que sincronice en tiempo real nuestro inventario entre Shopify y nuestro ERP interno (Oracle NetSuite).
            </p>
    
            <!-- Proyecto destacado -->
            <div class="border rounded-lg p-4 flex flex-col gap-2 mb-4">
                <div class="flex gap-3 items-center">
                    <img src="/images/LeapStores.png" class="w-8 h-8 rounded-full object-cover" alt="Logo proyecto">
                    <div class="flex flex-col text-sm">
                        <p class="font-bold text-gray-800 leading-5">Automatización de sincronización de inventario entre Shopify y sistema ERP</p>
                        <p class="text-xs text-gray-500">Proyecto de LeapStores · Perú (En remoto)</p>
                    </div>
                </div>
                <button class="self-start text-blue-600 border border-blue-600 rounded-md px-4 py-1 text-sm hover:bg-blue-50">
                    Ver proyecto
                </button>
            </div>
    
            <!-- Likes -->
            <div class="flex items-center gap-2 mb-2 text-blue-600 text-sm">
                <i class="fas fa-thumbs-up"></i> <span>7</span>
            </div>
    
            <!-- Reacciones -->
            <div class="flex justify-around border-t pt-4 text-gray-600 text-sm">
                <button class="flex items-center gap-2 hover:text-blue-500"><i class="fas fa-thumbs-up"></i> Me gusta</button>
                <button class="flex items-center gap-2 hover:text-blue-500"><i class="fas fa-share"></i> Compartir</button>
                <button class="flex items-center gap-2 hover:text-blue-500"><i class="fas fa-paper-plane"></i> Enviar Propuesta</button>
            </div>
        </div>
    
        <!-- Otra publicación -->
        <div class="bg-white p-6 rounded-lg shadow">
            <div class="flex justify-between items-start mb-3">
                <div class="flex gap-3 items-center">
                    <img src="/images/GrowthLab.png" alt="Logo Empresa" class="w-10 h-10 rounded-full object-cover">
                    <div>
                        <h3 class="font-semibold text-gray-800 text-sm">GrowthLab</h3>
                        <p class="text-xs text-gray-500">2370 seguidores</p>
                    </div>
                </div>
                <button class="text-gray-400 hover:text-gray-600 text-xl">...</button>
            </div>
    
            <p class="text-gray-700 mb-4 text-sm">
                Necesitamos un dashboard centralizado que automatice la extracción, transformación y visualización de datos desde HubSpot y Google BigQuery.
            </p>
    
            <div class="border rounded-lg p-4 flex flex-col gap-2 mb-4">
                <div class="flex gap-3 items-center">
                    <img src="/images/LeapStores.png" class="w-8 h-8 rounded-full object-cover" alt="Logo proyecto">
                    <div class="flex flex-col text-sm">
                        <p class="font-bold text-gray-800 leading-5">Dashboard Automatizado: Leads (HubSpot a BigQuery)</p>
                        <p class="text-xs text-gray-500">Proyecto de GrowthLab · Perú (En remoto)</p>
                    </div>
                </div>
                <button class="self-start text-blue-600 border border-blue-600 rounded-md px-4 py-1 text-sm hover:bg-blue-50">
                    Ver proyecto
                </button>
            </div>
    
            <!-- Likes -->
            <div class="flex items-center gap-2 mb-2 text-blue-600 text-sm">
                <i class="fas fa-thumbs-up"></i> <span>100</span>
            </div>
    
            <!-- Reacciones -->
            <div class="flex justify-around border-t pt-4 text-gray-600 text-sm">
                <button class="flex items-center gap-2 hover:text-blue-500"><i class="fas fa-thumbs-up"></i> Me gusta</button>
                <button class="flex items-center gap-2 hover:text-blue-500"><i class="fas fa-share"></i> Compartir</button>
                <button class="flex items-center gap-2 hover:text-blue-500"><i class="fas fa-paper-plane"></i> Enviar Propuesta</button>
            </div>
        </div>
    
    </section>
    
    <!-- Sidebar Derecho -->
    <aside class="hidden lg:block col-span-1">
        <div class="bg-white p-4 rounded-lg shadow">
            <h2 class="text-gray-800 font-bold mb-4">Añadir a tu feed</h2>

            <!-- Usuario sugerido -->
            <div class="flex flex-col items-center justify-between mb-4">
                <div class="flex items-center w-full gap-3">
                    <img src="https://robohash.org/wa?size=48x48" class="w-12 h-12 rounded-full object-cover" alt="User">
                    <div class="flex flex-col">
                        <p class="font-semibold text-sm text-gray-800">Martina Rodriguez Calle</p>
                        <p class="text-xs text-gray-500">Especialista en Diseño Gráfico</p>
                    </div>
                </div>
                <button class="flex items-center gap-1 border border-gray-300 text-gray-700 rounded-full px-3 py-1 text-sm hover:bg-gray-100">
                    <i class="fas fa-plus"></i> Seguir
                </button>
            </div>

            <!-- Otro usuario sugerido -->
            <div class="flex flex-col items-center justify-between mb-4">
                <div class="flex items-center w-full gap-3">
                    <img src="https://robohash.org/pixelystudio?size=48x48" class="w-12 h-12 rounded-full object-cover" alt="User">
                    <div class="flex flex-col">
                        <p class="font-semibold text-sm text-gray-800">Pixely Studio</p>
                        <p class="text-xs text-gray-500">Agencia de branding</p>
                    </div>
                </div>
                <button class="flex items-center gap-1 border border-gray-300 text-gray-700 rounded-full px-3 py-1 text-sm hover:bg-gray-100">
                    <i class="fas fa-plus"></i> Seguir
                </button>
            </div>

            <!-- Otro usuario sugerido -->
            <div class="flex flex-col items-center justify-between">
                <div class="flex items-center gap-3">
                    <img src="https://robohash.org/llamadev?size=48x48" class="w-12 h-12 rounded-full object-cover" alt="User">
                    <div class="flex flex-col">
                        <p class="font-semibold text-sm text-gray-800">LlamaDev</p>
                        <p class="text-xs text-gray-500">Empresa de desarrollo de software en Laravel</p>
                    </div>
                </div>
                <button class="flex items-center gap-1 border border-gray-300 text-gray-700 rounded-full px-3 py-1 text-sm hover:bg-gray-100">
                    <i class="fas fa-plus"></i> Seguir
                </button>
            </div>

            <div class="text-center mt-4">
                <a href="#" class="text-gray-500 cursor-pointer text-sm">Ver todas las recomendaciones →</a>
            </div>
        </div>
    </aside>

</div>
@endsection
