@extends('layouts.home')

@section('content')
<div class="max-w-7xl bg-white p-5 rounded shadow mx-auto mt-8 space-y-8">

    <!-- Título y botón nueva propuesta -->
    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-bold">MIS PROPUESTAS</h1>
        
    </div>

    <!-- Estadísticas -->
    <div class="grid grid-cols-2 md:grid-cols-5 gap-4 text-center">
        <div class="bg-gray-100 p-4 rounded">
            <p class="text-gray-500 text-sm">Propuestas Activas</p>
            <p class="text-2xl font-bold">12</p>
        </div>
        <div class="bg-gray-100 p-4 rounded">
            <p class="text-gray-500 text-sm">Tasa de Aceptación</p>
            <p class="text-2xl font-bold">64%</p>
        </div>
        <div class="bg-gray-100 p-4 rounded">
            <p class="text-gray-500 text-sm">Propuestas Pendientes</p>
            <p class="text-2xl font-bold">7</p>
        </div>
        <div class="bg-gray-100 p-4 rounded">
            <p class="text-gray-500 text-sm">Valoración Promedio</p>
            <p class="text-2xl font-bold">4.8</p>
        </div>
    </div>

    <!-- Tabs de estado -->
    <div class="flex gap-6 border-b text-sm font-semibold text-gray-600 mt-6">
        <button class="text-blue-600 border-b-2 border-blue-600 pb-2">Todas</button>
        <button class="hover:text-blue-600 hover:border-b-2 hover:border-blue-600 pb-2">Pendientes (7)</button>
        <button class="hover:text-blue-600 hover:border-b-2 hover:border-blue-600 pb-2">En Revisión (3)</button>
        <button class="hover:text-blue-600 hover:border-b-2 hover:border-blue-600 pb-2">Aceptadas (8)</button>
        <button class="hover:text-blue-600 hover:border-b-2 hover:border-blue-600 pb-2">Rechazadas (4)</button>
    </div>

    <!-- Filtros -->
    <div class="flex flex-wrap gap-4 items-center bg-white p-4 rounded-lg shadow mt-4">
        <div class="flex items-center gap-2">
            <label class="text-gray-500 text-sm">Ordenar por:</label>
            <select class="border rounded-md px-2 py-1 text-sm">
                <option>Más recientes</option>
            </select>
        </div>
        <div class="flex items-center gap-2">
            <label class="text-gray-500 text-sm">Empresa:</label>
            <select class="border rounded-md px-2 py-1 text-sm">
                <option>Todas</option>
            </select>
        </div>
        <div class="flex items-center gap-2">
            <label class="text-gray-500 text-sm">Periodo:</label>
            <select class="border rounded-md px-2 py-1 text-sm">
                <option>Todos</option>
            </select>
        </div>
    </div>

    <!-- Lista de Propuestas -->
    <div class="bg-white rounded-lg shadow divide-y mt-4">

        @foreach([
            ['empresa' => 'LeapStores', 'titulo' => 'Automatización de informes de ventas mensuales', 'presupuesto' => 1200, 'dias' => 14, 'fecha' => '25/04/2025', 'estado' => 'Pendiente', 'color' => 'text-yellow-500 bg-yellow-100'],
            ['empresa' => 'DataVision', 'titulo' => 'Proyecto de Automatización ETL para DataVision', 'presupuesto' => 3500, 'dias' => 30, 'fecha' => '23/04/2025', 'estado' => 'En revisión', 'color' => 'text-blue-500 bg-blue-100'],
            ['empresa' => 'TechPro', 'titulo' => 'Integración de APIs para software de gestión', 'presupuesto' => 2800, 'dias' => 21, 'fecha' => '18/04/2025', 'estado' => 'Aceptada', 'color' => 'text-green-500 bg-green-100'],
            ['empresa' => 'LeapStores', 'titulo' => 'Creación de dashboard para análisis de ventas', 'presupuesto' => 950, 'dias' => 15, 'fecha' => '15/04/2025', 'estado' => 'Rechazada', 'color' => 'text-red-500 bg-red-100'],
            ['empresa' => 'DataVision', 'titulo' => 'Optimización de procesos de carga de datos', 'presupuesto' => 1800, 'dias' => 15, 'fecha' => '10/04/2025', 'estado' => 'Aceptada', 'color' => 'text-green-500 bg-green-100'],
        ] as $propuesta)

        <div class="flex flex-col md:flex-row items-start md:items-center justify-between p-4 hover:bg-gray-50 transition">

            <!-- Izquierda: Empresa y Proyecto -->
            <div class="flex items-center gap-4">
                <div class="bg-blue-100 text-blue-700 font-bold rounded-full w-10 h-10 flex items-center justify-center uppercase">
                    {{ substr($propuesta['empresa'], 0, 2) }}
                </div>
                <div class="text-sm">
                    <h3 class="font-semibold text-gray-800">{{ $propuesta['titulo'] }}</h3>
                    <p class="text-gray-500">{{ $propuesta['empresa'] }}</p>
                </div>
            </div>

            <!-- Derecha: Datos + Botón -->
            <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600 mt-4 md:mt-0">

                <div class="flex items-center gap-1">
                    <i class="fas fa-coins text-yellow-500"></i> ${{ number_format($propuesta['presupuesto'], 0, '.', ',') }}
                </div>
                <div class="flex items-center gap-1">
                    <i class="fas fa-clock text-blue-500"></i> {{ $propuesta['dias'] }} días
                </div>
                <div class="flex items-center gap-1">
                    <i class="fas fa-calendar-alt text-green-500"></i> {{ $propuesta['fecha'] }}
                </div>
                <div class="px-3 py-1 rounded-full text-xs font-semibold {{ $propuesta['color'] }}">
                    {{ $propuesta['estado'] }}
                </div>

                <!-- Botón Ver Propuesta -->
                <a href="{{ route('proposal.myproposal') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-1 rounded-full text-xs flex items-center gap-1">
                    <i class="fas fa-eye"></i> Ver Propuesta
                </a>

            </div>

        </div>

        @endforeach

    </div>

    <!-- Paginación -->
    <div class="flex justify-center mt-6">
        <nav class="flex gap-1 text-sm">
            <a href="#" class="px-3 py-1 border rounded hover:bg-gray-100">«</a>
            <a href="#" class="px-3 py-1 border rounded bg-blue-600 text-white">1</a>
            <a href="#" class="px-3 py-1 border rounded hover:bg-gray-100">2</a>
            <a href="#" class="px-3 py-1 border rounded hover:bg-gray-100">3</a>
            <a href="#" class="px-3 py-1 border rounded hover:bg-gray-100">»</a>
        </nav>
    </div>

</div>
@endsection
