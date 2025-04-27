@extends('layouts.home')

@section('content')
<div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">

    <!-- Sección de Detalles principales -->
    <section class="col-span-2 bg-white p-6 rounded-lg shadow space-y-8">

        <!-- Encabezado -->
        <div class="space-y-2">
            <a href="{{ route('projects.index') }}" class="text-blue-600 text-sm font-semibold flex items-center gap-2 hover:underline">
                <i class="fas fa-arrow-left"></i> Propuestas
            </a>
            <h1 class="text-2xl font-bold text-gray-800">Proyecto de Automatización ETL para DataVision</h1>
            <span class="inline-block bg-blue-100 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full">En revisión</span>
        </div>

        <!-- Detalles del proyecto -->
        <div class="space-y-6">

            <!-- Información del cliente -->
            <div class="bg-gray-50 p-6 rounded-lg border">
                <div class="flex items-center gap-4 mb-4">
                    <div class="bg-blue-600 text-white w-12 h-12 flex items-center justify-center rounded-full font-bold">
                        DV
                    </div>
                    <div>
                        <h2 class="font-bold text-gray-800">LeapStores</h2>
                        <p class="text-gray-500 text-sm">Empresa de análisis de datos</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-700">
                    <p><strong>Publicado:</strong> 20/04/2025</p>
                    <p><strong>Categoría:</strong> Desarrollo ETL</p>
                    <p><strong>Presupuesto:</strong> $3,000 - $4,000</p>
                    <p><strong>Duración:</strong> 1 mes</p>
                    <p><strong>Habilidades:</strong> Python, SQL, ETL, Data Engineering</p>
                </div>
            </div>
<!-- Mi propuesta -->
<div class="space-y-6">
    <h2 class="text-lg font-bold text-gray-800">Propuesta</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm text-gray-700">
        <p><strong>Mi oferta:</strong> $3,500</p>
        <p><strong>Plazo propuesto:</strong> 30 días</p>
        <p><strong>Enviada el:</strong> 23/04/2025</p>
    </div>

    <!-- Detalles de propuesta -->
    <div class="text-gray-700 text-sm space-y-4">

        <div>
            <h3 class="font-semibold mb-2">Propuesta de Trabajo: Automatización ETL para DataVision</h3>
            <p>Gracias por considerar mi perfil para este proyecto de automatización ETL. Después de revisar sus requerimientos, estoy seguro de poder entregarles una solución robusta y escalable que satisfaga sus necesidades.</p>
        </div>

        <div>
            <h3 class="font-semibold mb-2">Enfoque técnico</h3>
            <p>Propongo desarrollar una arquitectura ETL modular utilizando Python como lenguaje principal y herramientas como Apache Airflow y Pandas/PySpark. Incluirá:</p>
            <ul class="list-disc ml-5 space-y-1 mt-2">
                <li>Conexiones a fuentes diversas (APIs, bases de datos, archivos planos)</li>
                <li>Transformación de datos basada en reglas de negocio</li>
                <li>Validaciones de calidad de datos</li>
                <li>Alertas para errores de ejecución</li>
                <li>Documentación detallada de procesos</li>
            </ul>
        </div>

        <div>
            <h3 class="font-semibold mb-2">Metodología de trabajo</h3>
            <ul class="list-disc ml-5 space-y-1">
                <li><strong>Semana 1:</strong> Análisis de requerimientos, diseño inicial</li>
                <li><strong>Semana 2-3:</strong> Desarrollo de módulos ETL</li>
                <li><strong>Semana 4:</strong> Carga, pruebas, optimización</li>
            </ul>
        </div>

        <div>
            <h3 class="font-semibold mb-2">¿Por qué elegirme?</h3>
            <p>He completado 8 proyectos similares el último año (calificación promedio 4.9/5), en sectores de retail, finanzas y salud.</p>
        </div>

    </div>

    <!-- Archivos adjuntos -->
    <div class="bg-white p-4 rounded-lg border">
        <h3 class="font-semibold text-gray-800 text-base mb-4">Archivos adjuntos (2)</h3>
        <div class="space-y-2">
            <a href="#" class="flex items-center gap-2 text-gray-700 hover:text-blue-600">
                <i class="fas fa-file-pdf text-red-500"></i> Arquitectura_ETL_Propuesta.pdf
            </a>
            <a href="#" class="flex items-center gap-2 text-gray-700 hover:text-blue-600">
                <i class="fas fa-file-image text-green-500"></i> Ejemplo_Dashboard_Resultados.png
            </a>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg border">
        <h3 class="font-bold text-gray-800 text-base mb-4">Comunicación</h3>
    
        <div class="space-y-6 text-sm">
    
            <!-- Mensaje Tú -->
            <div class="flex gap-3">
                <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-semibold text-xs">
                    Tú
                </div>
                <div>
                    <p class="font-bold text-gray-800 flex items-center gap-2">
                        Tú 
                        <span class="text-gray-400 text-xs">23/04/2025 14:18</span>
                    </p>
                    <p class="mt-1 text-gray-700">
                        Gracias por tu propuesta. Me interesa tu enfoque con Apache Airflow. 
                        ¿Podrías compartir más detalles?
                    </p>
                </div>
            </div>
    
            <!-- Mensaje Empresa -->
            <div class="flex gap-3">
                <div class="flex-shrink-0 w-8 h-8 bg-gray-300 text-gray-700 rounded-full flex items-center justify-center font-semibold text-xs">
                    CV
                </div>
                <div>
                    <p class="font-bold text-gray-800 flex items-center gap-2">
                        Christian Valera
                        <span class="text-gray-500 text-xs">23/04/2025 15:32</span>
                    </p>
                    <p class="mt-1 text-gray-700">
                        Hola, para archivos grandes recomendaría PySpark sobre Pandas. 
                        Podemos montar un clúster pequeño, usar procesamiento por lotes y particionamiento 
                        para optimizar el rendimiento. ¿Deseas una propuesta específica para este escenario?
                    </p>
                </div>
            </div>
    
            <!-- Mensaje Tú -->
            <div class="flex gap-3">
                <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-semibold text-xs">
                    Tú
                </div>
                <div>
                    <p class="font-bold text-gray-800 flex items-center gap-2">
                        Tú 
                        <span class="text-gray-400 text-xs">23/04/2025 15:35</span>
                    </p>
                    <p class="mt-1 text-gray-700">
                        Sí, sería útil. Estamos evaluando varias propuestas. 
                        Tu enfoque parece alinearse bien. Te contactaré pronto.
                    </p>
                </div>
            </div>
    
        </div>
    
        <!-- Input de nuevo mensaje -->
        <div class="mt-6 border-t pt-4">
            <div class="flex gap-2">
                <input type="text" placeholder="Escribe un mensaje..." class="flex-1 border rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm">Enviar</button>
            </div>
        </div>
    </div>
    
    

