
{{-- resources/views/mas-informacion.blade.php --}}
<x-app-layout>
<!-- Contenedor Principal -->
<div class="flex-1">
    <!-- Barra Verde Superior con Logotipo y Texto Ajustado a la Izquierda -->
    @if (request()->is('mas-informacion'))
        <header class="py-1 bg-green-700">
            <div class="flex items-center pl-4 max-w-7xl">
                <img src="{{ asset('imagenes/logo1.png') }}" alt="LAMB University" class="w-auto h-16 mr-2">
            </div>
        </header>
    @endif

    @if (isset($header))
        <header class="bg-white shadow">
            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif


</div>











    <div class="container flex px-8 py-8 space-x-8" style="margin-left: 80px;">
        <!-- Carrusel de imágenes -->
        <div class="w-1/2">
            <div id="carouselExample" class="relative overflow-hidden rounded-lg shadow-lg" style="width: 650px; height: 750px;">
                <div class="relative transition-transform duration-500 ease-in-out carousel-content">
                    <div class="carousel-item" style="transform: translateX(0%); width: 650px; height: 750px;">
                        <img src="/imagenes/evento1.jpeg" alt="Imagen 1" class="object-cover w-full h-full rounded-lg">
                    </div>
                    <div class="hidden carousel-item" style="transform: translateX(100%); width: 650px; height: 750px;">
                        <img src="/imagenes/evento2.jpeg" alt="Imagen 2" class="object-cover w-full h-full rounded-lg">
                    </div>
                    <div class="hidden carousel-item" style="transform: translateX(200%); width: 650px; height: 750px;">
                        <img src="/imagenes/evento3.jpeg" alt="Imagen 3" class="object-cover w-full h-full rounded-lg">
                    </div>
                </div>

                <!-- Botones de navegación del carrusel -->
                <button onclick="prevSlide()" class="absolute left-0 px-4 py-2 text-2xl text-white transform -translate-y-1/2 bg-gray-700 bg-opacity-75 rounded-full top-1/2 hover:bg-opacity-100">&lt;</button>
                <button onclick="nextSlide()" class="absolute right-0 px-4 py-2 text-2xl text-white transform -translate-y-1/2 bg-gray-700 bg-opacity-75 rounded-full top-1/2 hover:bg-opacity-100">&gt;</button>
            </div>
        </div>










       <!-- Contenedor del formulario -->
<div class="container flex justify-center py-8 -mt-8 space-x-8">
        <!-- Formulario de evento -->
    <div class="w-[700px] h-[750px] bg-white rounded-lg shadow-lg p-6 overflow-y-auto">
        <form id="eventForm">
            <div class="mb-4">
                <label for="eventType" class="block text-sm font-medium text-gray-700">Dirigido a:</label>
                <select id="eventType" name="eventType" class="block w-full mt-1 border-gray-300 rounded-md" onchange="loadEventOptions()">
                    <option value="">Seleccione...</option>
                    <option value="todos">Evento General</option>
                    <option value="carrera">Evento Escuela</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="eventName" class="block text-sm font-medium text-gray-700">Nombre del evento:</label>
                <select id="eventName" name="eventName" class="block w-full mt-1 border-gray-300 rounded-md" disabled onchange="fillEventDetails()">
                    <option value="">Seleccione...</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="eventLocation" class="block text-sm font-medium text-gray-700">Lugar:</label>
                <input type="text" id="eventLocation" class="block w-full mt-1 border-gray-300 rounded-md" readonly>
            </div>

            <div class="mb-4">
                <label for="eventDate" class="block text-sm font-medium text-gray-700">Fecha:</label>
                <input type="text" id="eventDate" class="block w-full mt-1 border-gray-300 rounded-md" readonly>
            </div>

            <div class="mb-4">
                <label for="eventTime" class="block text-sm font-medium text-gray-700">Hora:</label>
                <input type="text" id="eventTime" class="block w-full mt-1 border-gray-300 rounded-md" readonly>
            </div>

            <div class="mb-4">
                <label for="eventDescription" class="block text-sm font-medium text-gray-700">Descripción:</label>
                <textarea id="eventDescription" class="block w-full mt-1 border-gray-300 rounded-md" rows="3" readonly></textarea>
            </div>


            <div class="text-center">
                <button type="button" onclick="addRecordatorio()" class="px-6 py-2 text-white bg-green-700 rounded-md hover:bg-green-500">
                    Añadir Recordatorio
                </button>
            </div>
        </form>






        <div id="mascota-container" class="absolute right-0 p-4 transform -translate-x-20" style="bottom: -35px;">
            <!-- Imagen de la mascota -->
            <img src="/imagenes/mascota.png" alt="Mascota" id="mascota" class="w-48 h-48 animate-move-left">

            <!-- Nube de pensamiento al lado izquierdo -->
            <div id="mensaje-mascota" class="absolute hidden p-3 transform -translate-x-full bg-green-400 rounded-lg shadow-lg -top-10 -left-12">
                <!-- Mensaje de texto -->
                <p id="mensaje-texto" class="text-sm font-bold text-black"></p>
                <!-- Triángulo para la nube de pensamiento -->
                <div class="absolute w-0 h-0 border-t-8 border-l-8 border-r-8 border-transparent border-t-green-400 -bottom-2 left-8"></div>
            </div>
        </div>



    </div>
