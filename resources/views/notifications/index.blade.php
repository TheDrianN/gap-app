@extends('layouts.home')

@section('content')
<div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-4 gap-6 mt-6">

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

        </div>
    </aside>

    <!-- Centro - Notificaciones -->
    <section class="col-span-1 lg:col-span-2 max-w-3xl mx-auto">
        <!-- Filtros -->
        <div class="flex items-center bg-white rounded-lg shadow p-3 gap-4 mb-4">
            <button class="bg-green-600 text-white px-4 py-1 rounded-full text-sm font-semibold">Todo</button>
            <button class="border border-gray-300 text-gray-700 px-4 py-1 rounded-full text-sm font-semibold hover:bg-gray-100">Proyectos</button>
            <button class="border border-gray-300 text-gray-700 px-4 py-1 rounded-full text-sm font-semibold hover:bg-gray-100">Menciones</button>
        </div>

        <!-- Lista de Notificaciones -->
        <div class="space-y-4 bg-white p-4 rounded-lg shadow">

            <!-- Notificación importante -->
            <div class="flex items-start gap-3 bg-blue-100 p-4 rounded-lg shadow relative">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google Logo" class="w-10 h-10 rounded-full object-cover">
                <div class="flex-1">
                    <p class="text-gray-800 text-sm font-semibold">
                        Los riesgos de la hiperfijación; Tu mascota influye en tu salud mental más de lo que crees, y más
                    </p>
                </div>
                <button class="text-gray-400 hover:text-red-500 absolute top-2 right-2">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <!-- Notificación con acción -->
            <div class="flex flex-col gap-2 bg-blue-100 p-4 rounded-lg shadow relative">
                <div class="flex items-start gap-3">
                    <img src="https://robohash.org/gap?size=60x60" alt="GAP Logo" class="w-10 h-10 rounded-full object-cover">
                    <div class="flex-1">
                        <p class="text-gray-800 text-sm font-semibold">
                            Mira 10 proyectos similares a este que has visto recientemente
                        </p>
                    </div>
                    <button class="text-gray-400 hover:text-red-500 absolute top-2 right-2">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="flex justify-end">
                    <button class="text-blue-600 text-sm font-semibold border border-blue-600 rounded-full px-4 py-1 hover:bg-blue-50">
                        Ver proyectos
                    </button>
                </div>
            </div>

            <!-- Notificación simple -->
            <div class="flex items-start gap-3 bg-white p-4 rounded-lg shadow relative">
                <img src="https://robohash.org/gap?size=60x60" alt="GAP Logo" class="w-10 h-10 rounded-full object-cover">
                <div class="flex-1">
                    <p class="text-gray-800 text-sm font-semibold">
                        Mira 10 proyectos similares a este que has visto recientemente
                    </p>
                </div>
                <button class="text-gray-400 hover:text-red-500 absolute top-2 right-2">
                    <i class="fas fa-times"></i>
                </button>
            </div>

        </div>

    </section>

</div>
@endsection
