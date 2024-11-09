<x-app-layout>
    <div class="container flex px-4 py-8">
        <!-- Contenedor principal con fondo verde claro y ajustes en tamaño y altura fija con desplazamiento interno -->
        <div class="p-6 bg-green-200 rounded-lg" style="width: 50%; max-width: 800px; height: 750px; margin-left: 100px; overflow-y: auto;">
            <div class="flex flex-col items-start">
                <!-- Ajuste de tamaño de los botones de navegación -->
                <div class="flex mb-6 ml-12 space-x-6">
                    <button onclick="mostrarRuta('general')" class="px-6 py-3 text-base text-white bg-green-700 rounded" style="width: 220px; font-size: 1.3rem;">Eventos General</button>
                    <button onclick="mostrarRuta('escuela')" class="px-6 py-3 text-base text-white bg-green-700 rounded" style="width: 200px; font-size: 1.3rem;">Eventos Escuela</button>
                </div>
                <!-- Botón Anuncios alineado a la derecha -->
                <div class="flex justify-end mt-0 mb-6" style="margin-left: 180px">
                    <button class="py-3 text-base text-white bg-green-700 rounded px-14" style="width: 200px; font-size: 1.3rem;">Anuncios</button>
                </div>

                <!-- Contenido de los eventos con ajuste de tamaño -->
                <div id="ruta-general" class="relative" style="display: block; width: 90%; margin: 0 auto;">
                    <div class="absolute h-full transform -translate-x-1/2 border-l-2 border-gray-300 left-1/2"></div>
                    <div class="mt-4 space-y-8">
                        <!-- Ejemplo de eventos en la sección de "Eventos General" -->
                        <div class="flex items-center justify-between">
                            <div class="w-5/12 text-right">
                                <h3 class="text-lg font-bold">Enero</h3>
                                <p>Información del evento en enero...</p>
                            </div>
                            <div class="relative w-2 text-center">
                                <div class="absolute w-6 h-6 transform -translate-x-1/2 bg-green-700 rounded-full left-1/2"></div>
                            </div>
                            <div class="w-5/12 pl-4"></div>
                        </div>

                        <!-- Evento 2 -->
                        <div class="flex items-center justify-between">
                            <div class="w-5/12"></div>
                            <div class="relative w-2 text-center">
                                <div class="absolute w-6 h-6 transform -translate-x-1/2 bg-green-700 rounded-full left-1/2"></div>
                            </div>
                            <div class="w-5/12 pl-4">
                                <h3 class="text-lg font-bold">Febrero</h3>
                                <p>Información del evento en febrero...</p>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="w-5/12 text-right">
                                <h3 class="text-lg font-bold">Enero</h3>
                                <p>Información del evento en enero...</p>
                            </div>
                            <div class="relative w-2 text-center">
                                <div class="absolute w-6 h-6 transform -translate-x-1/2 bg-green-700 rounded-full left-1/2"></div>
                            </div>
                            <div class="w-5/12 pl-4"></div>
                        </div>

                        <!-- Evento 2 -->
                        <div class="flex items-center justify-between">
                            <div class="w-5/12"></div>
                            <div class="relative w-2 text-center">
                                <div class="absolute w-6 h-6 transform -translate-x-1/2 bg-green-700 rounded-full left-1/2"></div>
                            </div>
                            <div class="w-5/12 pl-4">
                                <h3 class="text-lg font-bold">Febrero</h3>
                                <p>Información del evento en febrero...</p>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="w-5/12 text-right">
                                <h3 class="text-lg font-bold">Enero</h3>
                                <p>Información del evento en enero...</p>
                            </div>
                            <div class="relative w-2 text-center">
                                <div class="absolute w-6 h-6 transform -translate-x-1/2 bg-green-700 rounded-full left-1/2"></div>
                            </div>
                            <div class="w-5/12 pl-4"></div>
                        </div>

                        <!-- Evento 2 -->
                        <div class="flex items-center justify-between">
                            <div class="w-5/12"></div>
                            <div class="relative w-2 text-center">
                                <div class="absolute w-6 h-6 transform -translate-x-1/2 bg-green-700 rounded-full left-1/2"></div>
                            </div>
                            <div class="w-5/12 pl-4">
                                <h3 class="text-lg font-bold">Febrero</h3>
                                <p>Información del evento en febrero...</p>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- Contenido de "Eventos Escuela" inicialmente oculto -->
                <div id="ruta-escuela" class="relative" style="display: none; width: 90%; margin: 0 auto;">
                    <div class="absolute h-full transform -translate-x-1/2 border-l-2 border-gray-300 left-1/2"></div>
                    <div class="mt-4 space-y-8">
                        <!-- Ejemplo de eventos en la sección de "Eventos Escuela" -->
                        <div class="flex items-center justify-between">
                            <div class="w-5/12 text-right">
                                <h3 class="text-lg font-bold">Enero</h3>
                                <p>Información del evento en enero...</p>
                            </div>
                            <div class="relative w-2 text-center">
                                <div class="absolute w-6 h-6 transform -translate-x-1/2 bg-green-700 rounded-full left-1/2"></div>
                            </div>
                            <div class="w-5/12 pl-4"></div>
                        </div>
                        <!-- Evento 2 -->
                        <div class="flex items-center justify-between">
                            <div class="w-5/12"></div>
                            <div class="relative w-2 text-center">
                                <div class="absolute w-6 h-6 transform -translate-x-1/2 bg-green-700 rounded-full left-1/2"></div>
                            </div>
                            <div class="w-5/12 pl-4">
                                <h3 class="text-lg font-bold">Febrero</h3>
                                <p>Información del evento en febrero...</p>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="w-5/12 text-right">
                                <h3 class="text-lg font-bold">Enero</h3>
                                <p>Información del evento en enero...</p>
                            </div>
                            <div class="relative w-2 text-center">
                                <div class="absolute w-6 h-6 transform -translate-x-1/2 bg-green-700 rounded-full left-1/2"></div>
                            </div>
                            <div class="w-5/12 pl-4"></div>
                        </div>
                        <!-- Evento 2 -->
                        <div class="flex items-center justify-between">
                            <div class="w-5/12"></div>
                            <div class="relative w-2 text-center">
                                <div class="absolute w-6 h-6 transform -translate-x-1/2 bg-green-700 rounded-full left-1/2"></div>
                            </div>
                            <div class="w-5/12 pl-4">
                                <h3 class="text-lg font-bold">Febrero</h3>
                                <p>Información del evento en febrero...</p>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="w-5/12 text-right">
                                <h3 class="text-lg font-bold">Enero</h3>
                                <p>Información del evento en enero...</p>
                            </div>
                            <div class="relative w-2 text-center">
                                <div class="absolute w-6 h-6 transform -translate-x-1/2 bg-green-700 rounded-full left-1/2"></div>
                            </div>
                            <div class="w-5/12 pl-4"></div>
                        </div>
                        <!-- Evento 2 -->
                        <div class="flex items-center justify-between">
                            <div class="w-5/12"></div>
                            <div class="relative w-2 text-center">
                                <div class="absolute w-6 h-6 transform -translate-x-1/2 bg-green-700 rounded-full left-1/2"></div>
                            </div>
                            <div class="w-5/12 pl-4">
                                <h3 class="text-lg font-bold">Febrero</h3>
                                <p>Información del evento en febrero...</p>
                            </div>
                        </div>

                    </div>
                </div>
                </div>
                </div>















        <!-- Carrusel de imágenes con mayor separación a la derecha -->
        <div class="w-1/2" style="margin-left: 150px;">
            <div id="carouselExample" class="relative overflow-hidden rounded-lg shadow-lg" style="width: 600px; height: 750px;">
                <div class="relative transition-transform duration-500 ease-in-out carousel-content">
                    <div class="carousel-item" style="transform: translateX(0%); width: 600px; height: 750px;">
                        <img src="/imagenes/evento1.jpeg" alt="Imagen 1" class="object-cover w-full h-full rounded-lg">
                    </div>
                    <div class="hidden carousel-item" style="transform: translateX(100%); width: 600px; height: 750px;">
                        <img src="/imagenes/evento2.jpeg" alt="Imagen 2" class="object-cover w-full h-full rounded-lg">
                    </div>
                    <div class="hidden carousel-item" style="transform: translateX(200%); width: 600px; height: 750px;">
                        <img src="/imagenes/evento3.jpeg" alt="Imagen 3" class="object-cover w-full h-full rounded-lg">
                    </div>
                </div>

                <!-- Botones de navegación grandes -->
                <button onclick="prevSlide()" class="absolute left-0 px-4 py-2 text-2xl text-white transform -translate-y-1/2 bg-gray-700 bg-opacity-75 rounded-full top-1/2 hover:bg-opacity-100">&lt;</button>
                <button onclick="nextSlide()" class="absolute right-0 px-4 py-2 text-2xl text-white transform -translate-y-1/2 bg-gray-700 bg-opacity-75 rounded-full top-1/2 hover:bg-opacity-100">&gt;</button>
            </div>
            <div class="mt-4 text-center" style="margin-left: 35px;">
                <button onclick="window.location.href='/mas-informacion'" class="px-6 py-3 text-lg text-white bg-green-700 rounded-lg">Más Información</button>
            </div>
        </div>
    </div>

    <!-- Script para alternar entre rutas y carrusel automático con animación -->
    <script>
        function mostrarRuta(tipo) {
            document.getElementById('ruta-general').style.display = tipo === 'general' ? 'block' : 'none';
            document.getElementById('ruta-escuela').style.display = tipo === 'escuela' ? 'block' : 'none';
        }

        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-item');
        const totalSlides = slides.length;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.transform = `translateX(${100 * (i - index)}%)`;
                slide.classList.toggle('hidden', i !== index);
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            showSlide(currentSlide);
        }

        // Cambia de diapositiva automáticamente cada 5 segundos
        setInterval(nextSlide, 10000);

        showSlide(currentSlide);
    </script>
</x-app-layout>
