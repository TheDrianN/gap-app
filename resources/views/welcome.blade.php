<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Global Automate Pro</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
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
<section class="w-full px-10 py-20 bg-white">
  <div class="max-w-6xl mx-auto">
    <!-- Título -->
    <h2 class="text-2xl md:text-3xl font-bold mb-8">
      <span class="text-blue-600">Últimos</span> Proyectos y Ofertas
    </h2>

    <div class="flex flex-col md:flex-row gap-6">
      <!-- Categorías -->
      <div class="w-full md:w-1/4 space-y-4">
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
      <div class="w-full md:w-3/4 relative overflow-hidden">
        <div id="carousel" class="flex transition-transform duration-500 ease-in-out space-x-6">
          <!-- Tarjeta 1 -->
          <div class="min-w-[300px] bg-gradient-to-r from-blue-500 to-blue-400 text-white rounded-xl p-6 shadow-md">
            <h3 class="text-lg font-bold mb-2">Diseñador UI para app móvil</h3>
            <div class="flex gap-2 mb-4">
              <span class="bg-blue-700 text-white text-xs px-3 py-1 rounded-full">UX/UI</span>
              <span class="bg-blue-700 text-white text-xs px-3 py-1 rounded-full">App Móvil</span>
            </div>
            <p class="text-xl font-semibold mb-4">s/ 25k - 35k</p>
            <div class="flex justify-between text-xs items-center">
              <div class="flex gap-1 items-center">
                <img src="/images/gitlab.png" alt="GitLab" class="w-5 h-5"> GitLab
              </div>
              <span class="text-white/80">Hace 1 hora</span>
            </div>
            <div class="mt-4 text-right">
              <span class="bg-cyan-100 text-cyan-700 text-xs px-3 py-1 rounded-full font-bold">20 Post</span>
            </div>
          </div>

          <!-- Tarjeta 2 -->
          <div class="min-w-[300px] bg-blue-100 rounded-xl p-6 shadow-md">
            <h3 class="text-lg font-bold mb-2">Diseñadora UX/UI para plataforma web</h3>
            <div class="flex gap-2 mb-4">
              <span class="bg-blue-200 text-blue-700 text-xs px-3 py-1 rounded-full">UX/UI</span>
              <span class="bg-blue-200 text-blue-700 text-xs px-3 py-1 rounded-full">Jefe de Diseño</span>
            </div>
            <p class="text-xl font-semibold text-black mb-4">s/ 25K - 45K</p>
            <div class="flex justify-between text-xs items-center">
              <div class="flex gap-1 items-center">
                <img src="/images/hotjar.png" alt="Hotjar" class="w-5 h-5"> Hotjar
              </div>
              <span class="text-blue-500 font-semibold">Hace 4 horas</span>
            </div>
            <div class="mt-4 text-right">
              <span class="bg-orange-100 text-orange-600 text-xs px-3 py-1 rounded-full font-bold">40 Post</span>
            </div>
          </div>

          <!-- Tarjeta 3 -->
          <div class="min-w-[300px] bg-blue-100 rounded-xl p-6 shadow-md">
            <h3 class="text-lg font-bold mb-2">Diseño web para ONG ambiental</h3>
            <div class="flex gap-2 mb-4">
              <span class="bg-blue-200 text-blue-700 text-xs px-3 py-1 rounded-full">UX/UI</span>
              <span class="bg-blue-200 text-blue-700 text-xs px-3 py-1 rounded-full">Diseño web</span>
            </div>
            <p class="text-xl font-semibold text-black mb-4">s/ 25K - 45K</p>
            <div class="flex justify-between text-xs items-center">
              <div class="flex gap-1 items-center">
                <img src="/images/github.png" alt="GitHub" class="w-5 h-5"> GitHub
              </div>
              <span class="text-blue-500 font-semibold">Hace 6 horas</span>
            </div>
            <div class="mt-4 text-right">
              <span class="bg-red-100 text-red-600 text-xs px-3 py-1 rounded-full font-bold">75 Post</span>
            </div>
          </div>
        </div>

        <!-- Controles del carrusel -->
        <div class="absolute top-1/2 -translate-y-1/2 left-0 z-10">
          <button onclick="scrollCarousel(-1)" class="bg-gray-800 text-white rounded-full p-2 ml-1">&#8592;</button>
        </div>
        <div class="absolute top-1/2 -translate-y-1/2 right-0 z-10">
          <button onclick="scrollCarousel(1)" class="bg-gray-800 text-white rounded-full p-2 mr-1">&#8594;</button>
        </div>
      </div>
    </div>
  </div>
</section>

    </div>
  </body>
  <script>
  function scrollCarousel(direction) {
    const carousel = document.getElementById('carousel');
    const scrollAmount = 320; // ajusta según el ancho de tarjeta + gap
    carousel.scrollBy({
      left: scrollAmount * direction,
      behavior: 'smooth'
    });
  }
</script>

</html>
