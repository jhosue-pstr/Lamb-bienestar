<div class="w-full min-h-screen p-6 bg-white border-b border-gray-200 lg:p-8">
    <div class="carousel w-full h-[600px]">
        <div id="slide1" class="relative w-full h-full carousel-item">
            <img src="https://img.daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.webp"
                class="object-cover w-full h-full" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#slide4" class="btn btn-circle">❮</a>
                <a href="#slide2" class="btn btn-circle">❯</a>
            </div>
        </div>
        <div id="slide2" class="relative w-full h-full carousel-item">
            <img src="https://img.daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.webp"
                class="object-cover w-full h-full" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#slide1" class="btn btn-circle">❮</a>
                <a href="#slide3" class="btn btn-circle">❯</a>
            </div>
        </div>
        <div id="slide3" class="relative w-full h-full carousel-item">
            <img src="https://img.daisyui.com/images/stock/photo-1414694762283-acccc27bca85.webp"
                class="object-cover w-full h-full" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#slide2" class="btn btn-circle">❮</a>
                <a href="#slide4" class="btn btn-circle">❯</a>
            </div>
        </div>
        <div id="slide4" class="relative w-full h-full carousel-item">
            <img src="https://img.daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.webp"
                class="object-cover w-full h-full" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#slide3" class="btn btn-circle">❮</a>
                <a href="#slide1" class="btn btn-circle">❯</a>
            </div>
        </div>
    </div>

    <!-- Aquí insertamos la sección de "Eventos y Anuncios" debajo del carrusel -->
    <div class="flex flex-col items-center justify-center p-4 mt-6 bg-blue-400 rounded shadow">
        <a href="{{ route('eventos-anuncios') }}" target="_blank" class="mb-2 text-2xl font-semibold text-black-500 hover:underline">
            Ver más
        </a>
    </div>

</div>


































<script>
    let currentIndex = 1;
    const totalSlides = 4;
    const intervalTime = 3000;

    setInterval(() => {
        const nextIndex = currentIndex % totalSlides + 1;
        window.location.hash = `#slide${nextIndex}`;
        currentIndex = nextIndex;
    }, intervalTime);
</script>
