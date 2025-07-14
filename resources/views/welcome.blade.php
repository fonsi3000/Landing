<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Espumas</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-[#1b1b18] font-sans">

    <!-- Header -->
    <header class="bg-white shadow relative z-30" id="home">
        <div class="max-w-7xl mx-auto px-4 relative py-6">
            <!-- Logos -->
            <div class="flex justify-center items-center flex-wrap gap-6">
                <img src="/images/logo.png" alt="Logos EM & EL" class="h-16">
                <img src="/images/certificaciones.png" alt="Certificaciones" class="h-16">
            </div>

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
                <a href="#home" class="text-black hover:text-orange-600 font-medium">HOME</a>
                <a href="{{ route('company') }}" class="text-black hover:text-orange-600 font-medium">OUR COMPANY</a>
                <a href="#product-categories" class="text-black hover:text-orange-600 font-medium">PRODUCTS</a>
                <a href="{{ route('experience') }}" class="text-black hover:text-orange-600 font-medium">INTERNATIONAL EXPERIENCE</a>
                <a href="#contact-section"
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
                <a href="#home" class="text-black hover:text-orange-600 font-medium">HOME</a>
                <a href="{{ route('company') }}" class="text-black hover:text-orange-600 font-medium">OUR COMPANY</a>
                <a href="#product-categories" class="text-black hover:text-orange-600 font-medium">PRODUCTS</a>
                <a href="{{ route('experience') }}" class="text-black hover:text-orange-600 font-medium">INTERNATIONAL EXPERIENCE</a>
                <a href="#contact-section"
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

        <div class="absolute inset-0 bg-[#F53003]/50 z-10"></div>

        <!-- Texto inferior izquierdo -->
        <div class="absolute z-20 bottom-16 left-4 md:left-10 text-white max-w-md drop-shadow-[0_1px_2px_rgba(0,0,0,0.9)]">
            <h1 class="text-base sm:text-lg md:text-xl lg:text-2xl font-extrabold leading-tight tracking-normal">
                <span class="whitespace-nowrap">
                We are the <strong class="font-black text-white">biggest manufacturer</strong> of flexible
                </span><br>
                <span class="whitespace-nowrap">
                polyurethane foam and mattresses in Colombia,
                </span><br>
                and the <strong class="font-black text-white">only ones in South America</strong><br>
                with foams certified in <strong class="font-black text-white">CertiPUR-US<sup>®</sup></strong>.
            </h1>
        </div>

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

    <!-- Product categories -->
    <section id="product-categories" class="py-6 bg-white">
        <h2 class="text-center text-2xl md:text-3xl font-extrabold mb-8">One material, endless solutions.</h2>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 max-w-6xl mx-auto px-4">
            <!-- ITEM -->
            <div class="group text-center transition-transform duration-300 hover:scale-110">
                <img src="/images/mattress.png" class="mx-auto h-32 mb-2 transition-transform duration-300">
                <p class="font-bold text-sm md:text-base">Custom-made<br>mattresses</p>
            </div>

            <div class="group text-center transition-transform duration-300 hover:scale-110">
                <img src="/images/corsetry.png" class="mx-auto h-32 mb-2 transition-transform duration-300">
                <p class="font-bold text-sm md:text-base">Foams for<br>Corsetry</p>
            </div>

            <div class="group text-center transition-transform duration-300 hover:scale-110">
                <img src="/images/footwear.png" class="mx-auto h-32 mb-2 transition-transform duration-300">
                <p class="font-bold text-sm md:text-base">Footwear</p>
            </div>

            <div class="group text-center transition-transform duration-300 hover:scale-110">
                <img src="/images/furniture.png" class="mx-auto h-32 mb-2 transition-transform duration-300">
                <p class="font-bold text-sm md:text-base">Furniture</p>
            </div>

            <div class="group text-center transition-transform duration-300 hover:scale-110">
                <img src="/images/cleaning.png" class="mx-auto h-32 mb-2 transition-transform duration-300">
                <p class="font-bold text-sm md:text-base">Cleaning</p>
            </div>

            <div class="group text-center transition-transform duration-300 hover:scale-110">
                <img src="/images/home_lines.png" class="mx-auto h-32 mb-2 transition-transform duration-300">
                <p class="font-bold text-sm md:text-base">Home linens</p>
            </div>
        </div>

        <!-- Subtítulo inferior -->
        <p class="text-center mt-10 text-sm md:text-base font-bold italic px-4">
            Testing and compliance of The CPSC standards federal regulations for mattresses.
        </p>
    </section>

    <!-- Video section -->
    <section class="bg-white py-2">
        <div class="max-w-6xl mx-auto px-4 relative">
            <div class="aspect-video bg-black rounded-lg overflow-hidden shadow-lg relative group">
                <video 
                    id="promoVideo"
                    src="/images/video.mp4"
                    class="w-full h-full object-cover"
                    preload="metadata"
                    autoplay
                    muted
                    controls
                ></video>

                <!-- Play overlay personalizado (solo visual cuando está pausado) -->
                <div 
                    id="playOverlay"
                    class="absolute inset-0 flex items-center justify-center bg-black/30 hover:bg-black/50 z-10 pointer-events-none hidden"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>


    <!-- Product lines -->
    <section class="py-16 bg-white">
        <h2 class="text-center text-2xl md:text-3xl font-extrabold mb-12">Foams tailored to your industry</h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-6xl mx-auto px-4">
            <!-- Card -->
            <div class="group text-center bg-white p-4 rounded-lg shadow transition-transform duration-300 hover:scale-105">
                <div class="overflow-hidden">
                    <img src="/images/nubetouch.png"
                        class="mx-auto h-40 group-hover:scale-110 transition-transform duration-300">
                </div>
                <p class="font-bold text-base md:text-lg mt-3 transition-transform duration-300 group-hover:scale-105">
                    NubeTouch<sup>®</sup>
                </p>
            </div>

            <div class="group text-center bg-white p-4 rounded-lg shadow transition-transform duration-300 hover:scale-105">
                <div class="overflow-hidden">
                    <img src="/images/flexisense.png"
                        class="mx-auto h-40 group-hover:scale-110 transition-transform duration-300">
                </div>
                <p class="font-bold text-base md:text-lg mt-3 transition-transform duration-300 group-hover:scale-105">
                    FlexiSense<sup>®</sup>
                </p>
            </div>

            <div class="group text-center bg-white p-4 rounded-lg shadow transition-transform duration-300 hover:scale-105">
                <div class="overflow-hidden">
                    <img src="/images/ergomedic-foam.png"
                        class="mx-auto h-40 group-hover:scale-110 transition-transform duration-300">
                </div>
                <p class="font-bold text-base md:text-lg mt-3 transition-transform duration-300 group-hover:scale-105">
                    ErgomedicFoam<sup>®</sup>
                </p>
            </div>

            <div class="group text-center bg-white p-4 rounded-lg shadow transition-transform duration-300 hover:scale-105">
                <div class="overflow-hidden">
                    <img src="/images/techform.png"
                        class="mx-auto h-40 group-hover:scale-110 transition-transform duration-300">
                </div>
                <p class="font-bold text-base md:text-lg mt-3 transition-transform duration-300 group-hover:scale-105">
                    TechForm<sup>®</sup>
                </p>
            </div>
        </div>

        <!-- Subtítulo inferior -->
        <p class="text-center mt-12 text-sm md:text-base font-medium px-4 max-w-8xl mx-auto leading-relaxed">
            Discover our wide range of foams with different densities and firmness levels, designed to meet the demands of each industry. <br>
            From comfortable solutions for home and mattresses to specialized materials for healthcare, furniture, construction, leather goods, cleaning, and textiles. <br>
            <span class="font-bold italic">Find the perfect foam for your project!</span>
        </p>
    </section>

    <!-- Contact section -->
    <section id="contact-section" class="bg-orange-500 py-16 text-white">
        <div class="max-w-6xl mx-auto px-4">
            <!-- Título -->
            <h2 class="text-2xl font-bold text-center mb-3 text-black">We're here to help you.</h2>
            <!-- Subtítulo -->
            <p class="text-center text-white text-sm max-w-3xl mx-auto mb-10 leading-relaxed">
                If you would like more information about our flexible polyurethane foam products or wish to schedule
                a personalized consultation, feel free to contact us. We are committed to providing you with the best comfort
                experience tailored to your needs.
            </p>

            <!-- Contenedor principal -->
            <div class="bg-white rounded-lg p-6 sm:p-8 grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 items-start">
                <!-- Información de contacto -->
                <div class="bg-black text-white p-4 sm:p-6 rounded-md text-sm space-y-4">
                    <h3 class="text-white text-base font-semibold mb-2">Contact Information</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-2">
                            <span>👤</span>
                            <span><strong>(+57) 301 766 5966</strong> / <strong>(+57) 315 690 3159</strong></span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span>🏠</span>
                            <span>Cra. 48 Nº 98 sur – 05</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span>🕐</span>
                            <span>Monday to Friday from 7:00 am to 5:00pm (CDT)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span>✉</span>
                            <span>international.sales@espumasmedellin.com.co</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span>📍</span>
                            <span><strong>Barranquilla, Medellín – Colombia</strong></span>
                        </li>
                    </ul>
                </div>

                <!-- Formulario -->
                <form method="POST" action="{{ route('contact.send') }}" class="space-y-5 text-sm">
                    @csrf
                    <div>
                        <label class="block text-black mb-1">Full Name</label>
                        <input type="text" name="name" class="w-full bg-[#eaf2fb] text-black border border-gray-300 px-4 py-2 rounded" required>
                    </div>
                    <div>
                        <label class="block text-black mb-1">Email</label>
                        <input type="email" name="email" class="w-full bg-[#eaf2fb] text-black border border-gray-300 px-4 py-2 rounded" required>
                    </div>
                    <div>
                        <label class="block text-black mb-1">Contact Number</label>
                        <input type="text" name="phone" class="w-full bg-[#eaf2fb] text-black border border-gray-300 px-4 py-2 rounded">
                    </div>
                    <div>
                        <label class="block text-black mb-1">Leave a Message</label>
                        <textarea name="message" rows="4" class="w-full bg-[#eaf2fb] text-black border border-gray-300 px-4 py-2 rounded"></textarea>
                    </div>
                    <button type="submit"
                            class="bg-orange-500 text-white font-semibold px-6 py-2 rounded-full hover:bg-orange-600 transition">
                        Send
                    </button>
                </form>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <!-- Echa con el 🧡 por Luis alfonso carrascal manjarres -->
    <footer class="bg-gray-900 text-white text-center py-4">
        &copy; {{ date('Y') }} Espumas Medellín & Espumados del Litoral. All rights reserved.
    </footer>
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
    const video = document.getElementById('promoVideo');
    const playOverlay = document.getElementById('playOverlay');

    // Mostrar u ocultar el ícono de play al pausar/reproducir
    video.addEventListener('pause', () => {
        playOverlay.classList.remove('hidden');
    });

    video.addEventListener('play', () => {
        playOverlay.classList.add('hidden');
    });

    // Evitar reproducción automática al hacer clic directamente en el video
    video.addEventListener('click', (event) => {
        // Si se hace clic en los controles (botones), no hacer nada
        const rect = video.getBoundingClientRect();
        const clickedControlBar = event.clientY > rect.bottom - 40; // control bar is usually bottom ~40px
        if (clickedControlBar) return;

        // Si está reproduciendo, pausar
        if (!video.paused) {
            event.preventDefault(); // evitar que se vuelva a reproducir automáticamente
            video.pause();
        }
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

