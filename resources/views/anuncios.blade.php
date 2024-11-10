<x-app-layout>
    <!-- Barra Verde Superior con Logotipo -->
    <header class="py-1 bg-green-700">
        <div class="flex items-center mx-auto max-w-7xl">
            <img src="{{ asset('imagenes/logo1.png') }}" alt="LAMB University" class="w-auto h-16 relative left-[-180px] mr-2">
        </div>
    </header>



    <!-- Carrusel con Alpine.js -->
    <div x-data="{ activeSlide: 0, totalSlides: 3, interval: null }"
         x-init="interval = setInterval(() => activeSlide = (activeSlide + 1) % totalSlides, 10000)"
         class="relative max-w-5xl mx-auto overflow-hidden">

        <!-- Contenedor de Slides -->
        <div class="relative flex transition-transform duration-700"
             :style="'transform: translateX(-' + activeSlide * 100 + '%)'"
             style="width: 300%;">

            <!-- Slide 1 -->
            <a href="{{ route('mas-informacion2') }}" class="flex items-center justify-center flex-shrink-0 w-full p-10" style="width: 100%;">
                <!-- Imagen a la izquierda -->
                <div class="w-1/2">
                    <img src="{{ asset('imagenes/anuncio1.jpg') }}" alt="Anuncio 1" class="object-cover w-full rounded-lg shadow-lg h-96">
                </div>
                <!-- Información a la derecha -->
                <div class="w-1/2 p-8 bg-gray-100 rounded-lg shadow-lg">
                    <h2 class="mb-4 text-3xl font-bold">Convocatoria al Comedor Universitario</h2>
                    <p class="mb-2 text-xl"><strong>Fecha:</strong> 15 de Noviembre, 2024</p>
                    <p class="mb-2 text-xl"><strong>Hora:</strong> 12:00 PM</p>
                    <p class="mt-4 text-lg text-gray-700">Ven y disfruta de un almuerzo subvencionado en el comedor universitario. ¡No te lo pierdas!</p>
                </div>
            </a>

            <!-- Slide 2 -->
            <a href="{{ route('mas-informacion2') }}" class="flex items-center justify-center flex-shrink-0 w-full p-10" style="width: 100%;">
                <div class="w-1/2">
                    <img src="{{ asset('imagenes/anuncio2.jpg') }}" alt="Anuncio 2" class="object-cover w-full rounded-lg shadow-lg h-96">
                </div>
                <div class="w-1/2 p-8 bg-gray-100 rounded-lg shadow-lg">
                    <h2 class="mb-4 text-3xl font-bold">Evento Deportivo</h2>
                    <p class="mb-2 text-xl"><strong>Fecha:</strong> 20 de Noviembre, 2024</p>
                    <p class="mb-2 text-xl"><strong>Hora:</strong> 3:00 PM</p>
                    <p class="mt-4 text-lg text-gray-700">Participa en el torneo interuniversitario y demuestra tus habilidades.</p>
                </div>
            </a>

            <!-- Slide 3 -->
            <a href="{{ route('mas-informacion2') }}" class="flex items-center justify-center flex-shrink-0 w-full p-10" style="width: 100%;">
                <div class="w-1/2">
                    <img src="{{ asset('imagenes/anuncio3.jpg') }}" alt="Anuncio 3" class="object-cover w-full rounded-lg shadow-lg h-96">
                </div>
                <div class="w-1/2 p-8 bg-gray-100 rounded-lg shadow-lg">
                    <h2 class="mb-4 text-3xl font-bold">Charla de Tecnología</h2>
                    <p class="mb-2 text-xl"><strong>Fecha:</strong> 25 de Noviembre, 2024</p>
                    <p class="mb-2 text-xl"><strong>Hora:</strong> 10:00 AM</p>
                    <p class="mt-4 text-lg text-gray-700">Descubre las últimas tendencias en inteligencia artificial.</p>
                </div>
            </a>
        </div>

        <!-- Botones de Navegación -->
        <button @click="activeSlide = activeSlide === 0 ? totalSlides - 1 : activeSlide - 1"
                class="absolute left-0 z-10 p-2 text-white -translate-y-1/2 bg-gray-800 rounded-full top-1/2 hover:bg-gray-700">
            &#9664;
        </button>
        <button @click="activeSlide = (activeSlide + 1) % totalSlides"
                class="absolute right-0 z-10 p-2 text-white -translate-y-1/2 bg-gray-800 rounded-full top-1/2 hover:bg-gray-700">
            &#9654;
        </button>

        <!-- Indicadores de Paginación -->
        <div class="absolute flex justify-center w-full gap-2 bottom-4">
            <template x-for="i in Array.from({length: totalSlides}).keys()" :key="i">
                <button @click="activeSlide = i"
                        :class="activeSlide === i ? 'bg-green-700' : 'bg-gray-400'"
                        class="w-3 h-3 rounded-full"></button>
            </template>
        </div>
    </div>







    <!-- Línea Divisoria -->
    <hr class="my-10 border-gray-300">

    <!-- Cuadros de Información con Animación (3 columnas x 2 filas) -->
    <div class="container grid grid-cols-1 gap-8 py-10 mx-auto sm:grid-cols-2 md:grid-cols-3">
        <!-- Cuadro 1 -->
        <a href="{{ route('mas-informacion2') }}" class="p-6 transition-transform transform bg-white rounded-lg shadow-lg hover:scale-105 hover:rotate-1">
            <img src="{{ asset('imagenes/anuncio2.jpg') }}" alt="Anuncio 2" class="object-cover w-full h-48 mb-4 rounded-lg">
            <h3 class="text-xl font-bold">Evento Deportivo</h3>
            <p>Participa en el torneo interuniversitario.</p>
        </a>

        <!-- Cuadro 2 -->
        <a href="{{ route('mas-informacion2') }}" class="p-6 transition-transform transform bg-white rounded-lg shadow-lg hover:scale-105 hover:rotate-1">
            <img src="{{ asset('imagenes/anuncio3.jpg') }}" alt="Anuncio 3" class="object-cover w-full h-48 mb-4 rounded-lg">
            <h3 class="text-xl font-bold">Charla de Tecnología</h3>
            <p>Descubre las últimas tendencias en IA.</p>
        </a>

        <!-- Cuadro 3 -->
        <a href="{{ route('mas-informacion2') }}" class="p-6 transition-transform transform bg-white rounded-lg shadow-lg hover:scale-105 hover:rotate-1">
            <img src="{{ asset('imagenes/anuncio4.jpg') }}" alt="Anuncio 4" class="object-cover w-full h-48 mb-4 rounded-lg">
            <h3 class="text-xl font-bold">Feria de Emprendimiento</h3>
            <p>Presenta tu proyecto y gana premios.</p>
        </a>

        <!-- Cuadro 4 -->
        <a href="{{ route('mas-informacion2') }}" class="p-6 transition-transform transform bg-white rounded-lg shadow-lg hover:scale-105 hover:rotate-1">
            <img src="{{ asset('imagenes/anuncio5.jpg') }}" alt="Anuncio 5" class="object-cover w-full h-48 mb-4 rounded-lg">
            <h3 class="text-xl font-bold">Seminario de Salud</h3>
            <p>Cuidemos nuestra salud juntos.</p>
        </a>

        <!-- Cuadro 5 -->
        <a href="{{ route('mas-informacion2') }}" class="p-6 transition-transform transform bg-white rounded-lg shadow-lg hover:scale-105 hover:rotate-1">
            <img src="{{ asset('imagenes/anuncio6.jpg') }}" alt="Anuncio 6" class="object-cover w-full h-48 mb-4 rounded-lg">
            <h3 class="text-xl font-bold">Taller de Fotografía</h3>
            <p>Aprende técnicas para mejorar tus fotos.</p>
        </a>

        <!-- Cuadro 6 -->
        <a href="{{ route('mas-informacion2') }}" class="p-6 transition-transform transform bg-white rounded-lg shadow-lg hover:scale-105 hover:rotate-1">
            <img src="{{ asset('imagenes/anuncio7.jpg') }}" alt="Anuncio 7" class="object-cover w-full h-48 mb-4 rounded-lg">
            <h3 class="text-xl font-bold">Día de la Ciencia</h3>
            <p>Explora experimentos interactivos.</p>
        </a>
    </div>




    <script src="//unpkg.com/alpinejs" defer></script>





</x-app-layout>
