<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>International Experience</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
    body {
        background-image: url('{{ asset("images/fondoO.png") }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center; /* Asegura el centrado en ambos ejes */
        background-attachment: fixed;
        min-height: 100vh;
        color: #1b1b18;
        font-family: 'Instrument Sans', sans-serif;
    }
</style>

</head>
<body class="bg-transparent">

    <!-- Header -->
    <header class="bg-white bg-opacity-90 shadow relative z-30" id="home">
        <div class="max-w-7xl mx-auto px-4 relative py-0">
            <div class="mt-4 flex justify-end md:hidden">
                <button id="hamburger-btn" class="flex items-center gap-2 text-black text-xl font-medium focus:outline-none">
                    <span id="hamburger-icon">&#9776;</span>
                    <span>MENU</span>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="md:hidden hidden px-6 pb-4 bg-white bg-opacity-95 z-30 relative">
            <nav class="flex flex-col gap-4 text-sm">
                <a href="{{ url('/#home') }}" class="text-black hover:text-orange-600 font-medium">HOME</a>
                <a href="{{ route('company') }}" class="text-black hover:text-orange-600 font-medium">OUR COMPANY</a>
                <a href="{{ url('/#product-categories') }}" class="text-black hover:text-orange-600 font-medium">PRODUCTS</a>
                <a href="{{ route('experience') }}" class="text-black hover:text-orange-600 font-medium">INTERNATIONAL EXPERIENCE</a>
                <a href="{{ url('/#contact-section') }}"
                   class="flex items-center justify-center gap-2 bg-orange-500 hover:bg-orange-600 text-white font-semibold px-4 py-2 rounded-full transition">
                    <span>✉</span> <span>Contact Us</span>
                </a>
            </nav>
        </div>
    </header>

    <!-- Menú principal de escritorio -->
    <div id="sticky-menu" class="w-full flex justify-center -mt-1 sticky top-0 z-50 relative hidden md:flex transition-all duration-300 ease-in-out hover:translate-y-0">
        <div class="bg-white bg-opacity-90 px-6 py-4 shadow rounded-b-lg inline-block">
            <nav class="flex gap-6 text-sm items-center">
                <a href="{{ url('/#home') }}" class="text-black hover:text-orange-600 font-medium">HOME</a>
                <a href="{{ route('company') }}" class="text-black hover:text-orange-600 font-medium">OUR COMPANY</a>
                <a href="{{ url('/#product-categories') }}" class="text-black hover:text-orange-600 font-medium">PRODUCTS</a>
                <a href="{{ route('experience') }}" class="text-black hover:text-orange-600 font-medium">INTERNATIONAL EXPERIENCE</a>
                <a href="{{ url('/#contact-section') }}"
                   class="flex items-center gap-2 bg-orange-500 hover:bg-orange-600 text-white font-semibold px-6 py-2 rounded-full transition">
                    <span>✉</span> <span>Contact Us</span>
                </a>
            </nav>
        </div>
    </div>

<main class="px-6 py-12 max-w-7xl mx-auto">
    <div class="flex flex-col md:flex-row justify-center gap-10 md:gap-20">

        <!-- Columna izquierda: Imagen + texto debajo -->
        <div class="flex flex-col items-center md:items-start text-center md:text-left max-w-md mx-auto">
            <!-- Imagen -->
            <img src="{{ asset('images/dreambox.png') }}" alt="Dreambox" 
     class="w-[120px] md:w-[160px] drop-shadow-xl mb-4">

            <!-- Texto debajo de la imagen -->
            <p class="text-base md:text-lg leading-relaxed text-[#1b1b18] font-medium">
                A product designed to improve logistics in exports by enabling more compact, rolled, and boxed shipments—ready to be sent anywhere in the world.
            </p>

            <!-- Imagen adicional debajo del texto -->
            <img src="{{ asset('images/drea4m.png') }}" alt="Dreamm" class="w-full h-auto max-w-sm mt-4 rounded-md shadow-md">
        </div>

        <!-- Columna derecha: Título abajo, centrado en móvil -->
        <div class="flex flex-col items-center md:items-start justify-end mt-6 md:mt-0 text-center md:text-left w-full h-full">
            <h1 class="text-3xl md:text-5xl font-extrabold text-[#1b1b18] leading-tight mb-4">
                International<br>Markets
            </h1>

            <!-- Imagen de ubicación ocupando el máximo espacio -->
            <img src="{{ asset('images/ubicacion.png') }}" alt="Ubicación internacional" 
                class="w-full h-auto max-w-full rounded-md shadow-md">
        </div>




    </div>
</main>







</body>
</html>

<!-- Scripts -->
<script>
    // sliders y menú móvil (igual que antes)
    document.addEventListener("DOMContentLoaded", function () {
        const btn = document.getElementById("hamburger-btn");
        const icon = document.getElementById("hamburger-icon");
        const menu = document.getElementById("mobile-menu");

        btn.addEventListener("click", (event) => {
            event.stopPropagation();
            menu.classList.toggle("hidden");
            icon.innerHTML = menu.classList.contains("hidden") ? "&#9776;" : "&#10006;";
        });

        document.addEventListener("click", function (event) {
            const isClickInside = menu.contains(event.target) || btn.contains(event.target);
            if (!isClickInside && !menu.classList.contains("hidden")) {
                menu.classList.add("hidden");
                icon.innerHTML = "&#9776;";
            }
        });

        const links = menu.querySelectorAll('a');
        links.forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
                icon.innerHTML = "&#9776;";
            });
        });

        // scroll menú
        const stickyMenu = document.getElementById('sticky-menu');
        let lastScroll = window.scrollY;

        window.addEventListener('scroll', () => {
            const currentScroll = window.scrollY;
            if (currentScroll > lastScroll && currentScroll > 50) {
                stickyMenu.classList.add('-translate-y-14');
            } else {
                stickyMenu.classList.remove('-translate-y-14');
            }
            lastScroll = currentScroll;
        });
    });
</script>
