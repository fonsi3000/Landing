<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our company</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-[#1b1b18] font-sans">

    <!-- Header -->
    <header class="bg-white shadow relative z-30" id="home">
        <div class="max-w-7xl mx-auto px-4 relative py-0">
            <!-- Botón hamburguesa solo en móvil -->
            <div class="mt-4 flex justify-end md:hidden">
                <button id="hamburger-btn" class="flex items-center gap-2 text-black text-xl font-medium focus:outline-none">
                    <span id="hamburger-icon">&#9776;</span>
                    <span>MENU</span>
                </button>
            </div>
        </div>

        <!-- Menú móvil desplegable -->
        <div id="mobile-menu" class="md:hidden hidden px-6 pb-4 bg-white z-30 relative">
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
        <div class="bg-white px-6 py-4 shadow rounded-b-lg inline-block">
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

    <!-- Hero -->
    <section class="relative h-[500px] overflow-hidden -mt-16 z-0">
        <!-- Slider -->
        <div id="hero-slider" class="w-full h-full relative">
            <img src="/images/fachada-em.png" alt="Fachada EM"
                class="slider-image absolute inset-0 w-full h-full object-cover opacity-100 transition-opacity duration-1000">
            <img src="/images/fachada-el.png" alt="Fachada EL"
                class="slider-image absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000">
        </div>

        <div class="absolute inset-0 bg-[#F53003]/1 z-10"></div>
        <!-- Flechas minimalistas -->
        <span id="prev-slide"
            class="absolute left-3 top-1/2 -translate-y-1/2 z-30 text-white text-2xl md:text-3xl cursor-pointer select-none">
            &#x2039;
        </span>
        <span id="next-slide"
            class="absolute right-3 top-1/2 -translate-y-1/2 z-30 text-white text-2xl md:text-3xl cursor-pointer select-none">
            &#x203A;
        </span>
    </section>

    <!-- Sección de logos de empresas -->
    <section class="bg-white px-12 px-2">
        <div class="max-w-2xl mx-auto shadow-lg border border-gray-200 overflow-hidden flex justify-center items-center gap-12 flex-wrap py-0 bg-white -mt-14 z-20 relative rounded-l-full rounded-r-full">
            <div class="flex items-center justify-center w-full">
                <img src="/images/logo.png" alt="Logos" class="h-32 md:h-40 lg:h-36 max-w-full object-contain">
            </div>
        </div>
    </section>

    <section class="bg-white px-4">
        <div class="max-w-6xl mx-auto border border-orange-500 rounded-xl shadow-md px-6 py-10 relative -mt-22">
            <!-- Contenido principal -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 pt-16">

                <!-- Texto -->
                <div class="text-gray-900 font-extrabold leading-tight space-y-3">
                    <p>
                        Integrated by 2 manufacturing companies located in Medellín<br>
                        <strong>(Espumas Medellín)</strong> and Barranquilla <strong>(Espumados del Litoral)</strong>.
                    </p>
                    <p>Dedicated to the manufacture of mattresses, pillows and other <br> REST PRODUCTS.</p>
                    <br>
                    <p class="text-2xl font-extrabold leading-none text-black">Facility Size.</p>
                    <p class="text-2xl font-extrabold leading-none text-orange-600">538.200 Square Feet</p>
                    <br>
                    <p class="text-2xl font-extrabold leading-none text-black">Personnel</p>
                    <p class="text-2xl font-extrabold leading-none text-orange-600">800 employees</p>

                    <p>We manufacture nearly 500.000 Mattresses, Pillows, and <br> cushions per year.</p>

                    <!-- Certificaciones -->
                    <div class="flex items-center gap-6 mt-6 flex-wrap">
                        <img src="/images/certificaciones.png" alt="Certifications" class="h-18">
                    </div>
                </div>

                <!-- Mapa -->
                <div class="flex justify-center h-full">
                    <img src="/images/mapa-colombia.png" alt="Mapa" class="h-full max-h-full object-contain">
                </div>

            </div>

        </div>
    </section>
    <!-- Footer -->
    <!-- Echa con el 🧡 por Luis alfonso carrascal manjarres -->
    {{-- <footer class="bg-gray-900 text-white text-center py-4">
        &copy; {{ date('Y') }} Espumas Medellín & Espumados del Litoral. All rights reserved.
    </footer> --}}
</body>
</html>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const slides = document.querySelectorAll('.slider-image');
        const prev = document.getElementById('prev-slide');
        const next = document.getElementById('next-slide');
        let current = 0;
        let interval;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('opacity-100', i === index);
                slide.classList.toggle('opacity-0', i !== index);
            });
        }

        function nextSlide() {
            current = (current + 1) % slides.length;
            showSlide(current);
        }

        function prevSlide() {
            current = (current - 1 + slides.length) % slides.length;
            showSlide(current);
        }

        function startInterval() {
            interval = setInterval(nextSlide, 5000);
        }

        function resetInterval() {
            clearInterval(interval);
            startInterval();
        }

        next.addEventListener('click', () => {
            nextSlide();
            resetInterval();
        });

        prev.addEventListener('click', () => {
            prevSlide();
            resetInterval();
        });

        showSlide(current);
        startInterval();
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const btn = document.getElementById("hamburger-btn");
        const icon = document.getElementById("hamburger-icon");
        const menu = document.getElementById("mobile-menu");

        btn.addEventListener("click", (event) => {
            event.stopPropagation(); // evita cierre inmediato
            menu.classList.toggle("hidden");
            icon.innerHTML = menu.classList.contains("hidden") ? "&#9776;" : "&#10006;";
        });

        // Cierra el menú si se hace clic fuera
        document.addEventListener("click", function (event) {
            const isClickInside = menu.contains(event.target) || btn.contains(event.target);
            if (!isClickInside && !menu.classList.contains("hidden")) {
                menu.classList.add("hidden");
                icon.innerHTML = "&#9776;";
            }
        });

        // Cierra el menú al hacer clic en un enlace dentro del menú
        const links = menu.querySelectorAll('a');
        links.forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
                icon.innerHTML = "&#9776;";
            });
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const menu = document.getElementById('sticky-menu');

        let lastScroll = window.scrollY;

        window.addEventListener('scroll', () => {
            const currentScroll = window.scrollY;

            if (currentScroll > lastScroll && currentScroll > 50) {
                // Scrolling down: ocultar parcialmente
                menu.classList.add('-translate-y-14'); // Puedes ajustar este valor
            } else {
                // Scrolling up o top: mostrar completo
                menu.classList.remove('-translate-y-14');
            }

            lastScroll = currentScroll;
        });
    });
</script>

