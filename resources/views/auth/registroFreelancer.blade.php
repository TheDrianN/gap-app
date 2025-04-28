@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-white flex flex-col justify-between overflow-x-hidden">
        <div class="flex justify-center items-center flex-grow relative pt-10 pb-10">

            <!-- Ola SVG como fondo inferior -->
            <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0]">
                <svg class="relative block w-full h-[600px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
                    preserveAspectRatio="none">
                    <path fill="#2563eb" fill-opacity="1"
                        d="M0,224L48,213.3C96,203,192,181,288,165.3C384,149,480,139,576,149.3C672,160,768,192,864,202.7C960,213,1056,203,1152,181.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                    </path>
                </svg>
            </div>

            <div
                class="z-10 bg-white rounded-xl shadow-xl p-10 w-full max-w-xl md:max-w-2xl xl:max-w-3xl min-w-[300px] text-center transition-all duration-500">
                <div class="flex justify-center items-center mb-6">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-75 w-75 mr-2">
                </div>
                <!-- Contenedor de pasos -->
                <div id="step1" class="step-content">
                    <!-- Áreas de interés tecnológico -->
                    <div class="text-left">
                        <h3 class="text-lg font-bold text-gray-800 mb-2 flex items-center">
                            <i class="fas fa-microchip mr-2"></i> Áreas de interés tecnológico
                        </h3>
                        <p class="text-sm text-gray-500 mb-4">Seleccione las áreas que le interesa</p>

                        <div class="flex flex-wrap gap-2 mb-6">
                            <!-- Tags dinámicos -->
                            <span
                                class="px-4 py-2 bg-blue-600 text-white rounded-full text-sm cursor-pointer">Automatización
                                ×</span>
                            <span class="px-4 py-2 bg-blue-600 text-white rounded-full text-sm cursor-pointer">IA ×</span>
                            <span class="px-4 py-2 bg-blue-600 text-white rounded-full text-sm cursor-pointer">ERPs ×</span>
                            <span class="px-4 py-2 bg-gray-300 text-gray-700 rounded-full text-sm cursor-pointer">+ Añadir
                                otro</span>
                        </div>

                        <h3 class="text-lg font-bold text-gray-800 mb-2 text-left">Habilidades técnicas</h3>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-4 py-2 bg-blue-600 text-white rounded-full text-sm cursor-pointer">Python
                                ×</span>
                            <span class="px-4 py-2 bg-blue-600 text-white rounded-full text-sm cursor-pointer">Zapier
                                ×</span>
                            <span class="px-4 py-2 bg-gray-300 text-gray-700 rounded-full text-sm cursor-pointer">+ Añadir
                                otro</span>
                        </div>

                        <label class="block text-gray-700 font-medium mb-2">Años de experiencia</label>
                        <input type="number"
                            class="w-full mb-6 px-6 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:outline-none"
                            placeholder="Años de experiencia">

                        <!-- Adjuntar CV -->
                        <label class="block text-gray-700 font-medium mb-2">Adjuntar CV/PDF</label>
                        <div
                            class="w-full h-40 border-2 border-dashed border-gray-300 rounded-lg flex flex-col items-center justify-center text-gray-600 space-y-2 mb-8">
                            <i class="fas fa-file-upload text-3xl text-purple-500"></i>
                            <span>Arrastrar y soltar <span class="text-purple-600 font-semibold">Curriculum
                                    vitae</span></span>
                        </div>

                        <div class="flex justify-between">
                            <button type="button"
                                onclick="window.location.href='{{ route('showForm', ['type' => 'register']) }}'"
                                class="px-8 py-2 bg-white border border-gray-400 text-gray-700 font-semibold rounded-full hover:bg-gray-100 transition">
                                Volver
                            </button>
                            <button onclick="nextStep()"
                                class="px-8 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-full transition">
                                Siguiente
                            </button>
                        </div>
                    </div>
                </div>

                <div id="step2" class="step-content hidden">
                    <!-- Información de cuenta -->
                    <div class="text-left">
                        <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-id-card mr-2"></i> Información de cuenta
                        </h3>

                        <label class="block text-gray-700 font-medium mb-2">Email</label>
                        <input type="email"
                            class="w-full mb-4 px-6 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:outline-none"
                            placeholder="Email">

                        <label class="block text-gray-700 font-medium mb-2">Teléfono</label>
                        <div class="flex gap-2">
                            <select id="countrySelect" name="country"
                                class="w-32 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 text-gray-700 focus:outline-none">
                                <option value="+51">+51 Perú</option>
                                <option value="+52">+52 México</option>
                                <option value="+54">+54 Argentina</option>
                                <option value="+57">+57 Colombia</option>
                                <option value="+56">+56 Chile</option>
                                <option value="+34">+34 España</option>
                                <option value="+1">+1 USA</option>
                            </select>

                            <input type="text" name="phone"
                                class="flex-1 px-6 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:outline-none text-gray-700 placeholder-gray-400"
                                placeholder="Número de teléfono" required>
                        </div>

                        <label class="block text-gray-700 font-medium mb-2">Documento de identidad</label>
                        <div
                            class="w-full h-40 border-2 border-dashed border-gray-300 rounded-lg flex flex-col items-center justify-center text-gray-600 space-y-2 mb-8">
                            <i class="fas fa-id-badge text-3xl text-purple-500"></i>
                            <span>Arrastrar y soltar <span class="text-purple-600 font-semibold">Documento de
                                    identidad</span></span>
                        </div>

                        <label class="block text-gray-700 font-medium mb-2">Contraseña</label>
                        <input type="password"
                            class="w-full mb-4 px-6 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:outline-none"
                            placeholder="Ingresar contraseña">
                        <label class="block text-gray-700 font-medium mb-2">Repetir contraseña</label>
                        <input type="password"
                            class="w-full mb-6 px-6 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:outline-none"
                            placeholder="Repetir contraseña">

                        <div class="flex justify-between">
                            <button onclick="prevStep()"
                                class="px-8 py-2 bg-white border border-gray-400 text-gray-700 font-semibold rounded-full hover:bg-gray-100 transition">
                                Volver
                            </button>
                            <button 
                                type="submit" 
                                onclick="window.location.href='{{ route('showForm', ['type' => 'login']) }}'"
                                class="px-8 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-full transition">
                                Guardar
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Script para cambiar entre pasos -->
    <script>
        function nextStep() {
            document.getElementById('step1').classList.add('hidden');
            document.getElementById('step2').classList.remove('hidden');
        }

        function prevStep() {
            document.getElementById('step2').classList.add('hidden');
            document.getElementById('step1').classList.remove('hidden');
        }

        new TomSelect("#countrySelect", {
            render: {
                option: function(data, escape) {
                    return `<div class="flex items-center gap-2">
                            <img class="w-5 h-3" src="${data.image}" alt="">
                            <span>${escape(data.text)}</span>
                        </div>`;
                },
                item: function(data, escape) {
                    return `<div class="flex items-center gap-2">
                            <img class="w-5 h-3" src="${data.image}" alt="">
                            <span>${escape(data.text)}</span>
                        </div>`;
                }
            }
        });
    </script>
@endsection
