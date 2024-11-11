<x-app-layout>
    <div class="container flex px-4 py-8">

        <!-- Contenedor principal con fondo verde claro y ajustes en tamaño y altura fija con desplazamiento interno -->
        <div class="p-6 rounded-lg" style="width: 50%; max-width: 800px; height: 750px; margin-left: 100px; overflow-y: auto; background-image: url('imagenes/camino.jpg'); background-size: cover; background-position: center; background-color: rgba(255, 255, 255, 0.5); background-blend-mode: overlay;">

            <div class="flex flex-col items-start">
                <!-- Ajuste de tamaño de los botones de navegación -->
                <div class="flex mb-4 ml-6 space-x-6">
                    <button onclick="mostrarRuta('general')" class="px-10 py-3 text-base text-white bg-green-700 rounded" style="width: 250px; font-size: 1.3rem; font-weight: bold;">
                        <b>Eventos General</b>
                    </button>
                    <button onclick="mostrarRuta('escuela')" class="px-10 py-3 text-base text-white bg-green-700 rounded" style="width: 250px; font-size: 1.3rem; font-weight: bold;">
                        <b>Eventos Escuela</b>
                    </button>
                </div>
                <!-- Botón Anuncios alineado a la derecha -->
                <div class="flex justify-end mt-0 mb-6" style="margin-left: 180px">
                    <button onclick="window.location.href='/anuncios'" class="py-3 text-base text-white bg-green-700 rounded px-14" style="width: 200px; font-size: 1.3rem; font-weight: bold;">
                        <b>Anuncios</b>
                    </button>
                </div>


                <!-- Contenido de los eventos con ajuste de tamaño -->
                <div id="ruta-general" class="relative" style="display: block; width: 100%; margin: 0 auto;">
                    <div class="absolute h-full transform -translate-x-1/2 border-l-2 border-gray-300 left-1/2"></div>
                    <div class="mt-6 space-y-4">



                         <!-- 1* -->
                        <!-- Ejemplo de eventos en la sección de "Eventos General" -->
                        <div class="flex items-center mb-6">
                            <!-- Contenedor del cuadro blanco con margen adicional a la derecha -->
                            <div class="w-5/12 p-4 ml-4 bg-white border border-gray-200 rounded-lg shadow-md" style="margin-right: 20px;">
                                <h3 class="text-lg font-bold text-gray-800">Noviembre 14/11/2024</h3>
                                <p class="text-gray-600">Jornada Cientifica de estudiantes</p>
                            </div>

                            <!-- Contenedor de la bolita verde ajustada al centro de la línea gris -->
                            <div class="relative w-2 text-center">
                                <div onclick="showSlide(0)" class="absolute w-6 h-6 transform -translate-x-1/2 -translate-y-1/2 bg-green-700 border border-white rounded-full cursor-pointer left-1/2" style="left: 50%; margin-left: 8px;"></div>
                            </div>

                            <div class="w-5/12"></div> <!-- Espacio vacío a la derecha -->
                        </div>


                        <!-- 2* -->
                        <div class="flex items-center mb-6">
                            <!-- Espacio vacío a la izquierda -->
                            <div class="w-5/12"></div>

                            <!-- Contenedor de la bolita verde ajustada al centro de la línea gris -->
                            <div class="relative w-2 text-center">
                                <div onclick="showSlide(1)" class="absolute w-6 h-6 transform -translate-x-1/2 -translate-y-1/2 bg-green-700 border border-white rounded-full cursor-pointer left-1/2" style="margin-left: 42px;"></div>
                            </div>

                            <!-- Contenedor del cuadro blanco alineado a la derecha con un margen a la izquierda-->
                            <div class="w-5/12 p-4 bg-white border border-gray-200 rounded-lg shadow-md" style="margin-left: 60px;">
                                <h3 class="text-lg font-bold text-gray-800">Febrero</h3>
                                <p class="text-gray-600">Información del evento en febrero...</p>
                            </div>
                        </div>

                        <!-- 3* -->
                        <!-- Ejemplo de eventos en la sección de "Eventos General" -->
                        <div class="flex items-center mb-6">
                            <!-- Contenedor del cuadro blanco con margen adicional a la derecha -->
                            <div class="w-5/12 p-4 ml-4 bg-white border border-gray-200 rounded-lg shadow-md" style="margin-right: 20px;">
                                <h3 class="text-lg font-bold text-gray-800">Enero</h3>
                                <p class="text-gray-600">Información del evento en enero...</p>
                            </div>

                            <!-- Contenedor de la bolita verde ajustada al centro de la línea gris -->
                            <div class="relative w-2 text-center">
                                <div onclick="showSlide(2)" class="absolute w-6 h-6 transform -translate-x-1/2 -translate-y-1/2 bg-green-700 border border-white rounded-full cursor-pointer left-1/2" style="left: 50%; margin-left: 8px;"></div>
                            </div>

                            <div class="w-5/12"></div> <!-- Espacio vacío a la derecha -->
                        </div>


                         <!-- 4* -->
                        <div class="flex items-center mb-6">
                            <!-- Espacio vacío a la izquierda -->
                            <div class="w-5/12"></div>

                            <!-- Contenedor de la bolita verde ajustada al centro de la línea gris -->
                            <div class="relative w-2 text-center">
                                <div onclick="showSlide(1)" class="absolute w-6 h-6 transform -translate-x-1/2 -translate-y-1/2 bg-green-700 border border-white rounded-full cursor-pointer left-1/2" style="margin-left: 42px;"></div>
                            </div>

                            <!-- Contenedor del cuadro blanco alineado a la derecha con un margen a la izquierda-->
                            <div class="w-5/12 p-4 bg-white border border-gray-200 rounded-lg shadow-md" style="margin-left: 60px;">
                                <h3 class="text-lg font-bold text-gray-800">Febrero</h3>
                                <p class="text-gray-600">Información del evento en febrero...</p>
                            </div>
                        </div>

                        <!-- 5* -->
                        <!-- Ejemplo de eventos en la sección de "Eventos General" -->
                        <div class="flex items-center mb-6">
                            <!-- Contenedor del cuadro blanco con margen adicional a la derecha -->
                            <div class="w-5/12 p-4 ml-4 bg-white border border-gray-200 rounded-lg shadow-md" style="margin-right: 20px;">
                                <h3 class="text-lg font-bold text-gray-800">Enero</h3>
                                <p class="text-gray-600">Información del evento en enero...</p>
                            </div>

                            <!-- Contenedor de la bolita verde ajustada al centro de la línea gris -->
                            <div class="relative w-2 text-center">
                                <div onclick="showSlide(2)" class="absolute w-6 h-6 transform -translate-x-1/2 -translate-y-1/2 bg-green-700 border border-white rounded-full cursor-pointer left-1/2" style="left: 50%; margin-left: 8px;"></div>
                            </div>

                            <div class="w-5/12"></div> <!-- Espacio vacío a la derecha -->
                        </div>


                         <!-- 6* -->
                         <div class="flex items-center mb-6">
                            <!-- Espacio vacío a la izquierda -->
                            <div class="w-5/12"></div>

                            <!-- Contenedor de la bolita verde ajustada al centro de la línea gris -->
                            <div class="relative w-2 text-center">
                                <div onclick="showSlide(1)" class="absolute w-6 h-6 transform -translate-x-1/2 -translate-y-1/2 bg-green-700 border border-white rounded-full cursor-pointer left-1/2" style="margin-left: 42px;"></div>
                            </div>

                            <!-- Contenedor del cuadro blanco alineado a la derecha con un margen a la izquierda-->
                            <div class="w-5/12 p-4 bg-white border border-gray-200 rounded-lg shadow-md" style="margin-left: 60px;">
                                <h3 class="text-lg font-bold text-gray-800">Febrero</h3>
                                <p class="text-gray-600">Información del evento en febrero...</p>
                            </div>
                        </div>
                    </div>
                </div>















                <div id="ruta-escuela" class="relative" style="display: none; width: 100%; margin: 0 auto;">
                    <div class="absolute h-full transform -translate-x-1/2 border-l-2 border-gray-300 left-1/2"></div>
                    <div class="mt-6 space-y-4">

                        <!-- Ejemplo de eventos en la sección de "Eventos Escuela" -->

                        <!-- 1* -->
                        <div class="flex items-center mb-6">
                            <!-- Contenedor del cuadro blanco con margen adicional a la derecha -->
                            <div class="w-5/12 p-4 ml-4 bg-white border border-gray-200 rounded-lg shadow-md" style="margin-right: 20px;">
                                <h3 class="text-lg font-bold text-gray-800">arzo</h3>
                                <p class="text-gray-600">Información del evento en marzo...</p>
                            </div>

                            <!-- Contenedor de la bolita verde ajustada al centro de la línea gris -->
                            <div class="relative w-2 text-center">
                                <div onclick="showSlide(0)" class="absolute w-6 h-6 transform -translate-x-1/2 -translate-y-1/2 bg-green-700 border border-white rounded-full cursor-pointer left-1/2" style="left: 50%; margin-left: 8px;"></div>
                            </div>

                            <div class="w-5/12"></div> <!-- Espacio vacío a la derecha -->
                        </div>


                        <!-- 2* -->
                        <div class="flex items-center mb-6">
                            <!-- Espacio vacío a la izquierda -->
                            <div class="w-5/12"></div>

                            <!-- Contenedor de la bolita verde ajustada al centro de la línea gris -->
                            <div class="relative w-2 text-center">
                                <div onclick="showSlide(1)" class="absolute w-6 h-6 transform -translate-x-1/2 -translate-y-1/2 bg-green-700 border border-white rounded-full cursor-pointer left-1/2" style="margin-left: 42px;"></div>
                            </div>

                            <!-- Contenedor del cuadro blanco alineado a la derecha con un margen a la izquierda-->
                            <div class="w-5/12 p-4 bg-white border border-gray-200 rounded-lg shadow-md" style="margin-left: 60px;">
                                <h3 class="text-lg font-bold text-gray-800">Noviembre 07/11/2024 </h3>
                                <p class="text-gray-600">Campaña de Relaciones Toxicas </p>
                            </div>
                        </div>



                        <!-- 3* -->
                        <div class="flex items-center mb-6">
                            <!-- Contenedor del cuadro blanco con margen adicional a la derecha -->
                            <div class="w-5/12 p-4 ml-4 bg-white border border-gray-200 rounded-lg shadow-md" style="margin-right: 20px;">
                                <h3 class="text-lg font-bold text-gray-800">Marzo</h3>
                                <p class="text-gray-600">Información del evento en marzo...</p>
                            </div>

                            <!-- Contenedor de la bolita verde ajustada al centro de la línea gris -->
                            <div class="relative w-2 text-center">
                                <div onclick="showSlide(2)" class="absolute w-6 h-6 transform -translate-x-1/2 -translate-y-1/2 bg-green-700 border border-white rounded-full cursor-pointer left-1/2" style="left: 50%; margin-left: 8px;"></div>
                            </div>

                            <div class="w-5/12"></div> <!-- Espacio vacío a la derecha -->
                        </div>


                        <!-- 4* -->
                        <div class="flex items-center mb-6">
                            <!-- Espacio vacío a la izquierda -->
                            <div class="w-5/12"></div>

                            <!-- Contenedor de la bolita verde ajustada al centro de la línea gris -->
                            <div class="relative w-2 text-center">
                                <div onclick="showSlide(1)" class="absolute w-6 h-6 transform -translate-x-1/2 -translate-y-1/2 bg-green-700 border border-white rounded-full cursor-pointer left-1/2" style="margin-left: 42px;"></div>
                            </div>

                            <!-- Contenedor del cuadro blanco alineado a la derecha con un margen a la izquierda-->
                            <div class="w-5/12 p-4 bg-white border border-gray-200 rounded-lg shadow-md" style="margin-left: 60px;">
                                <h3 class="text-lg font-bold text-gray-800">Febrero</h3>
                                <p class="text-gray-600">Información del evento en febrero...</p>
                            </div>
                        </div>


                        <!-- 5* -->
                        <div class="flex items-center mb-6">
                            <!-- Contenedor del cuadro blanco con margen adicional a la derecha -->
                            <div class="w-5/12 p-4 ml-4 bg-white border border-gray-200 rounded-lg shadow-md" style="margin-right: 20px;">
                                <h3 class="text-lg font-bold text-gray-800">Marzo</h3>
                                <p class="text-gray-600">Información del evento en marzo...</p>
                            </div>

                            <!-- Contenedor de la bolita verde ajustada al centro de la línea gris -->
                            <div class="relative w-2 text-center">
                                <div onclick="showSlide(2)" class="absolute w-6 h-6 transform -translate-x-1/2 -translate-y-1/2 bg-green-700 border border-white rounded-full cursor-pointer left-1/2" style="left: 50%; margin-left: 8px;"></div>
                            </div>

                            <div class="w-5/12"></div> <!-- Espacio vacío a la derecha -->
                        </div>


                        <!-- 6* -->
                        <div class="flex items-center mb-6">
                            <!-- Espacio vacío a la izquierda -->
                            <div class="w-5/12"></div>

                            <!-- Contenedor de la bolita verde ajustada al centro de la línea gris -->
                            <div class="relative w-2 text-center">
                                <div onclick="showSlide(1)" class="absolute w-6 h-6 transform -translate-x-1/2 -translate-y-1/2 bg-green-700 border border-white rounded-full cursor-pointer left-1/2" style="margin-left: 42px;"></div>
                            </div>

                            <!-- Contenedor del cuadro blanco alineado a la derecha con un margen a la izquierda-->
                            <div class="w-5/12 p-4 bg-white border border-gray-200 rounded-lg shadow-md" style="margin-left: 60px;">
                                <h3 class="text-lg font-bold text-gray-800">Febrero</h3>
                                <p class="text-gray-600">Información del evento en febrero...</p>
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





    <div id="mascota-container" class="absolute p-4" style="right: 10px; bottom: -30px;">
        <!-- Imagen de la mascota -->
        <img src="/imagenes/mascota.png" alt="Mascota" id="mascota" class="w-48 h-48 animate-move-left">

        <!-- Nube de pensamiento al lado izquierdo -->
        <div id="mensaje-mascota" class="absolute hidden p-3 transform -translate-x-full bg-green-400 rounded-lg shadow-lg -top-10 -left-20">
            <!-- Mensaje de texto -->
            <p id="mensaje-texto" class="text-sm font-bold text-black"></p>
            <!-- Triángulo para la nube de pensamiento -->
            <div class="absolute w-0 h-0 border-t-8 border-l-8 border-r-8 border-transparent border-t-green-400 -bottom-2 left-8"></div>
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
        currentSlide = index;
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

    // Cambia de diapositiva automáticamente cada 10 segundos
    setInterval(nextSlide, 10000);

    showSlide(currentSlide);


































