<section class="flex flex-col items-center">
    <!-- Swiper Slider -->
    <div class="swiper mySwiper w-full max-w-3xl mb-8">
        <div class="swiper-wrapper">
            @foreach ($page->slider_images as $image)
            <div class="swiper-slide">
                <div class="h-72 flex items-center justify-center">
                    <img src="{{ $image['src'] }}" alt="{{ $image['alt'] }}" class="w-full h-full object-contain">
                </div>
            </div>
            @endforeach
        </div>
        <!-- Paginación -->
        <div class="swiper-pagination"></div>
    </div>

    <h1 class="text-center text-4xl/13 md:text-6xl/19 font-semibold tracking-tight max-w-4xl">Protección Inteligente para un Mundo Conectado</h1>
    <p class="text-center text-gray-100 text-base/7 max-w-lg mt-6">Soluciones profesionales en videovigilancia, control de acceso, detección de incendios y seguridad perimetral. Tecnología que protege lo que más importa.</p>
    <div class="flex flex-col md:flex-row max-md:w-full items-center gap-4 md:gap-3 mt-6">
        <a href="#productos">
            <button class="btn max-md:w-full glass py-3">Ver productos</button>
        </a>
    </div>
</section>
<section class="mt-14">
    <p class="py-6 mt-14 text-center">La confianza de integradores líderes en toda la región</p>
    <div class="flex flex-wrap justify-between max-sm:justify-center gap-10 max-w-4xl w-full mx-auto py-4" id="logo-container">
        @foreach ($page->logos as $item)
            <img src="{{ $item['src'] }}" alt="{{ $item['alt'] }}" class="h-7 w-auto max-w-xs" />
        @endforeach
    </div>
</section>