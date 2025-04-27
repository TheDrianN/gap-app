@extends('layouts.home')

@section('content')
<div class="max-w-7xl bg-white p-5 rounded shadow mx-auto mt-8 space-y-8">

    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-bold">MIS PROYECTOS</h1>
        <a href="{{ route('posts.create') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg flex items-center gap-2">
            <i class="fas fa-plus"></i> Nuevo Proyecto
        </a>
    </div>

    <!-- Tabs -->
    <div class="flex gap-6 border-b text-sm font-semibold text-gray-600">
        <button class="text-blue-600 border-b-2 border-blue-600 pb-2">Todos</button>
        <button class="hover:text-blue-600 hover:border-b-2 hover:border-blue-600 pb-2">Publicados</button>
        <button class="hover:text-blue-600 hover:border-b-2 hover:border-blue-600 pb-2">Finalizados</button>
        <button class="hover:text-blue-600 hover:border-b-2 hover:border-blue-600 pb-2">Archivados</button>
    </div>

    <!-- Filtros -->
    <div class="bg-white p-4 rounded-lg shadow flex flex-wrap gap-4 items-center">
        <div class="flex items-center gap-2">
            <label class="text-gray-500 text-sm">Ordenar por:</label>
            <select class="border rounded-md px-2 py-1 text-sm">
                <option>Más recientes</option>
                <option>Más antiguos</option>
            </select>
        </div>
        <div class="flex items-center gap-2">
            <label class="text-gray-500 text-sm">Estado:</label>
            <select class="border rounded-md px-2 py-1 text-sm">
                <option>Todos</option>
                <option>Publicados</option>
                <option>Finalizados</option>
            </select>
        </div>
        <div class="flex items-center gap-2">
            <label class="text-gray-500 text-sm">Periodo:</label>
            <select class="border rounded-md px-2 py-1 text-sm">
                <option>Todos</option>
                <option>Últimos 30 días</option>
                <option>Últimos 6 meses</option>
            </select>
        </div>
    </div>

    <!-- Lista de Proyectos -->
    <div class="bg-white rounded-lg shadow divide-y">

        @foreach([
            ['empresa' => 'LeapStores', 'titulo' => 'Automatización de informes de ventas', 'presupuesto' => 1200, 'dias' => 14, 'fecha' => '25/04/2025'],
            ['empresa' => 'LeapStores', 'titulo' => 'Proyecto de Automatización ETL', 'presupuesto' => 3500, 'dias' => 30, 'fecha' => '23/04/2025'],
            ['empresa' => 'LeapStores', 'titulo' => 'Integración de APIs para software', 'presupuesto' => 2800, 'dias' => 21, 'fecha' => '18/04/2025'],
            ['empresa' => 'LeapStores', 'titulo' => 'Dashboard para análisis de ventas', 'presupuesto' => 950, 'dias' => 15, 'fecha' => '15/04/2025'],
        ] as $proyecto)

        <div class="flex flex-col md:flex-row items-start md:items-center justify-between p-4 hover:bg-gray-50 transition">

            <div class="flex items-center gap-4">
                <div class="bg-blue-100 text-blue-700 font-bold rounded-full w-10 h-10 flex items-center justify-center">
                    {{ strtoupper(substr($proyecto['empresa'], 0, 2)) }}
                </div>
                <div class="text-sm">
                    <h3 class="font-semibold text-gray-800">{{ $proyecto['titulo'] }}</h3>
                    <p class="text-gray-500">{{ $proyecto['empresa'] }}</p>
                </div>
            </div>

            <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600 mt-4 md:mt-0">
                <div class="flex items-center gap-1">
                    <i class="fas fa-coins text-yellow-500"></i> ${{ number_format($proyecto['presupuesto'], 0, '.', ',') }}
                </div>
                <div class="flex items-center gap-1">
                    <i class="fas fa-clock text-blue-500"></i> {{ $proyecto['dias'] }} días
                </div>
                <div class="flex items-center gap-1">
                    <i class="fas fa-calendar-alt text-green-500"></i> {{ $proyecto['fecha'] }}
                </div>

                <!-- Botón Ver Propuestas -->
                <a href="{{route('proposal.index')}}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-1 rounded-full text-xs flex items-center gap-1">
                    <i class="fas fa-eye"></i> Ver Propuestas
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
