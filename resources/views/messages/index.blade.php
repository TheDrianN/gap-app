@extends('layouts.home')

@section('content')
<div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-4 mt-6">

    <!-- Lista de Conversaciones -->
    <aside class="col-span-1 bg-white rounded-lg shadow overflow-y-auto max-h-[85vh]">
        
        <!-- Barra de búsqueda + nuevo mensaje -->
        <div class="flex items-center p-4 border-b gap-2">
            <h2 class="text-lg font-semibold flex-1">Mensajes</h2>
            <button class="text-gray-500 hover:text-blue-500">
                <i class="fas fa-edit text-xl"></i>
            </button>
        </div>
        
        <div class="p-3">
            <div class="relative">
                <i class="fas fa-search absolute top-2.5 left-3 text-gray-400"></i>
                <input type="text" placeholder="Buscar mensaje" class="w-full pl-10 pr-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 text-sm">
            </div>
        </div>

        <!-- Botón No leídos -->
        <div class="px-4 pb-2">
            <button class="bg-green-600 text-white text-xs px-3 py-1 rounded-full font-semibold">No leídos</button>
        </div>

        <!-- Lista de chats -->
        <div class="space-y-4 px-4 pb-6">
            @foreach (['Shtefany Delgado Marrufo', 'Edu Fernandez', 'Laura Naranjales'] as $user)
            <div class="flex items-center gap-3 hover:bg-gray-100 p-2 rounded-lg cursor-pointer">
                <img src="https://robohash.org/{{ strtolower(str_replace(' ', '', $user)) }}?size=60x60" alt="Avatar" class="w-10 h-10 rounded-full object-cover">
                <div class="flex flex-col flex-1">
                    <h4 class="font-semibold text-sm truncate">{{ $user }}</h4>
                    <p class="text-gray-400 text-xs truncate">Último mensaje aquí...</p>
                </div>
                <span class="text-gray-400 text-xs">7 mar 2024</span>
            </div>
            @endforeach
        </div>
    </aside>

    <!-- Chat principal -->
    <section class="col-span-2 bg-white rounded-lg shadow flex flex-col h-[85vh]">

        <!-- Cabecera de la conversación -->
        <div class="flex items-center gap-3 p-4 border-b">
            <img src="https://robohash.org/shtefanydelgadomarrufo?size=60x60" alt="Avatar" class="w-12 h-12 rounded-full object-cover">
            <div>
                <h3 class="font-semibold text-md">Shtefany Delgado Marrufo</h3>
                <p class="text-gray-500 text-xs">Estudiante de Ingeniería de Sistemas</p>
            </div>
        </div>

        <!-- Mensajes -->
        <div class="flex-1 overflow-y-auto p-6 space-y-4 bg-gray-50">
            <!-- Mensaje enviado -->
            <div class="flex flex-col items-start">
                <div class="bg-white p-3 rounded-lg shadow text-sm max-w-xs">
                    Hola
                </div>
                <span class="text-xs text-gray-400 mt-1">Shtefany Delgado Marrufo</span>
            </div>

            <!-- Mensaje recibido -->
            <div class="flex flex-col items-end">
                <div class="bg-blue-100 p-3 rounded-lg shadow text-sm max-w-xs">
                    Hola
                </div>
                <span class="text-xs text-gray-400 mt-1">Edu Fernandez</span>
            </div>
        </div>

        <!-- Input para enviar mensaje -->
        <div class="border-t p-4 flex items-center gap-2">
            <button class="text-gray-500 hover:text-blue-500">
                <i class="fas fa-image text-xl"></i>
            </button>
            <button class="text-gray-500 hover:text-blue-500">
                <i class="fas fa-smile text-xl"></i>
            </button>
            <button class="text-gray-500 hover:text-blue-500">
                <i class="fas fa-paperclip text-xl"></i>
            </button>

            <input type="text" placeholder="Escribe un mensaje..." class="flex-1 px-4 py-2 border rounded-lg text-sm focus:ring-2 focus:ring-blue-500">
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm">
                Enviar
            </button>
        </div>
    </section>

</div>
@endsection
