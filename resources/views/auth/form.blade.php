@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-white flex flex-col justify-between overflow-x-hidden">

        <!-- Botones superiores - Versión corregida -->
        <div class="flex justify-end items-center p-6 overflow-x-hidden">
            <div id="buttonContainer"
                class="flex border border-blue-600 rounded-full overflow-hidden relative transition-all duration-500 ease-in-out w-auto transform">
                <!-- Botón Iniciar sesión (activo por defecto) -->
                <a href="{{ route('showForm', ['type' => 'login']) }}" id="loginButton"
                    class="{{ $formType === 'login' ? 'bg-blue-600 text-white' : 'bg-transparent text-blue-600' }} text-sm font-bold px-6 py-2 rounded-full transition-all duration-300 ease-in-out"
                    onclick="setActiveButton('login'); return false;">
                    Iniciar sesión
                </a>
                <!-- Botón Registrar -->
                <a href="{{ route('showForm', ['type' => 'register']) }}" id="registerButton"
                    class="{{ $formType === 'register' ? 'bg-blue-600 text-white' : 'bg-transparent text-blue-600' }} text-sm font-bold px-6 py-2 rounded-full transition-all duration-300 ease-in-out"
                    onclick="setActiveButton('register'); return false;">
                    Registrar
                </a>

            </div>
        </div>

        <!-- Card del formulario -->
        <div class="flex justify-center items-center flex-grow relative">
            <!-- Ola SVG como fondo inferior -->
            <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0]">
                <svg class="relative block w-full h-[600px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
                    preserveAspectRatio="none">
                    <path fill="#2563eb" fill-opacity="1"
                        d="M0,224L48,213.3C96,203,192,181,288,165.3C384,149,480,139,576,149.3C672,160,768,192,864,202.7C960,213,1056,203,1152,181.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                    </path>
                </svg>
            </div>

            <div class="z-10 bg-white rounded-xl shadow-xl p-10 w-full max-w-xl md:max-w-2xl xl:max-w-3xl min-w-[300px] text-center transition-all duration-500">
                <!-- Logo -->
                <div class="flex justify-center items-center mb-6">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-75 w-75 mr-2">
                </div>

                @if ($formType === 'login')
                    <!-- Título dinámico -->
                    <h2 class="text-xl font-bold text-gray-800 mb-4" id="formTitle">Bienvenido</h2>

                    <!-- Formulario de Iniciar sesión (visible por defecto) -->
                    <div id="loginForm" class="form-content">
                        <form method="POST" action="#">
                            @csrf
                            <div class="mb-6 relative">
                                <input type="email" id="email" name="email"
                                    class="w-full px-6 py-3 border border-gray-300 rounded-full focus:ring-2 focus:ring-gray-800 focus:outline-none text-center text-gray-700 placeholder-gray-400"
                                    placeholder="Ingresa tu correo" required>
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600 text-left">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6 relative">
                                <input type="password" id="password" name="password"
                                    class="w-full px-6 py-3 border border-gray-300 rounded-full focus:ring-2 focus:ring-gray-800 focus:outline-none text-center text-gray-700 placeholder-gray-400"
                                    placeholder="Contraseña" required>
                                @error('password')
                                    <p class="mt-1 text-sm text-red-600 text-left">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex justify-between items-center mt-4">
                                <button type="submit"
                                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-full transition flex items-center space-x-2">
                                    <span>Entrar</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <a href="#" class="text-sm text-gray-800 hover:underline">¿Olvidaste la
                                    contraseña?</a>
                            </div>
                        </form>
                    </div>
                @else
                    <!-- Tabs de selección -->
                    <div class="flex justify-center mb-8">
                        <div class="flex bg-gray-100 p-1 rounded-lg space-x-2">
                            <button id="empresaTab"
                                class="px-6 py-2 text-sm font-semibold rounded-lg focus:outline-none transition-all duration-300 text-gray-500"
                                onclick="showForm('empresa')">
                                Perfil empresa
                            </button>

                            <button id="freelancerTab"
                                class="px-6 py-2 text-sm font-semibold rounded-lg focus:outline-none transition-all duration-300 text-gray-500"
                                onclick="showForm('freelancer')">
                                Perfil freelancer
                            </button>
                        </div>
                    </div>
                    <!-- Formularios -->
                    <div id="empresaForm" class="hidden">
                        <form method="POST" action="#" enctype="multipart/form-data">
                            @csrf

                            <!-- Título -->
                            <div class="mb-8 text-left">
                                <h2 class="text-lg font-bold text-gray-800">Perfil de empresa</h2>
                                <p class="text-sm text-gray-500 mt-1">Complete la información de su empresa para comenzar a
                                    solicitar servicios</p>
                            </div>

                            <!-- Información principal -->
                            <div class="mb-6">
                                <h3 class="text-md font-semibold text-gray-800 mb-4 flex items-center">
                                    <i class="fas fa-building mr-2"></i> Información principal
                                </h3>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <!-- Nombre de la empresa -->
                                    <div class="text-left">
                                        <label class="block text-gray-700 text-sm mb-1">Nombre de la empresa</label>
                                        <input type="text" name="company_name"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 text-gray-700"
                                            placeholder="Nombre de la empresa" required>
                                    </div>

                                    <!-- Sector -->
                                    <div class="text-left">
                                        <label class="block text-gray-700 text-sm mb-1">Sector</label>
                                        <input type="text" name="sector"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 text-gray-700"
                                            placeholder="Ej: Tecnología, Finanzas, Salud..." required>
                                    </div>

                                    <!-- Tamaño -->
                                    <div class="text-left">
                                        <label class="block text-gray-700 text-sm mb-1">Tamaño</label>
                                        <select name="company_size"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 text-gray-700">
                                            <option>1 - 10 empleados</option>
                                            <option>11 - 50 empleados</option>
                                            <option>51 - 200 empleados</option>
                                            <option>201 - 500 empleados</option>
                                            <option>501 - 1000 empleados</option>
                                            <option>Más de 1000 empleados</option>
                                        </select>
                                    </div>

                                    <!-- País -->
                                    <div class="text-left">
                                        <label class="block text-gray-700 text-sm mb-1">País</label>
                                        <select name="country"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 text-gray-700">
                                            <option value="Perú">Perú</option>
                                            <option value="México">México</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="España">España</option>
                                            <!-- Agrega más si deseas -->
                                        </select>
                                    </div>
                                </div>

                                <!-- Descripción de la empresa -->
                                <div class="mt-4 text-left">
                                    <label class="block text-gray-700 text-sm mb-1">Descripción de la empresa</label>
                                    <textarea name="description"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 text-gray-700"
                                        placeholder="Describe brevemente tu empresa y las principales áreas de negocio..." rows="3" required></textarea>
                                </div>
                            </div>

                            <!-- Áreas de interés tecnológico -->
                            <div class="mb-6">
                                <h3 class="text-md font-semibold text-gray-800 mb-4 flex items-center">
                                    <i class="fas fa-microchip mr-2"></i> Áreas de interés tecnológico
                                </h3>

                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="px-4 py-2 bg-blue-600 text-white rounded-full text-sm cursor-pointer">Automatización</span>
                                    <span
                                        class="px-4 py-2 bg-blue-600 text-white rounded-full text-sm cursor-pointer">Inteligencia
                                        Artificial</span>
                                    <span
                                        class="px-4 py-2 bg-blue-600 text-white rounded-full text-sm cursor-pointer">Ciberseguridad</span>
                                    <span
                                        class="px-4 py-2 bg-blue-600 text-white rounded-full text-sm cursor-pointer">ERPs</span>
                                    <span
                                        class="px-4 py-2 bg-blue-600 text-white rounded-full text-sm cursor-pointer">Business
                                        Intelligence</span>
                                    <span
                                        class="px-4 py-2 bg-blue-600 text-white rounded-full text-sm cursor-pointer">Desarrollo
                                        Web</span>
                                    <span
                                        class="px-4 py-2 bg-blue-600 text-white rounded-full text-sm cursor-pointer">Integración
                                        de Sistemas</span>
                                    <span
                                        class="px-4 py-2 bg-gray-300 text-gray-700 rounded-full text-sm cursor-pointer">Añadir
                                        otro</span>
                                </div>
                            </div>

                            <!-- Presupuesto promedio y Logo -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                <!-- Presupuesto promedio -->
                                <div class="text-left">
                                    <label class="block text-gray-700 text-sm mb-1">Presupuesto promedio ($)</label>
                                    <select name="budget"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 text-gray-700">
                                        <option>Menos de $1,000</option>
                                        <option>$1,000 - $5,000</option>
                                        <option>$5,000 - $10,000</option>
                                        <option>Más de $10,000</option>
                                    </select>
                                </div>

                                <!-- Logo de empresa -->
                                <div class="text-left">
                                    <label class="block text-gray-700 text-sm mb-1">Logo de la empresa</label>
                                    <input type="file" name="logo"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 focus:outline-none">
                                </div>
                            </div>

                            <!-- Verificación de empresa -->
                            <div class="mb-6 bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 rounded-lg">
                                <p class="font-semibold">Verificación de empresa</p>
                                <p class="text-sm mt-1">Para completar su perfil y acceder a todas las funcionalidades, se
                                    requiere verificación. Por favor, adjunte documento de registro empresarial.</p>

                                <div class="mt-4">
                                    <button type="button"
                                        class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-4 py-2 rounded-full transition">
                                        Subir documento
                                    </button>
                                </div>
                            </div>

                            <!-- Botones finales -->
                            <div class="flex justify-between items-center mt-8">

                                <button type="submit"
                                    class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-full transition">
                                    Guardar
                                </button>
                            </div>

                        </form>
                    </div>

                    <!-- Formulario Freelancer -->
                    <div id="freelancerForm">
                        <form method="POST" action="#">
                            @csrf
                            <h3 class="text-lg font-semibold text-gray-800 mb-4 text-left">Información general</h3>

                            <!-- Nombre completo -->
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 font-medium mb-2 text-left">Nombre
                                    completo</label>
                                <input type="text" id="name" name="name"
                                    class="w-full px-6 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:outline-none text-gray-700 placeholder-gray-400"
                                    placeholder="Nombre completo" required>
                            </div>

                            <!-- Título profesional -->
                            <div class="mb-4">
                                <label for="title" class="block text-gray-700 font-medium mb-2 text-left">Título
                                    profesional</label>
                                <input type="text" id="title" name="title"
                                    class="w-full px-6 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:outline-none text-gray-700 placeholder-gray-400"
                                    placeholder="Ej: Especialista en Automatización de Datos" required>
                            </div>

                            <!-- País -->
                            <div class="mb-4 text-left">
                                <label for="country" class="block text-gray-700 font-medium mb-2">País</label>
                                <select id="country" name="country"
                                    class="w-full px-6 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:outline-none text-gray-700">
                                    <option value="">Selecciona un país</option>
                                    <option value="Perú">Perú</option>
                                    <option value="México">México</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Chile">Chile</option>
                                    <option value="España">España</option>
                                    <option value="Estados Unidos">Estados Unidos</option>
                                </select>
                            </div>

                            <!-- Breve biografía -->
                            <div class="mb-6">
                                <label for="bio" class="block text-gray-700 font-medium mb-2 text-left">Breve
                                    biografía</label>
                                <textarea id="bio" name="bio"
                                    class="w-full px-6 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:outline-none text-gray-700 placeholder-gray-400"
                                    placeholder="Ej: Freelancer con 5 años integrando APIs en sistemas ERP" required></textarea>
                            </div>

                            <!-- Foto de perfil -->
                            <div class="mb-6">
                                <label for="profile_picture" class="block text-gray-700 font-medium mb-2 text-left">Foto
                                    de perfil</label>
                                <div
                                    class="w-full h-40 border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center text-gray-600">
                                    <span class="text-center">Arrastrar y soltar imagen</span>
                                </div>
                            </div>

                            <!-- Botón Siguiente -->
                            <button type="submit"
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-full transition">
                                Siguiente
                            </button>
                        </form>
                    </div>
            </div>
            @endif
        </div>
    </div>
    </div>

    <!-- Script para controlar los tabs -->
    <script>
        function showForm(type) {
            const empresaForm = document.getElementById('empresaForm');
            const freelancerForm = document.getElementById('freelancerForm');
            const empresaTab = document.getElementById('empresaTab');
            const freelancerTab = document.getElementById('freelancerTab');

            if (type === 'empresa') {
                empresaForm.classList.remove('hidden');
                freelancerForm.classList.add('hidden');

                empresaTab.classList.add('bg-white', 'text-gray-800', 'shadow');
                empresaTab.classList.remove('text-gray-500');

                freelancerTab.classList.remove('bg-white', 'text-gray-800', 'shadow');
                freelancerTab.classList.add('text-gray-500');
            } else {
                freelancerForm.classList.remove('hidden');
                empresaForm.classList.add('hidden');

                freelancerTab.classList.add('bg-white', 'text-gray-800', 'shadow');
                freelancerTab.classList.remove('text-gray-500');

                empresaTab.classList.remove('bg-white', 'text-gray-800', 'shadow');
                empresaTab.classList.add('text-gray-500');
            }
        }

        // Mostrar Freelancer por defecto al cargar
        document.addEventListener('DOMContentLoaded', function() {
            showForm('freelancer');
        });
    </script>
@endsection
