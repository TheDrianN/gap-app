<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAP Plataforma</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="//unpkg.com/alpinejs" defer></script>

</head>
<body class="bg-gray-100">
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 flex items-center justify-between h-16">
    
            <!-- Logo + Barra de búsqueda -->
            <div class="flex items-center gap-4 flex-1">
                <a href="{{ route('home') }}" class="bg-blue-600 text-white font-bold text-lg px-3 py-1 rounded">
                    GAP
                </a>
    
                <!-- Barra de búsqueda (oculta en mobile) -->
                <div class="hidden md:block flex-1 max-w-md">
                    <div class="relative">
                        <span class="absolute left-3 top-2.5 text-gray-400">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text" placeholder="Buscar" class="w-full pl-10 pr-4 py-2 border rounded-md bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
            </div>
    
            <!-- Botón Hamburguesa en móvil -->
            <div class="flex items-center gap-4 md:hidden">
                <button id="menuButton" class="text-gray-600 text-2xl focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
    
            <!-- Navegación -->
            <nav id="menuNav" class="hidden md:flex items-center gap-8 text-sm font-medium relative">
    
                <a href="{{ route('home') }}" class="flex flex-col items-center {{ request()->routeIs('home') ? 'text-black font-bold border-b-2 border-black pb-1' : 'text-gray-600 hover:text-black' }}">
                    <i class="fas fa-home text-lg mb-1"></i>
                    Inicio
                </a>
    
                <a href="{{ route('projects.index') }}" class="flex flex-col items-center {{ request()->routeIs('projects.index') ? 'text-black font-bold border-b-2 border-black pb-1' : 'text-gray-600 hover:text-black' }}">
                    <i class="fas fa-briefcase text-lg mb-1"></i>
                    Proyectos
                </a>
    
                <a href="{{ route('messages.index') }}" class="flex flex-col items-center {{ request()->routeIs('messages.index') ? 'text-black font-bold border-b-2 border-black pb-1' : 'text-gray-600 hover:text-black' }}">
                    <i class="fas fa-envelope text-lg mb-1"></i>
                    Mensajes
                </a>
    
                <a href="{{ route('notifications.index') }}" class="flex flex-col items-center {{ request()->routeIs('notifications.index') ? 'text-black font-bold border-b-2 border-black pb-1' : 'text-gray-600 hover:text-black' }}">
                    <i class="fas fa-bell text-lg mb-1"></i>
                    Notificaciones
                </a>
    
                <!-- Foto de perfil con dropdown -->
                <div class="relative">
                    <button id="profileMenuButton" class="flex items-center gap-2 focus:outline-none">
                        <div class="w-8 h-8 bg-gray-300 rounded-full overflow-hidden">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Perfil" class="w-full h-full object-cover">
                        </div>
                        <span class="text-sm text-gray-600">Yo <i class="fas fa-chevron-down text-xs"></i></span>
                    </button>
    
                    <!-- Dropdown oculto -->
                    <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-50">
                        <a href="{{ route('profile') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Mi perfil</a>
                        <a href="{{ route('proposal.mylistproposal') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Mis propuestas</a>
                        <a href="{{ route('posts.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Mis Proyectos</a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Salir</button>
                        </form>
                    </div>
                </div>
    
            </nav>
        </div>
    
        <!-- Menú Mobile (solo se muestra en dispositivos pequeños) -->
        <div id="mobileMenu" class="hidden md:hidden bg-white shadow-md">
            <nav class="flex flex-col p-4 gap-4 text-gray-700">
                <a href="{{ route('home') }}" class="hover:text-black">Inicio</a>
                <a href="{{ route('projects.index') }}" class="hover:text-black">Proyectos</a>
                <a href="{{ route('messages.index') }}" class="hover:text-black">Mensajes</a>
                <a href="{{ route('notifications.index') }}" class="hover:text-black">Notificaciones</a>
            </nav>
        </div>
    </header>



    <!-- Contenido principal -->
    <main class="w-full">
        @yield('content')
    </main>

    <script>
        const profileButton = document.getElementById('profileMenuButton');
        const profileDropdown = document.getElementById('profileDropdown');
        const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        const menuNav = document.getElementById('menuNav');
    
        profileButton.addEventListener('click', () => {
            profileDropdown.classList.toggle('hidden');
        });
    
        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    
        window.addEventListener('click', function(e) {
            if (!profileButton.contains(e.target) && !profileDropdown.contains(e.target)) {
                profileDropdown.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
