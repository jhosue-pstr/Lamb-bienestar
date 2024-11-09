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

    <main>
        {{ $slot ?? '' }}
    </main>
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

        <!-- Formulario de evento -->
        <div class="w-1/2 p-6 bg-white rounded-lg shadow-lg" style="margin-left: -20px;">
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

                <!-- Campos que se llenarán automáticamente -->
                <div class="mb-4">
                    <label for="eventLocation" class="block text-sm font-medium text-gray-700">Lugar:</label>
                    <input type="text" id="eventLocation" name="eventLocation" class="block w-full mt-1 border-gray-300 rounded-md" readonly>
                </div>

                <div class="mb-4">
                    <label for="eventDate" class="block text-sm font-medium text-gray-700">Fecha:</label>
                    <input type="text" id="eventDate" name="eventDate" class="block w-full mt-1 border-gray-300 rounded-md" readonly>
                </div>

                <div class="mb-4">
                    <label for="eventTime" class="block text-sm font-medium text-gray-700">Hora:</label>
                    <input type="text" id="eventTime" name="eventTime" class="block w-full mt-1 border-gray-300 rounded-md" readonly>
                </div>

                <div class="mb-4">
                    <label for="eventDescription" class="block text-sm font-medium text-gray-700">Descripción:</label>
                    <textarea id="eventDescription" name="eventDescription" class="block w-full mt-1 border-gray-300 rounded-md" rows="3" readonly></textarea>
                </div>

                <div class="text-center">
                    <button type="button" class="px-6 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700">Añadir Recordatorio</button>
                </div>
            </form>
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





const eventsData = {
    todos: [
        { id: 1, name: "Evento General 1", location: "Auditorio", date: "10/11/2024", time: "10:00 AM", description: "Evento para todos." },
        { id: 2, name: "Evento General 2", location: "Plaza", date: "12/11/2024", time: "3:00 PM", description: "Otro evento para todos." },
    ],
    carrera: [
        { id: 3, name: "Evento de Ingeniería", location: "Sala 3", date: "15/11/2024", time: "8:00 AM", description: "Evento para ingeniería." },
        { id: 4, name: "Evento de Medicina", location: "Aula 1", date: "18/11/2024", time: "1:00 PM", description: "Evento para medicina." },
    ]
};



function loadEventOptions() {
    const eventType = document.getElementById("eventType").value;
    const eventNameSelect = document.getElementById("eventName");

    // Limpiar y habilitar el campo de nombre del evento
    eventNameSelect.innerHTML = '<option value="">Seleccione...</option>';
    eventNameSelect.disabled = !eventType;

    if (eventType && eventsData[eventType]) {
        eventsData[eventType].forEach(event => {
            const option = document.createElement("option");
            option.value = event.id;
            option.textContent = event.name;
            eventNameSelect.appendChild(option);
        });
    }
}

function fillEventDetails() {
    const eventType = document.getElementById("eventType").value;
    const eventId = document.getElementById("eventName").value;
    const event = eventsData[eventType].find(e => e.id == eventId);

    if (event) {
        document.getElementById("eventLocation").value = event.location;
        document.getElementById("eventDate").value = event.date;
        document.getElementById("eventTime").value = event.time;
        document.getElementById("eventDescription").value = event.description;
    } else {
        // Limpiar campos si no hay evento seleccionado
        document.getElementById("eventLocation").value = '';
        document.getElementById("eventDate").value = '';
        document.getElementById("eventTime").value = '';
        document.getElementById("eventDescription").value = '';
    }
}

</script>


















</x-app-layout>