</div>












<!-- Script para alternar entre rutas y carrusel automático con animación -->
<script>
function mostrarRuta2(tipo) {
    document.getElementById('ruta-general-2').style.display = tipo === 'general' ? 'block' : 'none';
    document.getElementById('ruta-escuela-2').style.display = tipo === 'escuela' ? 'block' : 'none';
}

let currentSlide2 = 0;
const slides2 = document.querySelectorAll('.carousel-item-2');
const totalSlides2 = slides2.length;

function showSlide2(index) {
    currentSlide2 = index;
    slides2.forEach((slide, i) => {
        slide.style.transform = `translateX(${100 * (i - index)}%)`;
        slide.classList.toggle('hidden', i !== index);
    });
}

function nextSlide2() {
    currentSlide2 = (currentSlide2 + 1) % totalSlides2;
    showSlide2(currentSlide2);
}

function prevSlide2() {
    currentSlide2 = (currentSlide2 - 1 + totalSlides2) % totalSlides2;
    showSlide2(currentSlide2);
}

// Cambia de diapositiva automáticamente cada 10 segundos
setInterval(nextSlide2, 1000);

showSlide2(currentSlide2);












async function loadEventOptions() {
    const eventType = document.getElementById("eventType").value;
    const eventNameSelect = document.getElementById("eventName");

    // Limpiar las opciones previas y habilitar el campo
    eventNameSelect.innerHTML = '<option value="">Seleccione...</option>';
    eventNameSelect.disabled = true;

    if (eventType) {
        try {
            const response = await fetch(`/api/eventos/${eventType}`);
            const eventsData = await response.json();

            // Verificar que la respuesta no esté vacía
            if (eventsData.length > 0) {
                eventsData.forEach(event => {
                    const option = document.createElement("option");
                    option.value = event.id;
                    option.textContent = event.nombre;
                    eventNameSelect.appendChild(option);
                });
                eventNameSelect.disabled = false;
            } else {
                alert("No se encontraron eventos para este tipo.");
            }
        } catch (error) {
            console.error("Error al cargar los eventos:", error);
            alert("Ocurrió un error al obtener los eventos.");
        }
    }
}

async function fillEventDetails() {
    const eventId = document.getElementById("eventName").value;

    if (eventId) {
        try {
            const response = await fetch(`/api/evento/${eventId}`);
            const event = await response.json();

            document.getElementById("eventLocation").value = event.ubicacion || '';
            document.getElementById("eventDate").value = event.fecha || '';
            document.getElementById("eventTime").value = event.hora || '';
            document.getElementById("eventDescription").value = event.descripcion || '';
        } catch (error) {
            console.error("Error al cargar los detalles del evento:", error);
            alert("Ocurrió un error al obtener los detalles del evento.");
        }
    }
}















async function addRecordatorio() {
    const data = {
        tipo: document.getElementById('eventType').value,
        nombre: document.getElementById('eventName').options[document.getElementById('eventName').selectedIndex].text,
        ubicacion: document.getElementById('eventLocation').value,
        fecha: document.getElementById('eventDate').value,
        hora: document.getElementById('eventTime').value,
        descripcion: document.getElementById('eventDescription').value
    };

    try {
        const response = await fetch('/recordatorio', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify(data)
        });

        const result = await response.json();
        if (result.success) {
            alert('¡Recordatorio añadido correctamente!');
        }
    } catch (error) {
        console.error('Error al guardar el recordatorio:', error);
        alert('Ocurrió un error al guardar el recordatorio.');
    }
}








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
    }, 5000);
}

// Inicia el intervalo para obtener recordatorios cada 10 segundos
setInterval(obtenerRecordatorio, 10000);






















</script>






















</script>


















</x-app-layout>