</div>


        </div>

    </section>

    <!-- Barra lateral de acciones -->
    <aside class="col-span-1 space-y-6">

        <!-- Acciones -->
        <div class="bg-white p-6 rounded-lg shadow space-y-3">
            <h3 class="text-gray-800 font-semibold mb-2">Acciones</h3>
            <a href="{{route('projects.process')}}" class="block text-center  w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold text-sm px-4 py-2 rounded-lg">
                Aceptar propuesta
            </a>
            <button class="w-full border border-blue-600 text-blue-600 hover:bg-blue-50 font-semibold text-sm px-4 py-2 rounded-lg">
                Copiar enlace
            </button>
            <button class="w-full bg-red-500 hover:bg-red-600 text-white font-semibold text-sm px-4 py-2 rounded-lg">
                Rechazar propuesta
            </button>
        </div>

        <!-- Resumen -->
        <div class="bg-white p-6 rounded-lg shadow space-y-2 text-sm text-gray-700">
            <h3 class="text-gray-800 font-semibold mb-2">Resumen</h3>
            <p><strong>Estado:</strong> <span class="text-blue-600">En revisión</span></p>
            <p><strong>Mi oferta:</strong> $3,500</p>
            <p><strong>Plazo:</strong> 30 días</p>
        </div>

        <!-- Historial -->
        <div class="bg-white p-6 rounded-lg shadow space-y-2 text-sm text-gray-700">
            <h3 class="text-gray-800 font-semibold mb-4">Historial</h3>

            <div class="space-y-3">
                <div class="flex items-start gap-2">
                    <div class="w-3 h-3 rounded-full bg-blue-600 mt-1"></div>
                    <p><strong>24/04/2025 09:45</strong><br>Cliente respondió a tu mensaje</p>
                </div>
                <div class="flex items-start gap-2">
                    <div class="w-3 h-3 rounded-full bg-blue-600 mt-1"></div>
                    <p><strong>23/04/2025 15:18</strong><br>Respondiste al cliente</p>
                </div>
            </div>

        </div>

    </aside>

</div>
@endsection
