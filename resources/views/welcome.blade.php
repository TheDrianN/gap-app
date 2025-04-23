<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Global Automate Pro</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
  .scrollbar-hide::-webkit-scrollbar {
    display: none;
  }
  .scrollbar-hide {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
</style>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              sans: ['Roboto', 'sans-serif']
            }
          }
        }
      }
    </script>
  </head>
  <body class="bg-gradient-to-r from-blue-50 to-white font-sans text-gray-800 text-[1.05rem] lg:text-[1.1rem] min-h-screen w-screen">
    <div class="max-w-7xl mx-auto flex flex-col min-h-screen">

      <!-- HEADER -->
      <header class="w-full flex justify-between items-center px-10 py-4">
        <div class="flex items-center space-x-2">
          <img src="/images/logo.png" class="w-[200px]" alt="Logo" />
        </div>
        <nav class="hidden md:flex items-center space-x-8 text-md font-medium">
          <a href="#" class="hover:text-blue-600">Encontrar trabajo / talento</a>
          <a href="#" class="hover:text-blue-600">Talentos</a>
          <a href="#" class="hover:text-blue-600">Nosotros</a>
          <a href="#" class="text-blue-600 font-semibold">Iniciar sesión</a>
          <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-md">Registrar</a>
        </nav>
      </header>

      <!-- HERO -->
      <main class="flex-1 px-10 py-0 grid md:grid-cols-2 gap-15 items-center">
        <section class="h-full flex flex-col justify-center ">
          <div class="flex items-center space-x-2 mb-4">
            <span class="bg-blue-100 text-blue-600 text-md px-4 py-1 rounded-full">Encuentra tu freelance</span>
          </div>
          <h2 class="text-5xl font-bold mb-4 leading-snug">
            Impulsa tu proyecto con <br /> talento independiente
          </h2>
          <p class="text-gray-600 mb-5 text-2xl ">
            ¡Conéctate con los mejores freelancers en nuestra plataforma! Encuentra a tu pareja ideal para tu próximo proyecto.
          </p>
          <div class="flex flex-col space-x-4 mb-4 font-semibold">
            <div class="flex -space-x-3 mb-3">
              <img src="/images/user1.png" class="w-10 h-10 rounded-full border-2 border-white" />
              <img src="/images/user2.png" class="w-10 h-10 rounded-full border-2 border-white" />
              <img src="/images/user3.png" class="w-10 h-10 rounded-full border-2 border-white" />
            </div>
            <span class="text-base text-gray-700">Más de <span class="font-semibold text-blue-600">12,800+</span> freelancers para completar tus proyectos</span>
          </div>
        </section>

        <section class="relative flex justify-center">
          <img src="/images/freelancer-woman.png" alt="Freelancer" class="w-full max-w-md" />
          <div class="absolute top-2 right-2 bg-white shadow-lg px-4 py-5  rounded-md text-sm">
            <span class="font-semibold text-gray-800 text-lg">30K+ 💼</span><br />
            <span class="text-gray-500">Conexiones exitosas</span>
          </div>
        </section>
      </main>

      <!-- BARRA DE BÚSQUEDA / FILTROS -->
      <section class="w-full px-10 mt-0">
        <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-xl p-4 flex flex-wrap items-center gap-4">
          <!-- Selector -->
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <span class="text-gray-700 font-medium">Freelancer</span>
            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </div>

          <!-- Filtros Activos -->
          <div class="flex flex-wrap gap-2">
            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium flex items-center">
              Diseño Web
              <button class="ml-2 text-blue-500 hover:text-red-500">&times;</button>
            </span>
            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium flex items-center">
              Diseño UI/UX
              <button class="ml-2 text-blue-500 hover:text-red-500">&times;</button>
            </span>
          </div>

          <!-- Botón Buscar -->
          <div class="ml-auto">
            <button class="bg-teal-500 hover:bg-teal-600 text-white px-6 py-2 rounded-lg font-semibold">Buscar</button>
          </div>
        </div>
      </section>

      <section class="w-full px-10 py-12">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-gray-600 text-2xl font-semibold mb-6">Más de 4000 empresas confían en nosotros</h2>
            <div class="flex flex-wrap justify-center items-center gap-8 grayscale opacity-80">
            <img src="/images/coinbase.png" alt="Coinbase" class="h-25" />
            <img src="/images/spotify.png" alt="Spotify" class="h-25" />
            <img src="/images/slack.png" alt="Slack" class="h-25" />
            <img src="/images/adobe.png" alt="Adobe" class="h-25" />
            <img src="/images/webflow.png" alt="Webflow" class="h-25" />
            <img src="/images/zoom.png" alt="Zoom" class="h-25" />
            </div>
        </div>
        </section>

        <!-- SECCIÓN: Proyectos y Ofertas con Carrusel -->
        <section class="w-full  px-4 py-20 bg-white">
        <div class="max-w-7xl mx-auto">

            <!-- Encabezado con Título y Flechas -->
            <div class="flex justify-between items-center mb-8 px-2 md:px-0">
                <h2 class="text-2xl md:text-3xl font-bold">
                    <span class="text-blue-600">Últimos</span> Proyectos y Ofertas
                </h2>
                <div class="flex gap-2">
                    <button onclick="scrollCarousel(-1)" class="bg-gray-800 text-white rounded-full p-2">&#8592;</button>
                    <button onclick="scrollCarousel(1)" class="bg-gray-800 text-white rounded-full p-2">&#8594;</button>
                </div>
            </div>

            <div class="grid md:grid-cols-[1fr_3fr] gap-6 items-start">
                <!-- Categorías -->
                <div class="space-y-4">
                    <div class="flex justify-between items-center text-sm font-medium text-gray-800">
                    Product Management <span class="bg-green-100 text-green-800 px-2 py-1 rounded">34</span>
                    </div>
                    <div class="flex justify-between items-center text-sm font-medium text-blue-600">
                    Diseño UX/UI <span class="bg-red-100 text-red-600 px-2 py-1 rounded">92</span>
                    </div>
                    <div class="flex justify-between items-center text-sm font-medium text-gray-800">
                    Desarrollo Web <span class="bg-cyan-100 text-cyan-700 px-2 py-1 rounded">104</span>
                    </div>
                    <div class="flex justify-between items-center text-sm font-medium text-gray-800">
                    Marketing <span class="bg-pink-100 text-pink-600 px-2 py-1 rounded">89</span>
                    </div>
                    <div class="flex justify-between items-center text-sm font-medium text-gray-800">
                    Servicio personalizado <span class="bg-emerald-100 text-emerald-600 px-2 py-1 rounded">54</span>
                    </div>
                </div>

                <!-- Carrusel -->
                <div class="overflow-x-auto scroll-smooth scrollbar-hide">
                    <div id="carousel" class="flex space-x-6 min-w-fit">

                    <!-- Tarjetas duplicadas para el carrusel -->
                    <!-- Tarjeta 1 -->
                    <div class="min-w-[300px] flex flex-col bg-gradient-to-r from-blue-500 to-blue-400 text-white rounded-xl p-6 shadow-md">
                        <h3 class="text-lg font-bold mb-3">Diseñador UI para app móvil</h3>
                        <div class="flex gap-2 mb-4">
                        <span class="bg-blue-700 text-white text-xs px-3 py-1 rounded-full">UX/UI</span>
                        <span class="bg-blue-700 text-white text-xs px-3 py-1 rounded-full">App Móvil</span>
                        </div>
                        <p class="text-2xl font-semibold text-green-200 mb-3">s/ 25k - 35k</p>
                        <div class="border-t border-white/30 my-3"></div>
                        <div class="flex justify-between text-sm items-center">
                        <div class="flex gap-2 items-center">
                            <img src="/images/gitlab.png" alt="GitLab" class="w-5 h-5">
                            <div>
                            <p class="font-semibold">GitLab</p>
                            <p class="text-white/80 text-xs flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m4-4a4 4 0 110-8 4 4 0 010 8z" /></svg>
                                1200-3000
                            </p>
                            </div>
                        </div>
                        <p class="text-xs text-white/70">Hace 1 hora</p>
                        </div>
                        <div class="mt-4 text-right">
                        <span class="bg-cyan-100 text-cyan-700 text-xs px-3 py-1 rounded-full font-bold">20 Post</span>
                        </div>
                    </div>

                    <!-- Tarjeta 2 -->
                    <div class="min-w-[300px] flex flex-col bg-blue-100 text-gray-900 rounded-xl p-6 shadow-md">
                        <h3 class="text-lg font-bold mb-3">Diseñadora UX/UI para plataforma web</h3>
                        <div class="flex gap-2 mb-4">
                        <span class="bg-blue-200 text-blue-700 text-xs px-3 py-1 rounded-full">UX/UI</span>
                        <span class="bg-blue-200 text-blue-700 text-xs px-3 py-1 rounded-full">Jefe de Diseño</span>
                        </div>
                        <p class="text-2xl font-semibold text-black mb-3">s/ 25K - 45K</p>
                        <div class="border-t border-gray-300 my-3"></div>
                        <div class="flex justify-between text-sm items-center">
                        <div class="flex gap-2 items-center">
                            <img src="/images/hotjar.png" alt="Hotjar" class="w-5 h-5">
                            <div>
                            <p class="font-semibold">Hotjar</p>
                            <p class="text-gray-500 text-xs flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m4-4a4 4 0 110-8 4 4 0 010 8z" /></svg>
                                140-300
                            </p>
                            </div>
                        </div>
                        <p class="text-xs text-blue-500">Hace 4 horas</p>
                        </div>
                        <div class="mt-4 text-right">
                        <span class="bg-orange-100 text-orange-600 text-xs px-3 py-1 rounded-full font-bold">40 Post</span>
                        </div>
                    </div>

                    <!-- Tarjeta 3 -->
                    <div class="min-w-[300px] flex flex-col bg-gradient-to-r from-purple-500 to-purple-400 text-white rounded-xl p-6 shadow-md">
                        <h3 class="text-lg font-bold mb-3">Ilustrador para cuentos infantiles</h3>
                        <div class="flex gap-2 mb-4">
                        <span class="bg-purple-700 text-white text-xs px-3 py-1 rounded-full">Diseño</span>
                        <span class="bg-purple-700 text-white text-xs px-3 py-1 rounded-full">Editorial</span>
                        </div>
                        <p class="text-2xl font-semibold text-white mb-3">s/ 18K - 26K</p>
                        <div class="border-t border-white/30 my-3"></div>
                        <div class="flex justify-between text-sm items-center">
                        <div class="flex gap-2 items-center">
                            <img src="/images/github.png" alt="Dribbble" class="w-5 h-5">
                            <div>
                            <p class="font-semibold">Dribbble</p>
                            <p class="text-white/80 text-xs">300-500</p>
                            </div>
                        </div>
                        <p class="text-xs text-white/70">Hace 2 horas</p>
                        </div>
                        <div class="mt-4 text-right">
                        <span class="bg-pink-100 text-pink-700 text-xs px-3 py-1 rounded-full font-bold">18 Post</span>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
        </section>

    </div>

    <script>
        function scrollCarousel(direction) {
            const carousel = document.getElementById('carousel');
            const scrollAmount = 360;
            carousel.scrollBy({
            left: scrollAmount * direction,
            behavior: 'smooth'
            });
        }
    </script>
  </body>


</html>
