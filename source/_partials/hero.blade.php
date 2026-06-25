<section class="flex flex-col items-center">
    <!-- Swiper Slider -->
    <div class="swiper mySwiper w-full max-w-3xl mb-8" role="region" aria-label="Carrusel de imágenes de productos" aria-roledescription="carrusel">
        <div class="swiper-wrapper">
            @foreach ($page->slider_images as $image)
            <div class="swiper-slide" role="group" aria-roledescription="diapositiva">
                <div class="h-72 flex items-center justify-center">
                    <img src="{{ $image['src'] }}" alt="{{ $image['alt'] }}" class="w-full h-full object-contain">
                </div>
            </div>
            @endforeach
        </div>
        <!-- Navegación -->
        <div class="swiper-button-prev" aria-label="Imagen anterior"></div>
        <div class="swiper-button-next" aria-label="Imagen siguiente"></div>
    </div>

    <h1 class="text-center text-4xl/13 md:text-6xl/19 font-semibold tracking-tight max-w-5xl">Distribución mayorista de sistemas de seguridad y energía.</h1>
    <p class="text-center text-gray-600 dark:text-gray-100 text-base/7 max-w-lg mt-6">Equipamos tus proyectos con tecnología de punta en control de acceso, cercas eléctricas, detección de incendio e intrusión. Impulsamos tu negocio con stock inmediato.</p>
    <div class="flex flex-col md:flex-row max-md:w-full items-center gap-4 md:gap-3 mt-6">
        <a href="#productos">
            <button class="btn max-md:w-full glass py-3">Ver productos</button>
        </a>
    </div>
</section>
<section class="mt-14" aria-label="Empresas que confían en nosotros">
    <p class="py-6 mt-14 text-center">La confianza de instaladores y empresas de seguridad en toda la región</p>
    <div class="flex flex-wrap justify-center gap-10 max-w-4xl w-full mx-auto py-4" id="logo-container" aria-label="Logos de empresas clientes">
        @foreach ($page->logos as $item)
            <img src="{{ $item['src'] }}" alt="{{ $item['alt'] }}" class="h-7 w-auto max-w-xs hidden dark:block" />
            <img src="{{ str_replace('/SVG/', '/SVG/dark/', $item['src']) }}" alt="{{ $item['alt'] }}" class="h-7 w-auto max-w-xs block dark:hidden" aria-hidden="true" />
        @endforeach
    </div>
</section>

