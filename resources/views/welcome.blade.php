<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Global Automate Pro</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
  .scrollbar-hide::-webkit-scrollbar {
    display: none;
  }
  .scrollbar-hide {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
  img {
  display: block;
  margin-bottom: 0 !important;
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
  <body class="bg-gradient-to-r from-blue-50 to-white font-sans text-gray-800 text-[1.05rem] lg:text-[1.1rem] min-h-screen w-100">
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
      <main class="flex-1 px-10 py-0 grid md:grid-cols-2 gap-8 items-center">
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
  <section class="w-full px-10 mt-10">
    <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-xl p-4 flex flex-wrap items-center gap-4">
      <!-- Selector -->
      <div class="relative flex items-center gap-2">
        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
        
        <select id="category-select" class="appearance-none bg-transparent text-gray-700 font-medium pr-6 focus:outline-none cursor-pointer">
          <option value="" disabled selected>Seleccionar categoría</option>
          <option value="Freelancer">Freelancer</option>
          <option value="Diseño Web">Diseño Web</option>
          <option value="Diseño UI/UX">Diseño UI/UX</option>
          <option value="Desarrollo Frontend">Desarrollo Frontend</option>
          <option value="Desarrollo Backend">Desarrollo Backend</option>
        </select>
        
        <svg class="w-4 h-4 text-gray-400 absolute right-0 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </div>

      <!-- Filtros Activos -->
      <div id="active-filters" class="flex flex-wrap gap-2">
        <!-- Los filtros activos aparecerán aquí -->
      </div>

      <!-- Botón Buscar -->
      <div class="ml-auto">
        <button id="search-button" class="bg-teal-500 hover:bg-teal-600 text-white px-6 py-2 rounded-lg font-semibold">Buscar</button>
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
                      <button onclick="scrollCarousel(-1)" class="bg-white text-black border hover:bg-gray-600 hover:text-white rounded-full p-2">&#8592;</button>
                      <button onclick="scrollCarousel(1)" class="bg-gray-800 text-white hover:bg-white hover:text-black hover:border rounded-full p-2">&#8594;</button>
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
                  <div  id="carousel"  class="overflow-x-auto overflow-x-hidden  overflow-y-hidden scroll-smooth">
                    <div class="flex flex-nowrap w-max space-x-6">
                      <!-- Tarjetas duplicadas para el carrusel -->
                      <!-- Tarjeta 1 -->
                      <div class="w-[300px] h-[360px] flex-shrink-0 flex flex-col justify-between bg-gradient-to-r from-blue-500 to-blue-400 text-white rounded-xl p-6 shadow-md">
                          <h3 class="text-lg font-bold mb-3 leading-tight overflow-hidden text-ellipsis line-clamp-2">Diseñador UI para app móvil</h3>
                          <div class="flex gap-2 mb-4">
                          <span class="bg-blue-700 text-white text-xs px-3 py-1 rounded-full">UX/UI</span>
                          <span class="bg-blue-700 text-white text-xs px-3 py-1 rounded-full">App Móvil</span>
                          </div>
                          <p class="text-2xl font-semibold text-green-200 mb-3">s/ 25k - 35k</p>
                          <div class="border-t border-white/30 my-3"></div>
                          <div class="flex justify-between text-sm items-center">
                          <div class="flex gap-2 items-center">
                              <img src="/images/gitlab.png" alt="GitLab" class="w-5 h-5 bg-white rounded-full">
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
                      <div class="w-[300px] h-[360px] flex-shrink-0 flex flex-col justify-between bg-gradient-to-r from-green-500 to-green-400 text-white rounded-xl p-6 shadow-md">
                          <h3 class="text-lg font-bold mb-3 leading-tight overflow-hidden text-ellipsis line-clamp-2">Diseñadora UX/UI para plataforma web</h3>
                          <div class="flex gap-2 mb-4">
                          <span class="bg-blue-200 text-blue-700 text-xs px-3 py-1 rounded-full">UX/UI</span>
                          <span class="bg-blue-200 text-blue-700 text-xs px-3 py-1 rounded-full">Jefe de Diseño</span>
                          </div>
                          <p class="text-2xl font-semibold text-white mb-3">s/ 25K - 45K</p>
                          <div class="border-t border-gray-300 my-3"></div>
                          <div class="flex justify-between text-sm items-center">
                          <div class="flex gap-2 items-center">
                              <img src="/images/hotjar.png" alt="Hotjar" class="w-5 h-5  bg-white rounded-full">
                              <div>
                              <p class="font-semibold">Hotjar</p>
                              <p class="text-gray-500 text-xs text-white/70 flex items-center gap-1">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m4-4a4 4 0 110-8 4 4 0 010 8z" /></svg>
                                  140-300
                              </p>
                              </div>
                          </div>
                          <p class="text-xs text-white/70">Hace 4 horas</p>
                          </div>
                          <div class="mt-4 text-right">
                          <span class="bg-orange-100 text-orange-600 text-xs px-3 py-1 rounded-full font-bold">40 Post</span>
                          </div>
                      </div>

                      <!-- Tarjeta 3 -->
                      <div class="w-[300px] h-[360px] flex-shrink-0 flex flex-col justify-between bg-gradient-to-r from-purple-700 to-purple-400 text-white rounded-xl p-6 shadow-md">
                          <h3 class="text-lg font-bold mb-3 leading-tight overflow-hidden text-ellipsis line-clamp-2">Ilustrador para cuentos infantiles</h3>
                          <div class="flex gap-2 mb-4">
                          <span class="bg-purple-700 text-white text-xs px-3 py-1 rounded-full">Diseño</span>
                          <span class="bg-purple-700 text-white text-xs px-3 py-1 rounded-full">Editorial</span>
                          </div>
                          <p class="text-2xl font-semibold text-white mb-3">s/ 18K - 26K</p>
                          <div class="border-t border-white/30 my-3"></div>
                          <div class="flex justify-between text-sm items-center">
                          <div class="flex gap-2 items-center">
                              <img src="/images/github.png" alt="Dribbble" class="w-5 h-5 bg-black rounded-full">
                              <div>
                              <p class="font-semibold">Github</p>
                              <p class="text-white/80 text-xs"> 300-500</p>
                              </div>
                          </div>
                          <p class="text-xs text-white/70">Hace 2 horas</p>
                          </div>
                          <div class="mt-4 text-right">
                          <span class="bg-pink-100 text-pink-700 text-xs px-3 py-1 rounded-full font-bold">18 Post</span>
                          </div>
                      </div>

                      <div class="w-[300px] h-[360px] flex-shrink-0 flex flex-col justify-between bg-gradient-to-r from-rose-500 to-rose-400 text-white rounded-xl p-6 shadow-md">
                        <h3 class="text-lg font-bold mb-3 leading-tight overflow-hidden text-ellipsis line-clamp-2">Especialista en Automatización Robótica (RPA)</h3>
                        <div class="flex gap-2 mb-4">
                          <span class="bg-rose-700 text-white text-xs px-3 py-1 rounded-full">RPA</span>
                          <span class="bg-rose-700 text-white text-xs px-3 py-1 rounded-full">Python</span>
                        </div>
                        <p class="text-2xl font-semibold text-white mb-3">s/ 30K - 40K</p>
                        <div class="border-t border-white/30 my-3"></div>
                        <div class="flex justify-between text-sm items-center">
                          <div class="flex gap-2 items-center">
                            <img src="/images/uipath.png" alt="UiPath" class="w-5 h-5 bg-white rounded-full" />
                            <div>
                              <p class="font-semibold">UiPath</p>
                              <p class="text-white/80 text-xs">700-1500</p>
                            </div>
                          </div>
                          <p class="text-xs text-white/70">Hace 3 horas</p>
                        </div>
                        <div class="mt-4 text-right">
                          <span class="bg-white text-green-600 text-xs px-3 py-1 rounded-full font-bold">22 Post</span>
                        </div>
                      </div>

                      </div>
                  </div>
              </div>
          </div>
        </section>

              <!-- SECCIÓN: Explorar talentos por categoría -->
      <section class="w-full px-10 py-16 bg-blue-50">
        <div class="max-w-7xl mx-auto">
          <h2 class="text-xl md:text-2xl font-semibold text-gray-800 mb-6">Explorar talentos por categoría</h2>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <!-- Tarjeta categoría -->
            <div class="bg-white p-4 rounded-lg shadow text-sm">
              <p class="font-medium mb-2">Automatización de Procesos</p>
              <div class="flex justify-between text-gray-500">
                <span>⭐ 4.8/5</span>
                <span>459 Post</span>
              </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-sm">
              <p class="font-medium mb-2">Integración de Sistemas</p>
              <div class="flex justify-between text-gray-500">
                <span>⭐ 4/5</span>
                <span>769 Post</span>
              </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-sm">
              <p class="font-medium mb-2">Chatbots y Automatización de Servicio al Cliente</p>
              <div class="flex justify-between text-gray-500">
                <span>⭐ 4.8/5</span>
                <span>349 Post</span>
              </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-sm">
              <p class="font-medium mb-2">Seguridad y Cumplimiento</p>
              <div class="flex justify-between text-gray-500">
                <span>⭐ 4.8/5</span>
                <span>567 Post</span>
              </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-sm">
              <p class="font-medium mb-2">Análisis y Visualización de Datos</p>
              <div class="flex justify-between text-gray-500">
                <span>⭐ 4.8/5</span>
                <span>123 Post</span>
              </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-sm">
              <p class="font-medium mb-2">Desarrollo de Software para Automatización</p>
              <div class="flex justify-between text-gray-500">
                <span>⭐ 4.8/5</span>
                <span>567 Post</span>
              </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-sm">
              <p class="font-medium mb-2">IoT y Automatización Industrial</p>
              <div class="flex justify-between text-gray-500">
                <span>⭐ 4.8/5</span>
                <span>109 Post</span>
              </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-sm">
              <p class="font-medium mb-2">Seguridad y Cumplimiento</p>
              <div class="flex justify-between text-gray-500">
                <span>⭐ 4.8/5</span>
                <span>289 Post</span>
              </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-sm">
              <p class="font-medium mb-2">Soporte y Mantenimiento</p>
              <div class="flex justify-between text-gray-500">
                <span>⭐ 4.8/5</span>
                <span>378 Post</span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- SECCIÓN: ¿Por qué confiar en nosotros? -->
      <section class="w-full px-10 py-20 bg-white">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-10 items-center">
          <div>
            <h2 class="text-2xl font-bold mb-4">¿Por qué confiar en nosotros?</h2>
            <p class="text-gray-600 mb-6">En GlobalAutomate PRO, la seguridad, transparencia y satisfacción de nuestros clientes son nuestra prioridad.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div class="flex items-center gap-3 p-4 border rounded-lg bg-white shadow-sm">
                <i class="fa-solid fa-shield-halved text-blue-600 text-lg"></i>
                <span class="text-sm font-medium">Proveedores Verificados</span>
              </div>
              <div class="flex items-center gap-3 p-4 border rounded-lg bg-white shadow-sm">
                <i class="fa-solid fa-file-circle-check text-blue-600 text-lg"></i>
                <span class="text-sm font-medium">Proyectos con Garantía</span>
              </div>
              <div class="flex items-center gap-3 p-4 border rounded-lg bg-white shadow-sm">
                <i class="fa-solid fa-eye text-blue-600 text-lg"></i>
                <span class="text-sm font-medium">Transparencia</span>
              </div>
              <div class="flex items-center gap-3 p-4 border rounded-lg bg-white shadow-sm">
                <i class="fa-solid fa-users text-blue-600 text-lg"></i>
                <span class="text-sm font-medium">Comunidad de Expertos</span>
              </div>
            </div>
          </div>
          <div class="relative">
            <img src="/images/person-secure.png" alt="Seguro" class="rounded-xl w-full max-w-sm mx-auto">
            
          </div>
        </div>
      </section>

      <!-- SECCIÓN: Comentarios de clientes -->
      <section class="w-full px-10 py-20 bg-white">
        <div class="max-w-7xl mx-auto">
          <div class="flex justify-between items-center mb-10">
            <div>
              <h2 class="text-2xl md:text-3xl font-bold mb-2">Comentarios de clientes</h2>
              <p class="text-gray-600 max-w-xl">Empresas que confiaron en GlobalAutomate PRO para optimizar sus procesos y conectar con talento especializado en automatización e integración tecnológica.</p>
            </div>
            <div class="flex gap-2">
              <button onclick="scrollTestimonials(-1)" class="bg-blue-100 text-blue-700 p-2 rounded-full hover:bg-blue-200">
                <i class="fa-solid fa-arrow-left"></i>
              </button>
              <button  onclick="scrollTestimonials(1)" class="bg-blue-700 text-white p-2 rounded-full hover:bg-blue-800">
                <i class="fa-solid fa-arrow-right"></i>
              </button>
            </div>
          </div>

          <!-- Carrusel de testimonios -->
<div id="testimonials-carousel" class="flex overflow-x-auto scroll-smooth gap-6 scrollbar-hide">
  <!-- Testimonio 1 -->
  <div class="w-[320px] border rounded-xl p-6 shadow-sm text-center bg-white flex-shrink-0">
    <div class="flex justify-center mb-4">
      <i class="fa-solid fa-building-circle-check text-cyan-600 text-4xl"></i>
    </div>
    <p class="text-sm text-gray-700 italic mb-6">
      “Gracias a GlobalAutomate PRO pudimos automatizar varios procesos críticos sin depender de personal interno. La plataforma nos conectó con expertos confiables, y los resultados fueron inmediatos.”
    </p>
    <h3 class="font-semibold text-gray-900">TechNova Solutions</h3>
  </div>

  <!-- Testimonio 2 -->
  <div class="w-[320px] border rounded-xl p-6 shadow-md text-center bg-white flex-shrink-0">
    <div class="flex justify-center mb-4">
      <i class="fa-solid fa-atom text-violet-600 text-4xl"></i>
    </div>
    <p class="text-sm text-gray-700 italic mb-6">
      “Lo que más valoro es la claridad y rapidez para contratar soluciones listas para usar. Publicamos un requerimiento y en minutos teníamos propuestas estructuradas y comparables.”
    </p>
    <h3 class="font-semibold text-gray-900">InnovaCorp</h3>
  </div>

  <!-- Testimonio 3 -->
  <div class="w-[320px] border rounded-xl p-6 shadow-sm text-center bg-white flex-shrink-0">
    <div class="flex justify-center mb-4">
      <i class="fa-solid fa-network-wired text-gray-800 text-4xl"></i>
    </div>
    <p class="text-sm text-gray-700 italic mb-6">
      “Nuestra empresa necesitaba integrar sistemas antiguos con nuevas herramientas. Con la ayuda de un freelancer especializado en integración, ahora nuestros flujos de trabajo son más eficientes.”
    </p>
    <h3 class="font-semibold text-gray-900">SysTech</h3>
  </div>

  <!-- Testimonio 4 -->
  <div class="w-[320px] border rounded-xl p-6 shadow-sm text-center bg-white flex-shrink-0">
    <div class="flex justify-center mb-4">
      <i class="fa-solid fa-brain text-blue-500 text-4xl"></i>
    </div>
    <p class="text-sm text-gray-700 italic mb-6">
      “Encontramos expertos en IA para automatizar nuestros análisis de datos con rapidez y eficiencia.”
    </p>
    <h3 class="font-semibold text-gray-900">DataMind Inc.</h3>
  </div>

  <!-- Testimonio 5 -->
  <div class="w-[320px] border rounded-xl p-6 shadow-sm text-center bg-white flex-shrink-0">
    <div class="flex justify-center mb-4">
      <i class="fa-solid fa-microchip text-amber-500 text-4xl"></i>
    </div>
    <p class="text-sm text-gray-700 italic mb-6">
      “Los resultados del proyecto de automatización superaron nuestras expectativas.”
    </p>
    <h3 class="font-semibold text-gray-900">NeuroCode Labs</h3>
  </div>
</div>


        
        </div>
      </section>

      <!-- SECCIÓN: CTA Automatización -->
      <section class="w-full px-10 py-5 bg-blue-600 rounded-xl mx-auto max-w-7xl overflow-hidden relative text-white">
        <div class="grid md:grid-cols-2 items-center">
          <div class="p-6 md:p-12">
            <h2 class="text-2xl md:text-3xl font-bold mb-4">Conecta con expertos en automatización ahora</h2>
            <p class="text-blue-100 mb-6">Encuentra freelancers especializados para optimizar tus procesos y escalar tu negocio. Publica tus requerimientos, recibe propuestas claras y transforma tu empresa con soluciones tecnológicas confiables.</p>
            <button class="bg-white text-blue-600 font-semibold px-5 py-2 rounded shadow hover:bg-blue-100 transition">Publicar requerimientos</button>
          </div>
          <div class="relative hidden md:flex justify-end">
            <img src="/images/woman-laptop.png" alt="Experta" class="max-w-sm rounded-xl">
          </div>
        </div>
      </section>

      <!-- SECCIÓN: Footer -->
      <footer class="w-full px-6 py-12 bg-white border-t">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
          <!-- Enlaces rápidos -->
          <div>
            <h3 class="text-lg font-bold mb-4">Enlaces Rápidos</h3>
            <ul class="space-y-2 text-sm text-gray-600">
              <li><a href="#">Inicio</a></li>
              <li><a href="#">Cómo funciona</a></li>
              <li><a href="#">Categoría freelancer</a></li>
              <li><a href="#">Contacto</a></li>
            </ul>
          </div>

          <!-- Para empresas -->
          <div>
            <h3 class="text-lg font-bold mb-4">Para Empresas</h3>
            <ul class="space-y-2 text-sm text-gray-600">
              <li><a href="#">Publicar un proyecto</a></li>
              <li><a href="#">Encontrar freelancers</a></li>
              <li><a href="#">Soluciones preconfiguradas</a></li>
            </ul>
          </div>

          <!-- Suscripción -->
          <div>
            <h3 class="text-lg font-bold mb-4">Suscríbete</h3>
            <div class="relative">
              <input type="email" placeholder="ejemplo@gmail.com" class="w-full px-4 py-2 bg-blue-50 rounded-md pr-10 text-sm">
              <button class="absolute right-2 top-2 text-blue-600"><i class="fa-solid fa-paper-plane"></i></button>
            </div>
            <p class="text-xs text-gray-500 mt-2">Únase a nuestro boletín para mantenerse actualizado sobre las características y los lanzamientos.</p>
          </div>
        </div>
        <div class="mt-10 border-t pt-6 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
          <p>2025 GAP. Todos los derechos reservados.</p>
          <div class="flex gap-4 mt-4 md:mt-0">
            <a href="#">Políticas y Privacidad</a>
            <a href="#">Términos y condiciones</a>
          </div>
          <div class="flex gap-3 mt-4 md:mt-0">
            <a href="#"><i class="fa-brands fa-linkedin text-blue-600"></i></a>
            <a href="#"><i class="fa-brands fa-twitter text-blue-400"></i></a>
            <a href="#"><i class="fa-brands fa-instagram text-pink-500"></i></a>
            <a href="#"><i class="fa-brands fa-facebook text-blue-700"></i></a>
          </div>
        </div>
      </footer>

    </div>

    <script>
  function scrollCarousel(direction) {
    const carousel = document.getElementById('carousel');
    const scrollAmount = 320; // asegúrate que esto sea igual al width + gap (300px + ~20px)

    carousel.scrollBy({
      left: direction * scrollAmount,
      behavior: 'smooth'
    });

    // Debug opcional:
    // console.log("scrollLeft actual:", carousel.scrollLeft);
  }
</script>

<script>
  function scrollTestimonials(direction) {
    const container = document.getElementById('testimonials-carousel');
    const scrollAmount = 340; // Ajusta según el tamaño de tus tarjetas
    container.scrollBy({
      left: direction * scrollAmount,
      behavior: 'smooth'
    });
  }
</script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const categorySelect = document.getElementById('category-select');
      const activeFiltersContainer = document.getElementById('active-filters');
      const searchButton = document.getElementById('search-button');
      
      // Array para almacenar los filtros activos
      let activeFilters = [];
      
      // Función para renderizar los filtros activos
      function renderActiveFilters() {
        activeFiltersContainer.innerHTML = '';
        
        activeFilters.forEach(filter => {
          const filterElement = document.createElement('span');
          filterElement.className = 'bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium flex items-center';
          filterElement.innerHTML = `
            ${filter}
            <button class="ml-2 text-blue-500 hover:text-red-500 remove-filter" data-filter="${filter}">&times;</button>
          `;
          activeFiltersContainer.appendChild(filterElement);
        });
        
        // Agregar event listeners a los botones de eliminar
        document.querySelectorAll('.remove-filter').forEach(button => {
          button.addEventListener('click', function() {
            const filterToRemove = this.getAttribute('data-filter');
            activeFilters = activeFilters.filter(f => f !== filterToRemove);
            renderActiveFilters();
            
            // Si el filtro eliminado es el que está seleccionado, lo quitamos del select
            if (categorySelect.value === filterToRemove) {
              categorySelect.value = '';
            }
          });
        });
      }
      
      // Event listener para el selector de categorías
      categorySelect.addEventListener('change', function() {
        const selectedValue = this.value;
        
        if (selectedValue && !activeFilters.includes(selectedValue)) {
          activeFilters.push(selectedValue);
          renderActiveFilters();
        }
        
        // No reseteamos el select, mantenemos la selección
      });
      
      // Event listener para el botón de búsqueda
      searchButton.addEventListener('click', function() {
        if (activeFilters.length === 0) {
          alert('Por favor selecciona al menos un filtro');
          return;
        }
        
        // Aquí iría la lógica para realizar la búsqueda
        alert(`Buscando con filtros: ${activeFilters.join(', ')}`);
        console.log('Filtros activos:', activeFilters);
        
        // En una aplicación real, aquí harías una petición AJAX o similar
      });
    });
  </script>
  </body>


</html>
