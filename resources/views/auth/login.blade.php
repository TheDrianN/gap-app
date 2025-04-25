@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-white flex flex-col justify-between">
    
    <!-- Botones superiores -->
    <div class="flex justify-end items-center p-6">
        <div class="flex border border-blue-600 rounded-full overflow-hidden">
            <!-- Botón activo -->
            <a href="{{ route('login') }}" 
               class="bg-blue-600 text-white text-sm font-bold px-6 py-2 rounded-full focus:outline-none">
                iniciar sesión
            </a>
            <!-- Botón inactivo -->
            <a href="#" 
               class="text-blue-600 text-sm font-bold px-6 py-2 rounded-r-full focus:outline-none hover:bg-blue-50 transition">
                registrar
            </a>
        </div>
    </div>
    

    <!-- Card del formulario -->
    <div class="flex justify-center items-center flex-grow relative">
        <!-- Ola SVG como fondo inferior -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0]">
            <svg class="relative block w-full h-[600px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
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

            <!-- Título -->
            <h2 class="text-xl font-bold text-gray-800 mb-4">Bienvenido</h2>

            <!-- Formulario -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-6 relative">
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        class="w-full px-6 py-3 border border-gray-300 rounded-full focus:ring-2 focus:ring-gray-800 focus:outline-none text-center text-gray-700 placeholder-gray-400"
                        placeholder="Ingresa tu correo"
                        required
                    >
                    @error('email')
                        <p class="mt-1 text-sm text-red-600 text-left">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-between items-center mt-4">
                    <!-- Botón Entrar -->
                    <button 
                        type="submit" 
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-full transition flex items-center space-x-2"
                    >
                        <span>Entrar</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                
                    <!-- Olvidaste tu contraseña -->
                    <a href="#" class="text-sm text-gray-800 hover:underline">
                        ¿olvidaste la contraseña?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
