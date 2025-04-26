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

            <div class="z-10 bg-white rounded-xl shadow-xl p-10 w-full max-w-md text-center">
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
                    <!-- Formulario de Registro -->
                    <div id="registerForm" class="form-content">
                        <form method="POST" action="#">
                            @csrf

                            <!-- Información general -->
                            <div class="mb-6">
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
                                <div class="mb-4">
                                    <label for="country"
                                        class="block text-gray-700 font-medium mb-2 text-left">País</label>
                                    <input type="text" id="country" name="country"
                                        class="w-full px-6 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:outline-none text-gray-700 placeholder-gray-400"
                                        placeholder="Perú" required>
                                </div>

                                <!-- Breve biografía -->
                                <div class="mb-6">
                                    <label for="bio" class="block text-gray-700 font-medium mb-2 text-left">Breve
                                        biografía</label>
                                    <textarea id="bio" name="bio"
                                        class="w-full px-6 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:outline-none text-gray-700 placeholder-gray-400"
                                        placeholder="Ej: Freelancer con 5 años integrando APIs en sistemas ERP" required></textarea>
                                </div>
                            </div>

                            <!-- Foto de perfil -->
                            <div class="mb-6">
                                <label for="profile_picture" class="block text-gray-700 font-medium mb-2 text-left">Foto de
                                    perfil</label>
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
                @endif
            </div>
        </div>
    </div>
@endsection