let intervalId;
async function obtenerRecordatorio() {
    try {
        const response = await fetch('/api/recordatorio');
        const recordatorio = await response.json();

        if (recordatorio) {
            const mensajeTexto = `Recordatorio:\n${recordatorio.nombre}\nFecha: ${recordatorio.fecha}\nHora: ${recordatorio.hora}`;
            mostrarMensaje(mensajeTexto);
        }
    } catch (error) {
        console.error('Error al obtener el recordatorio:', error);
    }
}

function mostrarMensaje(mensaje) {
    const mensajeContainer = document.getElementById('mensaje-mascota');
    const mensajeTexto = document.getElementById('mensaje-texto');
    const mascota = document.getElementById('mascota');

    mensajeTexto.textContent = mensaje;
    mensajeContainer.classList.remove('hidden');

    // Añadir animación a la mascota
    mascota.classList.add('animate-pulse');
    mensajeContainer.classList.add('animate-bounce');

    // Quitar la animación y ocultar el mensaje después de 5 segundos
    setTimeout(() => {
        mensajeContainer.classList.add('hidden');
        mascota.classList.remove('animate-pulse');
        mensajeContainer.classList.remove('animate-bounce');
    }, 10000);
}

// Inicia el intervalo para obtener recordatorios cada 10 segundos
setInterval(obtenerRecordatorio, 10000);

























    </script>
</x-app-layout>
