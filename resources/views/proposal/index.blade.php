@extends('layouts.home')

@section('content')
<div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">

    <!-- Sección de Filtros y Propuestas -->
    <section class="col-span-1 lg:col-span-2 space-y-6">

        <!-- Filtros arriba -->
        <div class="flex gap-4 flex-wrap items-center mb-4">
            <select class="border rounded-md px-3 py-1 text-sm">
                <option>Fecha de publicación</option>
            </select>
            <select class="border rounded-md px-3 py-1 text-sm">
                <option>País</option>
            </select>
            <button class="text-sm text-gray-600 hover:underline">Restablecer</button>
        </div>

        <!-- Botón Volver -->
        <div>
            <a href="{{ route('projects.index') }}" class="flex items-center gap-2 text-blue-600 text-sm font-semibold hover:underline">
                <i class="fas fa-arrow-left"></i> Volver
            </a>
        </div>

        <!-- Lista de Propuestas -->
        <div class="space-y-6">

            @foreach(range(1, 5) as $item)
            <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition p-5 flex flex-col md:flex-row md:items-center gap-6 group">

                <!-- Información principal -->
                <div class="flex items-center gap-4 flex-1">
                    <img src="https://randomuser.me/api/portraits/men/{{ $item + 30 }}.jpg" alt="User" class="w-16 h-16 rounded-full object-cover border-2 border-blue-500 shadow">

                    <div class="space-y-1">
                        <h3 class="font-bold text-gray-800 text-base">Christian Valera</h3>
                        <p class="text-gray-500 text-xs">Perú</p>
                        <p class="text-gray-700 text-sm mt-1">
                            "Tengo experiencia en automatización de procesos. Puedo entregar un flujo funcional rápido."
                        </p>
                    </div>
                </div>

                <!-- Información secundaria -->
                <div class="flex flex-col items-end gap-3 text-right w-full md:w-auto">
                    <div class="text-gray-600 text-sm space-y-1">
                        <p><strong>Tiempo:</strong> <span class="text-gray-800 font-semibold">20 días</span></p>
                        <p><strong>Presupuesto:</strong> <span class="text-gray-800 font-semibold">$300</span></p>
                    </div>

                    <!-- Botones -->
                    <div class="flex flex-wrap gap-2 justify-end">
                        <a href="{{route('proposal.viewmore')}}" class="flex items-center gap-1 bg-blue-600 hover:bg-blue-700 text-white text-xs px-4 py-1.5 rounded-full shadow">
                            <i class="fas fa-eye"></i> Ver más
                        </a>
                       
                    </div>
                </div>

            </div>
            @endforeach

        </div>

    </section>

    <!-- Detalle del Proyecto (Derecha) -->
    <aside class="hidden lg:block col-span-1 bg-white p-6 rounded-lg shadow">
        <h2 class="font-bold text-gray-800 text-lg mb-4">Automatización del proceso de validación de facturas en sistema interno</h2>
        <p class="text-gray-700 text-sm mb-4">
            Buscamos un freelancer con experiencia en automatización de procesos (RPA) para desarrollar un flujo automatizado que lea facturas electrónicas en PDF, extraiga los datos clave (RUC, monto, fecha, número de factura), y los ingrese automáticamente en nuestro sistema basado en web.
        </p>

        <ul class="text-gray-600 text-sm mb-4 space-y-1">
            <li><strong>Presupuesto:</strong> $250 – $350 USD</li>
            <li><strong>Duración estimada:</strong> 15 – 30 días</li>
        </ul>
    </aside>

</div>
@endsection
